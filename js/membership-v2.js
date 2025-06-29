document.addEventListener('DOMContentLoaded', function() {

    // --- Animation Observer ---
    // Re-enabled to trigger animations on scroll.
    // Adjust threshold if animations trigger too late/early on mobile.
    const animatedElements = document.querySelectorAll('.fade-in, .fade-in-up, .fade-in-stagger > *, .slide-in-left, .slide-in-right, .scale-in');
    const observerOptions = {
        root: null, // viewport
        rootMargin: '0px',
        threshold: 0.1 // % of element visible before triggering
    };

    const animationObserver = new IntersectionObserver((entries, observerInstance) => {
        entries.forEach(entry => {
            // Skip elements that might be initially visible (e.g., above the fold - like the banner)
            // This prevents them from quickly fading out and in on load.
            // Check if element is already in view when observer is created.
            // A simple check: if entry.boundingClientRect.top < window.innerHeight might work
            // but let's just start animations for elements entering the viewport.
            if (entry.isIntersecting) {
                if (entry.target.style.animationPlayState !== 'running') {
                    entry.target.style.animationPlayState = 'running';
                    // Optional: Unobserve after first animation to save resources
                    // observerInstance.unobserve(entry.target);
                }
            }
            // Optional: Pause animation if element scrolls out of view (can cause flashes)
            // else {
            //     if (entry.target.style.animationPlayState === 'running') {
            //          entry.target.style.animationPlayState = 'paused';
            //          // Reset styles if needed? Maybe not, let CSS 'forwards' handle it.
            //     }
            // }
        });
    }, observerOptions);

    animatedElements.forEach(el => {
         // Ensure all animations start paused. CSS already does this, but being explicit is safe.
         el.style.animationPlayState = 'paused';
         animationObserver.observe(el);
    });
    // --- End Animation Observer ---


    // --- FAQ Accordion ---
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const plusIcon = item.querySelector('.faq-icon.fa-plus');
        const minusIcon = item.querySelector('.faq-icon.fa-minus');

        if (question && answer && plusIcon && minusIcon) {
             // Initial state based on aria-expanded (if pre-set)
             const isExpanded = question.getAttribute('aria-expanded') === 'true';
             answer.setAttribute('aria-hidden', !isExpanded);
             item.classList.toggle('active', isExpanded);
             plusIcon.style.display = isExpanded ? 'none' : 'inline-flex';
             minusIcon.style.display = isExpanded ? 'inline-flex' : 'none';

             const handleToggle = () => {
                 const currentlyExpanded = question.getAttribute('aria-expanded') === 'true';
                 question.setAttribute('aria-expanded', !currentlyExpanded);
                 answer.setAttribute('aria-hidden', currentlyExpanded);
                 item.classList.toggle('active', !currentlyExpanded);
                 plusIcon.style.display = !currentlyExpanded ? 'none' : 'inline-flex';
                 minusIcon.style.display = !currentlyExpanded ? 'inline-flex' : 'none';
             };

            question.addEventListener('click', handleToggle);
            question.addEventListener('keydown', (e) => {
                 if (e.key === 'Enter' || e.key === ' ') {
                     e.preventDefault();
                     handleToggle();
                 }
             });
        } else {
            console.warn('FAQ item missing elements:', item);
        }
    });
    // --- End FAQ Accordion ---


    // --- Horizontal Scroll Auto-Rotation (Enhanced) ---
    // Keep this logic as it seems intended for the treatments grid
    const autoScrollContainers = document.querySelectorAll('.treatments-grid[data-autorotate="true"]');
    const autoScrollInterval = 5500; // Time between scrolls
    const userInteractionPauseDuration = 10000; // Pause after user touch/mouse/focus
    let scrollTimers = {};
    let interactionPauseTimers = {};
    let permanentlyStopped = {}; // Stop per container after significant interaction

    autoScrollContainers.forEach((container, index) => {
        const containerId = container.dataset.id || `auto-scroll-${index}`;
        container.dataset.id = containerId;
        let scrollAmount = 0;
        permanentlyStopped[containerId] = false;
        let interactionPaused = false;

        function calculateScrollAmount() {
            const firstItem = container.querySelector(':scope > *'); // Direct child
            if (firstItem) {
                const itemStyle = getComputedStyle(firstItem);
                const itemWidth = firstItem.offsetWidth;
                const gap = parseFloat(getComputedStyle(container).gap || 0);
                // Scroll by one item width + gap, or at least 25% of viewport
                scrollAmount = Math.max(itemWidth + gap, container.clientWidth * 0.25);
            } else {
                scrollAmount = container.clientWidth * 0.3; // Fallback
            }
            scrollAmount = Math.max(scrollAmount, 50); // Minimum scroll distance
            // console.log(`[${containerId}] Calculated scroll amount:`, scrollAmount);
        }

        function stopAutoScroll(reason = "unknown") {
            if (scrollTimers[containerId]) {
                // console.log(`[${containerId}] Stopping auto-scroll. Reason: ${reason}`);
                clearInterval(scrollTimers[containerId]);
                scrollTimers[containerId] = null;
            }
        }

        function startAutoScroll() {
            // Don't start if permanently stopped, paused by interaction, or not scrollable
            if (permanentlyStopped[containerId] || interactionPaused || container.scrollWidth <= container.clientWidth) {
                 // console.log(`[${containerId}] Auto-scroll start prevented. Stopped: ${permanentlyStopped[containerId]}, Paused: ${interactionPaused}, Not Scrollable: ${container.scrollWidth <= container.clientWidth}`);
                return;
            }
            stopAutoScroll("starting new timer"); // Clear existing timer first
            calculateScrollAmount(); // Recalculate in case of resize
            // console.log(`[${containerId}] Starting auto-scroll timer.`);

            scrollTimers[containerId] = setInterval(() => {
                if (!container || scrollAmount <= 0) {
                    stopAutoScroll("container/scroll amount invalid");
                    return;
                }
                let currentScroll = Math.round(container.scrollLeft);
                let maxScroll = Math.round(container.scrollWidth - container.clientWidth);

                if (maxScroll <= 5) { // Allow for rounding errors
                    stopAutoScroll("no scrollable width");
                    return;
                }

                let targetScroll;
                if (currentScroll >= maxScroll - 10) { // If near the end (within 10px)
                    targetScroll = 0; // Loop back to start
                    // console.log(`[${containerId}] Scrolling to start.`);
                } else {
                    targetScroll = Math.min(currentScroll + scrollAmount, maxScroll);
                    // console.log(`[${containerId}] Scrolling to ${targetScroll}.`);
                }
                container.scrollTo({ left: targetScroll, behavior: 'smooth' });

            }, autoScrollInterval);
        }

        // Pause on hover/focus
        function handleInteractionStart() {
            if (permanentlyStopped[containerId]) return;
            interactionPaused = true;
            stopAutoScroll("user interaction start");
            clearTimeout(interactionPauseTimers[containerId]); // Clear any restart timer
            // console.log(`[${containerId}] Interaction START - Pausing scroll.`);
        }

        // Resume after a delay on mouseleave/focusout
        function handleInteractionEnd() {
            if (permanentlyStopped[containerId]) return;
            clearTimeout(interactionPauseTimers[containerId]); // Clear previous timer
            // console.log(`[${containerId}] Interaction END - Setting timer to potentially restart scroll.`);
            interactionPauseTimers[containerId] = setTimeout(() => {
                interactionPaused = false;
                // console.log(`[${containerId}] Interaction pause finished.`);
                startAutoScroll(); // Attempt to restart
            }, userInteractionPauseDuration);
        }

        // Permanently stop on significant interaction (touch, wheel, manual scroll)
        function handlePermanentInteraction() {
            if (!permanentlyStopped[containerId]) {
                permanentlyStopped[containerId] = true;
                stopAutoScroll("permanent user interaction");
                // console.log(`[${containerId}] PERMANENTLY STOPPING scroll due to user interaction.`);
                // Remove listeners that cause permanent stop to prevent repeated checks
                container.removeEventListener('touchstart', handlePermanentInteraction);
                container.removeEventListener('wheel', handlePermanentInteraction);
                container.removeEventListener('mousedown', handlePermanentInteraction);
                container.removeEventListener('keydown', handleKeyboardInteraction);
            }
        }

        // Stop if user uses keyboard to scroll
        function handleKeyboardInteraction(e) {
             if (['ArrowLeft', 'ArrowRight', 'PageUp', 'PageDown', 'Home', 'End'].includes(e.key)) {
                 handlePermanentInteraction();
             }
         }

         // Initial start after a delay
        setTimeout(() => {
            calculateScrollAmount();
            startAutoScroll();
        }, 3000); // Delay initial start slightly

        // Add listeners
        container.addEventListener('mouseenter', handleInteractionStart);
        container.addEventListener('focusin', handleInteractionStart, true); // Capture focus events within container

        container.addEventListener('mouseleave', handleInteractionEnd);
        container.addEventListener('focusout', handleInteractionEnd, true); // Capture focus events leaving container

        // Listeners for permanent stop
        container.addEventListener('touchstart', handlePermanentInteraction, { passive: true });
        container.addEventListener('wheel', handlePermanentInteraction, { passive: true }); // User scrolling with wheel
        container.addEventListener('mousedown', handlePermanentInteraction, { passive: true }); // User dragging scrollbar
        container.addEventListener('keydown', handleKeyboardInteraction); // User using keyboard nav

        // Recalculate and restart on resize (if not permanently stopped)
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            stopAutoScroll("window resize");
            resizeTimer = setTimeout(() => {
                calculateScrollAmount();
                if (!permanentlyStopped[containerId] && !interactionPaused) {
                    startAutoScroll();
                }
            }, 300);
        });
    });
    // --- End Horizontal Scroll Autorotation ---


     // --- Mobile Navigation Toggle V2 ---
     const menuToggleV2 = document.getElementById('mobile-menu-toggle-v2');
     const mainNavV2 = document.querySelector('.main-navigation-v2'); // The <nav> element

     // Add console logs for debugging - REMOVE LATER
     // console.log('Menu Toggle Element:', menuToggleV2);
     // console.log('Main Nav Element:', mainNavV2);

     if (menuToggleV2 && mainNavV2) {
         const primaryMenu = mainNavV2.querySelector('#primary-menu-v2'); // The <ul> menu
         const toggleIcon = menuToggleV2.querySelector('i'); // The Font Awesome icon

         // console.log('Primary Menu Element:', primaryMenu); // REMOVE LATER
         // console.log('Toggle Icon:', toggleIcon); // REMOVE LATER

         menuToggleV2.addEventListener('click', () => {
             // console.log('Menu toggle clicked!'); // REMOVE LATER
             const isExpanded = menuToggleV2.getAttribute('aria-expanded') === 'true';

             menuToggleV2.setAttribute('aria-expanded', !isExpanded);
             mainNavV2.classList.toggle('is-mobile-active'); // Toggle class on <nav>

             // Toggle Icon Class
             if (toggleIcon) {
                 toggleIcon.classList.toggle('fa-bars', isExpanded); // Show bars if it was expanded (now closing)
                 toggleIcon.classList.toggle('fa-times', !isExpanded); // Show times if it was closed (now opening)
             }

             // Optional: Close submenus when main menu closes
             if (isExpanded && primaryMenu) {
                 primaryMenu.querySelectorAll('.submenu-open').forEach(li => {
                     li.classList.remove('submenu-open');
                     const subMenu = li.querySelector('.sub-menu-v2');
                     const arrowIcon = li.querySelector('a > .menu-arrow');
                     if(subMenu) subMenu.style.maxHeight = null; // Collapse submenu
                     if(arrowIcon) arrowIcon.style.transform = 'rotate(0deg)';
                 });
             }
         });

         // Mobile Submenu Toggle Logic
         if (primaryMenu) {
            primaryMenu.querySelectorAll('.menu-item-has-children-v2 > a').forEach(link => {
                const parentLi = link.parentElement;
                const subMenu = parentLi.querySelector('.sub-menu-v2'); // Direct child submenu
                const icon = link.querySelector('.menu-arrow');

                if (parentLi && subMenu) {
                    link.addEventListener('click', (e) => {
                        // Only prevent default and toggle on smaller screens (where burger is visible)
                        if (window.innerWidth <= 992) {
                            e.preventDefault();
                            parentLi.classList.toggle('submenu-open');
                            const isSubmenuOpen = parentLi.classList.contains('submenu-open');

                            // Animate open/close using max-height
                            if (isSubmenuOpen) {
                                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
                            } else {
                                subMenu.style.maxHeight = null;
                            }

                            // Rotate arrow
                            if (icon) {
                                icon.style.transform = isSubmenuOpen ? 'rotate(180deg)' : 'rotate(0deg)';
                            }
                        }
                        // On larger screens, the default link behavior (if href exists) will work
                    });
                }
            });
         } else {
              console.error('Primary menu UL (#primary-menu-v2) not found inside .main-navigation-v2');
         }

     } else {
          console.error('Mobile menu toggle button (#mobile-menu-toggle-v2) or navigation container (.main-navigation-v2) not found.');
     }
     // --- End Mobile Navigation Toggle V2 ---

});