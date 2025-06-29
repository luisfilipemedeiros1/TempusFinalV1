/**
 * Fix Body Padding Issue
 * Prevents Genesis or any other script from adding padding-top to body
 */

(function() {
    'use strict';
    
    // Function to remove body padding
    function removeBodyPadding() {
        var body = document.body;
        
        // Remove inline style padding
        if (body.style.paddingTop) {
            console.log('Removing body padding-top:', body.style.paddingTop);
            body.style.paddingTop = '0';
            body.style.setProperty('padding-top', '0', 'important');
        }
        
        // Remove any padding from computed styles
        var computedStyle = window.getComputedStyle(body);
        if (computedStyle.paddingTop !== '0px') {
            console.log('Computed padding-top detected:', computedStyle.paddingTop);
            body.style.setProperty('padding-top', '0', 'important');
        }
    }
    
    // Remove padding immediately when script loads
    removeBodyPadding();
    
    // Remove padding when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', removeBodyPadding);
    } else {
        removeBodyPadding();
    }
    
    // Remove padding after window loads
    window.addEventListener('load', function() {
        removeBodyPadding();
        
        // Set up continuous monitoring
        setTimeout(removeBodyPadding, 100);
        setTimeout(removeBodyPadding, 500);
        setTimeout(removeBodyPadding, 1000);
        setTimeout(removeBodyPadding, 2000);
    });
    
    // Monitor for changes using MutationObserver
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && 
                mutation.target === document.body && 
                mutation.attributeName === 'style') {
                removeBodyPadding();
            }
        });
    });
    
    // Start observing
    observer.observe(document.body, {
        attributes: true,
        attributeFilter: ['style']
    });
    
    // Also intercept any attempts to set padding via jQuery if it exists
    if (typeof jQuery !== 'undefined') {
        jQuery(document).ready(function($) {
            // Override jQuery css method for body padding-top
            var originalCss = $.fn.css;
            $.fn.css = function() {
                var args = Array.prototype.slice.call(arguments);
                
                // If trying to set padding-top on body, prevent it
                if (this.is('body') && args[0] === 'padding-top' && args.length > 1) {
                    console.log('Prevented jQuery from setting body padding-top:', args[1]);
                    return this;
                }
                
                // For objects containing padding-top
                if (this.is('body') && typeof args[0] === 'object' && args[0]['padding-top']) {
                    delete args[0]['padding-top'];
                }
                
                return originalCss.apply(this, args);
            };
        });
    }
})();