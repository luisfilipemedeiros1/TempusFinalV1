<?php
/**
 * Template Name: IV Infusions Template
 * Description: Modern IV infusions page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero infusions-hero">
            <div class="treatment-hero-content">
                <!-- Breadcrumb Navigation -->
                <div class="breadcrumb-nav">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span class="separator">></span>
                    <a href="<?php echo home_url('/treatments/'); ?>">Treatments</a>
                    <span class="separator">></span>
                    <span class="current">IV Infusions</span>
                </div>
                <h1><?php the_field('banner_heading') ?: 'Infusions by Revita Wellbeing at Tempus Belgravia'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'INTRAVENOUS DRIPS PROVIDE YOUR BODY WITH ESSENTIAL VITAMINS AND MINERALS QUICKLY & SAFELY WITH A 100% ABSORPTION RATE.'; ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#treatments" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php else: ?>
                <a href="#treatments" class="cta-button">Book your Appointment now</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section" id="treatments">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>Replenish, rejuvenate, and revitalize with our medical-grade vitamin infusions</h2>
                    <p class="lead-text">Our IV therapy treatments deliver essential vitamins and minerals directly into your bloodstream, bypassing the digestive system for maximum absorption and immediate benefits. Each infusion is administered by qualified medical professionals in our luxurious Belgravia clinic.</p>
                </div>
            </div>
        </section>

        <!-- IV Infusions Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('infusions-heading') ?: 'Our Signature IV Infusions'; ?></h2>
                    <p>Medical-grade vitamin drips tailored to your wellness needs</p>
                </div>

                <?php 
                $has_infusions = have_rows('infusions-medicine');
                if( !$has_infusions ): 
                    // Default IV infusion treatments with professional images
                    $default_infusions = array(
                        array(
                            'name' => 'Revita Base',
                            'price' => '£150',
                            'description' => 'The Revita Wellness infusion is full of essential vitamins and minerals to give you an instant \'pick me up\'. This infusion includes essential Vitamins such as B Complex, B5, B6, B12 and more. Strengthens immune system, boost in energy levels, improves metabolism, improves quality of sleep, increases brain function and helps avoid signs of ageing.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/iv-drip.jpeg.webp'
                        ),
                        array(
                            'name' => 'Skin Brightening',
                            'price' => '£250',
                            'description' => 'In addition to essential vitamins and minerals, contains high dose Vitamin C. A blood test will be required before this infusion can be administered at a charge of £120. It is advisable to have a course of skin brightening infusions for optimal results.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Hydrafacial-Bespoke.jpeg.webp'
                        ),
                        array(
                            'name' => 'Relax & Restore',
                            'price' => '£370',
                            'description' => 'The perfect mix of natural amino acids and minerals such as Magnesium and Ornithine to help you unwind, find peace of mind and balance during stressful times. Provides quality sleep, improves concentration levels, restores mental clarity, and helps balance your mood.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg'
                        ),
                        array(
                            'name' => 'Skin, Hair & Nails',
                            'price' => '£350',
                            'description' => 'Packed with essential Amino acids such as Biotin and a range of vitamins to bring life back to dull thinning hair, dry skin and chipping nails. Boosts Keratin and Collagen production, maximises hair and nail growth, adds shine and strength, evens skin tone and rejuvenates skin.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp'
                        ),
                        array(
                            'name' => 'Anti-Aging',
                            'price' => '£370',
                            'description' => 'The perfect range of vitamins and amino acids including Glutathione aimed to combat the signs of ageing. Specifically designed to restore collagen, aid in the evening of skin tone, leaving the skin glowing and appearing firmer. Helps restore collagen and connective tissues, rehydrates the skin, removes free radicals.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/8-point-lift-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Diet & Detox/Fat Burning',
                            'price' => '£400',
                            'description' => 'This infusion provides you with a blend of vitamins and amino acids aimed to burn off and metabolise stored carbohydrates and fats. Our blend of amino acids help to reduce toxic load and brings your body back to optimum health. Perfect for a weight loss diet plan or detoxing after a heavy weekend.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg'
                        ),
                        array(
                            'name' => 'Immuno Support',
                            'price' => '£370',
                            'description' => 'The perfect mix of vitamins, minerals and anti-oxidants to kick start your immune system. Includes Zinc and amino acids such as Arginine, Lysine, Glutathione, higher dose of Vitamin C and more. Decreases oxidative stress, supports immune system and increases energy levels.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/iv-drip.jpeg.webp'
                        ),
                        array(
                            'name' => 'Energy Booster',
                            'price' => '£290',
                            'description' => 'Charged up with essential B vitamins needed for the body to produce and use energy. Perfect blend of amino acids such as Taurine and Carnitine to naturally increase energy levels. Enables you to think clearer and gives the perfect boost for people leading fast pace lifestyles.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Profhilo-Face-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Pre-Work Out Endurance',
                            'price' => '£240',
                            'description' => 'Enables you to quickly reach peak performance and provides stamina to perform to full potential. Concentrated formula full of 100% natural vitamins, minerals and amino acids aimed to stimulate ATP production to help you power through your training sessions.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg'
                        ),
                        array(
                            'name' => 'Post-Work Out Recovery',
                            'price' => '£240',
                            'description' => 'Ideal for replenishing minerals and electrolytes after an intense workout. Tailored to aid muscle recovery and rehydrate. This infusion also promotes a good night\'s sleep, allowing your body to recover quickly. Muscle repair, energy and replenishes essential nutrients.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/uploads/2023/07/shutterstock_2291188561.webp'
                        ),
                        array(
                            'name' => 'Glutathione Add-On',
                            'price' => '£90 (Course of 3: £250)',
                            'description' => 'Known as \'The Master Anti-oxidant\', it helps eliminate damaging free radicals. Anti-inflammatory and protects cells. Can be administered intramuscularly or added to any IV infusion.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($default_infusions as $infusion): ?>
                    <div class="treatment-card infusion-card">
                        <div class="treatment-image">
                            <img src="<?php echo $infusion['image']; ?>" alt="<?php echo $infusion['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $infusion['name']; ?></h3>
                            <div class="treatment-price"><?php echo $infusion['price']; ?></div>
                            <p class="treatment-description"><?php echo $infusion['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode($infusion['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="treatment-grid">
                    <?php while( have_rows('infusions-medicine') ): the_row(); ?>
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

        <!-- Benefits Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Benefits of IV Therapy</h2>
                    <p>Experience the transformative effects of direct vitamin and nutrient delivery</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Instant Energy Boost</h3>
                        <p>Feel revitalized within hours as nutrients bypass the digestive system for immediate absorption.</p>
                    </div>
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Enhanced Immunity</h3>
                        <p>Strengthen your body's natural defenses with high-dose vitamin C and immune-boosting minerals.</p>
                    </div>
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3>Improved Wellness</h3>
                        <p>Support overall health with targeted nutrient combinations tailored to your specific needs.</p>
                    </div>
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h3>Superior Hydration</h3>
                        <p>Achieve optimal hydration levels more effectively than drinking water alone.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Ready to Enhance Your Wellness?</h2>
                    <p>Book your IV therapy consultation today and discover the perfect infusion for your needs</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20an%20IV%20therapy%20consultation%20please." 
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
/* IV Infusions page specific styles */
.infusions-hero {
    background: linear-gradient(135deg, #B4D4F1 0%, #F7F3ED 100%);
}

.intro-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.intro-content h2 {
    font-family: var(--display-font);
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 1.5rem;
}

.lead-text {
    font-size: 1.2rem;
    color: var(--dark-text);
    line-height: 1.8;
    font-style: italic;
}

/* Breadcrumb Navigation */
.breadcrumb-nav {
    margin-bottom: 30px;
    color: rgba(0, 0, 0, 0.6);
    font-size: 0.9rem;
}

.breadcrumb-nav a {
    color: rgba(0, 0, 0, 0.6);
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-nav a:hover {
    color: var(--primary);
}

.breadcrumb-nav .separator {
    margin: 0 10px;
    color: rgba(0, 0, 0, 0.4);
}

.breadcrumb-nav .current {
    color: var(--dark-text);
}

/* Treatment Price */
.treatment-price {
    font-size: 1.3rem;
    color: var(--primary);
    font-weight: 600;
    margin: 10px 0;
    font-family: var(--heading-font);
}

/* Infusion Cards Grid - Adjusted for more items */
.infusion-card {
    height: 100%;
}

.infusion-card .treatment-description {
    font-size: 0.95rem;
    line-height: 1.6;
}

/* Additional styles for IV Infusions page */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

.benefit-card {
    text-align: center;
    padding: 30px;
    background: var(--white);
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all var(--transition-medium);
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.benefit-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: var(--primary-ultralight);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: var(--primary);
}

.benefit-card h3 {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.benefit-card p {
    color: var(--gray);
    line-height: 1.6;
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

@media (max-width: 768px) {
    .benefits-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .benefit-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>