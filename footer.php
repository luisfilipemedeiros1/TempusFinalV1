
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
                            <li><a href="<?php echo home_url('/memberships/'); ?>">Memberships</a></li>
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
                            <li><a href="<?php echo home_url('/shop/'); ?>">Shop</a></li>
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
                    <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2024/07/1-CQC-Regulated-by-WHITE-135px.jpg.webp" alt="CQC Regulated" />
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
        max-width: 150px;
        height: auto;
    }
    </style>

    <?php wp_footer(); ?>
</body>
</html>