/**
 * Initialize Header & Footer Components
 * Quick initialization for modern header/footer
 */

jQuery(document).ready(function($) {
    // Function to remove body padding
    function removeBodyPadding() {
        $('body').css('padding-top', '0');
        // Force remove inline style
        var currentStyle = $('body').attr('style') || '';
        var newStyle = currentStyle.replace(/padding-top:\s*[^;]+;?/gi, '');
        $('body').attr('style', newStyle + '; padding-top: 0 !important;');
    }
    
    // Remove padding immediately
    removeBodyPadding();
    
    // Remove padding after various delays to catch late-loading scripts
    setTimeout(removeBodyPadding, 100);
    setTimeout(removeBodyPadding, 300);
    setTimeout(removeBodyPadding, 500);
    setTimeout(removeBodyPadding, 1000);
    
    // Monitor for changes and remove padding if it gets added
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                var $body = $(mutation.target);
                var currentPadding = $body.css('padding-top');
                if (currentPadding && currentPadding !== '0px') {
                    console.log('Body padding detected:', currentPadding, '- removing it');
                    $body.css('padding-top', '0');
                }
            }
        });
    });
    
    // Start observing the body element for style changes
    observer.observe(document.body, {
        attributes: true,
        attributeFilter: ['style']
    });
    
    // Optional: Add a class when scrolled for styling
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            $('.tempus-header').addClass('scrolled');
        } else {
            $('.tempus-header').removeClass('scrolled');
        }
    });
});