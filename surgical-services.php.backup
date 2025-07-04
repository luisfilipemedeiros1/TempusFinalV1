<?php
/**
 * Template Name: Surgical Services
 * Description: Modern surgical services page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero surgical-hero">
            <div class="treatment-hero-content">
                <h1><?php the_field('heading_banner') ?: 'Surgical Excellence'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'Advanced surgical procedures performed by world-class specialists'; ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#treatments" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php else: ?>
                <a href="#treatments" class="cta-button">Explore Our Procedures</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>Precision, Artistry, and Care</h2>
                    <p class="lead-text">At Tempus Belgravia, our surgical department represents the pinnacle of aesthetic and reconstructive surgery. Our board-certified surgeons combine technical excellence with artistic vision, utilizing the latest minimally invasive techniques to deliver natural-looking results with minimal downtime.</p>
                </div>
            </div>
        </section>

        <!-- Surgical Procedures Section -->
        <section class="treatment-section alt-bg" id="treatments">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('sergical-heading') ?: 'Our Surgical Procedures'; ?></h2>
                    <p>Comprehensive surgical solutions performed with precision and care</p>
                </div>

                <?php 
                $has_surgical_services = have_rows('Surgical-Services');
                if( !$has_surgical_services ): 
                    // Default surgical procedures with professional images
                    $default_procedures = array(
                        array(
                            'name' => 'Facelift & Neck Lift',
                            'description' => 'Comprehensive facial rejuvenation to restore youthful contours and eliminate sagging skin with natural-looking results.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Artboard-83.png.webp'
                        ),
                        array(
                            'name' => 'Rhinoplasty',
                            'description' => 'Precision nose reshaping to enhance facial harmony while maintaining or improving breathing function.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Nose-Reshaping-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Blepharoplasty',
                            'description' => 'Eyelid surgery to remove excess skin and fat, creating a more youthful and refreshed appearance.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/under-eye-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Breast Augmentation',
                            'description' => 'Natural breast enhancement using the latest implant technology or fat transfer techniques.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg'
                        ),
                        array(
                            'name' => 'Liposuction & Body Contouring',
                            'description' => 'Advanced body sculpting techniques including VASER and traditional liposuction for precise fat removal.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Abdominoplasty',
                            'description' => 'Tummy tuck procedures to restore abdominal contours and repair muscle separation.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/NON-SURGICAL-BBL.jpeg.webp'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($default_procedures as $procedure): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $procedure['image']; ?>" alt="<?php echo $procedure['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $procedure['name']; ?></h3>
                            <p class="treatment-description"><?php echo $procedure['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode($procedure['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Consultation</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="treatment-grid">
                    <?php while( have_rows('Surgical-Services') ): the_row(); ?>
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
                                   rel="noopener noreferrer">Book Consultation</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Minor Procedures Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Minor Surgical Procedures</h2>
                    <p>Minimally invasive treatments with maximum impact</p>
                </div>
                
                <div class="minor-procedures-grid">
                    <div class="procedure-item">
                        <h3><i class="fas fa-syringe"></i> Fat Transfer</h3>
                        <p>Natural volume enhancement using your own fat cells for face and body contouring.</p>
                    </div>
                    
                    <div class="procedure-item">
                        <h3><i class="fas fa-cut"></i> Scar Revision</h3>
                        <p>Advanced techniques to minimize the appearance of scars from injury or previous surgery.</p>
                    </div>
                    
                    <div class="procedure-item">
                        <h3><i class="fas fa-eye"></i> Otoplasty</h3>
                        <p>Ear reshaping surgery to correct prominent ears or ear deformities.</p>
                    </div>
                    
                    <div class="procedure-item">
                        <h3><i class="fas fa-smile"></i> Lip Lift</h3>
                        <p>Surgical lip enhancement for a permanent, natural-looking fuller lip appearance.</p>
                    </div>
                    
                    <div class="procedure-item">
                        <h3><i class="fas fa-hand-paper"></i> Hand Rejuvenation</h3>
                        <p>Combination treatments to restore youthful appearance to aging hands.</p>
                    </div>
                    
                    <div class="procedure-item">
                        <h3><i class="fas fa-circle-notch"></i> Mole Removal</h3>
                        <p>Safe removal of moles, skin tags, and other benign lesions with minimal scarring.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Why Choose Tempus Surgical Services</h2>
                </div>
                
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="icon-circle">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>Board-Certified Surgeons</h3>
                        <p>Our surgeons are internationally trained and certified by leading surgical boards, ensuring the highest standards of care.</p>
                    </div>
                    
                    <div class="why-us-card">
                        <div class="icon-circle">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h3>State-of-the-Art Facilities</h3>
                        <p>Fully accredited surgical suites equipped with the latest technology for your safety and comfort.</p>
                    </div>
                    
                    <div class="why-us-card">
                        <div class="icon-circle">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3>Personalized Care</h3>
                        <p>Comprehensive consultations and customized treatment plans tailored to your unique anatomy and goals.</p>
                    </div>
                    
                    <div class="why-us-card">
                        <div class="icon-circle">
                            <i class="fas fa-heart-pulse"></i>
                        </div>
                        <h3>Advanced Recovery Protocols</h3>
                        <p>Enhanced recovery techniques to minimize downtime and optimize healing for faster, better results.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Consultation Process Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Your Surgical Journey</h2>
                    <p>A comprehensive approach from consultation to recovery</p>
                </div>
                
                <div class="journey-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <h3>Initial Consultation</h3>
                        <p>Detailed assessment of your goals, medical history, and personalized treatment recommendations.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <h3>Pre-Operative Planning</h3>
                        <p>Comprehensive health screening, 3D imaging when applicable, and detailed surgical planning.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <h3>Surgery Day</h3>
                        <p>Procedure performed in our accredited facility with dedicated anesthesia team and nursing staff.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <h3>Recovery & Aftercare</h3>
                        <p>24/7 support, regular follow-ups, and personalized recovery protocols for optimal healing.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Begin Your Transformation</h2>
                    <p>Schedule your confidential consultation with our surgical team today</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20surgical%20consultation%20please." 
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
/* Surgical Services Page Specific Styles */
.surgical-hero {
    background: linear-gradient(135deg, #C9B8A8 0%, #F7F3ED 100%);
}

/* Minor Procedures Grid */
.minor-procedures-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

.procedure-item {
    background: var(--white);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all var(--transition-medium);
}

.procedure-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.procedure-item h3 {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--primary);
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.procedure-item h3 i {
    font-size: 1.2rem;
    color: var(--primary-light);
}

.procedure-item p {
    color: var(--gray);
    line-height: 1.6;
}

/* Why Us Grid */
.why-us-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-top: 3rem;
}

.why-us-card {
    text-align: center;
}

.icon-circle {
    width: 90px;
    height: 90px;
    margin: 0 auto 25px;
    background: var(--primary-ultralight);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: var(--primary);
    transition: all var(--transition-medium);
}

.why-us-card:hover .icon-circle {
    transform: scale(1.1);
    background: var(--primary);
    color: var(--white);
}

.why-us-card h3 {
    font-family: var(--heading-font);
    font-size: 1.4rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.why-us-card p {
    color: var(--gray);
    line-height: 1.6;
}

/* Journey Timeline */
.journey-timeline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    margin-top: 3rem;
    position: relative;
}

.journey-timeline::before {
    content: '';
    position: absolute;
    top: 35px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: var(--primary-light);
    z-index: 0;
}

.timeline-item {
    text-align: center;
    position: relative;
    z-index: 1;
}

.timeline-number {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: var(--primary);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    font-weight: 600;
    font-family: var(--heading-font);
    box-shadow: 0 5px 20px rgba(175, 143, 90, 0.3);
}

.timeline-item h3 {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.timeline-item p {
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
    .minor-procedures-grid {
        grid-template-columns: 1fr;
    }
    
    .why-us-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .journey-timeline {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .journey-timeline::before {
        display: none;
    }
}
</style>

<?php
// Use the theme's modern footer
get_footer();
?>