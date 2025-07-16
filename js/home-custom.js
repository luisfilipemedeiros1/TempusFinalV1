document.addEventListener('DOMContentLoaded', function() {

    // --- Animation Observer ---
    const animatedElements = document.querySelectorAll('.fade-in, .fade-in-up, .fade-in-stagger > *, .slide-in-left, .slide-in-right, .scale-in');
    if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
        const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Special handling for hero elements to run immediately if needed
                // Check if the element is inside the hero *and* animation hasn't started
                if (entry.target.closest('.hero') && entry.target.style.animationPlayState !== 'running') {
                   entry.target.style.animationPlayState = 'running';
                   // observer.unobserve(entry.target); // Optional: stop observing after first animation
                   return; // Exit for this entry
                }
                // General handling for other elements on intersection
                if (entry.isIntersecting && entry.target.style.animationPlayState !== 'running') {
                     entry.target.style.animationPlayState = 'running';
                     // observer.unobserve(entry.target); // Optional: stop observing after first animation
                }
                // Optional: Trigger animations for elements already visible on load (above the fold)
                // This runs only once per element check, not repeatedly on scroll
                else if (!entry.isIntersecting && entry.boundingClientRect.top < window.innerHeight && entry.boundingClientRect.bottom >= 0 && entry.target.style.animationPlayState !== 'running' && !entry.target.closest('.hero')) {
                    entry.target.style.animationPlayState = 'running';
                    // observer.unobserve(entry.target); // Optional: stop observing after first animation
                }
            });
        }, observerOptions);
        animatedElements.forEach(el => {
            // Ensure animations depending on scroll trigger start paused, except hero
            if (!el.closest('.hero')) {
                 el.style.animationPlayState = 'paused';
            } else {
                 // Check if hero element should run immediately or wait for intersection (e.g., if hero is very tall)
                 // If you want hero elements to *always* run on load:
                 el.style.animationPlayState = 'running';
            }
            observer.observe(el);
        });
    } else {
        // Fallback for browsers without IntersectionObserver or if no elements found
        // Simply make them visible without animation
        animatedElements.forEach(el => el.style.opacity = 1);
    }


    // --- FAQ Accordion ---
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        if (question && answer && icon) {
            // Ensure initial ARIA states are correct
            const isActive = item.classList.contains('active');
            question.setAttribute('aria-expanded', isActive);
            answer.setAttribute('aria-hidden', !isActive);

            question.addEventListener('click', () => {
                const wasActive = item.classList.contains('active'); // Check state *before* toggling

                // Optional: Close all other items
                // faqItems.forEach(otherItem => {
                //     if (otherItem !== item && otherItem.classList.contains('active')) {
                //         otherItem.classList.remove('active');
                //         otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                //         const otherAnswer = otherItem.querySelector('.faq-answer');
                //         if (otherAnswer) {
                //              otherAnswer.style.maxHeight = null;
                //              otherAnswer.setAttribute('aria-hidden', 'true');
                //         }
                //         const otherIcon = otherItem.querySelector('.faq-icon');
                //         if (otherIcon) {
                //              otherIcon.classList.remove('fa-minus'); // Or handle rotation
                //              otherIcon.classList.add('fa-plus');
                //         }
                //     }
                // });

                // Toggle the current item
                item.classList.toggle('active');
                const isNowActive = item.classList.contains('active');
                question.setAttribute('aria-expanded', isNowActive);
                answer.setAttribute('aria-hidden', !isNowActive);
                icon.classList.toggle('fa-minus', isNowActive); // Adapt if using rotation
                icon.classList.toggle('fa-plus', !isNowActive); // Adapt if using rotation

                if (isNowActive) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    // Re-apply padding if needed using CSS transition or here:
                    // answer.style.paddingTop = '10px';
                    // answer.style.paddingBottom = '30px';
                } else {
                    answer.style.maxHeight = null;
                     // Reset padding if needed:
                    // answer.style.paddingTop = '0';
                    // answer.style.paddingBottom = '0';
                }
            });

            // Keyboard accessibility
            question.addEventListener('keydown', (e) => {
                 if (e.key === 'Enter' || e.key === ' ') {
                     e.preventDefault();
                     question.click();
                 }
             });
        }
    });


    // --- Brand Carousel ---
    const brandCarousel = document.getElementById('brand-carousel');
    if (brandCarousel) {
        const brandContainer = brandCarousel.closest('.brand-carousel-container');
        const prevBtn = brandContainer?.querySelector('.brand-prev');
        const nextBtn = brandContainer?.querySelector('.brand-next');

        if (prevBtn && nextBtn) {
            const config = {
                autoplay: true,
                autoplaySpeed: 3500, // Slightly slower?
                currentIndex: 0, // Will be adjusted after cloning
                isPlaying: true,
                isPaused: false,
                canAnimate: true,
                slidesToShow: calculateSlidesToShow(),
                slideWidth: 0,
                gap: 0,
                totalOriginalItems: 0,
                totalClonedItems: 0,
                scrollOffset: 0,
                resizeTimer: null,
                autoplayTimer: null,
                pauseTimeout: null,
                clonesAdded: false
            };

            function calculateSlidesToShow() {
                const w = window.innerWidth;
                if (w < 480) return 2; // Show fewer on very small screens
                if (w < 768) return 3;
                if (w < 992) return 4;
                if (w < 1200) return 5;
                return 6; // Max 6 visible? Adjust as needed
            }

            function calculateDimensions() {
                const containerWidth = brandContainer.clientWidth;
                // Ensure gap calculation doesn't result in negative width if container is small
                 config.gap = Math.max(0, parseFloat(getComputedStyle(brandCarousel).gap) || 40); // Use 40px as fallback gap
                config.slidesToShow = calculateSlidesToShow();
                // Calculate width, ensuring positive value and minimum reasonable width
                config.slideWidth = config.slidesToShow > 0 ? (containerWidth - (config.gap * (config.slidesToShow - 1))) / config.slidesToShow : containerWidth;
                config.slideWidth = Math.max(80, config.slideWidth); // Ensure minimum slide width (e.g., 80px)
            }

            function cloneItemsIfNeeded() {
                if (config.clonesAdded) return;

                const currentLogos = Array.from(brandCarousel.querySelectorAll('.brand-logo'));
                config.totalOriginalItems = currentLogos.length;

                // Only clone if there are more items than can be shown at once
                if (config.totalOriginalItems <= 0 || config.totalOriginalItems <= config.slidesToShow) {
                    brandContainer.classList.add('carousel-not-scrollable');
                    if(prevBtn) prevBtn.style.display = 'none'; // Hide buttons if not scrollable
                    if(nextBtn) nextBtn.style.display = 'none';
                    return;
                }

                brandContainer.classList.remove('carousel-not-scrollable');
                if(prevBtn) prevBtn.style.display = 'flex'; // Show buttons if scrollable
                if(nextBtn) nextBtn.style.display = 'flex';

                // Simple cloning strategy: Clone all items once before and once after
                const fragmentStart = document.createDocumentFragment();
                const fragmentEnd = document.createDocumentFragment();
                currentLogos.forEach(logo => {
                    fragmentStart.appendChild(logo.cloneNode(true));
                    fragmentEnd.appendChild(logo.cloneNode(true));
                });

                brandCarousel.insertBefore(fragmentEnd, currentLogos[0]); // Prepend clones
                brandCarousel.appendChild(fragmentStart); // Append clones

                config.totalClonedItems = brandCarousel.querySelectorAll('.brand-logo').length;
                config.clonesAdded = true;

                // Set initial position to show the *first set* of original items
                config.currentIndex = config.totalOriginalItems; // Start index at the beginning of original items
                updatePosition(false); // Set initial position without animation
            }


            function updatePosition(animate = true, isLoopReset = false) {
                // Prevent animation queue buildup unless it's an instant loop reset
                if (!config.canAnimate && animate && !isLoopReset) return;

                // Calculate the translation based on the current index
                config.scrollOffset = (config.slideWidth + config.gap) * config.currentIndex * -1;

                brandCarousel.style.transition = animate ? 'transform 0.8s ease' : 'none';
                brandCarousel.style.transform = `translateX(${config.scrollOffset}px)`;

                if (animate) {
                    config.canAnimate = false;
                    // Use transitionend for reliable callback after animation finishes
                    brandCarousel.addEventListener('transitionend', handleTransitionEnd, { once: true });
                }
            }

            function handleTransitionEnd() {
                config.canAnimate = true; // Allow next animation

                // Check if we have scrolled past the original items (into cloned areas)
                if (config.currentIndex < config.totalOriginalItems) { // Scrolled into the prepended clones
                    config.currentIndex += config.totalOriginalItems; // Jump to the equivalent original item at the end
                    updatePosition(false, true); // Update instantly without animation
                } else if (config.currentIndex >= config.totalOriginalItems * 2) { // Scrolled into the appended clones
                    config.currentIndex -= config.totalOriginalItems; // Jump to the equivalent original item at the beginning
                    updatePosition(false, true); // Update instantly without animation
                }

                 // Restart autoplay if it should be running
                if (!config.isPaused && config.autoplay && !config.autoplayTimer) {
                    startAutoplay();
                }
            }

            function startAutoplay() {
                stopAutoplay(); // Clear existing timer
                if (config.autoplay && config.isPlaying && !config.isPaused && config.clonesAdded) { // Only play if cloned/scrollable
                    config.autoplayTimer = setInterval(() => {
                        if (!config.isPaused && config.canAnimate) {
                            config.currentIndex++;
                            updatePosition(true); // Animate the scroll
                        }
                    }, config.autoplaySpeed);
                }
            }

            function stopAutoplay() {
                clearInterval(config.autoplayTimer);
                config.autoplayTimer = null;
            }

            function temporarilyPauseAutoplay(duration = config.autoplaySpeed * 2.5) { // Increased pause duration
                config.isPaused = true;
                stopAutoplay();
                clearTimeout(config.pauseTimeout);
                config.pauseTimeout = setTimeout(() => {
                    config.isPaused = false;
                    // Only restart if the document is visible
                    if (config.isPlaying) {
                         startAutoplay();
                    }
                }, duration);
            }

            function handleNext() {
                 if(config.canAnimate) {
                     config.currentIndex++;
                     updatePosition(true);
                     temporarilyPauseAutoplay();
                 }
             }
            function handlePrev() {
                if(config.canAnimate) {
                    config.currentIndex--;
                    updatePosition(true);
                    temporarilyPauseAutoplay();
                }
            }

            function initCarousel() {
                calculateDimensions();
                cloneItemsIfNeeded(); // Clones only if needed and not already done
                startAutoplay();
            }

            // --- Event Listeners ---
            prevBtn.addEventListener('click', handlePrev);
            nextBtn.addEventListener('click', handleNext);

            // Pause on hover/focus
            brandContainer.addEventListener('mouseenter', () => { if(config.autoplay) { config.isPaused = true; stopAutoplay(); } });
            brandContainer.addEventListener('mouseleave', () => { if(config.autoplay) { config.isPaused = false; startAutoplay(); } });
            brandContainer.addEventListener('focusin', () => { if(config.autoplay) { config.isPaused = true; stopAutoplay(); } });
            brandContainer.addEventListener('focusout', () => { if(config.autoplay) { config.isPaused = false; startAutoplay(); } });


            // Re-initialize on resize
            window.addEventListener('resize', () => {
                 clearTimeout(config.resizeTimer);
                 config.resizeTimer = setTimeout(() => {
                     stopAutoplay();
                     // Recalculate dimensions and update position, but don't re-clone
                     calculateDimensions();
                     // Adjust current index slightly if necessary based on new slidesToShow? Maybe not needed.
                     updatePosition(false); // Reset position without animation
                     startAutoplay();
                 }, 250);
            });

            // Pause/play on visibility change
            document.addEventListener('visibilitychange', () => {
                config.isPlaying = !document.hidden;
                if (config.isPlaying && !config.isPaused) { startAutoplay(); } else { stopAutoplay(); }
            });

            // Initial setup
            initCarousel();

        } else {
             // Handle case where buttons might be missing but container exists
            brandContainer?.classList.add('carousel-no-nav');
        }
    }


    // --- Horizontal Scroll Auto-Rotation ---
    const autoScrollContainers = document.querySelectorAll('.horizontal-scroll-container[data-autorotate="true"]');
    if (autoScrollContainers.length > 0) {
        const autoScrollConfig = {
            interval: 5500, // ms
            userPauseDuration: 11000, // ms pause after interaction (longer)
            timers: {},
            pauseTimers: {},
            isPausedByUser: {},
            scrollObserver: null // Intersection observer for auto-pause/play
        };

        // Observer to pause/play scrolling based on visibility
        if ('IntersectionObserver' in window) {
            autoScrollConfig.scrollObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const containerId = entry.target.dataset.scrollId;
                    if (!containerId) return;

                    if (entry.isIntersecting) {
                        // Element is visible, resume scrolling IF NOT paused by user interaction
                        if (!autoScrollConfig.isPausedByUser[containerId]) {
                            startAutoScroll(entry.target);
                        }
                    } else {
                        // Element is not visible, forcefully pause scrolling
                        stopAutoScroll(containerId);
                    }
                });
            }, { threshold: 0.1 }); // Fire when 10% is visible
        }

        // Function to stop scrolling for a specific container
        function stopAutoScroll(id) {
            if (autoScrollConfig.timers[id]) {
                clearInterval(autoScrollConfig.timers[id]);
                autoScrollConfig.timers[id] = null;
                // console.log(`Autoscroll stopped for ${id}`);
            }
        }

        // Function to start scrolling for a specific container
        function startAutoScroll(cont) {
            const id = cont.dataset.scrollId;
            // Don't start if already running, paused by user, or no overflow, or ID missing
            if (!id || autoScrollConfig.timers[id] || autoScrollConfig.isPausedByUser[id] || cont.scrollWidth <= cont.clientWidth) {
                // console.log(`Autoscroll conditions not met for ${id}`);
                return;
            }
            stopAutoScroll(id); // Ensure no duplicate timers

            // console.log(`Starting autoscroll for ${id}`);
            autoScrollConfig.timers[id] = setInterval(() => {
                if (autoScrollConfig.isPausedByUser[id]) {
                    // console.log(`Interval check: Paused by user ${id}, stopping.`);
                    stopAutoScroll(id);
                    return;
                }
                 // Double check visibility if observer is available (belt and braces)
                 // This check might be redundant if the observer is working reliably
                 // if (autoScrollConfig.scrollObserver) {
                 //    const rect = cont.getBoundingClientRect();
                 //    if (rect.bottom < 0 || rect.top > window.innerHeight) {
                 //       console.log(`Interval check: Not visible ${id}, stopping.`);
                 //       stopAutoScroll(id);
                 //       return;
                 //    }
                 // }


                // --- Calculate Scroll Amount ---
                let scrollAmount = 0;
                const firstItem = cont.querySelector(':scope > *');
                if (firstItem) {
                    const itemWidth = firstItem.offsetWidth;
                    const gap = parseFloat(getComputedStyle(cont).gap || 0);
                    // Scroll roughly one item width + gap, but at least 20% of container
                    scrollAmount = Math.max(itemWidth + gap, cont.clientWidth * 0.20);
                } else {
                    scrollAmount = cont.clientWidth * 0.3; // Fallback
                }
                if (scrollAmount <= 0) return; // Exit if calculation fails

                // --- Calculate Target Scroll Position ---
                let currentScroll = Math.round(cont.scrollLeft);
                let maxScroll = Math.round(cont.scrollWidth - cont.clientWidth);

                if (maxScroll <= 0) { // Stop if no longer scrollable
                    // console.log(`Interval check: No scroll needed ${id}, stopping.`);
                    stopAutoScroll(id);
                    return;
                }

                let targetScroll;
                // If already near or at the end (within 5px tolerance), loop back to start
                if (currentScroll >= maxScroll - 5) {
                    targetScroll = 0;
                } else {
                    // Otherwise, scroll by the calculated amount, but don't exceed maxScroll
                    targetScroll = Math.min(currentScroll + scrollAmount, maxScroll);
                }

                // Perform the smooth scroll
                cont.scrollTo({ left: targetScroll, behavior: 'smooth' });
                // console.log(`Scrolling ${id} to ${targetScroll}`);

            }, autoScrollConfig.interval);
        }

        // Function to pause scrolling temporarily on user interaction
        function pauseOnInteraction(cont) {
            const id = cont.dataset.scrollId;
            if (!id) return;

            // console.log(`User interaction detected on ${id}, pausing.`);
            autoScrollConfig.isPausedByUser[id] = true;
            stopAutoScroll(id); // Stop the interval immediately
            clearTimeout(autoScrollConfig.pauseTimers[id]); // Clear any previous resume timer

            // Set a timer to automatically resume scrolling after a period
            autoScrollConfig.pauseTimers[id] = setTimeout(() => {
                // console.log(`User pause duration ended for ${id}, resuming.`);
                autoScrollConfig.isPausedByUser[id] = false;
                // Attempt to restart scroll, but only if the element is currently visible (checked by observer or startAutoScroll)
                 startAutoScroll(cont);

            }, autoScrollConfig.userPauseDuration);
        }


        // --- Initialize for each container ---
        autoScrollContainers.forEach((container, index) => {
            const containerId = `auto-scroll-${index}`;
            container.dataset.scrollId = containerId; // Assign ID for observer/functions
            autoScrollConfig.isPausedByUser[containerId] = false; // Initialize pause state

            // Event Listeners for User Interaction (Pause)
            // Using capture phase can sometimes catch events earlier
            ['touchstart', 'wheel', 'mousedown', 'keydown'].forEach(event => {
                container.addEventListener(event, () => pauseOnInteraction(container), { passive: true, capture: true });
            });
             // Pause on hover/focus for desktop users mainly
             ['mouseenter', 'focusin'].forEach(event => {
                  container.addEventListener(event, () => pauseOnInteraction(container), { passive: true });
              });


            // Observe the container if observer is available
            if (autoScrollConfig.scrollObserver) {
                autoScrollConfig.scrollObserver.observe(container);
            } else {
                // If no observer, start scrolling after a delay (might scroll when off-screen)
                setTimeout(() => startAutoScroll(container), 2000 + index * 200); // Initial delay
            }

            // Handle Resize - Recalculate needed scroll amount potentially
             let resizeTimer;
             window.addEventListener('resize', () => {
                 clearTimeout(resizeTimer);
                 // No need to stop/start immediately, just recalculate on next interval tick
                 // stopAutoScroll(containerId); // Might be too aggressive
                 resizeTimer = setTimeout(() => {
                     // If it was running and should still be (visible, not paused), restart
                     if (!autoScrollConfig.isPausedByUser[containerId] && autoScrollConfig.timers[containerId]) {
                          startAutoScroll(container); // Restart ensures interval is correct if visibility changed
                     }
                 }, 300);
             });

        }); // End forEach container
    } // End if autoScrollContainers exist

    // --- Rotating Banner Ads ---
    const bannerAdsSection = document.querySelector('.banner-ads-section');
    if (bannerAdsSection) {
        const slides = bannerAdsSection.querySelectorAll('.banner-slide');
        const dots = bannerAdsSection.querySelectorAll('.banner-dot');
        const prevBtn = bannerAdsSection.querySelector('.banner-prev');
        const nextBtn = bannerAdsSection.querySelector('.banner-next');
        
        let currentSlide = 0;
        let autoRotateTimer = null;
        let isPaused = false;
        const rotationInterval = 3000; // 3 seconds

        // Function to show specific slide
        function showSlide(index) {
            // Hide all slides
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (dots[i]) {
                    dots[i].classList.remove('active');
                }
            });
            
            // Show current slide
            if (slides[index]) {
                slides[index].classList.add('active');
            }
            if (dots[index]) {
                dots[index].classList.add('active');
            }
            
            currentSlide = index;
        }

        // Function to go to next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Function to go to previous slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Auto-rotation
        function startAutoRotate() {
            stopAutoRotate();
            if (!isPaused) {
                autoRotateTimer = setInterval(nextSlide, rotationInterval);
            }
        }

        function stopAutoRotate() {
            if (autoRotateTimer) {
                clearInterval(autoRotateTimer);
                autoRotateTimer = null;
            }
        }

        // Pause auto-rotation temporarily
        function pauseAutoRotate(duration = rotationInterval * 2) {
            isPaused = true;
            stopAutoRotate();
            setTimeout(() => {
                isPaused = false;
                if (!document.hidden) {
                    startAutoRotate();
                }
            }, duration);
        }

        // Click handlers for banner slides
        slides.forEach((slide, index) => {
            slide.addEventListener('click', function(e) {
                console.log('Banner clicked!', index);
                const message = this.getAttribute('data-message');
                const contactSection = document.getElementById('contact');
                
                if (contactSection) {
                    console.log('Scrolling to contact section...');
                    // Scroll to contact section
                    contactSection.scrollIntoView({ behavior: 'smooth' });
                    
                    // Pre-fill the form message after a short delay
                    setTimeout(() => {
                        // Try to find the Zoho form iframe and pre-fill the message
                        const zohoContainer = document.getElementById('zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4');
                        if (zohoContainer) {
                            const iframe = zohoContainer.querySelector('iframe');
                            if (iframe) {
                                try {
                                    // Post message to iframe to fill the form
                                    iframe.contentWindow.postMessage({
                                        type: 'prefillMessage',
                                        message: message
                                    }, 'https://forms.zohopublic.eu');
                                } catch (e) {
                                    console.log('Could not pre-fill form:', e);
                                }
                            }
                        }
                    }, 1000);
                } else {
                    console.log('Contact section not found!');
                    // Try alternative scroll to bottom
                    window.scrollTo({
                        top: document.body.scrollHeight,
                        behavior: 'smooth'
                    });
                }
                
                pauseAutoRotate();
            });
        });

        // Navigation button handlers
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                pauseAutoRotate();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                pauseAutoRotate();
            });
        }

        // Dot navigation handlers
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                pauseAutoRotate();
            });
        });

        // Pause on hover
        bannerAdsSection.addEventListener('mouseenter', () => {
            isPaused = true;
            stopAutoRotate();
        });

        bannerAdsSection.addEventListener('mouseleave', () => {
            isPaused = false;
            startAutoRotate();
        });

        // Touch support for mobile swipe
        let touchStartX = 0;
        let touchEndX = 0;
        
        bannerAdsSection.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        bannerAdsSection.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - next slide
                    nextSlide();
                } else {
                    // Swipe right - previous slide
                    prevSlide();
                }
                pauseAutoRotate();
            }
        }

        // Handle visibility change
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopAutoRotate();
            } else if (!isPaused) {
                startAutoRotate();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (bannerAdsSection.contains(document.activeElement)) {
                if (e.key === 'ArrowLeft') {
                    prevSlide();
                    pauseAutoRotate();
                } else if (e.key === 'ArrowRight') {
                    nextSlide();
                    pauseAutoRotate();
                }
            }
        });

        // Initialize
        showSlide(0);
        startAutoRotate();
    }

}); // End DOMContentLoaded