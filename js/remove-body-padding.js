/**
 * Remove Body Padding Script
 * Forcefully removes any padding-top added to the body element
 * This handles Genesis framework or any other script that adds body padding
 */

(function() {
    'use strict';
    
    // Function to remove body padding
    function removeBodyPadding() {
        var body = document.body;
        var currentPadding = window.getComputedStyle(body).paddingTop;
        
        if (currentPadding && currentPadding !== '0px') {
            console.log('[Tempus] Removing body padding-top:', currentPadding);
            
            // Method 1: Direct style manipulation
            body.style.paddingTop = '0';
            
            // Method 2: Override with !important
            var currentStyle = body.getAttribute('style') || '';
            if (!currentStyle.includes('padding-top: 0 !important')) {
                body.setAttribute('style', currentStyle + '; padding-top: 0 !important;');
            }
        }
    }
    
    // Remove padding on multiple events to catch all scenarios
    
    // 1. As soon as DOM is interactive
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', removeBodyPadding);
    } else {
        removeBodyPadding();
    }
    
    // 2. When all resources are loaded
    window.addEventListener('load', removeBodyPadding);
    
    // 3. After a short delay (catch late scripts)
    setTimeout(removeBodyPadding, 100);
    setTimeout(removeBodyPadding, 500);
    setTimeout(removeBodyPadding, 1000);
    
    // 4. Monitor for changes using MutationObserver
    if (window.MutationObserver) {
        var observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && 
                    mutation.target === document.body && 
                    mutation.attributeName === 'style') {
                    
                    var paddingTop = window.getComputedStyle(document.body).paddingTop;
                    if (paddingTop && paddingTop !== '0px') {
                        removeBodyPadding();
                    }
                }
            });
        });
        
        // Start observing once body is available
        if (document.body) {
            observer.observe(document.body, {
                attributes: true,
                attributeFilter: ['style']
            });
        } else {
            document.addEventListener('DOMContentLoaded', function() {
                observer.observe(document.body, {
                    attributes: true,
                    attributeFilter: ['style']
                });
            });
        }
    }
    
    // 5. Listen for window resize (some scripts recalculate on resize)
    var resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(removeBodyPadding, 100);
    });
    
})();