<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="padding-top: 0 !important;">
    <?php wp_body_open(); ?>
    
    <!-- Remove body padding immediately -->
    <style>
        body { padding-top: 0 !important; }
        body[style*="padding-top"] { padding-top: 0 !important; }
    </style>
    <script>
        // Remove padding immediately
        document.body.style.paddingTop = '0';
        document.body.style.setProperty('padding-top', '0', 'important');
        // Remove any style attribute that contains padding-top
        var bodyStyle = document.body.getAttribute('style');
        if (bodyStyle && bodyStyle.includes('padding-top')) {
            document.body.setAttribute('style', bodyStyle.replace(/padding-top:\s*[^;]+;?/gi, '') + '; padding-top: 0 !important;');
        }
    </script>
    
    <!-- Elegant Header -->
    <header class="tempus-header">
        <!-- Top Bar -->
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-content">
                    <div class="contact-info">
                        <a href="tel:+442080373265" class="contact-item">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                            <span>+44 20 8037 3265</span>
                        </a>
                        <a href="mailto:info@tempusbelgravia.co.uk" class="contact-item">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span>info@tempusbelgravia.co.uk</span>
                        </a>
                    </div>
                    <div class="quick-actions">
                        <a href="<?php echo home_url('/memberships/'); ?>" class="quick-link">Memberships</a>
                        <span class="separator">|</span>
                        <a href="https://tempusbelgravia.co.uk/journal-2/" class="quick-link">Journal</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Header -->
        <div class="header-main">
            <div class="container">
                <div class="header-content">
                    <!-- Logo -->
                    <div class="site-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/v1744361845/Group_30_xsuean.svg" 
                                 alt="<?php bloginfo('name'); ?>" 
                                 class="site-logo-img" />
                        </a>
                    </div>
                    
                    <!-- Main Navigation -->
                    <nav class="main-navigation" role="navigation" aria-label="Main Navigation">
                        <ul class="nav-menu">
                            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                                                                                    <li><a href="<?php echo home_url('/memberships/'); ?>">Memberships</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo home_url('/treatments-overview/'); ?>">Treatments</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo home_url('/treatments-overview/#facial-aesthetics'); ?>">Facial Aesthetics</a></li>
                                    <li><a href="<?php echo home_url('/treatments-overview/#wrinkle-treatments'); ?>">Wrinkle Treatments</a></li>
                                    <li><a href="<?php echo home_url('/treatments-overview/#medical-aesthetics'); ?>">Medical Aesthetics</a></li>
                                    <li><a href="<?php echo home_url('/treatments-overview/#body-treatments'); ?>">Body Treatments</a></li>
                                    <li><a href="<?php echo home_url('/treatments-overview/#advanced-treatments'); ?>">Advanced Treatments</a></li>
                                    <li><a href="<?php echo home_url('/treatments-overview/#iv-infusions'); ?>">IV Infusions</a></li>
                                </ul>
                            </li>
                            
                                                        <li>
                                <a href="https://tempusbelgravia.co.uk/tempus-team/">Team</a>
                            </li>
                            

                            
                            <li><a href="<?php echo home_url('/conditions-treated-2/'); ?>">Conditions</a></li>
                            <li><a href="https://tempusbelgravia.co.uk/#contact">Contact</a></li>
                        </ul>
                    </nav>
                    
                    <!-- CTA Button -->
                    <div class="header-cta">
                        <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20please." 
                           class="book-consultation-btn" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            <i class="fas fa-calendar-check" aria-hidden="true"></i>
                            <span>Book Now</span>
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Toggle -->
                    <button class="mobile-menu-toggle" 
                            id="mobile-menu-toggle" 
                            aria-expanded="false" 
                            aria-controls="mobile-menu"
                            aria-label="Toggle menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <div class="site-wrapper">
        <main class="site-main" role="main">