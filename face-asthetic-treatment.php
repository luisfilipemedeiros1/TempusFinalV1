<?php
/**
 * Template Name: FACE AESTHETIC TREATMENTS Template
 * Description: Modern facial aesthetic treatments page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero">
            <div class="treatment-hero-content">
                <h1><?php the_field('heading-banner'); ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner'); ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#treatments" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Facial Aesthetic Treatments Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('facial-heading'); ?></h2>
                    <p>Experience the art of facial rejuvenation with our advanced aesthetic treatments</p>
                </div>

                <?php if( have_rows('body_contouring') ): ?>
                <div class="treatment-grid">
                    <?php while( have_rows('body_contouring') ): the_row(); ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

    </main>
</div>

<?php
// Use the theme's modern footer
get_footer();
?>