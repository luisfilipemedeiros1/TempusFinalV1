<?php
/**
 * Template Name: Certified Packages Template
 * Description: Modern certified packages page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero packages-hero">
            <div class="treatment-hero-content">
                <!-- Breadcrumb Navigation -->
                <div class="breadcrumb-nav">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span class="separator">></span>
                    <a href="<?php echo home_url('/treatments/'); ?>">Treatments</a>
                    <span class="separator">></span>
                    <span class="current">Certified Packages</span>
                </div>
                <h1><?php the_field('heading-certified') ?: 'CERTIFIED TREATMENT PACKAGES'; ?></h1>
                <p class="subtitle"><?php the_field('sub-certified-text') ?: 'Expertly curated treatment combinations for transformative results'; ?></p>
                <?php if( get_field('certified-button') ): ?>
                <a href="#packages" class="cta-button"><?php the_field('certified-button'); ?></a>
                <?php else: ?>
                <a href="#packages" class="cta-button">Explore Our Packages</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>Synergistic Treatment Solutions</h2>
                    <p class="lead-text">When it comes to aesthetic procedures in London, choosing the right combination of treatments is key to achieving truly transformative results. At Tempus Belgravia, we have crafted bespoke packages specifically designed to address your unique concerns.</p>
                    <p class="lead-text">Our diverse treatment offerings incorporate clinically-proven modalities backed by scientific research. Combined in strategic sequences, they work synergistically to refine your appearance from multiple angles.</p>
                </div>
            </div>
        </section>

        <!-- Packages Section -->
        <section class="treatment-section alt-bg" id="packages">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('packages-heading') ?: 'Our Signature Packages'; ?></h2>
                    <p>Comprehensive treatment combinations designed for optimal results</p>
                </div>

                <?php 
                $has_packages = have_rows('certified-packages');
                if( !$has_packages ): 
                    // Default certified packages
                    $default_packages = array(
                        array(
                            'name' => 'The Tempus Ultimate Face Lift',
                            'price' => 'From £3,500',
                            'description' => 'Our most comprehensive facial rejuvenation package combining HIFU, RF microneedling, and dermal fillers for dramatic lifting and volumization without surgery.',
                            'treatments' => array('HIFU Face & Neck', 'RF Microneedling', 'Premium Dermal Fillers', 'Profhilo Skin Booster'),
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/8-point-lift-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'NUYU Complete Transformation',
                            'price' => 'From £1,800',
                            'description' => 'Gold microinfusion facial combined with HydraFacial deep cleansing and your choice of injectable treatment for instant radiance and rejuvenation.',
                            'treatments' => array('Gold Microinfusion', 'HydraFacial Platinum', 'Injectable of Choice', 'LED Light Therapy'),
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/AQUAGOLD-FACIAL.jpeg.webp'
                        ),
                        array(
                            'name' => 'Ultimate Regeneration Journey',
                            'price' => 'From £2,800',
                            'description' => 'Advanced regenerative medicine package featuring exosome therapy, PRP, and polynucleotides for cellular renewal and skin quality improvement.',
                            'treatments' => array('Exosome Therapy', 'PRP Facial', 'Polynucleotides', 'Medical-Grade Skincare'),
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp'
                        ),
                        array(
                            'name' => 'Luminous Eyes Package',
                            'price' => 'From £1,200',
                            'description' => 'Complete eye rejuvenation combining tear trough fillers, anti-wrinkle injections, and Fotona laser for brighter, younger-looking eyes.',
                            'treatments' => array('Tear Trough Fillers', 'Anti-Wrinkle Injections', 'Fotona Eye Laser', 'Eye Brightening Peel'),
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Tear-Trough.jpeg.webp'
                        ),
                        array(
                            'name' => 'Body 360 Sculpting',
                            'price' => 'From £4,000',
                            'description' => 'Comprehensive body contouring package with EMSculpt Neo, VelaShape III, and ONDA Coolwaves for fat reduction and muscle definition.',
                            'treatments' => array('EMSculpt Neo', 'VelaShape III', 'ONDA Coolwaves', 'Skin Tightening RF'),
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EMSculpting.jpeg.webp'
                        ),
                        array(
                            'name' => 'Acne Clear Solution',
                            'price' => 'From £1,500',
                            'description' => 'Medical-grade acne treatment package combining laser therapy, chemical peels, and prescription skincare for clear, healthy skin.',
                            'treatments' => array('Laser Acne Treatment', 'Medical Peels', 'LED Blue Light', 'Prescription Skincare'),
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/10/Blue-Peel-Radiance-Treatment.png.webp'
                        )
                    );
                ?>
                <div class="packages-grid">
                    <?php foreach($default_packages as $package): ?>
                    <div class="package-card">
                        <div class="package-image">
                            <img src="<?php echo $package['image']; ?>" alt="<?php echo $package['name']; ?>">
                            <div class="package-price"><?php echo $package['price']; ?></div>
                        </div>
                        <div class="package-content">
                            <h3 class="package-name"><?php echo $package['name']; ?></h3>
                            <p class="package-description"><?php echo $package['description']; ?></p>
                            <div class="package-treatments">
                                <h4>Includes:</h4>
                                <ul>
                                    <?php foreach($package['treatments'] as $treatment): ?>
                                    <li><i class="fas fa-check"></i> <?php echo $treatment; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="package-actions">
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20the%20<?php echo urlencode($package['name']); ?>%20package%20please." 
                                   class="cta-button-primary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book This Package</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="packages-grid">
                    <?php while( have_rows('certified-packages') ): the_row(); ?>
                    <div class="package-card">
                        <div class="package-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                            <?php if( get_sub_field('contouring_cost') ): ?>
                            <div class="package-price"><?php the_sub_field('contouring_cost'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="package-content">
                            <h3 class="package-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="package-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="package-actions">
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20the%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20package%20please." 
                                   class="cta-button-primary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book This Package</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Treatment Options Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>An Array of Advanced Aesthetic Options</h2>
                </div>
                <div class="content-columns">
                    <p>Whether your goal is anti-aging renewal, skin resurfacing, body contouring or scar revision, we have curated packages tailored to each area of concern. State-of-the-art technologies such as HIFU, RF microneedling and hyaluronic acid fillers are combined for facial rejuvenation.</p>
                    <p>Meanwhile, body shaping combinations incorporate VelaShape, ONDA Coolwaves and EMSculpt to target cellulite, fat reduction and muscle toning. For scarring issues, advanced laser therapy is paired with PRP and medical-grade scar treatments. Whatever results you envision, an expert will develop a plan harnessing complementary techniques.</p>
                </div>
            </div>
        </section>

        <!-- Why Choose Packages Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Why Choose Treatment Packages?</h2>
                    <p>Maximize your results with strategically combined treatments</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3>Synergistic Results</h3>
                        <p>Treatments work together to enhance each other's effects, delivering superior outcomes compared to individual procedures.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <h3>Cost Effective</h3>
                        <p>Save up to 20% compared to booking treatments individually, making premium care more accessible.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3>Time Efficient</h3>
                        <p>Carefully planned treatment sequences minimize visits while maximizing results and recovery time.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Expert Curation</h3>
                        <p>Each package is designed by our medical team based on proven protocols and clinical experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Effectiveness Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Highly Effective Treatment Combinations</h2>
                </div>
                <div class="effectiveness-content">
                    <p>Our signature packages represent years of clinical experience in combining treatments for optimal results:</p>
                    
                    <div class="combination-examples">
                        <div class="combination-item">
                            <h4><i class="fas fa-star"></i> The "NUYU" Facial</h4>
                            <p>First delivers powerful gold microinfusion and HydraFacial cleansing before adding an injectable or filler for immediate radiance.</p>
                        </div>
                        
                        <div class="combination-item">
                            <h4><i class="fas fa-star"></i> Ultimate Regeneration</h4>
                            <p>For faster, surgery-free lifting and tightening, this package pairs HIFU, RF microneedling and Profhilo for comprehensive rejuvenation.</p>
                        </div>
                        
                        <div class="combination-item">
                            <h4><i class="fas fa-star"></i> Luminous Eyes</h4>
                            <p>Those seeking brighter, smoother eyes will appreciate this pairing of fillers, anti-wrinkle injections and Fotona laser.</p>
                        </div>
                        
                        <div class="combination-item">
                            <h4><i class="fas fa-star"></i> Body 360</h4>
                            <p>Individualized body plans deploy optimized sequences of VelaShape, CoolWaves and more for comprehensive contouring.</p>
                        </div>
                    </div>
                    
                    <p class="mt-4">Pre- and post-treatment protocols maximize each method's efficacy for natural-looking, long-lasting outcomes.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Book the Best Treatment Packages in London</h2>
                    <p>At Tempus Belgravia, our professional clinicians take a holistic approach - carefully assessing each client's goals and unique concerns. Based on your consultation, an ideal package is hand-picked from our extensive treatment library.</p>
                    <p>Contact us today to reserve your consultation and begin your transformation with a customized package from London's top medical aesthetics clinic.</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20treatment%20packages%20please." 
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
/* Certified Packages Page Specific Styles */
.packages-hero {
    background: linear-gradient(135deg, #F4E4BC 0%, #F7F3ED 100%);
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

/* Intro Content */
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

/* Packages Grid */
.packages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-top: 3rem;
}

.package-card {
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    transition: all var(--transition-medium);
    display: flex;
    flex-direction: column;
}

.package-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(175, 143, 90, 0.2);
}

.package-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.package-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-medium);
}

.package-card:hover .package-image img {
    transform: scale(1.05);
}

.package-price {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--primary);
    color: var(--white);
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 1.1rem;
}

.package-content {
    padding: 30px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.package-name {
    font-family: var(--heading-font);
    font-size: 1.6rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.package-description {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 20px;
}

.package-treatments {
    margin-bottom: 30px;
    flex-grow: 1;
}

.package-treatments h4 {
    font-family: var(--heading-font);
    font-size: 1.1rem;
    color: var(--dark-text);
    margin-bottom: 10px;
}

.package-treatments ul {
    list-style: none;
    padding: 0;
}

.package-treatments li {
    padding: 8px 0;
    color: var(--dark-text);
    font-size: 0.95rem;
    display: flex;
    align-items: center;
}

.package-treatments li i {
    color: var(--primary);
    margin-right: 10px;
    font-size: 0.8rem;
}

.package-actions {
    text-align: center;
}

.cta-button-primary {
    display: inline-block;
    background: var(--primary);
    color: var(--white);
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: all var(--transition-medium);
    width: 100%;
}

.cta-button-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(175, 143, 90, 0.3);
}

/* Content Columns */
.content-columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    max-width: 1000px;
    margin: 0 auto;
}

.content-columns p {
    color: var(--dark-text);
    line-height: 1.8;
    text-align: justify;
}

/* Benefits Grid */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-top: 3rem;
}

.benefit-item {
    text-align: center;
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
    transition: all var(--transition-medium);
}

.benefit-item:hover .benefit-icon {
    transform: scale(1.1);
    background: var(--primary);
    color: var(--white);
}

.benefit-item h3 {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.benefit-item p {
    color: var(--gray);
    line-height: 1.6;
}

/* Effectiveness Content */
.effectiveness-content {
    max-width: 900px;
    margin: 0 auto;
}

.effectiveness-content > p {
    text-align: center;
    color: var(--dark-text);
    font-size: 1.1rem;
    margin-bottom: 2rem;
}

.combination-examples {
    display: grid;
    gap: 25px;
    margin: 2rem 0;
}

.combination-item {
    background: var(--light);
    padding: 25px;
    border-radius: 12px;
    border-left: 4px solid var(--primary);
}

.combination-item h4 {
    font-family: var(--heading-font);
    font-size: 1.2rem;
    color: var(--primary);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.combination-item h4 i {
    font-size: 1rem;
}

.combination-item p {
    color: var(--dark-text);
    line-height: 1.6;
    margin: 0;
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
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.treatment-cta-section .cta-button {
    background: var(--white);
    color: var(--primary);
    display: inline-block;
    padding: 15px 40px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: all var(--transition-medium);
    margin-top: 20px;
}

.treatment-cta-section .cta-button:hover {
    background: var(--light);
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

/* Responsive */
@media (max-width: 768px) {
    .packages-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .content-columns {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .package-name {
        font-size: 1.4rem;
    }
    
    .intro-content h2 {
        font-size: 2rem;
    }
    
    .treatment-cta-section .cta-content h2 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .package-content {
        padding: 20px;
    }
    
    .combination-item {
        padding: 20px;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>