/**
 * WooCommerce JavaScript for Tempus Belgravia
 * This file contains all WooCommerce-specific JavaScript functionality
 * Version: 1.0.0
 */

jQuery(document).ready(function($) {
    
    // ===================================
    // Quantity Plus/Minus Buttons
    // ===================================
    
    // Add decimal support for quantity
    if (!String.prototype.getDecimals) {
        String.prototype.getDecimals = function() {
            var num = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if (!match) {
                return 0;
            }
            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
        }
    }
    
    // Quantity button functionality
    $(document).on('click', '.plus, .minus', function() {
        var $qty = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max = parseFloat($qty.attr('max')),
            min = parseFloat($qty.attr('min')),
            step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
        if (max === '' || max === 'NaN') max = '';
        if (min === '' || min === 'NaN') min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

        // Change the value
        if ($(this).is('.plus')) {
            if (max && (currentVal >= max)) {
                $qty.val(max);
            } else {
                $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
            }
        } else {
            if (min && (currentVal <= min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
            }
        }

        // Trigger change event
        $qty.trigger('change');
    });
    
    // ===================================
    // Update Cart on Quantity Change
    // ===================================
    
    var cart_timeout;
    $('.woocommerce-cart').on('change', 'input.qty', function() {
        if (cart_timeout !== undefined) {
            clearTimeout(cart_timeout);
        }
        cart_timeout = setTimeout(function() {
            $('[name="update_cart"]').trigger('click');
        }, 1000);
    });
    
    // ===================================
    // Product Image Gallery
    // ===================================
    
    // Initialize product gallery if present
    if ($('.woocommerce-product-gallery').length > 0) {
        $('.woocommerce-product-gallery').each(function() {
            var $gallery = $(this);
            
            // Add zoom functionality on hover
            $gallery.find('.woocommerce-product-gallery__image a').hover(
                function() {
                    $(this).find('img').css('transform', 'scale(1.1)');
                },
                function() {
                    $(this).find('img').css('transform', 'scale(1)');
                }
            );
        });
    }
    
    // ===================================
    // AJAX Add to Cart Enhancement
    // ===================================
    
    $(document).on('click', '.ajax_add_to_cart', function(e) {
        var $button = $(this);
        
        // Add loading state
        $button.addClass('loading');
        
        // Remove loading state when complete
        $(document.body).on('added_to_cart', function() {
            $button.removeClass('loading');
            $button.addClass('added');
            
            // Change button text temporarily
            var originalText = $button.text();
            $button.text('Added to Basket!');
            
            setTimeout(function() {
                $button.text(originalText);
                $button.removeClass('added');
            }, 2000);
        });
    });
    
    // ===================================
    // Smooth Scroll for Shop Categories
    // ===================================
    
    $('.product-categories a').on('click', function(e) {
        if ($(this).attr('href').charAt(0) === '#') {
            e.preventDefault();
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 100
            }, 800);
        }
    });
    
    // ===================================
    // Product Quick View (if needed)
    // ===================================
    
    $('.quick-view-button').on('click', function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        
        // Create modal or load product details via AJAX
        // This is a placeholder for quick view functionality
    });
    
    // ===================================
    // Filter Products Enhancement
    // ===================================
    
    // Add active class to current category
    $('.product-categories a').each(function() {
        if (window.location.href.indexOf($(this).attr('href')) > -1) {
            $(this).addClass('active');
        }
    });
    
    // ===================================
    // Checkout Form Enhancement
    // ===================================
    
    if ($('body').hasClass('woocommerce-checkout')) {
        // Auto-format phone numbers
        $('#billing_phone, #shipping_phone').on('input', function() {
            var value = $(this).val().replace(/\D/g, '');
            if (value.length > 0) {
                if (value.length <= 3) {
                    value = value;
                } else if (value.length <= 6) {
                    value = value.slice(0, 3) + '-' + value.slice(3);
                } else {
                    value = value.slice(0, 3) + '-' + value.slice(3, 6) + '-' + value.slice(6, 10);
                }
            }
            $(this).val(value);
        });
        
        // Smooth scroll to errors
        $(document.body).on('checkout_error', function() {
            var $error = $('.woocommerce-error').first();
            if ($error.length) {
                $('html, body').animate({
                    scrollTop: $error.offset().top - 100
                }, 1000);
            }
        });
    }
    
    // ===================================
    // Mini Cart Enhancement
    // ===================================
    
    // Update mini cart count dynamically
    $(document.body).on('added_to_cart removed_from_cart', function() {
        $.ajax({
            url: wc_add_to_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'get_cart_count'
            },
            success: function(response) {
                $('.cart-count').text(response);
            }
        });
    });
    
    // ===================================
    // Product Search Enhancement
    // ===================================
    
    var searchTimeout;
    $('.product-search input[type="search"]').on('input', function() {
        var $input = $(this);
        var query = $input.val();
        
        clearTimeout(searchTimeout);
        
        if (query.length >= 3) {
            searchTimeout = setTimeout(function() {
                // Add your AJAX search functionality here
                console.log('Searching for: ' + query);
            }, 500);
        }
    });
    
    // ===================================
    // Responsive Tables for Mobile
    // ===================================
    
    if ($(window).width() < 768) {
        $('.shop_table').each(function() {
            var $table = $(this);
            if (!$table.hasClass('responsive-table')) {
                $table.addClass('responsive-table');
                
                // Add data labels for mobile
                $table.find('tbody tr').each(function() {
                    var $row = $(this);
                    $row.find('td').each(function(index) {
                        var $td = $(this);
                        var label = $table.find('thead th').eq(index).text();
                        $td.attr('data-label', label);
                    });
                });
            }
        });
    }
});

// ===================================
// WooCommerce AJAX Cart Count Function
// ===================================

function updateCartCount() {
    jQuery.ajax({
        url: wc_add_to_cart_params.ajax_url,
        type: 'POST',
        data: {
            action: 'get_cart_count'
        },
        success: function(count) {
            jQuery('.cart-count').text(count);
            if (count > 0) {
                jQuery('.cart-count').show();
            } else {
                jQuery('.cart-count').hide();
            }
        }
    });
}