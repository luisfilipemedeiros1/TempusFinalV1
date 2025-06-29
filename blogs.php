<?php
/**
 * Template Name: Blog Page
 * Description: Modern blog/journal page with elegant design sdfksdfslk
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="blog-page-wrapper">
    <main id="blog-content" class="blog-main-content">
        
        <!-- Hero Section -->
        <section class="blog-hero">
            <div class="blog-hero-content">
                <h1>Journal</h1>
                <p class="subtitle">Insights, updates, and stories from Tempus Belgravia</p>
            </div>
        </section>

        <?php 
        // Get featured post (latest sticky post or latest post)
        $featured_args = array(
            'posts_per_page' => 1,
            'post__in' => get_option('sticky_posts'),
            'ignore_sticky_posts' => 1
        );
        $featured_query = new WP_Query($featured_args);
        
        // If no sticky posts, get the latest post
        if (!$featured_query->have_posts()) {
            $featured_args = array(
                'posts_per_page' => 1
            );
            $featured_query = new WP_Query($featured_args);
        }
        
        if ($featured_query->have_posts()) : ?>
        <!-- Featured Post Section -->
        <section class="featured-post-section">
            <div class="featured-post">
                <?php while ($featured_query->have_posts()) : $featured_query->the_post(); 
                    $featured_id = get_the_ID();
                ?>
                <article class="featured-post-card">
                    <div class="featured-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-blog.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <span class="featured-label">Featured</span>
                    </div>
                    <div class="featured-content">
                        <div class="featured-meta">
                            <span class="featured-date"><?php echo get_the_date('F j, Y'); ?></span>
                            <?php $categories = get_the_category(); ?>
                            <?php if (!empty($categories)) : ?>
                                <span class="featured-category"><?php echo esc_html($categories[0]->name); ?></span>
                            <?php endif; ?>
                        </div>
                        <h2 class="featured-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="featured-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 40); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="featured-link">
                            Read Full Article <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
        </section>
        <?php endif; 
        wp_reset_postdata(); ?>

        <!-- Blog Posts Section -->
        <section class="blog-posts-section">
            <div class="blog-container">
                <div class="section-header">
                    <h2>Latest Articles</h2>
                    <p>Discover our recent posts and updates</p>
                </div>

                <!-- Categories Filter -->
                <div class="blog-categories">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="category-filter active">All</a>
                    <?php 
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => true
                    ));
                    foreach ($categories as $category) : ?>
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="category-filter">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $blog_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'post__not_in' => isset($featured_id) ? array($featured_id) : array()
                );
                $blog_query = new WP_Query($blog_args);
                
                if ($blog_query->have_posts()) : ?>
                <div class="blog-grid">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <article class="blog-card fade-in-up">
                        <div class="blog-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-blog.jpg" alt="<?php the_title(); ?>">
                                </a>
                            <?php endif; ?>
                            <div class="blog-date-overlay">
                                <span class="date-day"><?php echo get_the_date('d'); ?></span>
                                <span class="date-month"><?php echo get_the_date('M'); ?></span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="blog-author">
                                    <i class="fas fa-user"></i>
                                    <?php the_author(); ?>
                                </span>
                                <?php $categories = get_the_category(); ?>
                                <?php if (!empty($categories)) : ?>
                                    <span class="blog-category"><?php echo esc_html($categories[0]->name); ?></span>
                                <?php endif; ?>
                            </div>
                            <h3 class="blog-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="blog-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>
                            <div class="blog-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                                <span class="blog-comments">
                                    <i class="fas fa-comments"></i>
                                    <?php comments_number('0', '1', '%'); ?>
                                </span>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <?php if ($blog_query->max_num_pages > 1) : ?>
                <div class="blog-pagination">
                    <?php
                    $big = 999999999;
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $blog_query->max_num_pages,
                        'prev_text' => '<i class="fas fa-chevron-left pagination-arrow"></i>',
                        'next_text' => '<i class="fas fa-chevron-right pagination-arrow"></i>',
                        'before_page_number' => '<span class="pagination-item">',
                        'after_page_number' => '</span>'
                    ));
                    ?>
                </div>
                <?php endif; ?>

                <?php else : ?>
                <div class="no-posts">
                    <h2>No posts found</h2>
                    <p>Check back soon for new articles and updates.</p>
                </div>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <div class="newsletter-content">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter for the latest news and exclusive offers</p>
                <form class="newsletter-form" action="#" method="post">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-button">Subscribe</button>
                </form>
            </div>
        </section>

    </main>
</div>

<script>
// Intersection Observer for animations
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.fade-in-up');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    animatedElements.forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
});
</script>

<?php
// Use the theme's modern footer
get_footer();
