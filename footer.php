
        </main><!-- .site-main -->
    </div><!-- .site-wrapper -->

    <!-- Elegant Footer -->
    <footer class="tempus-footer">
        <!-- Newsletter Section -->
        <div class="footer-newsletter-section">
            <div class="container">
                <div class="newsletter-content">
                    <div class="newsletter-text">
                        <h3>Stay Informed</h3>
                        <p>Receive exclusive insights on aesthetic innovations and wellness tips</p>
                    </div>
                    <?php 
                    // Use Contact Form 7 or WPForms if available
                    if (function_exists('do_shortcode')) {
                        // Try Contact Form 7 first
                        $newsletter_form = do_shortcode('[contact-form-7 id="newsletter" title="Newsletter Signup"]');
                        
                        // If no Contact Form 7, try WPForms
                        if (strpos($newsletter_form, 'wpcf7') === false) {
                            $newsletter_form = do_shortcode('[wpforms id="newsletter"]');
                        }
                        
                        // If still no form plugin, use default HTML
                        if (strpos($newsletter_form, 'form') === false) {
                            ?>
                            <form class="newsletter-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST">
                                <input type="email" name="email" placeholder="Enter your email address" required>
                                <input type="hidden" name="action" value="newsletter_signup">
                                <?php wp_nonce_field('newsletter_nonce', 'newsletter_nonce_field'); ?>
                                <button type="submit" class="submit-btn">
                                    <span>Subscribe</span>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </button>
                            </form>
                            <?php
                        } else {
                            echo $newsletter_form;
                        }
                    } else {
                        ?>
                        <form class="newsletter-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST">
                            <input type="email" name="email" placeholder="Enter your email address" required>
                            <input type="hidden" name="action" value="newsletter_signup">
                            <?php wp_nonce_field('newsletter_nonce', 'newsletter_nonce_field'); ?>
                            <button type="submit" class="submit-btn">
                                <span>Subscribe</span>
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <!-- Main Footer Content -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-grid" style="display: grid; grid-template-columns: 2fr 1fr 1fr 1.5fr; gap: 40px; align-items: start;">
                    <!-- Brand Column -->
                    <div class="footer-brand">
                        <div class="footer-logo">
                            <?php if (has_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <img src="https://res.cloudinary.com/drtatej7i/image/upload/v1744361845/Group_30_xsuean.svg" alt="<?php bloginfo('name'); ?>" />
                            <?php endif; ?>
                        </div>
                        <p class="brand-description">
                            Where timeless vitality meets visible rejuvenation. 
                            Belgravia's premier aesthetic and longevity clinic.
                        </p>
                        <div class="social-links">
                            <a href="https://www.instagram.com/tempusbelgravialondon/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/tempusbelgravia/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/tempus-belgravia/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                            <li><a href="<?php echo home_url('/memberships/'); ?>">FH Memberships</a></li>
                            <li><a href="<?php echo home_url('/tempus-packages/'); ?>">Tempus Packages</a></li>
                            <li><a href="<?php echo home_url('/treatments-overview/'); ?>">Treatments</a></li>
                            <li><a href="<?php echo home_url('/tempus-team/'); ?>">Team</a></li>
                            <li><a href="<?php echo home_url('/conditions-treated-2/'); ?>">Conditions</a></li>
                            <li><a href="<?php echo home_url('/#contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                    
                    <!-- Additional Links -->
                    <div class="footer-column">
                        <h4>Resources</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo home_url('/journal-2/'); ?>">Journal</a></li>
                            <li><a href="<?php echo home_url('/gallery/'); ?>">Gallery</a></li>
                            <li><a href="<?php echo home_url('/about/'); ?>">About Us</a></li>
                            <li><a href="<?php echo home_url('/faq/'); ?>">FAQ</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="footer-column footer-contact">
                        <h4>Visit Us</h4>
                        <div class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <address>
                                11A West Halkin Street<br>
                                Belgravia, London SW1X 8JL
                            </address>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+442080373265">+44 20 8037 3265</a>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@tempusbelgravia.co.uk">info@tempusbelgravia.co.uk</a>
                        </div>
                        <div class="opening-hours">
                            <h5>Opening Hours</h5>
                            <p>Mon-Fri: 9:00am - 6:00pm<br>
                            Sat: By appointment<br>
                            Sun: Closed</p>
                        </div>
                    </div>
                </div>
                
                <!-- CQC Badge -->
                <div class="footer-badge">
                    <img src="https://srglimited.co.uk/wp-content/uploads/elementor/thumbs/care-quality-commission-cqc-logo-vector-q1kaelw1ytpbwcyd7s54agtfhx3zhfm76zfljv1x1k.png" alt="CQC Regulated" />
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-content">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> Tempus Belgravia. All rights reserved.</p>
                    <nav class="legal-links">
                        <a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a>
                        <span class="separator">•</span>
                        <a href="<?php echo home_url('/terms-and-conditions/'); ?>">Terms & Conditions</a>
                        <span class="separator">•</span>
                        <a href="<?php echo home_url('/cookies-policy/'); ?>">Cookies Policy</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div class="floating-actions">
        <button class="back-to-top" id="backToTop" aria-label="Back to top">
            <i class="fas fa-chevron-up"></i>
        </button>
        
        <a href="https://wa.me/447538037973" 
           class="whatsapp-float" 
           target="_blank" 
           rel="noopener noreferrer" 
           aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <style>
    /* Footer Grid Responsive Styles */
    @media (max-width: 1024px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr !important;
            gap: 30px !important;
        }
        .footer-brand {
            grid-column: 1 / -1;
        }
    }
    
    @media (max-width: 768px) {
        .footer-grid {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
        .footer-column {
            margin-bottom: 20px;
        }
        .footer-newsletter-section .newsletter-content {
            flex-direction: column;
            text-align: center;
        }
        .footer-newsletter-section .newsletter-text {
            margin-bottom: 20px;
        }
        .footer-newsletter-section .newsletter-form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
    }
    
    /* Newsletter Form Styling */
    .newsletter-form {
        display: flex;
        gap: 10px;
        max-width: 500px;
    }
    
    .newsletter-form input[type="email"] {
        flex: 1;
        padding: 12px 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 5px;
        font-size: 16px;
    }
    
    .newsletter-form input[type="email"]::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }
    
    .newsletter-form .submit-btn {
        padding: 12px 30px;
        background-color: var(--primary);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }
    
    .newsletter-form .submit-btn:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
    }
    
    /* Footer Badge Positioning */
    .footer-badge {
        margin-top: 40px;
        text-align: center;
    }
    
    .footer-badge img {
        max-width: 200px;
        height: auto;
        max-height: 60px;
        object-fit: contain;
    }
    </style>

    <?php wp_footer(); ?>
    
    <!-- Zoho Forms UTM Tracking Script -->
    <script type="text/javascript"> 
    function ZFAdvLead(){
    }
    ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

    ZFAdvLead.utmPNameArr = new Array('utm_source','utm_medium','utm_campaign','utm_term','utm_content');ZFAdvLead.utmcustPNameArr = new Array();ZFAdvLead.isSameDomain = false;

    ZFAdvLead.prototype.zfautm_sC = function( paramName,path,domain,secure ){
      var value = ZFAdvLead.utmPValObj[paramName];
      if ( typeof value !== "undefined" && value !== null ){
        var cookieStr = paramName + "=" + encodeURIComponent( value );
        var exdate=new Date();
        exdate.setDate(exdate.getDate()+7);
        cookieStr += "; expires=" + exdate.toGMTString();
        cookieStr += "; path=/";
        if ( domain ) {
          cookieStr += "; domain=" + encodeURIComponent( domain );
        }
        if ( secure ) {
          cookieStr += "; secure";
        }
        document.cookie = cookieStr;
      }
    };
    ZFAdvLead.prototype.zfautm_ini = function (){
      this.zfautm_bscPCap();
      var url_search = document.location.search;
      for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length ; i ++){
        var zf_pN = ZFAdvLead.utmcustPNameArr[i];
        var zf_pV;
        if ( zf_pN == 'referrername' ) {
          zf_pV = ( document.URL || '' ).slice( 0, 1500 );
        } else {
          zf_pV = this.zfautm_gP(url_search, zf_pN);
          if (zf_pV == undefined || zf_pV == ''){
              zf_pV = this.zfautm_gC(zf_pN);
          }
        }
        if ( typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "" ) {
          ZFAdvLead.utmPValObj[ zf_pN ] = zf_pV;
        }
      }
      for (var pkey in ZFAdvLead.utmPValObj) {
        this.zfautm_sC(pkey);
      }
    };
    ZFAdvLead.prototype.zfautm_bscPCap = function () {
      var trafSrc = this.zfautm_calcTrafSrc();
      if ( trafSrc.source != "" ) {
        ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
      }
      if ( trafSrc.medium != "" ) {
        ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
      }
      if ( trafSrc.campaign != "" ) {
        ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
      }
      if ( trafSrc.term != "" ) {
        ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
      }
      if ( trafSrc.content != "" ) {
        ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
      }
    }
    ZFAdvLead.prototype.zfautm_calcTrafSrc = function() {
      var u1='', u2='', u3='', u4='', u5='';
      var search_engines = [['bing', 'q'], ['google', 'q'], ['yahoo', 'q'], ['baidu', 'q'], ['yandex', 'q'], ['ask', 'q']]; //List of search engines 
      var ref = document.referrer;
      ref = ref.substr(ref.indexOf('//')+2);
      ref_domain = ref;
      ref_path = '/';
      ref_search = '';

      // Checks for campaign parameters
      var url_search = document.location.search;
      if(url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search.indexOf('utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf('utm_content') > -1) {
        u1 = this.zfautm_gP(url_search, 'utm_source'); 
        u2 = this.zfautm_gP(url_search, 'utm_medium'); 
        u3 = this.zfautm_gP(url_search, 'utm_campaign'); 
        u4 = this.zfautm_gP(url_search, 'utm_term'); 
        u5 = this.zfautm_gP(url_search, 'utm_content'); 
      } else if ( this.zfautm_gP(url_search, 'gclid')) {
        u1 = 'Google Ads'; 
        u2 = 'cpc'; 
        u3 = '(not set)'; 
        if ( !ZFAdvLead.utmcustPNameArr.includes('gclid') ) {
          ZFAdvLead.utmcustPNameArr.push('gclid');
        }
      } else if(ref) {
        var r_u1 = this.zfautm_gC('utm_source'); 
        var r_u2 = this.zfautm_gC('utm_medium'); 
        var r_u3 = this.zfautm_gC('utm_campaign'); 
        var r_u4 = this.zfautm_gC('utm_term'); 
        var r_u5 = this.zfautm_gC('utm_content'); 
        if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
          // separate domain, path and query parameters
          if (ref.indexOf('/') > -1) {
            ref_domain = ref.substr(0,ref.indexOf('/'));
            ref_path = ref.substr(ref.indexOf('/'));
            if (ref_path.indexOf('?') > -1) {
              ref_search = ref_path.substr(ref_path.indexOf('?'));
              ref_path = ref_path.substr(0, ref_path.indexOf('?'));
            }
          }
          u2 = 'referral'; 
          u1 = ref_domain;                    
        // Extract term for organic source
          for (var i=0; i<search_engines.length; i++){
            if(ref_domain.indexOf(search_engines[i][0]) > -1){
              u2 = 'organic'; 
              u1 = search_engines[i][0];
              u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
              break;
            }
          }
        } else {
          if ( typeof r_u1 !== "undefined" ) {
            u1 = r_u1;
          }
          if ( typeof r_u2 !== "undefined" ) {
              u2 = r_u2;
          }
          if ( typeof r_u3 !== "undefined" ) {
            u3 = r_u3;
          }
          if ( typeof r_u4 !== "undefined" ) {
            u4 = r_u4;
          }
          if ( typeof r_u5 !== "undefined" ) {
            u5 = r_u5;
          }
        }
      } else {
        var r_u1 = this.zfautm_gC('utm_source'); 
        var r_u2 = this.zfautm_gC('utm_medium'); 
        var r_u3 = this.zfautm_gC('utm_campaign'); 
        var r_u4 = this.zfautm_gC('utm_term'); 
        var r_u5 = this.zfautm_gC('utm_content'); 
        if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
          var locRef = document.URL;
          locRef = locRef.substr(locRef.indexOf('//')+2);
          if (locRef.indexOf('/') > -1) {
            locRef = locRef.substr(0,locRef.indexOf('/'));
          }
          u1 = locRef;
          u2 = 'referral'; 
        } else {
          if ( typeof r_u1 !== "undefined" ) {
            u1 = r_u1;
          }
          if ( typeof r_u2 !== "undefined" ) {
            u2 = r_u2;
          }
          if ( typeof r_u3 !== "undefined" ) {
            u3 = r_u3;
          }
          if ( typeof r_u4 !== "undefined" ) {
            u4 = r_u4;
          }
          if ( typeof r_u5 !== "undefined" ) {
            u5 = r_u5;
          }
        }
      }
      return {
        'source'  : u1, 
        'medium'  : u2, 
        'campaign': u3, 
        'term'    : u4, 
        'content' : u5 
      };
    }
    ZFAdvLead.prototype.zfautm_gP = function(s, q) {
      try{
          var match = s.match('[?&]' + q + '=([^&]+)');
          if ( match ) {
            if ( match[1].length > 199 ) {
              var raw = decodeURIComponent(match[1]);
              raw = raw.replace(/[^A-Za-z0-9_]/g, '');
              return raw.slice( 0, 199 );
            } else {
              return decodeURIComponent(match[1]);
            }
            
          } else {
            return '';
          }
      } catch(e){
        return '';  
      }
    }
    ZFAdvLead.prototype.zfautm_gC = function( cookieName ){
      var cookieArr = document.cookie.split('; ');
      for ( var i = 0 ; i < cookieArr.length ; i ++ ){
        var cookieVals = cookieArr[i].split('=');
          if ( cookieVals[0] === cookieName && cookieVals[1] ) {
            return decodeURIComponent(cookieVals[1]);
          }
      }
    };
    ZFAdvLead.prototype.zfautm_gC_enc = function( cookieName ){
      var cookieArr = document.cookie.split('; ');
      for ( var i = 0 ; i < cookieArr.length ; i ++ ){
        var cookieVals = cookieArr[i].split('=');
          if ( cookieVals[0] === cookieName && cookieVals[1] ) {
            return cookieVals[1];
          }
      }
    };
    ZFAdvLead.prototype.zfautm_iframeSprt = function () {
      var zf_frame = document.getElementsByTagName("iframe");
      for(var i = 0; i < zf_frame.length; ++i){
        if((zf_frame[i].src).indexOf('formperma') > 0 ){
          var zf_src = zf_frame[i].src;
          for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
            var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
            utmPm = ( ZFAdvLead.isSameDomain && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
            var utmPmregex = new RegExp("[?&]" + utmPm + "=");
            if ( ! utmPmregex.test(zf_src) ) {
              var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
              if ( typeof utmVal !== "undefined" ) {
                if ( utmVal != "" ){
                  if(zf_src.indexOf('?') > 0){
                    zf_src = zf_src+'&'+utmPm+'='+ utmVal;
                  }else{
                    zf_src = zf_src+'?'+utmPm+'='+ utmVal;
                  }
                }
              }
            }
          }
          if ( zf_frame[i].src.length < zf_src.length ) {
            zf_frame[i].src = zf_src;
          }
        }
      }
    };
    ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
      var zf_formsArr = document.forms;
      for ( var frmInd = 0 ; frmInd < zf_formsArr.length ; frmInd ++ ) {
        var zf_form_act = zf_formsArr[frmInd].action;
          if ( zf_form_act && zf_form_act.indexOf('formperma') > 0 ){
            for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
              var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
              var utmVal = this.zfautm_gC( ZFAdvLead.utmPNameArr[ prmIdx ] );
              if ( typeof utmVal !== "undefined" ) {
                if ( utmVal != "" ) {
                  var fieldObj = zf_formsArr[frmInd][utmPm];
                if ( fieldObj ) {
                  fieldObj.value = utmVal;
                }
              }
            }
          }
        }
      }
    };
    ZFAdvLead.prototype.zfautm_jsEmbedSprt = function ( id ) {
      document.getElementById('zforms_iframe_id').removeAttribute("onload");
      var jsEmbdFrm = document.getElementById("zforms_iframe_id");
      var embdSrc = jsEmbdFrm.src;
      for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
        var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
        utmPm = ( ZFAdvLead.isSameDomain && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
        var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
        if ( typeof utmVal !== "undefined" ) {
          if ( utmVal != "" ) {
            if(embdSrc.indexOf('?') > 0){
                        embdSrc = embdSrc+'&'+utmPm+'='+utmVal;
            }else{
                embdSrc = embdSrc+'?'+utmPm+'='+utmVal;
            }
          }
        }
      }
      jsEmbdFrm.src = embdSrc;
    };
    var zfutm_zfAdvLead = new ZFAdvLead();
    zfutm_zfAdvLead.zfautm_ini();
    if( document.readyState == "complete" ){
        zfutm_zfAdvLead.zfautm_iframeSprt();
        zfutm_zfAdvLead.zfautm_DHtmlSprt();
    } else {
      window.addEventListener('load', function (){
            zfutm_zfAdvLead.zfautm_iframeSprt();
            zfutm_zfAdvLead.zfautm_DHtmlSprt();
      }, false);
    }
    </script>
    
</body>
</html>