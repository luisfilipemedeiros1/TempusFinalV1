<?php
/**
 * Template Name: Condition Template
 * Description: Modern conditions page template with ACF repeater support
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
                <h1><?php the_field('heading_banner') ?: 'Comprehensive Condition Treatment'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'Specialized care for multiple conditions with personalized treatment approaches'; ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#conditions" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php else: ?>
                <a href="#conditions" class="cta-button">Explore Treatments</a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>Personalized Treatment for Every Condition</h2>
                    <p class="lead-text">At Tempus Belgravia, we provide comprehensive care for a wide range of conditions. Our expert medical team creates personalized treatment plans that address your specific needs, ensuring optimal results and improved quality of life.</p>
                </div>
            </div>
        </section>

        <!-- Conditions Grid Section -->
        <section class="treatment-section alt-bg" id="conditions">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Available Treatments</h2>
                    <p>Professional solutions tailored to your specific condition</p>
                </div>

                <?php if( have_rows('conditions') ): ?>
                <div class="treatment-grid">
                    <?php while( have_rows('conditions') ): the_row(); ?>
                    <article class="treatment-card condition-card">
                        <div class="treatment-image">
                            <?php if( get_sub_field('contouring_image') ): ?>
                                <img src="<?php echo get_sub_field('contouring_image'); ?>" alt="<?php echo get_sub_field('contouring_name'); ?>">
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-condition.jpg" alt="<?php echo get_sub_field('contouring_name'); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo get_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php echo wp_trim_words(get_sub_field('contouring_description'), 25); ?></p>
                            
                            <?php 
                            $price = get_field('price_of_treatment');
                            if( $price ): ?>
                                <div class="treatment-price">
                                    <span class="price-label">From</span>
                                    <span class="price-value">£<?php echo $price; ?></span>
                                </div>
                            <?php endif; ?>
                            
                            <div class="treatment-actions">
                                <button class="treatment-link condition-info-btn" 
                                        data-condition="<?php echo esc_attr(get_sub_field('contouring_name')); ?>"
                                        data-image="<?php echo esc_attr(get_sub_field('contouring_image')); ?>"
                                        data-description="<?php echo esc_attr(get_sub_field('contouring_description')); ?>"
                                        data-price="<?php echo esc_attr($price); ?>">
                                    Learn More <i class="fas fa-arrow-right"></i>
                                </button>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20treatment%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Consultation</a>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
                <?php else: ?>
                    <div class="no-conditions-message">
                        <p>No conditions are currently configured. Please contact us to learn about our available treatments.</p>
                        <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20learn%20about%20your%20available%20condition%20treatments%20please." 
                           class="cta-button" 
                           target="_blank" 
                           rel="noopener noreferrer">Contact Us</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Treatment Approach Section -->
        <section class="treatment-section">
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

<!-- Condition Info Modal -->
<div class="condition-modal" id="conditionModal">
    <div class="condition-modal-overlay"></div>
    <div class="condition-modal-content">
        <div class="condition-modal-header">
            <h3 id="modalConditionName"></h3>
            <button class="condition-modal-close" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="condition-modal-body">
            <div class="condition-modal-image">
                <img id="modalConditionImage" src="" alt="">
            </div>
            <div class="condition-modal-details">
                <div class="condition-modal-description">
                    <p id="modalConditionDescription"></p>
                </div>
                <div class="condition-modal-price" id="modalConditionPrice" style="display: none;">
                    <span class="price-label">From</span>
                    <span class="price-value" id="modalPriceValue"></span>
                </div>
                <div class="condition-modal-actions">
                    <a href="https://wa.me/447538037973" 
                       class="cta-button" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       id="modalBookingLink">
                        Book Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Condition Page Specific Styles */
.conditions-hero {
    background: linear-gradient(135deg, #E1D4C7 0%, #F7F3ED 100%);
}

/* Treatment Grid */
.treatment-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 3rem;
}

/* Treatment Cards */
.treatment-card {
    background: var(--white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all var(--transition-medium);
}

.treatment-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(175, 143, 90, 0.15);
}

.treatment-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.treatment-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-medium);
}

.treatment-card:hover .treatment-image img {
    transform: scale(1.05);
}

.treatment-content {
    padding: 30px;
}

.treatment-name {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.treatment-description {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 20px;
}

.treatment-price {
    display: flex;
    align-items: baseline;
    gap: 8px;
    margin-bottom: 25px;
    padding: 15px;
    background: var(--primary-ultralight);
    border-radius: 8px;
    border-left: 3px solid var(--primary);
}

.price-label {
    font-size: 0.9rem;
    color: var(--gray);
}

.price-value {
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--primary);
    font-family: var(--heading-font);
}

.treatment-actions {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.treatment-link {
    background: none;
    border: 2px solid var(--primary);
    color: var(--primary);
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    transition: all var(--transition-medium);
    cursor: pointer;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.treatment-link:hover {
    background: var(--primary);
    color: var(--white);
    transform: translateY(-2px);
}

.cta-button-secondary {
    background: var(--primary);
    color: var(--white);
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all var(--transition-medium);
    text-align: center;
}

.cta-button-secondary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
}

/* No Conditions Message */
.no-conditions-message {
    text-align: center;
    padding: 60px 30px;
    background: var(--white);
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.no-conditions-message p {
    font-size: 1.1rem;
    color: var(--gray);
    margin-bottom: 30px;
}

/* Condition Modal */
.condition-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
}

.condition-modal.active {
    display: block;
}

.condition-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    cursor: pointer;
}

.condition-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: var(--white);
    border-radius: 15px;
    max-width: 800px;
    width: 90%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.condition-modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 30px 0;
}

.condition-modal-header h3 {
    font-family: var(--heading-font);
    font-size: 1.8rem;
    color: var(--dark-text);
    margin: 0;
}

.condition-modal-close {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: var(--gray);
    cursor: pointer;
    padding: 10px;
    border-radius: 50%;
    transition: all var(--transition-medium);
}

.condition-modal-close:hover {
    background: var(--light);
    color: var(--dark-text);
}

.condition-modal-body {
    padding: 30px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    align-items: start;
}

.condition-modal-image {
    border-radius: 10px;
    overflow: hidden;
}

.condition-modal-image img {
    width: 100%;
    height: auto;
    display: block;
}

.condition-modal-description {
    margin-bottom: 25px;
}

.condition-modal-description p {
    line-height: 1.6;
    color: var(--dark-text);
}

.condition-modal-price {
    display: flex;
    align-items: baseline;
    gap: 8px;
    margin-bottom: 30px;
    padding: 20px;
    background: var(--primary-ultralight);
    border-radius: 10px;
}

.condition-modal-actions .cta-button {
    display: inline-block;
    background: var(--primary);
    color: var(--white);
    padding: 15px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all var(--transition-medium);
}

.condition-modal-actions .cta-button:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
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
    .treatment-grid {
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
    
    .condition-modal-body {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .condition-modal-content {
        width: 95%;
    }
    
    .treatment-actions {
        flex-direction: column;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal functionality
    const modal = document.getElementById('conditionModal');
    const modalOverlay = modal.querySelector('.condition-modal-overlay');
    const modalClose = modal.querySelector('.condition-modal-close');
    const infoButtons = document.querySelectorAll('.condition-info-btn');
    
    // Open modal
    infoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const name = this.dataset.condition;
            const image = this.dataset.image;
            const description = this.dataset.description;
            const price = this.dataset.price;
            
            // Populate modal content
            document.getElementById('modalConditionName').textContent = name;
            document.getElementById('modalConditionImage').src = image;
            document.getElementById('modalConditionImage').alt = name;
            document.getElementById('modalConditionDescription').textContent = description;
            
            // Update booking link
            const bookingLink = document.getElementById('modalBookingLink');
            const whatsappText = `Hi Tempus Lounge, I'd like to book a consultation for ${name} treatment please.`;
            bookingLink.href = `https://wa.me/447538037973?text=${encodeURIComponent(whatsappText)}`;
            
            // Show/hide price
            const priceElement = document.getElementById('modalConditionPrice');
            if (price && price !== '') {
                document.getElementById('modalPriceValue').textContent = `£${price}`;
                priceElement.style.display = 'flex';
            } else {
                priceElement.style.display = 'none';
            }
            
            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close modal
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    modalClose.addEventListener('click', closeModal);
    modalOverlay.addEventListener('click', closeModal);
    
    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
});
</script>

<?php
// Use the theme's modern footer
get_footer();
?>