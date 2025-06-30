<?php
/**
 * Template Name: Thank You Page
 * Description: Simple thank you page after form submission with contact info and blog preview
 *
 * @package tempusbelgravia
 */

get_header();
?>

<main class="thank-you-page">
    <!-- Thank You Section -->
    <section class="thank-you-hero">
        <div class="container">
            <div class="thank-you-content">
                <div class="success-icon">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" fill="var(--primary)" opacity="0.1"/>
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary)"/>
                    </svg>
                </div>
                <h1>Thank You!</h1>
                <p class="thank-you-message">
                    Your message has been received successfully. Our team will review your inquiry and respond within 24 hours.
                </p>
                <div class="confirmation-details">
                    <span class="confirmation-time">Received: <?php echo date('d F Y, H:i'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-quick-info">
        <div class="container">
            <h2>Get in Touch</h2>
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Call Us</h3>
                        <a href="tel:+442080373265">+44 (0)20 8037 3265</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="contact-details">
                        <h3>WhatsApp</h3>
                        <a href="https://wa.me/447538037973" target="_blank" rel="noopener noreferrer">+44 (0)7538 037973</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <a href="mailto:info@tempusbelgravia.co.uk">info@tempusbelgravia.co.uk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Preview -->
    <section class="blog-preview">
        <div class="container">
            <div class="blog-preview-header">
                <h2>Latest Insights</h2>
                <p>Discover expert advice on aesthetic treatments and wellness</p>
                <a href="<?php echo home_url('/journal-2/'); ?>" class="view-all-link">View All Articles →</a>
            </div>
            
            <div class="blog-preview-grid">
                <?php
                // Get latest 3 blog posts
                $latest_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post();
                ?>
                <article class="blog-preview-card">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-preview-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    
                    <div class="blog-preview-content">
                        <div class="blog-meta">
                            <span class="blog-date"><?php echo get_the_date('M j, Y'); ?></span>
                            <span class="blog-category">
                                <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?>
                            </span>
                        </div>
                        <h3 class="blog-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="blog-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </div>
                </article>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else : 
                ?>
                <div class="no-posts-message">
                    <p>Stay tuned for our latest insights and expert advice.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Next Steps -->
    <section class="next-steps">
        <div class="container">
            <div class="next-steps-content">
                <h2>What's Next?</h2>
                <div class="steps-grid">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Review</h3>
                            <p>Our team reviews your inquiry and consultation requirements</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Contact</h3>
                            <p>We'll contact you within 24 hours to schedule your consultation</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Consultation</h3>
                            <p>Meet with our experts to discuss your personalized treatment plan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Thank You Page Styles */
.thank-you-page {
    padding-top: 0;
}

/* Hero Section */
.thank-you-hero {
    background: linear-gradient(135deg, var(--light) 0%, var(--white) 100%);
    padding: 120px 0 80px;
    text-align: center;
}

.thank-you-content {
    max-width: 600px;
    margin: 0 auto;
}

.success-icon {
    margin-bottom: 30px;
    animation: bounceIn 0.8s ease-out;
}

.thank-you-hero h1 {
    font-size: 3.5rem;
    font-family: var(--display-font);
    color: var(--primary);
    margin-bottom: 20px;
    font-weight: 400;
}

.thank-you-message {
    font-size: 1.2rem;
    line-height: 1.6;
    color: var(--gray);
    margin-bottom: 30px;
}

.confirmation-details {
    display: inline-block;
    background: var(--white);
    padding: 15px 25px;
    border-radius: 8px;
    border: 1px solid var(--light-gray);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.confirmation-time {
    font-size: 0.9rem;
    color: var(--gray);
    font-weight: 500;
}

/* Contact Quick Info */
.contact-quick-info {
    padding: 80px 0;
    background: var(--white);
}

.contact-quick-info h2 {
    text-align: center;
    font-size: 2.5rem;
    font-family: var(--display-font);
    color: var(--dark-text);
    margin-bottom: 50px;
    font-weight: 400;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 30px;
    background: var(--light);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.contact-icon {
    width: 60px;
    height: 60px;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 1.5rem;
    flex-shrink: 0;
}

.contact-details h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--dark-text);
    margin-bottom: 5px;
    font-family: var(--heading-font);
}

.contact-details a {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.contact-details a:hover {
    color: var(--primary-dark);
}

/* Blog Preview */
.blog-preview {
    padding: 80px 0;
    background: var(--light);
}

.blog-preview-header {
    text-align: center;
    max-width: 600px;
    margin: 0 auto 60px;
}

.blog-preview-header h2 {
    font-size: 2.5rem;
    font-family: var(--display-font);
    color: var(--dark-text);
    margin-bottom: 15px;
    font-weight: 400;
}

.blog-preview-header p {
    font-size: 1.1rem;
    color: var(--gray);
    margin-bottom: 25px;
}

.view-all-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.view-all-link:hover {
    color: var(--primary-dark);
}

.blog-preview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.blog-preview-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.blog-preview-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.blog-preview-image {
    height: 200px;
    overflow: hidden;
}

.blog-preview-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.blog-preview-card:hover .blog-preview-image img {
    transform: scale(1.05);
}

.blog-preview-content {
    padding: 25px;
}

.blog-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    font-size: 0.85rem;
    color: var(--gray);
}

.blog-date {
    font-weight: 500;
}

.blog-category {
    color: var(--primary);
    font-weight: 600;
}

.blog-title {
    margin-bottom: 15px;
}

.blog-title a {
    color: var(--dark-text);
    text-decoration: none;
    font-size: 1.3rem;
    font-weight: 600;
    line-height: 1.4;
    font-family: var(--heading-font);
    transition: color 0.3s ease;
}

.blog-title a:hover {
    color: var(--primary);
}

.blog-excerpt {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 20px;
}

.read-more {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: var(--primary-dark);
}

.no-posts-message {
    grid-column: 1 / -1;
    text-align: center;
    padding: 40px;
    color: var(--gray);
    font-style: italic;
}

/* Next Steps */
.next-steps {
    padding: 80px 0;
    background: var(--white);
}

.next-steps-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.next-steps h2 {
    font-size: 2.5rem;
    font-family: var(--display-font);
    color: var(--dark-text);
    margin-bottom: 50px;
    font-weight: 400;
}

.steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
}

.step-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.step-number {
    width: 60px;
    height: 60px;
    background: var(--primary);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 20px;
    font-family: var(--heading-font);
}

.step-content h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--dark-text);
    margin-bottom: 10px;
    font-family: var(--heading-font);
}

.step-content p {
    color: var(--gray);
    line-height: 1.6;
}

/* Animations */
@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        opacity: 1;
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .thank-you-hero {
        padding: 80px 0 60px;
    }
    
    .thank-you-hero h1 {
        font-size: 2.5rem;
    }
    
    .thank-you-message {
        font-size: 1.1rem;
    }
    
    .contact-quick-info,
    .blog-preview,
    .next-steps {
        padding: 60px 0;
    }
    
    .contact-quick-info h2,
    .blog-preview-header h2,
    .next-steps h2 {
        font-size: 2rem;
    }
    
    .contact-item {
        padding: 25px;
        flex-direction: column;
        text-align: center;
    }
    
    .blog-preview-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .steps-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
}

@media (max-width: 480px) {
    .thank-you-hero h1 {
        font-size: 2rem;
    }
    
    .confirmation-details {
        padding: 10px 15px;
    }
    
    .confirmation-time {
        font-size: 0.8rem;
    }
    
    .contact-item {
        padding: 20px;
    }
    
    .blog-preview-content {
        padding: 20px;
    }
}
</style>

<?php get_footer(); ?>