<?php
/**
 * Single Post Template
 * Modern single blog post display with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="single-post-wrapper">
    <main id="single-post-content" class="single-post-main">
        
        <?php while (have_posts()) : the_post(); ?>
        
        <!-- Hero Section -->
        <section class="single-post-hero">
            <div class="single-post-hero-content">
                <div class="single-post-meta">
                    <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                    <?php $categories = get_the_category(); ?>
                    <?php if (!empty($categories)) : ?>
                        <span class="post-category"><?php echo esc_html($categories[0]->name); ?></span>
                    <?php endif; ?>
                </div>
                <h1 class="single-post-title"><?php the_title(); ?></h1>
                <div class="post-author-info">
                    <span class="author-by">By</span>
                    <span class="author-name"><?php the_author(); ?></span>
                    <span class="read-time">• <?php echo reading_time(); ?> min read</span>
                </div>
            </div>
        </section>

        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
        <section class="single-post-featured-image">
            <div class="featured-image-container">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- Post Content -->
        <article class="single-post-content">
            <div class="post-content-container">
                <div class="post-content-text">
                    <?php the_content(); ?>
                </div>
                
                <!-- Post Tags -->
                <?php $tags = get_the_tags(); ?>
                <?php if ($tags) : ?>
                <div class="post-tags">
                    <h3>Tags:</h3>
                    <div class="tags-list">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-link">
                                #<?php echo esc_html($tag->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Share Section -->
                <div class="post-share">
                    <h3>Share this article</h3>
                    <div class="share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-button facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-button twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-button linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode('Check out this article: ' . get_permalink()); ?>" class="share-button email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Author Bio -->
            <div class="author-bio">
                <div class="author-avatar">
                    <?php echo get_avatar(get_the_author_meta('ID'), 120); ?>
                </div>
                <div class="author-details">
                    <h3>About <?php the_author(); ?></h3>
                    <p><?php the_author_meta('description'); ?></p>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-link">
                        View all posts by <?php the_author(); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </article>

        <!-- Related Posts -->
        <?php
        $related_args = array(
            'category__in' => wp_get_post_categories($post->ID),
            'post__not_in' => array($post->ID),
            'posts_per_page' => 3,
            'orderby' => 'rand'
        );
        $related_posts = new WP_Query($related_args);
        
        if ($related_posts->have_posts()) : ?>
        <section class="related-posts">
            <div class="related-posts-container">
                <h2>Related Articles</h2>
                <div class="related-posts-grid">
                    <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                    <article class="related-post-card">
                        <div class="related-post-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-blog.jpg" alt="<?php the_title(); ?>">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="related-post-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <span class="related-post-date"><?php echo get_the_date('F j, Y'); ?></span>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif;
        wp_reset_postdata(); ?>

        <!-- Comments Section -->
        <?php if (comments_open() || get_comments_number()) : ?>
        <section class="comments-section">
            <div class="comments-container">
                <?php comments_template(); ?>
            </div>
        </section>
        <?php endif; ?>
        
        <?php endwhile; ?>
        
    </main>
</div>

<?php
// Add reading time function if it doesn't exist
if (!function_exists('reading_time')) {
    function reading_time() {
        $content = get_post_field('post_content', get_the_ID());
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200); // Average reading speed
        return $reading_time;
    }
}
?>

<style>
/* Single Post Specific Styles */
.single-post-wrapper {
    background-color: var(--white);
    min-height: 100vh;
}

.single-post-hero {
    padding: 160px 0 60px;
    background: linear-gradient(135deg, var(--primary-ultralight) 0%, var(--white) 100%);
    text-align: center;
}

.single-post-hero-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.single-post-meta {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.post-date {
    color: var(--gray);
    font-family: var(--heading-font);
}

.post-category {
    color: var(--primary);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.single-post-title {
    font-size: 3rem;
    color: var(--dark-text);
    margin-bottom: 20px;
    font-family: var(--heading-font);
    font-weight: 500;
    line-height: 1.2;
}

.post-author-info {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    color: var(--gray);
    font-size: 1rem;
}

.author-name {
    color: var(--dark-text);
    font-weight: 600;
}

.single-post-featured-image {
    max-width: 1200px;
    margin: 0 auto -80px;
    padding: 0 20px;
    position: relative;
    z-index: 10;
}

.featured-image-container {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
}

.featured-image-container img {
    width: 100%;
    height: auto;
    display: block;
}

.single-post-content {
    padding: 120px 0 80px;
    background: var(--white);
}

.post-content-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.post-content-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--text-color);
}

.post-content-text p {
    margin-bottom: 1.5em;
}

.post-content-text h2,
.post-content-text h3,
.post-content-text h4 {
    margin-top: 2em;
    margin-bottom: 1em;
    color: var(--dark-text);
    font-family: var(--heading-font);
}

.post-content-text blockquote {
    border-left: 4px solid var(--primary);
    padding-left: 30px;
    margin: 2em 0;
    font-style: italic;
    color: var(--gray);
}

.post-tags {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid var(--light-gray);
}

.post-tags h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: var(--dark-text);
}

.tags-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.tag-link {
    padding: 8px 20px;
    background: var(--primary-ultralight);
    color: var(--primary);
    text-decoration: none;
    border-radius: 25px;
    font-size: 0.9rem;
    transition: all var(--transition-fast);
}

.tag-link:hover {
    background: var(--primary);
    color: var(--white);
}

.post-share {
    margin-top: 50px;
    text-align: center;
}

.post-share h3 {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: var(--dark-text);
}

.share-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.share-button {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--white);
    text-decoration: none;
    transition: all var(--transition-fast);
}

.share-button.facebook {
    background: #1877f2;
}

.share-button.twitter {
    background: #1da1f2;
}

.share-button.linkedin {
    background: #0077b5;
}

.share-button.email {
    background: var(--primary);
}

.share-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.author-bio {
    display: flex;
    gap: 30px;
    margin-top: 60px;
    padding: 40px;
    background: var(--primary-ultralight);
    border-radius: 15px;
}

.author-avatar img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
}

.author-details h3 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    color: var(--dark-text);
}

.author-details p {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 15px;
}

.author-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: gap var(--transition-fast);
}

.author-link:hover {
    gap: 12px;
}

.related-posts {
    padding: 80px 0;
    background: var(--light);
}

.related-posts-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.related-posts h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 50px;
    color: var(--dark-text);
    font-family: var(--heading-font);
}

.related-posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.related-post-card {
    background: var(--white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all var(--transition-medium);
}

.related-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(175, 143, 90, 0.15);
}

.related-post-image {
    height: 200px;
    overflow: hidden;
}

.related-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.related-post-card:hover .related-post-image img {
    transform: scale(1.05);
}

.related-post-content {
    padding: 25px;
}

.related-post-content h3 {
    margin-bottom: 10px;
    font-size: 1.3rem;
}

.related-post-content h3 a {
    color: var(--dark-text);
    text-decoration: none;
    transition: color var(--transition-fast);
}

.related-post-content h3 a:hover {
    color: var(--primary);
}

.related-post-content p {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 10px;
}

.related-post-date {
    font-size: 0.9rem;
    color: var(--primary);
    font-weight: 500;
}

.comments-section {
    padding: 80px 0;
    background: var(--white);
}

.comments-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .single-post-title {
        font-size: 2rem;
    }
    
    .single-post-hero {
        padding: 140px 0 40px;
    }
    
    .single-post-content {
        padding: 80px 0 60px;
    }
    
    .author-bio {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .related-posts-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>