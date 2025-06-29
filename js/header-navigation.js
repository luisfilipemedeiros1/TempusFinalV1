/**
 * Modern Header & Footer JavaScript
 * Handles navigation, mobile menu, scroll effects, and back to top
 * 
 * @package tempusbelgravia
 */

(function($) {
    'use strict';

    $(document).ready(function() {
        
        // Header scroll effect
        let lastScroll = 0;
        const header = $('.header-main');
        
        $(window).on('scroll', function() {
            const currentScroll = $(this).scrollTop();
            
            // Add scrolled class for styling
            if (currentScroll > 50) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
            
            lastScroll = currentScroll;
        });
        
        // Mobile menu toggle
        const mobileToggle = $('.mobile-menu-toggle');
        const mainNav = $('.main-navigation');
        const body = $('body');
        
        mobileToggle.on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            mainNav.toggleClass('mobile-active');
            body.toggleClass('menu-open');
        });
        
        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.main-navigation, .mobile-menu-toggle').length) {
                mobileToggle.removeClass('active');
                mainNav.removeClass('mobile-active');
                body.removeClass('menu-open');
            }
        });
        
        // Mobile dropdown handling
        if ($(window).width() <= 992) {
            $('.has-dropdown > a').on('click', function(e) {
                if ($(this).next('.dropdown-menu, .mega-menu').length) {
                    e.preventDefault();
                    const $submenu = $(this).next();
                    const $parent = $(this).parent();
                    
                    // Toggle current submenu
                    $submenu.slideToggle(300);
                    $parent.toggleClass('active');
                    
                    // Close other submenus
                    $parent.siblings('.has-dropdown').removeClass('active')
                        .find('.dropdown-menu, .mega-menu').slideUp(300);
                }
            });
            
            // Handle subdropdown clicks on mobile
            $('.has-subdropdown > a').on('click', function(e) {
                e.preventDefault();
                const $parent = $(this).parent();
                const $submenu = $parent.find('.subdropdown-menu');
                
                // Toggle active state
                $parent.toggleClass('active');
                
                // Slide toggle the subdropdown
                $submenu.slideToggle(300);
                
                // Close other subdropdowns at the same level
                $parent.siblings('.has-subdropdown').removeClass('active')
                    .find('.subdropdown-menu').slideUp(300);
            });
        }
        
        // Back to top button
        const backToTop = $('#backToTop');
        
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                backToTop.addClass('visible');
            } else {
                backToTop.removeClass('visible');
            }
        });
        
        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 600);
        });
        
        // Smooth scroll for anchor links
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
                location.hostname === this.hostname) {
                
                const target = $(this.hash);
                if (target.length) {
                    e.preventDefault();
                    
                    // Close mobile menu if open
                    if (mainNav.hasClass('mobile-active')) {
                        mobileToggle.removeClass('active');
                        mainNav.removeClass('mobile-active');
                        body.removeClass('menu-open');
                    }
                    
                    // Scroll to target
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 600);
                }
            }
        });
        
        // Newsletter form handling
        $('.newsletter-form').on('submit', function(e) {
            e.preventDefault();
            const email = $(this).find('input[type="email"]').val();
            
            // Here you would typically send the email to your server
            // For now, just show a success message
            $(this).find('input').val('');
            alert('Thank you for subscribing! We\'ll be in touch soon.');
        });
        
        // Add hover intent for better desktop dropdown experience
        if ($(window).width() > 992) {
            let hoverTimer;
            
            $('.has-dropdown').on('mouseenter', function() {
                const $this = $(this);
                clearTimeout(hoverTimer);
                
                // Close other dropdowns
                $('.has-dropdown').not($this).removeClass('hover');
                
                // Open this dropdown
                $this.addClass('hover');
            }).on('mouseleave', function() {
                const $this = $(this);
                
                hoverTimer = setTimeout(function() {
                    $this.removeClass('hover');
                }, 200);
            });
        }
        
        // Handle window resize
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // Reset mobile menu on desktop
                if ($(window).width() > 992) {
                    mobileToggle.removeClass('active');
                    mainNav.removeClass('mobile-active');
                    body.removeClass('menu-open');
                    $('.dropdown-menu, .mega-menu').removeAttr('style');
                }
            }, 250);
        });
        
    });
    
})(jQuery);