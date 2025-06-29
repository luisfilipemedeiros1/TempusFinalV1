// Remove body padding that Genesis or other scripts might add
jQuery(document).ready(function($) {
    // Initial removal
    $('body').css('padding-top', '0');
    
    // Remove after window load
    $(window).on('load', function() {
        $('body').css('padding-top', '0');
        // Force with !important
        var bodyStyle = $('body').attr('style') || '';
        if (!bodyStyle.includes('padding-top: 0 !important')) {
            $('body').attr('style', bodyStyle + '; padding-top: 0 !important;');
        }
    });
    
    // Check periodically for the first 2 seconds
    var checkCount = 0;
    var checkInterval = setInterval(function() {
        var currentPadding = $('body').css('padding-top');
        if (currentPadding && currentPadding !== '0px') {
            console.log('Removing body padding:', currentPadding);
            $('body').css('padding-top', '0');
        }
        checkCount++;
        if (checkCount > 20) { // Stop after 2 seconds (20 * 100ms)
            clearInterval(checkInterval);
        }
    }, 100);
});

 jQuery(".header-widget-area .widget_nav_menu").prepend('<div id="mobi-menu"></div>');
//      jQuery("#mobi-menu").on("click", function(){
//          jQuery(".header-widget-area .nav-header").slideToggle();
// 		jQuery(".widget.widget_search").hide();
//        jQuery(this).toggleClass("active");
		
//     });

if (jQuery(window).width() < 768) {
// 	jQuery(document).click(function(event) {
// 	  if (!jQuery(event.target).closest(".header-widget-area .nav-header").length) {
// 		jQuery(".header-widget-area .nav-header").hide();
// 	  }
// 	});

	jQuery("#mobi-menu").click(function(e) {
	  e.preventDefault();
	  jQuery(".header-widget-area .nav-header").toggle();
	});
        
       
   

  }

jQuery('.genesis-nav-menu > .menu-item.menu-item-has-children > a span i').click(function(e) {
      e.preventDefault();
	   console.log("I am in");
      //jQuery(this).parent().addClass("testclass");
	   jQuery(this).parent().parent().parent().find('.sub-menu').toggle();
      //jQuery(this).parent().closest("a").toggleClass('active');
   });
	
	jQuery(".nav-primary").prepend('<div id="mobi-cat-menu"><span>All Categories</span></div>');
     jQuery("#mobi-cat-menu").on("click", function(){
         jQuery(".nav-primary #menu-blog-categories").slideToggle();
        jQuery(this).toggleClass("active");

    });



jQuery(document).ready(function(){
    jQuery('.our-doctor-category-home').slick({
        dots: false,
        autoplay:false,
        infinite: true,
        nextArrow: '.arow-ne',
        prevArrow: '.arow-pre',
        speed: 300,
        arrows:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 3,
              arrows:false,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              dots:false,
              arrows:true,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
	 jQuery('.prod').slick({
        dots: false,
        autoplay:true,
        infinite: true,
        speed: 300,
		centerMode: true,
 		centerPadding: '100px',
        arrows:true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 2,
              arrows:false,
				centerpadding:'0',
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              dots:false,
				centerMode: false,
				centerpadding:'0',
              arrows:false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
   jQuery('.industry-leading-slider').slick({
        dots: false,
        autoplay:true,
        infinite: true,
        arrows:false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 3,
              arrows:false,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              dots:false,
              arrows:false,
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
      });
      jQuery('.pateint-review-details').slick({
        dots: false,
        autoplay:true,
        infinite: true,
        nextArrow: '.arow-next',
        prevArrow: '.arow-pervious',
        speed: 300,
        arrows:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 3,
              arrows:false,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              dots:false,
              arrows:true,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
//       jQuery('.slider-tempus-certified-package').slick({
//         dots: false,
//         autoplay:true,
//         infinite: true,
//         nextArrow: '.next-arrow',
//         prevArrow: '.pervious-arrow',
//         speed: 300,
//         arrows:true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         responsive: [
//           {
//             breakpoint: 1024,
//             settings: {
//               slidesToShow: 1,
//               arrows:true,
//               slidesToScroll: 1,
//               infinite: true,
//               dots: false
//             }
//           },
// 			{
// 			 breakpoint: 767,
//             settings: {
//               slidesToShow: 1,
//               arrows:false,
//               slidesToScroll: 1,
//               infinite: true,
//               dots: false
//             }
//           },
//           {
//             breakpoint: 600,
//             settings: {
//               dots:false,
//               arrows:true,
//               slidesToShow: 1,
//               slidesToScroll: 1
//             }
//           },
//           {
//             breakpoint: 480,
//             settings: {
//               dots:false,
//               arrows:true,
//               slidesToShow: 1,
//               slidesToScroll: 1
//             }
//           }
//         ]
//       });
	      jQuery('.home-banner').slick({
        dots: false,
        autoplay:false,
        infinite: false,
        nextArrow: '.arow-nex',
        prevArrow: '.arow-prev',
        autoplaySpeed: 2000,
        arrows:true,
        slidesToShow: 1,
	    pauseOnHover: false,
        pauseOnFocus: false,
        slidesToScroll: 1,
//         responsive: [
//           {
//             breakpoint: 1023,
//             settings: {
//               slidesToShow: 1,
//               arrows:true,
//               slidesToScroll: 1,
//               infinite: false,
//               dots: false
//             }
//           },
//           {
//             breakpoint: 767,
//             settings: {
//               dots:false,
// 		    infinite: true,
//               arrows:true,
//               slidesToShow: 1,
//               slidesToScroll: 1
//             }
//           }
//         ]
      });
      jQuery(".scroll-now button").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery(".who-we-are-section").offset().top
        }, 1500);
    });
    jQuery(".scroll-now-treatment-page button").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".treatment-page-box").offset().top
      }, 1500);
    });
    jQuery(".scroll-now-face-asthetic-treatment-page button").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".face-asthetic-treatment-page-box").offset().top
      }, 1500);
    });
    jQuery(".scroll-now-gp-service-page button").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".gp-service-page-box").offset().top
      }, 1500);
    });
	jQuery(".menu-item.link-membership a").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".membership-package").offset().top-50
      }, 1500);
    });
	jQuery(".menu-item.link-contact a").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".get-in-touch-contact").offset().top-50
      }, 1500);
    });
	jQuery("#menu-item-360 a").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".contact-form").offset().top-50
      }, 2000);
    });
	jQuery("#menu-item-495 a").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".banner-for-doctor-category").offset().top-50
      }, 2000);
    });
	jQuery("#menu-item-496 a").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".banner-for-practitioners-category").offset().top-50
      }, 2000);
    });
	jQuery("#menu-item-497 a").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".banner-for-liaison-category").offset().top-50
      }, 2000);
    });
// 	jQuery("#menu-item-713 a").click(function() {
//       jQuery('html, body').animate({
//           scrollTop: jQuery("#menu-package").offset().top-50
//       }, 2000);
//     });
	if (jQuery(".projects-count").length) {

        jQuery(window).scroll(startCounter);

        function startCounter() {
            var hT = jQuery('.projects-count').offset().top,
                hH = jQuery('.projects-count').outerHeight(),
                wH = jQuery(window).height();
            if (jQuery(window).scrollTop() > hT + hH - wH) {
                jQuery(window).off("scroll", startCounter);
                jQuery('.counter').each(function () {
                    var $this = jQuery(this);
                    jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
            }
        }
	}
	jQuery('.g-content-page').click(function(){
	    jQuery('.g-content-page').removeClass("active");
	    jQuery(this).addClass("active");
	});
	
	 jQuery(".facts-cross i").click(function(){

         // show Modal
         jQuery('.g-content-page.active .popup-g').hide();
      

    });	
    	jQuery(".g-content-page .read-more-button button").click(function(){

         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });	
    	jQuery(".g-content-page .read-more-button button").click(function(){

         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });	
		
	
	jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 200) {
      jQuery(' .whatsapp-icon').fadeIn();
    } else {
      jQuery('.whatsapp-icon').fadeOut();
    }
  });
	jQuery(".g-content-page .service-name-detail h2").click(function(){
         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });
   jQuery(".g-content-page .face-asthetic-treatment-image img").click(function(){
         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });	
	jQuery(".g-content-page .contouring-cost p").click(function(){
         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });	

	jQuery(".g-content-page .treatment-image").click(function(){
         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });
	jQuery(".g-content-page .treatment-name h2").click(function(){
         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });
	jQuery(".g-content-page .treatment-price p").click(function(){
         // show Modal
         jQuery('.g-content-page.active .popup-g').show();
    });
	jQuery(".fa-search").click(function(){
    jQuery(".search-form-input").toggle();
//     alert(“Hello”);
  });
});

/* rashid */
// jQuery('div.woocommerce').on('click', 'input.qty', function(){
//       jQuery("[name='update_cart']").trigger("click");
//   });
/* rashid */
// Uses fontawesome for the rendering of the arrows

jQuery( function( $ ) {
	let timeout;
	$('.woocommerce').on( 'change', 'input.qty', function(){
		if ( timeout !== undefined ) {
			clearTimeout( timeout );
		}
		timeout = setTimeout(function() {
			$("[name='update_cart']").trigger("click"); // trigger cart update
		}, 500 ); // 1 second delay, half a second (500) seems comfortable too
	});
});

jQuery(".button-for-banner button, .book-now, .menu-item-386, #menu-item-1634").click(function(e){
    e.preventDefault();
    // show Modal
    jQuery('.popup-appointment').show();
});	
    	
jQuery(".book-cross i").click(function(){
    // show Modal
    jQuery('.popup-appointment').hide();    
});

// close modal on click outside at anywhere
jQuery(document).on('click',function(e){
    if(!((jQuery(e.target).closest(".popup-appointwrap").length > 0 ) || (jQuery(e.target).closest(".button-for-banner button, .book-now, .menu-item-386, #menu-item-1634").length > 0))){
        jQuery(".popup-appointment").hide();
    }
});