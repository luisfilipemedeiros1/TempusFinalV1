/**
 * Taxonomy and Blog Pages Visibility Fix
 * Ensures content remains visible on hover
 */

jQuery(document).ready(function($) {
    // Override the problematic template hiding script
    function ensureVisibility() {
        // Force all blog content to be visible
        $('.blog-page-wrapper, .blog-main-content, .blog-card, .featured-post-card').css({
            'display': 'block !important',
            'visibility': 'visible !important',
            'opacity': '1 !important'
        }).show();
        
        // Ensure all child elements are visible
        $('.blog-page-wrapper *, .blog-main-content *, .blog-card *, .featured-post-card *').css({
            'display': '',
            'visibility': 'visible',
            'opacity': '1'
        });
        
        // Fix for team member cards
        $('.team-member-card, .taxonomy-card').css({
            'display': 'block',
            'visibility': 'visible',
            'opacity': '1'
        });
        
        // Remove any display:none from template elements that might affect content
        $('template').each(function() {
            $(this).css('display', '');
        });
    }
    
    // Run immediately
    ensureVisibility();
    
    // Run after the problematic script executes (after 100ms)
    setTimeout(ensureVisibility, 150);
    
    // Run again after a short delay to catch any delayed scripts
    setTimeout(ensureVisibility, 500);
    setTimeout(ensureVisibility, 1000);
    setTimeout(ensureVisibility, 2000);
    
    // Fix for hover states
    $('.team-member-card, .taxonomy-card, .blog-card').on('mouseenter mouseleave', function(e) {
        e.stopPropagation();
        // Ensure all child elements remain visible
        $(this).css({
            'visibility': 'visible',
            'opacity': '1',
            'display': 'block'
        });
        $(this).find('*').css({
            'visibility': 'visible',
            'opacity': '1'
        });
    });

    // Prevent any CSS animations from hiding content
    $('.fade-in, .fade-in-up').each(function() {
        $(this).css({
            'animation-play-state': 'running',
            'opacity': '1',
            'visibility': 'visible'
        });
    });

    // Fix z-index issues
    $('.taxonomy-card, .blog-card').hover(
        function() {
            $(this).css('z-index', '10');
        },
        function() {
            $(this).css('z-index', '1');
        }
    );

    // Monitor for any dynamic content changes
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                var $target = $(mutation.target);
                
                // If something tries to hide our content, show it again
                if ($target.css('display') === 'none' || 
                    $target.css('visibility') === 'hidden' || 
                    $target.css('opacity') === '0') {
                    
                    if ($target.hasClass('blog-card') || 
                        $target.hasClass('taxonomy-card') || 
                        $target.hasClass('team-member-card') ||
                        $target.hasClass('blog-page-wrapper') ||
                        $target.hasClass('blog-main-content') ||
                        $target.closest('.blog-card').length ||
                        $target.closest('.taxonomy-card').length ||
                        $target.closest('.team-member-card').length) {
                        
                        $target.css({
                            'display': '',
                            'visibility': 'visible',
                            'opacity': '1'
                        });
                    }
                }
            }
        });
    });

    // Start observing the entire document for style changes
    observer.observe(document.body, {
        attributes: true,
        attributeFilter: ['style'],
        subtree: true
    });

    // Additional fix for Genesis theme conflicts
    if (window.genesis) {
        // Override any Genesis animations that might hide content
        $('.taxonomy-card, .blog-card, .team-member-card').removeClass('fadeOut fadeOutDown fadeOutUp');
    }
    
    // Scroll event to ensure content stays visible
    $(window).on('scroll', function() {
        ensureVisibility();
    });
});