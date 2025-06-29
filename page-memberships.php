<?php
/**
 * Template Name: Memberships Page
 * Description: Custom memberships page template with hero, packages, benefits and FAQ sections
 *
 * @package tempusbelgravia
 */

// Use the theme's header (includes <head>, <body>, theme header/nav)
get_header();
?>

<div class="new-home-content membership-page-content">
    
    <!-- Hero Banner Section -->
    <?php if( have_rows('membership_hero') ): ?>
        <?php while( have_rows('membership_hero') ): the_row(); ?>
        <section class="hero membership-hero" style="background-image: url('<?php echo esc_url(get_sub_field('hero_background_image')); ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content fade-in-up">
                    <h1><?php echo get_sub_field('hero_heading'); ?></h1>
                    <p class="subtitle"><?php echo get_sub_field('hero_subheading'); ?></p>
                    <?php if( get_sub_field('hero_button_text') ): ?>
                    <div>
                        <a href="#membership-packages" class="cta-button">
                            <?php echo get_sub_field('hero_button_text'); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- Membership Packages Section -->
    <section class="membership-packages-section" id="membership-packages">
        <div class="container">
            <div class="section-title text-center fade-in-up">
                <h2><?php echo get_field('membership_packages_heading'); ?></h2>
                <p class="subtitle"><?php echo get_field('membership_packages_description'); ?></p>
            </div>
            
            <div class="membership-grid fade-in-stagger">
                <?php if( have_rows('membership_plans') ): ?>
                    <?php while( have_rows('membership_plans') ): the_row(); ?>
                    <div class="membership-card">
                        <div class="membership-card-header">
                            <h3><?php echo get_sub_field('plan_name'); ?></h3>
                            <p class="plan-type"><?php echo get_sub_field('plan_type'); ?></p>
                        </div>
                        <div class="membership-card-price">
                            <span class="currency">£</span>
                            <span class="amount"><?php echo get_sub_field('plan_price'); ?></span>
                            <span class="period"><?php echo get_sub_field('price_period'); ?></span>
                        </div>
                        <div class="membership-card-features">
                            <?php echo get_sub_field('plan_features'); ?>
                        </div>
                        <div class="membership-card-action">
                            <a href="<?php echo esc_url(get_sub_field('plan_link')); ?>" class="cta-button">
                                Join Now
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <?php if( have_rows('membership_benefits') ): ?>
    <section class="benefits-section angled-section">
        <div class="angled-transition"></div>
        <div class="container">
            <div class="section-title text-center fade-in-up">
                <h2><?php echo get_field('benefits_heading'); ?></h2>
                <p class="subtitle"><?php echo get_field('benefits_subheading'); ?></p>
            </div>
            
            <div class="benefits-grid fade-in-stagger">
                <?php while( have_rows('membership_benefits') ): the_row(); ?>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <?php if( get_sub_field('benefit_icon') ): ?>
                            <img src="<?php echo esc_url(get_sub_field('benefit_icon')); ?>" alt="<?php echo esc_attr(get_sub_field('benefit_title')); ?>">
                        <?php else: ?>
                            <i class="fas fa-check-circle"></i>
                        <?php endif; ?>
                    </div>
                    <h3><?php echo get_sub_field('benefit_title'); ?></h3>
                    <p><?php echo get_sub_field('benefit_description'); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- FAQ Section -->
    <?php if( have_rows('membership_faqs') ): ?>
    <section class="faq-section">
        <div class="container">
            <div class="section-title text-center fade-in-up">
                <h2><?php echo get_field('faq_heading'); ?></h2>
                <p class="subtitle"><?php echo get_field('faq_subheading'); ?></p>
            </div>
            
            <div class="faq-accordion fade-in-up">
                <?php $faq_index = 0; ?>
                <?php while( have_rows('membership_faqs') ): the_row(); $faq_index++; ?>
                <div class="faq-item" data-faq-index="<?php echo $faq_index; ?>">
                    <div class="faq-question">
                        <h4><?php echo get_sub_field('question'); ?></h4>
                        <i class="fas fa-plus faq-toggle"></i>
                    </div>
                    <div class="faq-answer">
                        <p><?php echo get_sub_field('answer'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <?php if( get_field('membership_cta_heading') ): ?>
    <section class="cta-section angled-section">
        <div class="angled-transition"></div>
        <div class="container">
            <div class="cta-content text-center fade-in-up">
                <h2><?php echo get_field('membership_cta_heading'); ?></h2>
                <p><?php echo get_field('membership_cta_text'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(get_field('membership_cta_link')); ?>" class="cta-button">
                        <?php echo get_field('membership_cta_button_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

</div><!-- .membership-page-content -->

<?php
// Use the theme's footer
get_footer();
?>