<?php
/**
 * Template Name: Nutrition & Functional Medicine
 * Description: Modern nutrition and functional medicine page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero nutrition-hero">
            <div class="treatment-hero-content">
                <!-- Breadcrumb Navigation -->
                <div class="breadcrumb-nav">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span class="separator">></span>
                    <a href="<?php echo home_url('/treatments/'); ?>">Treatments</a>
                    <span class="separator">></span>
                    <span class="current">Nutrition & Functional Medicine</span>
                </div>
                <h1><?php the_field('banner_heading') ?: 'NUTRITION AND FUNCTIONAL MEDICINE'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'Optimize your health from within with personalized nutrition and holistic wellness solutions'; ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#treatments" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php else: ?>
                <a href="#treatments" class="cta-button">Book Your Appointment now</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>A Holistic Approach to Your Health</h2>
                    <p class="lead-text">At Tempus Belgravia, we believe true wellness comes from understanding and treating the root causes of health issues, not just the symptoms. Our functional medicine approach combines cutting-edge diagnostics with personalized nutrition plans to help you achieve optimal health and vitality.</p>
                </div>
            </div>
        </section>

        <!-- Core Services Section -->
        <section class="treatment-section alt-bg" id="treatments">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('nutrition-heading') ?: 'Our Core Services'; ?></h2>
                    <p>Comprehensive functional medicine solutions tailored to your unique health needs</p>
                </div>

                <?php 
                $has_nutrition_services = have_rows('nutrition-medicine');
                if( !$has_nutrition_services ): 
                    // Default nutrition & functional medicine services
                    $default_services = array(
                        array(
                            'name' => 'GP Nutrition (Gabriela Peacock)',
                            'description' => 'World-renowned nutritionist Gabriela Peacock provides personalized nutrition plans for optimal health, weight management, and longevity. Her celebrity-endorsed approach combines cutting-edge nutritional science with practical lifestyle solutions.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/iv-drip.jpeg.webp'
                        ),
                        array(
                            'name' => 'PK Health (Dr. Shideh Pouria)',
                            'description' => 'Dr. Pouria specializes in functional medicine and nutritional therapy, addressing complex health issues through comprehensive testing and personalized treatment protocols. Expert in autoimmune conditions, digestive health, and metabolic disorders.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg'
                        ),
                        array(
                            'name' => 'Comprehensive Health Assessment',
                            'description' => 'In-depth evaluation including advanced blood work, genetic testing, and lifestyle analysis to create your personalized health roadmap.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Profhilo-Face-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Gut Health Optimization',
                            'description' => 'Comprehensive gut microbiome analysis and treatment protocols to improve digestion, immunity, and overall health through targeted interventions.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg'
                        ),
                        array(
                            'name' => 'Hormone Balancing',
                            'description' => 'Natural hormone optimization through nutrition, lifestyle modifications, and bioidentical hormone therapy when needed for optimal wellbeing.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EMSculpting.jpeg.webp'
                        ),
                        array(
                            'name' => 'Weight Management Programs',
                            'description' => 'Science-based weight loss and metabolic optimization programs that address underlying causes of weight gain and metabolic dysfunction.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Hydrafacial-Bespoke.jpeg.webp'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($default_services as $service): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $service['name']; ?></h3>
                            <p class="treatment-description"><?php echo $service['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode($service['name']); ?>%20please." 
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
                    <?php while( have_rows('nutrition-medicine') ): the_row(); ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20please." 
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

        <!-- Specialized Programs Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Specialized Wellness Programs</h2>
                    <p>Targeted programs designed to address specific health concerns</p>
                </div>
                
                <div class="programs-grid">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Cognitive Enhancement</h3>
                        <p>Boost mental clarity, focus, and memory with brain-optimizing nutrition and supplements.</p>
                        <ul>
                            <li>Neurocognitive testing</li>
                            <li>Brain-healthy nutrition plans</li>
                            <li>Nootropic protocols</li>
                            <li>Stress management techniques</li>
                        </ul>
                    </div>
                    
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h3>Athletic Performance</h3>
                        <p>Optimize your athletic potential with performance nutrition and recovery protocols.</p>
                        <ul>
                            <li>Performance nutrition plans</li>
                            <li>Recovery optimization</li>
                            <li>Supplement protocols</li>
                            <li>Body composition analysis</li>
                        </ul>
                    </div>
                    
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Cardiovascular Health</h3>
                        <p>Protect your heart with evidence-based nutrition and lifestyle interventions.</p>
                        <ul>
                            <li>Advanced lipid testing</li>
                            <li>Heart-healthy meal plans</li>
                            <li>Blood pressure management</li>
                            <li>Inflammation reduction</li>
                        </ul>
                    </div>
                    
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Immune Support</h3>
                        <p>Strengthen your immune system with targeted nutrition and supplement strategies.</p>
                        <ul>
                            <li>Immune function testing</li>
                            <li>Antioxidant therapy</li>
                            <li>Gut-immune protocols</li>
                            <li>Stress resilience building</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testing & Diagnostics Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Advanced Testing & Diagnostics</h2>
                    <p>Comprehensive testing to uncover the root causes of your health concerns</p>
                </div>
                
                <div class="testing-grid">
                    <div class="testing-item">
                        <i class="fas fa-vial"></i>
                        <h4>Comprehensive Blood Panels</h4>
                        <p>Advanced markers beyond standard tests</p>
                    </div>
                    
                    <div class="testing-item">
                        <i class="fas fa-dna"></i>
                        <h4>Genetic Testing</h4>
                        <p>Personalized insights based on your DNA</p>
                    </div>
                    
                    <div class="testing-item">
                        <i class="fas fa-microscope"></i>
                        <h4>Microbiome Analysis</h4>
                        <p>Complete gut health assessment</p>
                    </div>
                    
                    <div class="testing-item">
                        <i class="fas fa-allergies"></i>
                        <h4>Food Sensitivity Testing</h4>
                        <p>Identify inflammatory food triggers</p>
                    </div>
                    
                    <div class="testing-item">
                        <i class="fas fa-balance-scale"></i>
                        <h4>Hormone Panels</h4>
                        <p>Complete hormone balance evaluation</p>
                    </div>
                    
                    <div class="testing-item">
                        <i class="fas fa-atom"></i>
                        <h4>Nutritional Analysis</h4>
                        <p>Vitamin and mineral status assessment</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Transform Your Health Journey</h2>
                    <p>Real results from our personalized functional medicine approach</p>
                </div>
                
                <div class="success-metrics">
                    <div class="metric">
                        <div class="metric-number">92%</div>
                        <p>of patients report improved energy levels</p>
                    </div>
                    <div class="metric">
                        <div class="metric-number">87%</div>
                        <p>achieve their weight management goals</p>
                    </div>
                    <div class="metric">
                        <div class="metric-number">95%</div>
                        <p>experience better digestive health</p>
                    </div>
                    <div class="metric">
                        <div class="metric-number">89%</div>
                        <p>report enhanced mental clarity</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Begin Your Journey to Optimal Health</h2>
                    <p>Book your functional medicine consultation today and discover how personalized nutrition can transform your life</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20functional%20medicine%20consultation%20please." 
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
/* Nutrition & Functional Medicine Page Specific Styles */
.nutrition-hero {
    background: linear-gradient(135deg, #D4E4BC 0%, #F7F3ED 100%);
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

/* Programs Grid */
.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

.program-card {
    background: var(--white);
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all var(--transition-medium);
    border: 1px solid var(--light-gray);
}

.program-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(175, 143, 90, 0.15);
}

.program-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-ultralight);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: var(--primary);
    margin-bottom: 20px;
}

.program-card h3 {
    font-family: var(--heading-font);
    font-size: 1.4rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.program-card p {
    color: var(--gray);
    margin-bottom: 20px;
    line-height: 1.6;
}

.program-card ul {
    list-style: none;
    padding: 0;
}

.program-card li {
    padding: 8px 0;
    color: var(--dark-text);
    font-size: 0.95rem;
    position: relative;
    padding-left: 20px;
}

.program-card li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: bold;
}

/* Testing Grid */
.testing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

.testing-item {
    text-align: center;
    padding: 30px 20px;
    background: var(--white);
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all var(--transition-medium);
}

.testing-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.testing-item i {
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 15px;
    display: block;
}

.testing-item h4 {
    font-family: var(--heading-font);
    font-size: 1.1rem;
    color: var(--dark-text);
    margin-bottom: 10px;
}

.testing-item p {
    color: var(--gray);
    font-size: 0.9rem;
}

/* Success Metrics */
.success-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    margin-top: 3rem;
    text-align: center;
}

.metric {
    padding: 20px;
}

.metric-number {
    font-size: 3rem;
    font-weight: 600;
    color: var(--primary);
    font-family: var(--heading-font);
    margin-bottom: 10px;
}

.metric p {
    color: var(--dark-text);
    font-size: 1rem;
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
    .programs-grid {
        grid-template-columns: 1fr;
    }
    
    .testing-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .success-metrics {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .metric-number {
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .testing-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>