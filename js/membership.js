jQuery(document).ready(function($) {
    'use strict';

    // FAQ Accordion functionality
    $('.faq-question').on('click', function() {
        var $faqItem = $(this).parent('.faq-item');
        var $answer = $faqItem.find('.faq-answer');
        
        // Close all other FAQs
        $('.faq-item').not($faqItem).removeClass('active');
        $('.faq-answer').not($answer).css('max-height', '0');
        
        // Toggle current FAQ
        $faqItem.toggleClass('active');
        
        if ($faqItem.hasClass('active')) {
            // Calculate and set the actual height for smooth animation
            var scrollHeight = $answer[0].scrollHeight;
            $answer.css('max-height', scrollHeight + 'px');
        } else {
            $answer.css('max-height', '0');
        }
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
        
        if (target.length) {
            var headerHeight = $('.site-header').outerHeight() || 0;
            var scrollTo = target.offset().top - headerHeight - 20;
            
            $('html, body').animate({
                scrollTop: scrollTo
            }, 800, 'swing');
        }
    });

    // Animation on scroll
    var animateElements = function() {
        var windowHeight = $(window).height();
        var windowTop = $(window).scrollTop();
        var windowBottom = windowTop + windowHeight;

        $('.fade-in, .fade-in-up, .fade-in-stagger > *, .slide-in-left, .slide-in-right, .scale-in').each(function() {
            var element = $(this);
            var elementTop = element.offset().top;
            var elementBottom = elementTop + element.outerHeight();

            // Check if element is in viewport
            if (elementBottom >= windowTop && elementTop <= windowBottom) {
                // Add a small delay for staggered animations
                setTimeout(function() {
                    element.css('animation-play-state', 'running');
                }, 100);
            }
        });
    };

    // Initial animation check
    animateElements();

    // Animate on scroll
    $(window).on('scroll', function() {
        animateElements();
    });

    // Membership card hover effects
    $('.membership-card').hover(
        function() {
            $(this).find('.cta-button').addClass('hover');
        },
        function() {
            $(this).find('.cta-button').removeClass('hover');
        }
    );

    // Handle membership plan selection (if needed for forms)
    $('.membership-card .cta-button').on('click', function(e) {
        var planName = $(this).closest('.membership-card').find('h3').text();
        
        // Store selected plan in session storage
        if (typeof(Storage) !== "undefined") {
            sessionStorage.setItem('selectedMembershipPlan', planName);
        }
    });

    // Responsive adjustments
    var handleResponsive = function() {
        var windowWidth = $(window).width();
        
        if (windowWidth < 768) {
            // Mobile adjustments
            $('.membership-grid').addClass('mobile-view');
        } else {
            $('.membership-grid').removeClass('mobile-view');
        }
    };

    // Initial responsive check
    handleResponsive();

    // Handle responsive on resize
    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            handleResponsive();
        }, 250);
    });

    // Add loading state to buttons on click
    $('.cta-button').on('click', function() {
        var $button = $(this);
        if ($button.attr('href') && $button.attr('href') !== '#') {
            $button.addClass('loading');
            setTimeout(function() {
                $button.removeClass('loading');
            }, 3000); // Remove after 3 seconds as fallback
        }
    });

    // Initialize any third-party plugins if needed
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    }

});