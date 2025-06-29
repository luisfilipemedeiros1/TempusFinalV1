<?php
/**
 * Template Name: Conditions Page
 * Description: Modern conditions listing page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero conditions-hero">
            <div class="treatment-hero-content">
                <h1><?php the_field('heading_banner') ?: 'Conditions We Treat'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'Comprehensive care for a wide range of aesthetic and medical conditions'; ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#conditions" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php else: ?>
                <a href="#conditions" class="cta-button">Explore Our Treatments</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>Expert Care for Every Concern</h2>
                    <p class="lead-text">At Tempus Belgravia, we understand that each condition requires specialized knowledge and personalized treatment. Our experienced medical team combines advanced techniques with compassionate care to address a comprehensive range of aesthetic and medical concerns, helping you achieve optimal health and confidence.</p>
                </div>
            </div>
        </section>

        <!-- Conditions Grid Section -->
        <section class="treatment-section alt-bg" id="conditions">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Comprehensive Condition Treatment</h2>
                    <p>Professional solutions tailored to your specific needs</p>
                </div>

                <?php 
                // Query conditions
                $conditions_query = new WP_Query(array(
                    'post_type' => 'condition',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'posts_per_page' => 50
                ));

                if( $conditions_query->have_posts() ): ?>
                <div class="treatment-grid">
                    <?php while( $conditions_query->have_posts() ): $conditions_query->the_post(); ?>
                    <article class="treatment-card condition-card">
                        <div class="treatment-image">
                            <?php if( get_field('_thumb_image') ): ?>
                                <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                            <?php elseif( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-condition.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <?php if( get_field('condition_category') ): ?>
                                <span class="condition-category"><?php echo get_field('condition_category'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_title(); ?></h3>
                            <?php if( get_field('description_for_treatment') ): ?>
                                <p class="treatment-description"><?php echo wp_trim_words(get_field('description_for_treatment'), 25); ?></p>
                            <?php else: ?>
                                <p class="treatment-description"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                            <?php endif; ?>
                            
                            <?php if( get_field('symptoms') ): ?>
                                <div class="condition-symptoms">
                                    <h4>Common Symptoms:</h4>
                                    <p><?php echo wp_trim_words(get_field('symptoms'), 15); ?></p>
                                </div>
                            <?php endif; ?>
                            
                            <div class="treatment-actions">
                                <a href="<?php the_permalink(); ?>" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode(get_the_title()); ?>%20treatment%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Consultation</a>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
                <?php else: ?>
                    <!-- Default Conditions if no posts exist -->
                    <div class="treatment-grid">
                        <?php 
                        $default_conditions = array(
                            array(
                                'name' => 'Acne & Acne Scarring',
                                'description' => 'Comprehensive treatment for active acne and the scarring it can leave behind, using advanced techniques for clearer skin.',
                                'symptoms' => 'Blackheads, whiteheads, cysts, post-inflammatory marks',
                                'category' => 'Skin Conditions',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/prx.png.webp'
                            ),
                            array(
                                'name' => 'Rosacea',
                                'description' => 'Professional management of this chronic skin condition with personalized treatment plans to reduce redness and inflammation.',
                                'symptoms' => 'Facial redness, visible blood vessels, burning sensation',
                                'category' => 'Vascular Conditions',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/ultrasonic-massager-light-skin-treatment-the-wom-2022-12-20-16-33-52-utc-scaled-1.jpeg.webp'
                            ),
                            array(
                                'name' => 'Melasma & Hyperpigmentation',
                                'description' => 'Targeted treatments for stubborn pigmentation issues including melasma, age spots, and post-inflammatory hyperpigmentation.',
                                'symptoms' => 'Dark patches, uneven skin tone, brown spots',
                                'category' => 'Pigmentation',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/10/Blue-Peel-Radiance-Treatment.png.webp'
                            ),
                            array(
                                'name' => 'Sun Damage & Photoaging',
                                'description' => 'Reverse the effects of sun exposure with advanced treatments targeting age spots, wrinkles, and texture changes.',
                                'symptoms' => 'Age spots, fine lines, rough texture, uneven tone',
                                'category' => 'Aging',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lumecca-IPL.jpeg.webp'
                            ),
                            array(
                                'name' => 'Eczema & Dermatitis',
                                'description' => 'Gentle, effective treatments for sensitive skin conditions with focus on barrier repair and inflammation reduction.',
                                'symptoms' => 'Dry skin, itching, redness, scaling',
                                'category' => 'Inflammatory',
                                'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg'
                            ),
                            array(
                                'name' => 'Hair Loss & Alopecia',
                                'description' => 'Comprehensive hair restoration treatments including PRP therapy, medications, and lifestyle modifications.',
                                'symptoms' => 'Thinning hair, bald patches, receding hairline',
                                'category' => 'Hair & Scalp',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/prp-hair-loos.jpeg.webp'
                            ),
                            array(
                                'name' => 'Stretch Marks',
                                'description' => 'Advanced treatments to improve the appearance of stretch marks using laser therapy and regenerative techniques.',
                                'symptoms' => 'Linear marks, skin texture changes, discoloration',
                                'category' => 'Skin Texture',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EMSculpting.jpeg.webp'
                            ),
                            array(
                                'name' => 'Varicose & Spider Veins',
                                'description' => 'Non-invasive treatments for visible veins using sclerotherapy and laser technology for smoother legs.',
                                'symptoms' => 'Visible veins, leg heaviness, swelling',
                                'category' => 'Vascular',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/07/shutterstock_2291188561.webp'
                            ),
                            array(
                                'name' => 'Psoriasis',
                                'description' => 'Comprehensive management of this autoimmune condition with advanced therapies and lifestyle support.',
                                'symptoms' => 'Scaly patches, itching, joint pain',
                                'category' => 'Autoimmune',
                                'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/cryopen.jpeg.webp'
                            )
                        );
                        
                        foreach($default_conditions as $condition): ?>
                        <article class="treatment-card condition-card">
                            <div class="treatment-image">
                                <img src="<?php echo $condition['image']; ?>" alt="<?php echo $condition['name']; ?>">
                                <span class="condition-category"><?php echo $condition['category']; ?></span>
                            </div>
                            <div class="treatment-content">
                                <h3 class="treatment-name"><?php echo $condition['name']; ?></h3>
                                <p class="treatment-description"><?php echo $condition['description']; ?></p>
                                <div class="condition-symptoms">
                                    <h4>Common Symptoms:</h4>
                                    <p><?php echo $condition['symptoms']; ?></p>
                                </div>
                                <div class="treatment-actions">
                                    <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode($condition['name']); ?>%20treatment%20please." 
                                       class="cta-button-secondary" 
                                       target="_blank" 
                                       rel="noopener noreferrer">Book Consultation</a>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; 
                wp_reset_postdata(); ?>
            </div>
        </section>

        <!-- Conditions by Category Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Conditions by Category</h2>
                    <p>Browse our expertise by condition type</p>
                </div>
                
                <div class="conditions-categories">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Skin Conditions</h3>
                        <p>Acne, eczema, dermatitis, and other common skin disorders</p>
                        <ul>
                            <li>Active acne treatment</li>
                            <li>Eczema management</li>
                            <li>Dermatitis care</li>
                            <li>Sensitive skin solutions</li>
                        </ul>
                    </div>
                    
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Pigmentation Issues</h3>
                        <p>Melasma, age spots, and uneven skin tone correction</p>
                        <ul>
                            <li>Melasma treatment</li>
                            <li>Age spot removal</li>
                            <li>Post-inflammatory hyperpigmentation</li>
                            <li>Sun damage reversal</li>
                        </ul>
                    </div>
                    
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Signs of Aging</h3>
                        <p>Wrinkles, fine lines, and age-related skin changes</p>
                        <ul>
                            <li>Fine line reduction</li>
                            <li>Wrinkle treatment</li>
                            <li>Skin texture improvement</li>
                            <li>Volume restoration</li>
                        </ul>
                    </div>
                    
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-heart-pulse"></i>
                        </div>
                        <h3>Vascular Conditions</h3>
                        <p>Rosacea, spider veins, and visible blood vessels</p>
                        <ul>
                            <li>Rosacea management</li>
                            <li>Spider vein treatment</li>
                            <li>Broken capillaries</li>
                            <li>Vascular lesions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Treatment Approach Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Our Treatment Approach</h2>
                    <p>Comprehensive care tailored to your unique needs</p>
                </div>
                
                <div class="approach-timeline">
                    <div class="approach-step">
                        <div class="step-number">1</div>
                        <h3>Comprehensive Assessment</h3>
                        <p>Detailed evaluation of your condition, medical history, and treatment goals.</p>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">2</div>
                        <h3>Personalized Treatment Plan</h3>
                        <p>Customized approach combining the most effective treatments for your specific condition.</p>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">3</div>
                        <h3>Professional Treatment</h3>
                        <p>Expert care using advanced techniques and state-of-the-art equipment.</p>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">4</div>
                        <h3>Ongoing Support</h3>
                        <p>Continuous monitoring and adjustment to ensure optimal results and long-term success.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Ready to Address Your Concerns?</h2>
                    <p>Book your consultation today and let our experts create a personalized treatment plan for your condition</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20condition%20treatment%20please." 
                       class="cta-button" 
                       target="_blank" 
                       rel="noopener noreferrer">
                        Book Your Consultation
                    </a>
                </div>
            </div>
        </section>

    </main>
</div>

<style>
/* Conditions Page Specific Styles */
.conditions-hero {
    background: linear-gradient(135deg, #E1D4C7 0%, #F7F3ED 100%);
}

/* Condition Card Enhancements */
.condition-card .treatment-image {
    position: relative;
}

.condition-category {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--primary);
    color: var(--white);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.condition-symptoms {
    background: var(--primary-ultralight);
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    border-left: 3px solid var(--primary);
}

.condition-symptoms h4 {
    font-family: var(--heading-font);
    font-size: 0.9rem;
    color: var(--primary);
    margin-bottom: 8px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.condition-symptoms p {
    font-size: 0.9rem;
    color: var(--dark-text);
    margin: 0;
    line-height: 1.5;
}

/* Conditions Categories */
.conditions-categories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

.category-card {
    background: var(--white);
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all var(--transition-medium);
    text-align: center;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(175, 143, 90, 0.15);
}

.category-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-ultralight);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: var(--primary);
    margin: 0 auto 20px;
    transition: all var(--transition-medium);
}

.category-card:hover .category-icon {
    background: var(--primary);
    color: var(--white);
    transform: scale(1.1);
}

.category-card h3 {
    font-family: var(--heading-font);
    font-size: 1.4rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.category-card p {
    color: var(--gray);
    margin-bottom: 20px;
    line-height: 1.6;
}

.category-card ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

.category-card li {
    padding: 8px 0;
    color: var(--dark-text);
    font-size: 0.95rem;
    position: relative;
    padding-left: 20px;
}

.category-card li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: bold;
}

/* Treatment Approach Timeline */
.approach-timeline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 40px;
    margin-top: 3rem;
    position: relative;
}

.approach-timeline::before {
    content: '';
    position: absolute;
    top: 35px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: var(--primary-light);
    z-index: 0;
}

.approach-step {
    text-align: center;
    position: relative;
    z-index: 1;
}

.step-number {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: var(--primary);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 600;
    font-family: var(--heading-font);
    box-shadow: 0 5px 20px rgba(175, 143, 90, 0.3);
}

.approach-step h3 {
    font-family: var(--heading-font);
    font-size: 1.2rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.approach-step p {
    color: var(--gray);
    line-height: 1.6;
    font-size: 0.95rem;
}

/* CTA Section */
.treatment-cta-section {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    padding: 80px 0;
    text-align: center;
}

.treatment-cta-section .cta-content h2 {
    color: var(--white);
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-family: var(--display-font);
}

.treatment-cta-section .cta-content p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.2rem;
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.treatment-cta-section .cta-button {
    background: var(--white);
    color: var(--primary);
}

.treatment-cta-section .cta-button:hover {
    background: var(--light);
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .conditions-categories {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .approach-timeline {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .approach-timeline::before {
        display: none;
    }
    
    .category-card {
        padding: 30px 20px;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>