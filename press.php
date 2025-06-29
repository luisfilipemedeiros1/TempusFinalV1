<?php
/**
 * Template Name: Press Page
 * Description: Modern press and media page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="press-page-wrapper">
    <main id="press-content" class="press-main-content">
        
        <!-- Hero Section -->
        <section class="press-hero">
            <div class="press-hero-content">
                <h1>Press & Media</h1>
                <p class="subtitle">Latest news, features, and media coverage</p>
            </div>
        </section>

        <!-- Press Articles Section -->
        <section class="press-section">
            <div class="press-container">
                <?php 
                $args = array(
                    'post_type' => 'post-press',
                    'orderby' => 'date',
                    'posts_per_page' => 50
                );
                $press_query = new WP_Query($args);
                
                if ($press_query->have_posts()) : ?>
                    <div class="press-grid">
                        <?php while ($press_query->have_posts()) : $press_query->the_post(); ?>
                            <article class="press-card">
                                <div class="press-card-inner">
                                    <?php if(has_post_thumbnail()): ?>
                                    <div class="press-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <div class="press-content">
                                        <div class="press-meta">
                                            <span class="press-date"><?php the_field('post_date'); ?></span>
                                            <?php if(get_field('name_of_press')): ?>
                                            <span class="press-source"><?php the_field('name_of_press'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <h2 class="press-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        
                                        <div class="press-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        
                                        <?php if(have_rows('press_details')): ?>
                                            <?php while(have_rows('press_details')): the_row(); ?>
                                                <div class="press-detail-preview">
                                                    <h3><?php the_sub_field('press_detail_heading'); ?></h3>
                                                    <p><?php the_sub_field('details_content'); ?></p>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        
                                        <a href="<?php the_permalink(); ?>" class="press-link">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="no-press">
                        <p>No press articles found.</p>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </section>

    </main>
</div>

<?php
// Use the theme's modern footer
get_footer();
?>