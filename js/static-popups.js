/**
 * Static Treatment Popups JavaScript
 * Minimal, efficient popup handling
 * 
 * @package tempusbelgravia
 */

(function($) {
    'use strict';

    // State
    let currentPopup = null;
    let touchStartY = 0;

    // Initialize
    $(document).ready(function() {
        initializePopups();
    });

    function initializePopups() {
        // Update Learn More buttons to trigger popups
        updateLearnMoreButtons();
        
        // Bind close events
        bindCloseEvents();
        
        // Bind keyboard events
        bindKeyboardEvents();
        
        // Bind mobile touch events
        bindTouchEvents();
        
        // Handle orientation changes
        bindOrientationEvents();
    }
    
    // Handle orientation changes
    function bindOrientationEvents() {
        $(window).on('orientationchange', function() {
            if (currentPopup) {
                setTimeout(() => {
                    // Recalculate viewport height
                    const vh = window.innerHeight * 0.01;
                    document.documentElement.style.setProperty('--vh', `${vh}px`);
                }, 100);
            }
        });
        
        // Also handle window resize for desktop
        $(window).on('resize', function() {
            if (currentPopup && window.innerWidth <= 768) {
                const vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            }
        });
    }

    // Update Learn More buttons
    function updateLearnMoreButtons() {
        $('.treatment-card').each(function() {
            const $card = $(this);
            const $learnMoreBtn = $card.find('.cta-button-secondary:contains("Learn More")');
            
            if ($learnMoreBtn.length) {
                // Get treatment ID from card
                const treatmentTitle = $card.find('h3').text().trim();
                const treatmentId = getTreatmentId(treatmentTitle);
                
                if (treatmentId) {
                    $learnMoreBtn
                        .attr('data-popup', treatmentId)
                        .attr('href', '#' + treatmentId + '-popup')
                        .on('click', function(e) {
                            e.preventDefault();
                            openPopup(treatmentId);
                        });
                }
            }
        });
    }

    // Get treatment ID from title
    function getTreatmentId(title) {
        const idMap = {
            'HIFU Skin Tightening': 'hifu',
            'RF Microneedling': 'rf-microneedling',
            'Lips Augmentation': 'lip-enhancement',
            'Exosome Regenerative Therapy': 'exosomes',
            'Advanced Body Contouring': 'body-contouring',
            'Aquagold Fine Touch™': 'aquagold',
            'Injectable Skin Boosters': 'skin-boosters',
            'Precision Anti-Wrinkle Injections': 'anti-wrinkle',
            'Longevity IV Infusions': 'iv-infusions'
        };
        
        return idMap[title] || null;
    }

    // Open popup
    function openPopup(treatmentId) {
        const $popup = $('#' + treatmentId + '-popup');
        
        if ($popup.length) {
            currentPopup = treatmentId;
            $popup.addClass('show');
            $('body').css('overflow', 'hidden');
            
            // Mobile viewport height adjustment
            if (window.innerWidth <= 768) {
                const vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            }
            
            // Set focus for accessibility with delay for animation
            setTimeout(() => {
                $popup.find('.popup-close').focus();
            }, 300);
            
            // Announce to screen readers
            $popup.attr('aria-hidden', 'false');
            
            // Store trigger element for focus return
            $popup.data('trigger', $('[data-popup="' + treatmentId + '"]'));
        }
    }

    // Close popup
    function closePopup() {
        if (currentPopup) {
            const $popup = $('#' + currentPopup + '-popup');
            const $trigger = $popup.data('trigger');
            
            $popup.removeClass('show');
            $('body').css('overflow', '');
            
            // Clean up mobile viewport adjustment
            if (window.innerWidth <= 768) {
                document.documentElement.style.removeProperty('--vh');
            }
            
            // Reset accessibility
            $popup.attr('aria-hidden', 'true');
            
            // Return focus to trigger button with delay
            setTimeout(() => {
                if ($trigger && $trigger.length) {
                    $trigger.focus();
                }
            }, 100);
            
            currentPopup = null;
        }
    }

    // Bind close events
    function bindCloseEvents() {
        // Close button
        $(document).on('click', '.popup-close', function() {
            closePopup();
        });
        
        // Click outside
        $(document).on('click', '.treatment-popup', function(e) {
            if ($(e.target).hasClass('treatment-popup')) {
                closePopup();
            }
        });
    }

    // Bind keyboard events
    function bindKeyboardEvents() {
        $(document).on('keydown', function(e) {
            if (currentPopup) {
                switch(e.key) {
                    case 'Escape':
                        closePopup();
                        break;
                    case 'Tab':
                        // Trap focus within popup
                        trapFocus(e);
                        break;
                }
            }
        });
    }
    
    // Trap focus within popup for accessibility
    function trapFocus(e) {
        const $popup = $('#' + currentPopup + '-popup');
        const $focusableElements = $popup.find('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
        const firstFocusable = $focusableElements.first();
        const lastFocusable = $focusableElements.last();
        
        if (e.shiftKey && $(document.activeElement).is(firstFocusable)) {
            e.preventDefault();
            lastFocusable.focus();
        } else if (!e.shiftKey && $(document.activeElement).is(lastFocusable)) {
            e.preventDefault();
            firstFocusable.focus();
        }
    }

    // Bind touch events for mobile
    function bindTouchEvents() {
        let isScrolling = false;
        
        // Touch start
        $(document).on('touchstart', '.popup-container', function(e) {
            touchStartY = e.originalEvent.touches[0].clientY;
            isScrolling = false;
        });
        
        // Touch move - detect swipe down
        $(document).on('touchmove', '.popup-container', function(e) {
            if (!currentPopup) return;
            
            const touchY = e.originalEvent.touches[0].clientY;
            const deltaY = touchY - touchStartY;
            const $content = $(this).find('.popup-content');
            const contentScrollTop = $content.scrollTop();
            
            // Only allow swipe down when at top of scroll and moving down
            if (deltaY > 0 && contentScrollTop === 0 && deltaY > 10) {
                e.preventDefault();
                isScrolling = false;
                
                // Visual feedback with better easing
                const progress = Math.min(deltaY / 300, 1);
                const translateY = deltaY * 0.5;
                const opacity = 1 - (progress * 0.4);
                
                $(this).css({
                    'transform': `translateY(${translateY}px)`,
                    'opacity': opacity,
                    'transition': 'none'
                });
            } else if (Math.abs(deltaY) > 10) {
                isScrolling = true;
            }
        });
        
        // Touch end
        $(document).on('touchend', '.popup-container', function(e) {
            const touchEndY = e.originalEvent.changedTouches[0].clientY;
            const deltaY = touchEndY - touchStartY;
            const $content = $(this).find('.popup-content');
            const $container = $(this);
            
            // Calculate swipe velocity for better UX
            const swipeVelocity = Math.abs(deltaY) / 300; // rough velocity calculation
            
            // Reset transform with smooth transition
            $container.css({
                'transform': '',
                'opacity': '',
                'transition': 'transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.3s ease'
            });
            
            // Close if swiped down enough (only when not scrolling)
            // Lower threshold for fast swipes
            const threshold = swipeVelocity > 0.5 ? 100 : 150;
            if (deltaY > threshold && $content.scrollTop() === 0 && !isScrolling) {
                closePopup();
            }
            
            // Clean up inline styles after animation
            setTimeout(() => {
                $container.css({
                    'transform': '',
                    'opacity': '',
                    'transition': ''
                });
            }, 300);
        });
        
        // Prevent body scroll when popup is open
        $(document).on('touchmove', function(e) {
            if (currentPopup) {
                // Only prevent if not touching the popup content
                if (!$(e.target).closest('.popup-content').length) {
                    e.preventDefault();
                }
            }
        });
    }

})(jQuery);