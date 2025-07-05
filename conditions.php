<?php
/**
 * Template Name: Conditions Page
 * Description: Browse conditions by category
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="conditions-page-wrapper">
    <main id="conditions-content" class="conditions-main-content">

        <!-- Browse by Category Section -->
        <section class="conditions-browse-section">
            <div class="container">
                <div class="browse-header">
                    <h1>Browse Conditions by Category</h1>
                    <p>Select a category to explore our treatment options</p>
                </div>

                
                <!-- Category Filters -->
                <div class="category-filters">
                    <button class="filter-btn active" data-category="all">All Conditions</button>
                    <button class="filter-btn" data-category="aging">Anti-Aging</button>
                    <button class="filter-btn" data-category="facial">Facial Concerns</button>
                    <button class="filter-btn" data-category="skin">Skin Issues</button>
                    <button class="filter-btn" data-category="body">Body Concerns</button>
                    <button class="filter-btn" data-category="hair">Hair & Scalp</button>
                    <button class="filter-btn" data-category="medical">Medical</button>
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
                <div class="conditions-grid">
                    <?php while( $conditions_query->have_posts() ): $conditions_query->the_post(); 
                        $category = get_field('condition_category_type') ?: 'general';
                    ?>
                    <article class="condition-card" data-category="<?php echo esc_attr($category); ?>">
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
                    <div class="conditions-grid">
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
                        
                        foreach($default_conditions as $condition): 
                            $category_map = [
                                'Skin Conditions' => 'skin',
                                'Vascular Conditions' => 'medical',
                                'Vascular' => 'medical',
                                'Pigmentation' => 'skin',
                                'Aging' => 'aging',
                                'Inflammatory' => 'medical',
                                'Hair & Scalp' => 'hair',
                                'Skin Texture' => 'body',
                                'Autoimmune' => 'medical'
                            ];
                            $data_category = isset($category_map[$condition['category']]) ? $category_map[$condition['category']] : 'general';
                        ?>
                        <article class="condition-card" data-category="<?php echo esc_attr($data_category); ?>">
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

    </main>
</div>

<style>
/* Include home.css variables */
:root {
    --primary: #AF8F5A;
    --primary-dark: #8C6F44;
    --primary-light: #D4AF7A;
    --primary-ultralight: #F7F3ED;
    --dark-text: #333333;
    --gray: #555555;
    --light-gray: #eeeeee;
    --white: #ffffff;
    --transition-medium: 0.3s ease;
}

/* Conditions Page Specific Styles */
.conditions-page-wrapper {
    background-color: #f9f9f9;
    min-height: 100vh;
}

.conditions-browse-section {
    padding: 60px 0;
}

.browse-header {
    text-align: center;
    margin-bottom: 50px;
}

.browse-header h1 {
    font-size: 2.5rem;
    color: var(--dark-text);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.browse-header p {
    font-size: 1.2rem;
    color: var(--gray);
}

/* Category Filters */
.category-filters {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.filter-btn {
    padding: 10px 25px;
    background-color: transparent;
    border: 2px solid var(--primary);
    color: var(--primary);
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    font-size: 0.95rem;
}

.filter-btn:hover,
.filter-btn.active {
    background-color: var(--primary);
    color: var(--white);
}

/* Conditions Grid */
.conditions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

.condition-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.condition-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.condition-card .treatment-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.condition-card .treatment-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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

.condition-card .treatment-content {
    padding: 30px;
}

.condition-card .treatment-name {
    font-size: 1.5rem;
    color: var(--primary);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.condition-card .treatment-description {
    color: var(--gray);
    margin-bottom: 20px;
    line-height: 1.6;
}

.condition-symptoms {
    background: var(--primary-ultralight);
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    border-left: 3px solid var(--primary);
}

.condition-symptoms h4 {
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

.treatment-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.treatment-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.treatment-link:hover {
    color: var(--primary-dark);
    transform: translateX(5px);
}

.cta-button-secondary {
    padding: 8px 20px;
    background-color: transparent;
    border: 2px solid var(--primary);
    color: var(--primary);
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.cta-button-secondary:hover {
    background-color: var(--primary);
    color: var(--white);
}

/* Responsive */
@media (max-width: 768px) {
    .conditions-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .category-filters {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 8px 20px;
        font-size: 0.85rem;
    }
    
    .browse-header h1 {
        font-size: 2rem;
    }
    
    .treatment-actions {
        flex-direction: column;
        gap: 15px;
        align-items: stretch;
    }
    
    .cta-button-secondary {
        text-align: center;
    }
}
</style>

<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const conditionCards = document.querySelectorAll('.condition-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter cards
            conditionCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
// Use the theme's modern footer
get_footer();
?>