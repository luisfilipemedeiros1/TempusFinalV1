/**
 * Treatment Pages JavaScript
 * Handles animations and interactions for treatment category pages
 */

jQuery(document).ready(function($) {
    
    // Scroll animations for treatment cards
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        // Observe treatment cards
        $('.treatment-card').each(function() {
            observer.observe(this);
        });

        // Observe section headers
        $('.section-header').each(function() {
            observer.observe(this);
        });
    }

    // Smooth scroll for CTA buttons
    $('.treatment-hero .cta-button').on('click', function(e) {
        if (this.hash !== '') {
            e.preventDefault();
            const hash = this.hash;
            
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 100
            }, 800);
        }
    });

    // Add hover effects to treatment cards
    $('.treatment-card').hover(
        function() {
            $(this).find('.treatment-link').css('transform', 'translateX(5px)');
        },
        function() {
            $(this).find('.treatment-link').css('transform', 'translateX(0)');
        }
    );

    // Initialize animations
    initScrollAnimations();

    // Hero content fade in on load
    $('.treatment-hero-content').addClass('loaded');

    // Add stagger animation to treatment cards
    $('.treatment-card').each(function(index) {
        $(this).css('animation-delay', (index * 0.1) + 's');
    });

    // Parallax effect for hero section (subtle)
    $(window).on('scroll', function() {
        const scrollTop = $(window).scrollTop();
        const heroHeight = $('.treatment-hero').outerHeight();
        
        if (scrollTop < heroHeight) {
            const parallaxValue = scrollTop * 0.3;
            $('.treatment-hero').css('transform', 'translateY(' + parallaxValue + 'px)');
        }
    });

    // Add loading state for images
    $('.treatment-image img').each(function() {
        const img = $(this);
        const tempImg = new Image();
        
        tempImg.onload = function() {
            img.addClass('loaded');
        };
        
        tempImg.src = img.attr('src');
    });

    // Handle treatment link clicks (for future functionality)
    $('.treatment-link').on('click', function(e) {
        // Add tracking or modal popup here if needed
        console.log('Treatment clicked:', $(this).closest('.treatment-card').find('.treatment-name').text());
    });

    // Mobile menu adjustments for treatment pages
    if ($(window).width() < 768) {
        // Reduce parallax effect on mobile
        $(window).off('scroll');
        
        // Simplify animations on mobile
        $('.treatment-card').css('animation-delay', '0s');
    }

    // Resize handler
    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if ($(window).width() < 768) {
                $(window).off('scroll');
            }
        }, 250);
    });
});