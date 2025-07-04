<?php
/**
 * Template Name: Laser Treatment Template
 * Description: Modern laser treatments page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero laser-hero">
            <div class="treatment-hero-content">
                <!-- Breadcrumb Navigation -->
                <div class="breadcrumb-nav">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span class="separator">></span>
                    <a href="<?php echo home_url('/treatments/'); ?>">Treatments</a>
                    <span class="separator">></span>
                    <span class="current">Laser Treatments</span>
                </div>
                <h1><?php the_field('heading-banner') ?: 'ADVANCED LASER TREATMENTS'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'Cutting-edge laser technology for remarkable skin transformation'; ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#treatments" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php else: ?>
                <a href="#treatments" class="cta-button">Discover Our Treatments</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>The Future of Skin Rejuvenation</h2>
                    <p class="lead-text">Experience the transformative power of laser technology at Tempus Belgravia. Our state-of-the-art laser systems deliver precision treatments for a wide range of skin concerns, from anti-aging to pigmentation, with minimal downtime and maximum results.</p>
                </div>
            </div>
        </section>

        <!-- Laser Treatments Section -->
        <section class="treatment-section alt-bg" id="treatments">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('laser-heading') ?: 'Our Laser Treatments'; ?></h2>
                    <p>Advanced laser solutions for every skin concern</p>
                </div>

                <?php 
                $has_laser_treatments = have_rows('laser-facial');
                if( !$has_laser_treatments ): 
                    // Default laser treatments with professional images
                    $default_treatments = array(
                        array(
                            'name' => 'CO2 Fractional Laser',
                            'description' => 'The gold standard for skin resurfacing, treating wrinkles, scars, and sun damage with dramatic results.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/uploads/2023/07/1980157745-huge-1-scaled.webp'
                        ),
                        array(
                            'name' => 'Clear + Brilliant',
                            'description' => 'Gentle laser treatment for preventing early signs of aging and maintaining youthful, radiant skin.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/fotana.jpeg.webp'
                        ),
                        array(
                            'name' => 'Picosure Laser',
                            'description' => 'Revolutionary picosecond technology for tattoo removal, pigmentation, and skin rejuvenation.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/10/Laser-Skin-Resurfacing-scaled.jpeg.webp'
                        ),
                        array(
                            'name' => 'IPL Photofacial',
                            'description' => 'Intense pulsed light therapy for sun damage, rosacea, age spots, and broken capillaries.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lumecca-IPL.jpeg.webp'
                        ),
                        array(
                            'name' => 'Laser Hair Removal',
                            'description' => 'Permanent hair reduction using advanced diode laser technology for all skin types.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/laser-hair-removal.jpeg.webp'
                        ),
                        array(
                            'name' => 'Fraxel Laser',
                            'description' => 'Non-ablative fractional laser for improving texture, tone, and treating melasma safely.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742656153/polina-kovaleva-lxJzZa3ZSUM-unsplash_d29tnx.jpg'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($default_treatments as $treatment): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $treatment['name']; ?></h3>
                            <p class="treatment-description"><?php echo $treatment['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode($treatment['name']); ?>%20please." 
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
                    <?php while( have_rows('laser-facial') ): the_row(); ?>
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

        <!-- Specialized Laser Treatments Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Specialized Laser Solutions</h2>
                    <p>Targeted treatments for specific concerns</p>
                </div>
                
                <div class="specialized-grid">
                    <div class="specialized-card">
                        <div class="icon-box">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Pigmentation & Melasma</h3>
                        <p>Advanced protocols combining multiple laser wavelengths for stubborn pigmentation issues.</p>
                        <ul>
                            <li>Age spots & sun damage</li>
                            <li>Melasma treatment</li>
                            <li>Post-inflammatory hyperpigmentation</li>
                            <li>Birthmark reduction</li>
                        </ul>
                    </div>
                    
                    <div class="specialized-card">
                        <div class="icon-box">
                            <i class="fas fa-compress-alt"></i>
                        </div>
                        <h3>Skin Tightening</h3>
                        <p>Non-surgical lifting and tightening using radiofrequency and laser technology.</p>
                        <ul>
                            <li>Face & neck lifting</li>
                            <li>Jowl reduction</li>
                            <li>Body contouring</li>
                            <li>Cellulite improvement</li>
                        </ul>
                    </div>
                    
                    <div class="specialized-card">
                        <div class="icon-box">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h3>Vascular Treatments</h3>
                        <p>Precise laser therapy for visible blood vessels and vascular lesions.</p>
                        <ul>
                            <li>Spider veins</li>
                            <li>Broken capillaries</li>
                            <li>Rosacea redness</li>
                            <li>Cherry angiomas</li>
                        </ul>
                    </div>
                    
                    <div class="specialized-card">
                        <div class="icon-box">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <h3>Scar Revision</h3>
                        <p>Comprehensive scar treatment protocols for all scar types.</p>
                        <ul>
                            <li>Acne scars</li>
                            <li>Surgical scars</li>
                            <li>Stretch marks</li>
                            <li>Traumatic scars</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Our Advanced Laser Technology</h2>
                    <p>Industry-leading equipment for superior results</p>
                </div>
                
                <div class="technology-showcase">
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Multiple Wavelengths</h3>
                        <p>Various laser wavelengths to target different skin concerns and depths effectively.</p>
                    </div>
                    
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Advanced Cooling</h3>
                        <p>Integrated cooling systems for comfortable treatments and minimal downtime.</p>
                    </div>
                    
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h3>Customizable Settings</h3>
                        <p>Precise parameters tailored to your skin type and treatment goals.</p>
                    </div>
                    
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Proven Results</h3>
                        <p>FDA-cleared devices with clinically proven efficacy and safety profiles.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Before & After Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Transformative Results</h2>
                    <p>See the remarkable improvements our laser treatments can achieve</p>
                </div>
                
                <div class="results-metrics">
                    <div class="metric-card">
                        <div class="metric-number">96%</div>
                        <p>Patient satisfaction rate</p>
                    </div>
                    <div class="metric-card">
                        <div class="metric-number">85%</div>
                        <p>Improvement in skin texture</p>
                    </div>
                    <div class="metric-card">
                        <div class="metric-number">90%</div>
                        <p>Reduction in pigmentation</p>
                    </div>
                    <div class="metric-card">
                        <div class="metric-number">88%</div>
                        <p>Wrinkle improvement</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Treatment Process Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Your Laser Treatment Journey</h2>
                    <p>What to expect during your treatment experience</p>
                </div>
                
                <div class="process-timeline">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h3>Consultation</h3>
                        <p>Comprehensive skin analysis and personalized treatment planning with our laser specialists.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h3>Preparation</h3>
                        <p>Pre-treatment skincare regimen and guidelines to optimize your results.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h3>Treatment</h3>
                        <p>Comfortable procedure with advanced cooling and pain management techniques.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h3>Recovery</h3>
                        <p>Minimal downtime with comprehensive aftercare instructions and support.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">5</div>
                        <h3>Results</h3>
                        <p>Progressive improvement over weeks to months with long-lasting benefits.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Ready to Transform Your Skin?</h2>
                    <p>Book your laser consultation today and discover the perfect treatment for your skin goals</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20laser%20treatment%20consultation%20please." 
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
/* Laser Treatments Page Specific Styles */
.laser-hero {
    background: linear-gradient(135deg, #DCD0FF 0%, #F7F3ED 100%);
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

/* Specialized Grid */
.specialized-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

.specialized-card {
    background: var(--white);
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all var(--transition-medium);
}

.specialized-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(175, 143, 90, 0.15);
}

.icon-box {
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

.specialized-card h3 {
    font-family: var(--heading-font);
    font-size: 1.4rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.specialized-card p {
    color: var(--gray);
    margin-bottom: 20px;
    line-height: 1.6;
}

.specialized-card ul {
    list-style: none;
    padding: 0;
}

.specialized-card li {
    padding: 8px 0;
    color: var(--dark-text);
    font-size: 0.95rem;
    position: relative;
    padding-left: 20px;
}

.specialized-card li:before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: bold;
}

/* Technology Showcase */
.technology-showcase {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    margin-top: 3rem;
}

.tech-item {
    text-align: center;
}

.tech-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: var(--white);
}

.tech-item h3 {
    font-family: var(--heading-font);
    font-size: 1.2rem;
    color: var(--dark-text);
    margin-bottom: 10px;
}

.tech-item p {
    color: var(--gray);
    line-height: 1.6;
}

/* Results Metrics */
.results-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    margin-top: 3rem;
    text-align: center;
}

.metric-card {
    padding: 30px 20px;
    background: var(--white);
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.metric-number {
    font-size: 3rem;
    font-weight: 600;
    color: var(--primary);
    font-family: var(--heading-font);
    margin-bottom: 10px;
}

.metric-card p {
    color: var(--dark-text);
    font-size: 1rem;
}

/* Process Timeline */
.process-timeline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 30px;
    margin-top: 3rem;
    position: relative;
}

.process-timeline::before {
    content: '';
    position: absolute;
    top: 35px;
    left: 5%;
    right: 5%;
    height: 2px;
    background: var(--primary-light);
    z-index: 0;
}

.process-step {
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

.process-step h3 {
    font-family: var(--heading-font);
    font-size: 1.1rem;
    color: var(--dark-text);
    margin-bottom: 10px;
}

.process-step p {
    color: var(--gray);
    line-height: 1.6;
    font-size: 0.9rem;
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
@media (max-width: 1024px) {
    .process-timeline {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .specialized-grid {
        grid-template-columns: 1fr;
    }
    
    .technology-showcase {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .results-metrics {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .process-timeline {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .process-timeline::before {
        display: none;
    }
    
    .metric-number {
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .technology-showcase {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>