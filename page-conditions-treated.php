<?php
/**
 * Template Name: Conditions Treated
 * Description: A comprehensive conditions page for Tempus Belgravia
 *
 * @package tempusbelgravia
 */

get_header();
?>

<style>
/* Conditions Page Styles */
.conditions-page {
    padding: 0;
    background-color: var(--white);
}

/* Screen reader only text */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}


/* Conditions Grid */
.conditions-section {
    padding: 80px 0;
}

.conditions-section:nth-child(even) {
    background: var(--light);
}

.condition-category {
    margin-bottom: 80px;
}

.condition-category:last-child {
    margin-bottom: 0;
}

.category-header {
    text-align: center;
    margin-bottom: 50px;
}

.category-header h2 {
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 15px;
}

.category-header p {
    font-size: 1.1rem;
    color: var(--gray);
    max-width: 700px;
    margin: 0 auto;
}

.conditions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}

.condition-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    cursor: pointer;
}

.condition-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.condition-card-image {
    height: 200px;
    overflow: hidden;
    position: relative;
}

.condition-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.condition-card:hover .condition-card-image img {
    transform: scale(1.1);
}

.condition-card-content {
    padding: 30px;
}

.condition-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: var(--primary);
}

.condition-card p {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 20px;
}

.condition-treatments {
    border-top: 1px solid rgba(0,0,0,0.05);
    padding-top: 20px;
}

.condition-treatments h4 {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--primary);
    margin-bottom: 10px;
}

.treatment-tags {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.treatment-tag {
    display: inline-block;
    padding: 8px 16px;
    background: rgba(139, 111, 76, 0.1);
    color: var(--primary);
    font-size: 0.85rem;
    border-radius: 20px;
    text-align: center;
    width: 100%;
}

/* Detailed Condition Modal Style */
.condition-detail {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
    overflow-y: auto;
    padding: 40px 20px;
}

.condition-detail.active {
    display: block;
}

.condition-detail-content {
    background: white;
    max-width: 900px;
    margin: 0 auto;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
}

.condition-detail-header {
    position: relative;
    height: 300px;
    overflow: hidden;
}

.condition-detail-header img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.condition-detail-header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 100%);
    display: flex;
    align-items: flex-end;
    padding: 40px;
}

.condition-detail-title {
    color: white;
}

.condition-detail-body {
    padding: 40px;
}

.close-detail {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
}

.close-detail i {
    color: var(--primary);
}

/* Search Section */
.condition-search {
    padding: 60px 0;
    background: var(--primary);
    text-align: center;
}

.search-container {
    max-width: 600px;
    margin: 0 auto;
}

.search-container h3 {
    color: white;
    margin-bottom: 20px;
}

.search-form {
    display: flex;
    gap: 10px;
}

.search-input {
    flex: 1;
    padding: 15px 20px;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
}

.search-button {
    padding: 15px 30px;
    background: white;
    color: var(--primary);
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

/* CTA Section */
.conditions-cta {
    padding: 100px 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #6b5b3a) 100%);
    text-align: center;
    color: white;
}

.conditions-cta h2 {
    color: white;
    margin-bottom: 20px;
}

.conditions-cta p {
    font-size: 1.2rem;
    opacity: 0.9;
    margin-bottom: 30px;
}

/* Responsive */
@media (max-width: 768px) {
    
    .conditions-grid {
        grid-template-columns: 1fr;
    }
    
    .search-form {
        flex-direction: column;
    }
    
    .condition-detail-body {
        padding: 20px;
    }
}

</style>

<main class="conditions-page">
    <!-- Conditions Sections -->
    <section class="conditions-section" style="padding-top: 60px;">
        <div class="container">
            <!-- Facial Aging Category -->
            <div id="facial-aging" class="condition-category">
                <div class="category-header">
                    <h2>Facial Aging Concerns</h2>
                    <p>Restore youthful contours and address signs of aging with our advanced treatments</p>
                    <div class="divider"></div>
                </div>
                
                <div class="conditions-grid">
                    <!-- Wrinkles & Fine Lines -->
                    <div class="condition-card" data-condition="wrinkles">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Artboard-83.png.webp" alt="Wrinkles and Fine Lines">
                        </div>
                        <div class="condition-card-content">
                            <h3>Wrinkles & Fine Lines</h3>
                            <p>Dynamic and static wrinkles that develop from facial expressions and aging, including crow's feet, forehead lines, and smile lines.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Anti-Wrinkle Injections</span>
                                    <span class="treatment-tag">Dermal Fillers</span>
                                    <span class="treatment-tag">RF Microneedling</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Volume Loss -->
                    <div class="condition-card" data-condition="volume-loss">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Cheek-Enhancement-scaled-1.jpeg.webp" alt="Facial Volume Loss">
                        </div>
                        <div class="condition-card-content">
                            <h3>Facial Volume Loss</h3>
                            <p>Age-related loss of facial fat and collagen leading to hollow cheeks, temples, and under-eye areas.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Cheek Fillers</span>
                                    <span class="treatment-tag">Temple Fillers</span>
                                    <span class="treatment-tag">Profhilo</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sagging Skin -->
                    <div class="condition-card" data-condition="sagging">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Thread-Lift-scaled-1.jpeg.webp" alt="Sagging Skin">
                        </div>
                        <div class="condition-card-content">
                            <h3>Skin Laxity & Sagging</h3>
                            <p>Loss of skin elasticity resulting in jowls, neck sagging, and overall facial drooping.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">HIFU</span>
                                    <span class="treatment-tag">Thread Lift</span>
                                    <span class="treatment-tag">Nefertiti Lift</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lip Concerns -->
                    <div class="condition-card" data-condition="lips">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp" alt="Lip Concerns">
                        </div>
                        <div class="condition-card-content">
                            <h3>Thin or Aging Lips</h3>
                            <p>Loss of lip volume, definition, and the development of lip lines with age.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Lip Fillers</span>
                                    <span class="treatment-tag">Lip Flip</span>
                                    <span class="treatment-tag">Perioral Lines Treatment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skin Quality Category -->
            <div id="skin-quality" class="condition-category">
                <div class="category-header">
                    <h2>Skin Quality Concerns</h2>
                    <p>Improve texture, tone, and overall skin health with targeted treatments</p>
                    <div class="divider"></div>
                </div>
                
                <div class="conditions-grid">
                    <!-- Acne & Scarring -->
                    <div class="condition-card" data-condition="acne">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Focus-Dual-Hifu-and-Microneedling.jpeg.webp" alt="Acne and Scarring">
                        </div>
                        <div class="condition-card-content">
                            <h3>Acne & Acne Scarring</h3>
                            <p>Active acne breakouts and residual scarring including ice pick, boxcar, and rolling scars.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Chemical Peels</span>
                                    <span class="treatment-tag">Microneedling</span>
                                    <span class="treatment-tag">Laser Resurfacing</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pigmentation -->
                    <div class="condition-card" data-condition="pigmentation">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/fotona-06-1.png.webp" alt="Pigmentation Issues">
                        </div>
                        <div class="condition-card-content">
                            <h3>Pigmentation & Dark Spots</h3>
                            <p>Sun damage, melasma, age spots, and uneven skin tone affecting facial clarity.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">IPL Therapy</span>
                                    <span class="treatment-tag">Chemical Peels</span>
                                    <span class="treatment-tag">Cosmelan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dull Skin -->
                    <div class="condition-card" data-condition="dull-skin">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Restilane-Skin-Booster-scaled-1.jpeg.webp" alt="Dull Skin">
                        </div>
                        <div class="condition-card-content">
                            <h3>Dull & Dehydrated Skin</h3>
                            <p>Lack of radiance, rough texture, and dehydration affecting skin luminosity.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Skin Boosters</span>
                                    <span class="treatment-tag">HydraFacial</span>
                                    <span class="treatment-tag">Mesotherapy</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rosacea -->
                    <div class="condition-card" data-condition="rosacea">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/vascullar.jpg.webp" alt="Rosacea">
                        </div>
                        <div class="condition-card-content">
                            <h3>Rosacea & Redness</h3>
                            <p>Chronic facial redness, visible blood vessels, and inflammatory skin conditions.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Vascular Laser</span>
                                    <span class="treatment-tag">IPL Therapy</span>
                                    <span class="treatment-tag">Medical Skincare</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body Concerns Category -->
            <div id="body-concerns" class="condition-category">
                <div class="category-header">
                    <h2>Body Concerns</h2>
                    <p>Transform your body contours and address specific concerns</p>
                    <div class="divider"></div>
                </div>
                
                <div class="conditions-grid">
                    <!-- Stubborn Fat -->
                    <div class="condition-card" data-condition="fat">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp" alt="Stubborn Fat">
                        </div>
                        <div class="condition-card-content">
                            <h3>Stubborn Fat Deposits</h3>
                            <p>Localized fat accumulations resistant to diet and exercise, including double chin and love handles.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Aqualyx</span>
                                    <span class="treatment-tag">EMSculpt Neo</span>
                                    <span class="treatment-tag">CoolSculpting</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cellulite -->
                    <div class="condition-card" data-condition="cellulite">
                        <div class="condition-card-image">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner%2016:9/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg" alt="Cellulite">
                        </div>
                        <div class="condition-card-content">
                            <h3>Cellulite & Skin Texture</h3>
                            <p>Dimpled skin appearance on thighs, buttocks, and abdomen affecting smooth contours.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Onda Coolwaves</span>
                                    <span class="treatment-tag">Velashape</span>
                                    <span class="treatment-tag">Mesotherapy</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Muscle Tone -->
                    <div class="condition-card" data-condition="muscle">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EMSculpting.jpeg.webp" alt="Muscle Tone">
                        </div>
                        <div class="condition-card-content">
                            <h3>Poor Muscle Definition</h3>
                            <p>Lack of muscle tone and definition despite regular exercise routines.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">EMSculpt Neo</span>
                                    <span class="treatment-tag">Body Contouring</span>
                                    <span class="treatment-tag">Nutritional Support</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stretch Marks -->
                    <div class="condition-card" data-condition="stretch-marks">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/New-Project-2.png.webp" alt="Stretch Marks">
                        </div>
                        <div class="condition-card-content">
                            <h3>Stretch Marks</h3>
                            <p>Red or white striations on skin from rapid growth, weight changes, or pregnancy.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Microneedling</span>
                                    <span class="treatment-tag">Laser Therapy</span>
                                    <span class="treatment-tag">PRP Treatment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hair & Wellness Category -->
            <div id="hair-wellness" class="condition-category">
                <div class="category-header">
                    <h2>Hair & Wellness Concerns</h2>
                    <p>Comprehensive solutions for hair restoration and overall wellness</p>
                    <div class="divider"></div>
                </div>
                
                <div class="conditions-grid">
                    <!-- Hair Loss -->
                    <div class="condition-card" data-condition="hair-loss">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/prp-hair-loos.jpeg.webp" alt="Hair Loss">
                        </div>
                        <div class="condition-card-content">
                            <h3>Hair Thinning & Loss</h3>
                            <p>Male and female pattern baldness, thinning hair, and receding hairlines.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">PRP Hair Therapy</span>
                                    <span class="treatment-tag">Mesotherapy</span>
                                    <span class="treatment-tag">Hair Supplements</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fatigue -->
                    <div class="condition-card" data-condition="fatigue">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/01/Nutrition-2.jpg.webp" alt="Fatigue">
                        </div>
                        <div class="condition-card-content">
                            <h3>Chronic Fatigue</h3>
                            <p>Persistent tiredness, low energy levels, and decreased vitality affecting daily life.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">IV Therapy</span>
                                    <span class="treatment-tag">NAD+ Infusions</span>
                                    <span class="treatment-tag">Wellness Consultation</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Immune Support -->
                    <div class="condition-card" data-condition="immune">
                        <div class="condition-card-image">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655689/sam-moghadam-l9VjM-Pp7-M-unsplash_1_emsz1m.jpg" alt="Immune Support">
                        </div>
                        <div class="condition-card-content">
                            <h3>Weakened Immunity</h3>
                            <p>Frequent illnesses, slow recovery, and compromised immune function.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Immune Boost IV</span>
                                    <span class="treatment-tag">Vitamin Therapy</span>
                                    <span class="treatment-tag">Nutritional Support</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stress & Aging -->
                    <div class="condition-card" data-condition="stress">
                        <div class="condition-card-image">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp" alt="Stress and Aging">
                        </div>
                        <div class="condition-card-content">
                            <h3>Stress-Related Aging</h3>
                            <p>Premature aging signs caused by chronic stress and lifestyle factors.</p>
                            <div class="condition-treatments">
                                <h4>Recommended Treatments</h4>
                                <div class="treatment-tags">
                                    <span class="treatment-tag">Exosome Therapy</span>
                                    <span class="treatment-tag">Stress Relief IV</span>
                                    <span class="treatment-tag">Holistic Wellness</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="condition-search">
        <div class="search-container">
            <h3>Can't Find Your Concern?</h3>
            <p style="color: white; opacity: 0.9; margin-bottom: 30px;">Contact us for a personalized consultation</p>
            <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20discuss%20my%20specific%20concern." class="cta-button cta-button-white">Get Expert Advice</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="conditions-cta">
        <div class="container">
            <h2>Ready to Address Your Concerns?</h2>
            <p>Our expert team is here to create a personalized treatment plan just for you</p>
            <a href="#book-now" class="cta-button cta-button-white">Book Your Consultation</a>
        </div>
    </section>

    <!-- Book Now Section -->
    <section id="book-now" class="book-now-section" style="background: var(--light); padding: 80px 0;">
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 50px;">
                <h2>Start Your Treatment Journey</h2>
                <p class="subtitle">Book a consultation to discuss your concerns with our expert team</p>
                <div class="divider"></div>
            </div>
            
            <div class="book-now-content" style="max-width: 900px; margin: 0 auto;">
                <div class="booking-form-container" style="background: white; padding: 50px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <iframe aria-label='Contact Us' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.eu/foundershealth1/form/ContactUs/formperma/2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4'></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Category dropdown navigation
document.addEventListener('DOMContentLoaded', function() {
    const categoryDropdown = document.getElementById('category-select');
    
    if (categoryDropdown) {
        categoryDropdown.addEventListener('change', function() {
            const selectedValue = this.value;
            
            if (selectedValue && selectedValue.startsWith('#')) {
                const targetId = selectedValue.substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    // Calculate header height for offset
                    const header = document.querySelector('.site-header') || document.querySelector('header');
                    const headerHeight = header ? header.offsetHeight : 100;
                    const targetPosition = targetSection.offsetTop - headerHeight - 20;
                    
                    // Smooth scroll to target section
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Reset dropdown to default option after navigation
                    setTimeout(() => {
                        this.selectedIndex = 0;
                    }, 100);
                }
            }
        });
    }
});
</script>

<?php get_footer(); ?>