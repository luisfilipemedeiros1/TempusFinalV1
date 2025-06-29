<?php
/**
 * Template Name: Dermatology Page
 * Description: Modern dermatology treatments page with elegant design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero dermatology-hero">
            <div class="treatment-hero-content">
                <!-- Breadcrumb Navigation -->
                <div class="breadcrumb-nav">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span class="separator">></span>
                    <a href="<?php echo home_url('/treatments/'); ?>">Treatments</a>
                    <span class="separator">></span>
                    <span class="current">Dermatology</span>
                </div>
                <h1><?php the_field('heading-banner') ?: 'DERMATOLOGY'; ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner') ?: 'As the leading dermatology clinic in West London, we deliver exceptional medical and aesthetic skin care'; ?></p>
                <a href="#treatments" class="cta-button">Explore Our Treatments</a>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="intro-content">
                    <h2>Excellence in Medical & Cosmetic Dermatology</h2>
                    <p class="lead-text">As the leading dermatology clinic in West London, we have helped thousands of patients achieve healthier, clearer skin through our comprehensive range of medical-aesthetic treatments and expertise. Our dedicated team cares deeply about more than just your symptoms – we take the time to understand your unique skin concerns, desires and lifestyle to develop a customised long-term skincare strategy.</p>
                    <p class="lead-text">Whether you are looking to address an acute skin condition, reduce signs of ageing or damage, or want to implement preventative skincare habits, our holistic approach leverages cutting-edge technologies and techniques tailored specifically for your individual needs and goals.</p>
                </div>
            </div>
        </section>

        <!-- Medical Dermatology Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Medical Dermatology</h2>
                    <p>Comprehensive treatment for skin conditions with evidence-based medical approaches</p>
                </div>

                <div class="treatment-grid">
                    <?php 
                    $medical_treatments = array(
                        array(
                            'name' => 'Acne Treatment',
                            'description' => 'Advanced therapies including prescription medications, chemical peels, and laser treatments for all types of acne.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/prx.png.webp'
                        ),
                        array(
                            'name' => 'Rosacea Management',
                            'description' => 'Customized treatment plans combining topical therapies, oral medications, and laser therapy for rosacea control.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/ultrasonic-massager-light-skin-treatment-the-wom-2022-12-20-16-33-52-utc-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Eczema & Psoriasis',
                            'description' => 'Comprehensive care including phototherapy, biologics, and advanced topical treatments for chronic skin conditions.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg'
                        ),
                        array(
                            'name' => 'Skin Cancer Screening',
                            'description' => 'Full-body mole mapping and dermoscopy for early detection and prevention of skin cancer.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/cryopen.jpeg.webp'
                        ),
                        array(
                            'name' => 'Hyperpigmentation',
                            'description' => 'Targeted treatments for melasma, age spots, and post-inflammatory hyperpigmentation.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/10/Blue-Peel-Radiance-Treatment.png.webp'
                        ),
                        array(
                            'name' => 'Hair Loss Solutions',
                            'description' => 'Comprehensive evaluation and treatment including PRP therapy, medications, and nutritional support.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/prp-hair-loos.jpeg.webp'
                        )
                    );
                    
                    foreach($medical_treatments as $treatment): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $treatment['name']; ?></h3>
                            <p class="treatment-description"><?php echo $treatment['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20for%20<?php echo urlencode($treatment['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Cosmetic Dermatology Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Cosmetic Dermatology</h2>
                    <p>Enhance your natural beauty with our advanced aesthetic treatments</p>
                </div>

                <div class="treatment-grid">
                    <?php 
                    $cosmetic_treatments = array(
                        array(
                            'name' => 'Chemical Peels',
                            'description' => 'Medical-grade peels including VI Peel, TCA, and Jessner for skin rejuvenation and texture improvement.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/dermaplaning.jpeg.webp'
                        ),
                        array(
                            'name' => 'Microneedling',
                            'description' => 'Collagen induction therapy with PRP for acne scars, fine lines, and skin texture refinement.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/Dermapen-Microneedling.jpeg.webp'
                        ),
                        array(
                            'name' => 'Laser Resurfacing',
                            'description' => 'Fractional CO2 and Erbium laser treatments for dramatic skin rejuvenation and scar revision.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/uploads/2023/07/1980157745-huge-1-scaled.webp'
                        ),
                        array(
                            'name' => 'IPL Photofacial',
                            'description' => 'Intense pulsed light therapy for sun damage, redness, and pigmentation issues.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/fotana.jpeg.webp'
                        ),
                        array(
                            'name' => 'Dermabrasion',
                            'description' => 'Professional exfoliation treatment for smoother, more radiant skin.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp'
                        ),
                        array(
                            'name' => 'Scar Revision',
                            'description' => 'Advanced techniques including laser therapy, steroid injections, and surgical revision for all scar types.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/07/shutterstock_2291188561.webp'
                        )
                    );
                    
                    foreach($cosmetic_treatments as $treatment): ?>
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
            </div>
        </section>

        <!-- Conditions We Treat Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Conditions We Treat</h2>
                    <p>Comprehensive care for a wide range of dermatological conditions</p>
                </div>
                
                <div class="conditions-grid">
                    <div class="condition-category">
                        <h3><i class="fas fa-microscope"></i> Skin Conditions</h3>
                        <ul>
                            <li>Acne & Acne Scarring</li>
                            <li>Rosacea</li>
                            <li>Eczema & Dermatitis</li>
                            <li>Psoriasis</li>
                            <li>Melasma</li>
                            <li>Vitiligo</li>
                        </ul>
                    </div>
                    
                    <div class="condition-category">
                        <h3><i class="fas fa-sun"></i> Sun Damage</h3>
                        <ul>
                            <li>Age Spots</li>
                            <li>Sun Spots</li>
                            <li>Actinic Keratosis</li>
                            <li>Photoaging</li>
                            <li>Freckles</li>
                            <li>Solar Lentigines</li>
                        </ul>
                    </div>
                    
                    <div class="condition-category">
                        <h3><i class="fas fa-dna"></i> Hair & Nails</h3>
                        <ul>
                            <li>Alopecia</li>
                            <li>Pattern Baldness</li>
                            <li>Nail Fungus</li>
                            <li>Nail Psoriasis</li>
                            <li>Hair Thinning</li>
                            <li>Scalp Conditions</li>
                        </ul>
                    </div>
                    
                    <div class="condition-category">
                        <h3><i class="fas fa-allergies"></i> Allergic Conditions</h3>
                        <ul>
                            <li>Contact Dermatitis</li>
                            <li>Hives (Urticaria)</li>
                            <li>Drug Reactions</li>
                            <li>Atopic Dermatitis</li>
                            <li>Allergic Reactions</li>
                            <li>Patch Testing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>The Benefits of Seeing a Dermatologist</h2>
                    <p>A consultation with a dermatologist at our London clinic offers numerous skin care advantages</p>
                </div>
                
                <div class="why-choose-grid">
                    <div class="why-choose-item">
                        <div class="icon-wrapper">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>Accurate Diagnosis</h3>
                        <p>Our specialist is an expert in diagnosing different skin conditions through thorough medical history and physical examination.</p>
                    </div>
                    
                    <div class="why-choose-item">
                        <div class="icon-wrapper">
                            <i class="fas fa-atom"></i>
                        </div>
                        <h3>Latest Treatment Options</h3>
                        <p>We invest in the most advanced technologies and minimally-invasive procedures available for optimal results.</p>
                    </div>
                    
                    <div class="why-choose-item">
                        <div class="icon-wrapper">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Disease Management</h3>
                        <p>Comprehensive care for chronic conditions with long-term management and prevention strategies.</p>
                    </div>
                    
                    <div class="why-choose-item">
                        <div class="icon-wrapper">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Skin Cancer Screening</h3>
                        <p>Vigilant screening for melanoma and non-melanoma skin cancers with early detection protocols.</p>
                    </div>
                    
                    <div class="why-choose-item">
                        <div class="icon-wrapper">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Personalised Plans</h3>
                        <p>Customised treatment regimens based on your unique priorities, concerns, and lifestyle.</p>
                    </div>
                    
                    <div class="why-choose-item">
                        <div class="icon-wrapper">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Holistic Approach</h3>
                        <p>Comprehensive care that considers your overall health and well-being, not just symptoms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Treatment Comparison Table -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Common Dermatology Services</h2>
                    <p>Overview of our most popular treatments and what to expect</p>
                </div>
                
                <div class="comparison-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Treatment</th>
                                <th>Conditions Targeted</th>
                                <th>What to Expect</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Topical Medications</strong></td>
                                <td>Acne, rosacea, eczema, psoriasis, sun damage</td>
                                <td>Prescribed medicines applied directly to affected areas daily for weeks to months</td>
                            </tr>
                            <tr>
                                <td><strong>Chemical Peels</strong></td>
                                <td>Wrinkles, sun damage, acne scars, hyperpigmentation</td>
                                <td>Series of acid solutions to stimulate collagen and cell turnover</td>
                            </tr>
                            <tr>
                                <td><strong>Laser Treatments</strong></td>
                                <td>Vascular lesions, hair removal, rosacea, scarring</td>
                                <td>Targeted light pulses with minimal discomfort over multiple sessions</td>
                            </tr>
                            <tr>
                                <td><strong>Cryotherapy</strong></td>
                                <td>Warts, skin tags, precancerous lesions</td>
                                <td>Liquid nitrogen freezing in office with minor stinging sensation</td>
                            </tr>
                            <tr>
                                <td><strong>Microneedling</strong></td>
                                <td>Acne scars, wrinkles, enlarged pores</td>
                                <td>Collagen induction therapy with minimal downtime</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p class="text-center mt-4">All treatments are customised depending on skin characteristics, health history and individualised goals.</p>
            </div>
        </section>

        <!-- Suitability Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Am I a Suitable Candidate for Dermatology Services?</h2>
                </div>
                
                <div class="suitability-content">
                    <p class="lead-text text-center mb-4">Nearly everyone will experience skin issues at some point that could benefit from a dermatologist's perspective.</p>
                    
                    <h4 class="mb-3">Common indicators that a consultation may be worthwhile include:</h4>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Ongoing rashes, acne, or other concerning lesions without resolution</li>
                        <li><i class="fas fa-check-circle"></i> Changes in existing moles or freckles</li>
                        <li><i class="fas fa-check-circle"></i> A family or personal history of skin cancer</li>
                        <li><i class="fas fa-check-circle"></i> Skin conditions interfering with daily activities</li>
                        <li><i class="fas fa-check-circle"></i> Not achieving clear skin despite over-the-counter remedies</li>
                        <li><i class="fas fa-check-circle"></i> Worsening symptoms of conditions like eczema or psoriasis</li>
                        <li><i class="fas fa-check-circle"></i> Desire to reduce signs of sun damage, wrinkles or hyperpigmentation</li>
                    </ul>
                    
                    <p class="text-center mt-4">Our friendly staff are happy to discuss your individual circumstances and goals to determine if dermatologic care can help you achieve the vibrant, healthy skin you desire.</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2>Frequently Asked Questions</h2>
                </div>
                
                <div class="faq-wrapper">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long will it take to see results?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Timelines can vary significantly depending on the condition, treatment plan and individual response. Most see improvement within 4-12 weeks, though some advanced protocols may require several sessions spaced 4-6 weeks apart to achieve maximum benefit.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Is the treatment painful?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Discomfort levels range from minimal to mildly uncomfortable depending on the specific procedure. Our staff are experienced in minimising any potential pain through numbing agents or other relaxation techniques when required.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How much does a consultation cost?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our initial dermatology consultations start from £250 to accommodate all patients interested in our services. Follow-up visits and additional treatments are individually quoted after determining a tailored plan.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What should I expect at my first appointment?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>A new patient consultation involves a review of your medical history and goals, full-body skin exam and provisional diagnosis. Digital photos may be taken for before/after comparisons. Our friendly team is available to answer questions so you feel fully informed moving forward.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can dermatology improve my overall health?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Studies show clear skin promotes higher self-esteem and reduces stress levels which are linked to numerous medical benefits. Dermatologists also screen for skin cancer and conditions indicating internal illness, enabling early intervention when needed.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What steps can help care for my skin at home?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our clinician provided custom home regimens encompassing gentle cleansers, targeted treatments, SPF use and lifestyle modifications like stress management or dietary changes which aid in treatment and prevention of future flare-ups when paired with professional protocols.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long will results last after treatment?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Maintenance varies depending on the condition and intervention. We advise regular skin evaluations and re-treatment as needed for ongoing improvement and support in keeping skin healthy long-term. Consistent home therapies complement clinical services to lengthen the benefits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="treatment-cta-section">
            <div class="treatment-container">
                <div class="cta-content">
                    <h2>Book Your Dermatology Consultation Today</h2>
                    <p>To schedule an appointment with one of our expert dermatologists or to learn more about our holistic skincare services</p>
                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20dermatology%20consultation%20please." 
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
/* Dermatology Page Specific Styles */
.dermatology-hero {
    background: linear-gradient(135deg, #E8D5C4 0%, #F7F3ED 100%);
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

/* Conditions Grid */
.conditions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-top: 3rem;
}

.condition-category {
    background: var(--white);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.condition-category h3 {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--primary);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.condition-category h3 i {
    font-size: 1.5rem;
    color: var(--primary-light);
}

.condition-category ul {
    list-style: none;
    padding: 0;
}

.condition-category li {
    padding: 8px 0;
    color: var(--dark-text);
    border-bottom: 1px solid var(--light-gray);
    font-size: 0.95rem;
}

.condition-category li:last-child {
    border-bottom: none;
}

/* Why Choose Grid */
.why-choose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-top: 3rem;
}

.why-choose-item {
    text-align: center;
}

.icon-wrapper {
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

.why-choose-item:hover .icon-wrapper {
    transform: scale(1.1);
    background: var(--primary);
    color: var(--white);
}

.why-choose-item h3 {
    font-family: var(--heading-font);
    font-size: 1.3rem;
    color: var(--dark-text);
    margin-bottom: 15px;
}

.why-choose-item p {
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

/* Breadcrumb Navigation */
.breadcrumb-nav {
    margin-bottom: 30px;
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
}

.breadcrumb-nav a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-nav a:hover {
    color: var(--white);
}

.breadcrumb-nav .separator {
    margin: 0 10px;
    color: rgba(255, 255, 255, 0.5);
}

.breadcrumb-nav .current {
    color: var(--white);
}

/* Comparison Table */
.comparison-table {
    background: var(--white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    margin-top: 2rem;
}

.comparison-table table {
    width: 100%;
    border-collapse: collapse;
}

.comparison-table th {
    background: var(--primary);
    color: var(--white);
    padding: 20px;
    text-align: left;
    font-weight: 600;
    font-family: var(--heading-font);
}

.comparison-table td {
    padding: 20px;
    border-bottom: 1px solid var(--light-gray);
    vertical-align: top;
}

.comparison-table tr:last-child td {
    border-bottom: none;
}

.comparison-table tr:nth-child(even) {
    background: var(--light);
}

/* Suitability Section */
.suitability-content {
    max-width: 900px;
    margin: 0 auto;
}

.suitability-content h4 {
    color: var(--primary);
    font-family: var(--heading-font);
    font-size: 1.3rem;
    text-align: center;
    margin-top: 2rem;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 2rem 0;
}

.feature-list li {
    padding: 12px 0;
    padding-left: 40px;
    position: relative;
    color: var(--dark-text);
    line-height: 1.6;
}

.feature-list li i {
    position: absolute;
    left: 0;
    top: 15px;
    color: var(--primary);
    font-size: 1.2rem;
}

/* FAQ Section */
.faq-wrapper {
    max-width: 900px;
    margin: 0 auto;
    margin-top: 3rem;
}

.faq-item {
    background: var(--white);
    margin-bottom: 20px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
}

.faq-question {
    padding: 25px 30px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background 0.3s ease;
}

.faq-question:hover {
    background: var(--light);
}

.faq-question h3 {
    margin: 0;
    color: var(--dark-text);
    font-size: 1.2rem;
    font-family: var(--heading-font);
}

.faq-question i {
    color: var(--primary);
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 0 30px 25px;
    max-height: 500px;
}

.faq-answer p {
    color: var(--gray);
    line-height: 1.8;
}

/* Responsive */
@media (max-width: 768px) {
    .conditions-grid,
    .why-choose-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .intro-content h2 {
        font-size: 2rem;
    }
    
    .lead-text {
        font-size: 1.1rem;
    }
    
    .comparison-table {
        overflow-x: auto;
    }
    
    .comparison-table table {
        min-width: 600px;
    }
    
    .faq-question h3 {
        font-size: 1.1rem;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // FAQ Accordion
    $('.faq-question').click(function() {
        const faqItem = $(this).parent();
        faqItem.toggleClass('active');
        faqItem.siblings().removeClass('active');
    });
});
</script>

<?php
// Use the theme's modern footer
get_footer();
?>