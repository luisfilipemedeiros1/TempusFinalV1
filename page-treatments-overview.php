<?php
/**
 * Template Name: Treatments Overview
 * Description: Overview page displaying all treatments with card layout
 *
 * @package tempusbelgravia
 */

get_header();
?>

<!-- Include membership CSS for card styling -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/membership-v2.css">

<style>
/* Additional styles for treatments overview */
.treatments-overview-page {
    padding: 0;
    background-color: var(--light);
}

/* Hero Banner Styles */
.treatments-hero-banner {
    position: relative;
    height: 500px;
    width: 100%;
    overflow: hidden;
    margin-bottom: 60px;
}

.treatments-hero-banner .banner-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transform: scale(1.05);
    transition: transform 10s ease;
}

.treatments-hero-banner:hover .banner-background {
    transform: scale(1.1);
}

.treatments-hero-banner .banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.5) 100%);
}

.treatments-hero-banner .banner-content {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    z-index: 2;
}

.treatments-hero-banner .banner-title {
    color: var(--white);
    font-size: 4rem;
    font-weight: 300;
    margin-bottom: 20px;
    font-family: var(--display-font);
    letter-spacing: 2px;
    text-transform: uppercase;
}

.treatments-hero-banner .banner-subtitle {
    color: var(--white);
    font-size: 1.4rem;
    font-weight: 300;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.treatments-intro {
    text-align: center;
    padding: 40px 0;
    margin-bottom: 40px;
    border-bottom: 1px solid var(--light-gray);
}

.treatments-intro p {
    font-size: 1.3rem;
    color: var(--gray);
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.8;
}

.treatments-header {
    text-align: center;
    margin-bottom: 60px;
}

.treatments-header h1 {
    color: var(--primary);
    font-size: 3rem;
    margin-bottom: 20px;
    font-family: var(--heading-font);
}

.treatments-header p {
    font-size: 1.2rem;
    color: var(--gray);
    max-width: 800px;
    margin: 0 auto;
}

.category-section {
    margin-bottom: 80px;
}

.category-title {
    text-align: center;
    margin-bottom: 40px;
}

.category-title h2 {
    color: var(--primary);
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-family: var(--heading-font);
}

.category-divider {
    width: 80px;
    height: 2px;
    background-color: var(--primary);
    margin: 20px auto;
}

/* Override treatments grid for better spacing */
.treatments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

.treatment-card {
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.treatment-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.treatment-card-img {
    height: 250px;
    overflow: hidden;
}

.treatment-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.treatment-card-content {
    padding: 30px;
    display: flex;
    flex-direction: column;
    height: calc(100% - 250px);
}

.treatment-card h3 {
    color: var(--primary) !important;
    font-size: 1.5rem;
    margin-bottom: 15px;
    font-family: var(--heading-font);
}

.treatment-card p {
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}

.treatment-button {
    align-self: flex-start;
    margin-top: auto;
}

/* Treatment Price Styles - Removed, using badge system instead */

/* Book Now Section Styles */
.book-now-section .contact-method-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}

@media (max-width: 768px) {
    .book-now-section .booking-form-container {
        padding: 30px 20px !important;
    }
    
    .book-now-section .location-info {
        padding: 30px 20px !important;
    }
    
    .book-now-section h2 {
        font-size: 2rem !important;
    }
    
    .book-now-section .subtitle {
        font-size: 1.1rem !important;
        padding: 0 20px;
    }
}

@media (max-width: 768px) {
    .treatments-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .treatments-hero-banner {
        height: 350px;
    }
    
    .treatments-hero-banner .banner-title {
        font-size: 2.5rem;
    }
    
    .treatments-hero-banner .banner-subtitle {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    .treatments-intro p {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    .category-title h2 {
        font-size: 1.8rem;
    }
}
/* All treatments now have unique images from the website */
</style>

<main id="main-content" class="treatments-overview-page">
    <!-- Hero Banner Section -->
    <div class="treatments-hero-banner">
        <div class="banner-background" style="background-image: url('https://res.cloudinary.com/drtatej7i/image/upload/t_Banner%2016:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg');"></div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <div class="container">
                <h1 class="banner-title fade-in-up">Our Treatments</h1>
                <p class="banner-subtitle fade-in-up">Explore our comprehensive range of aesthetic treatments and wellness solutions</p>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Page Introduction -->
        <div class="treatments-intro fade-in">
            <p>Each treatment is designed to help you look and feel your best, delivered by our expert team in a luxurious, discreet setting.</p>
        </div>

        <!-- Facial Aesthetics Category -->
        <section id="facial-aesthetics" class="category-section">
            <div class="category-title fade-in">
                <h2>Facial Aesthetics</h2>
                <div class="category-divider"></div>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- Lip Enhancement -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/lip-enhancement/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp" alt="Lip Enhancement" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Lip Enhancement</h3>
                        <p>Create fuller, more defined lips with our expert lip filler treatments for natural-looking results.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/lip-enhancement/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Cheek Enhancement -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/cheek-enhancement/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Cheek-Enhancement-scaled-1.jpeg.webp" alt="Cheek Enhancement" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Cheek Enhancement</h3>
                        <p>Restore volume and lift to your cheeks for a youthful, contoured appearance.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/cheek-enhancement/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Chin Filler -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/chin-filler/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Chin Filler" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Chin Filler</h3>
                        <p>Enhance your profile and facial balance with precision chin augmentation.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/chin-filler/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Jawline Filler -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/jawline-filler/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/jawline-filler-scaled-1.jpeg.webp" alt="Jawline Filler" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Jawline Filler</h3>
                        <p>Define and sculpt your jawline for a more structured, youthful appearance.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/jawline-filler/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Temple Filler -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/temple-filler/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Temple-Filler-scaled-1.jpeg.webp" alt="Temple Filler" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Temple Filler</h3>
                        <p>Restore volume to hollow temples for a refreshed, rejuvenated look.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/temple-filler/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Nose Reshaping -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £600</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/nose-reshaping/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Nose-Reshaping-scaled-1.jpeg.webp" alt="Nose Reshaping" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Nose Reshaping</h3>
                        <p>Non-surgical rhinoplasty to refine and balance your nasal profile.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/nose-reshaping/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wrinkle Treatments Category -->
        <section id="wrinkle-treatments" class="category-section">
            <div class="category-title fade-in">
                <h2>Wrinkle Treatments</h2>
                <div class="category-divider"></div>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- Face Wrinkles -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £295</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/face-wrinkles/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Artboard-83.png.webp" alt="Face Wrinkles" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Face Wrinkles</h3>
                        <p>Smooth away fine lines and wrinkles for a refreshed, youthful appearance.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/face-wrinkles/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Under Eye -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £600</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/under-eye/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/under-eye-scaled-1.jpeg.webp" alt="Under Eye" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Under Eye Treatment</h3>
                        <p>Reduce dark circles and hollows for brighter, more youthful-looking eyes.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/under-eye/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Brow Lift -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £400</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/brow-lift/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Brow-Lift-scaled-1.jpeg.webp" alt="Brow Lift" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Brow Lift</h3>
                        <p>Elevate and shape your brows for a more open, refreshed appearance.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/brow-lift/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Nefertiti Neck Lift -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £495</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/nefertiti-neck-lift/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/8-point-lift-scaled-1.jpeg.webp" alt="Nefertiti Neck Lift" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Nefertiti Neck Lift</h3>
                        <p>Non-surgical neck lifting and contouring for a more defined jawline.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/nefertiti-neck-lift/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Medical Aesthetics Category -->
        <section id="medical-aesthetics" class="category-section">
            <div class="category-title fade-in">
                <h2>Medical Aesthetics</h2>
                <div class="category-divider"></div>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- Skin Boosters -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/skin-boosters/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Restilane-Skin-Booster-scaled-1.jpeg.webp" alt="Skin Boosters" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Skin Boosters</h3>
                        <p>Deep hydration treatments that improve skin quality from within.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/skin-boosters/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Profhilo Face -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/profhilo-face/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Profhilo-Face-scaled-1.jpeg.webp" alt="Profhilo Face" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Profhilo Face</h3>
                        <p>Revolutionary bio-remodelling treatment for skin laxity and hydration.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/profhilo-face/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Mesotherapy -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/mesotherapy/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/mesotherapy-treatment-2021-08-26-19-52-34-utc-scaled-1.jpeg.webp" alt="Mesotherapy" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Mesotherapy</h3>
                        <p>Targeted micro-injections to rejuvenate and revitalize your skin.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/mesotherapy/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- PRP Facial -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £600</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/prp-facial/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/PRP-injection.jpeg.webp" alt="PRP Facial" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>PRP Facial (Vampire Facial)</h3>
                        <p>Platelet Rich Plasma therapy using your body's own healing factors.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/prp-facial/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- AquaGold -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/aquagold/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/aquagold.jpeg.webp" alt="AquaGold" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>AquaGold®</h3>
                        <p>Micro-channeling device for painless delivery of custom cocktails. Base £350, Firming £450, with Skin Booster £550.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/aquagold/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Dermapen Microneedling -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/dermapen-microneedling/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Dermapen.jpeg.webp" alt="Dermapen Microneedling" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Dermapen® Micro-needling</h3>
                        <p>Advanced micro-needling treatment for skin rejuvenation and collagen stimulation.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/dermapen-microneedling/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Hydrafacial -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £250</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/hydrafacial/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Hydrafacial-Bespoke.jpeg.webp" alt="Hydrafacial" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Hydrafacial Bespoke</h3>
                        <p>Deep cleansing, exfoliation, and hydration in one luxurious treatment.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/hydrafacial/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- PRX-T33 -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £250</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/prx-t33/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/prx.png.webp" alt="PRX-T33" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>PRX-T33 / Skin Peels</h3>
                        <p>Revolutionary biorevitalization peel with no downtime.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/prx-t33/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Tempus Bespoke Facial -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/tempus-bespoke-facial/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Tempus-Bespoke-Facial.jpeg.webp" alt="Tempus Bespoke Facial" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Tempus Bespoke Facial</h3>
                        <p>Customized luxury facial treatment tailored to your skin's unique needs.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/tempus-bespoke-facial/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- IPL -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/ipl/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/ultrasonic-massager-light-skin-treatment-the-wom-2022-12-20-16-33-52-utc-scaled-1.jpeg.webp" alt="IPL" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>IPL Redness/Pigmentation</h3>
                        <p>Intense Pulsed Light therapy for redness, pigmentation, and sun damage.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/ipl/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Fotona 4D -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £500</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-4d/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/fotana.jpeg.webp" alt="Fotona 4D" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Fotona 4D Rejuvenation</h3>
                        <p>Revolutionary four-dimensional laser facelift treatment.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-4d/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Fotona 3D -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £300</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-3d/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/fotana.jpeg.webp" alt="Fotona 3D" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Fotona 3D Rejuvenation</h3>
                        <p>Three-dimensional laser treatment for comprehensive facial rejuvenation.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-3d/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Fotona Lip Lase -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £150</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-lip-lase/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp" alt="Fotona Lip Lase" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Fotona Lip Lase</h3>
                        <p>Non-invasive laser lip plumping and smoothing treatment.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-lip-lase/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Fotona Smooth Eye -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £150</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-smooth-eye/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/under-eye-scaled-1.jpeg.webp" alt="Fotona Smooth Eye" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Fotona Smooth Eye</h3>
                        <p>Laser treatment for periorbital wrinkles and eye bags.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/fotona-smooth-eye/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Fractional Laser -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £500</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/fractional-laser/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2023/07/1980157745-huge-1-scaled.webp" alt="Fractional Laser" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Fractional Laser</h3>
                        <p>Advanced resurfacing treatment for scars, wrinkles, and texture improvement.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/fractional-laser/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Vascular Laser -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/vascular-laser/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/Laser-scaled-1.jpeg.webp" alt="Vascular Laser" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Vascular Laser</h3>
                        <p>Targeted treatment for spider veins, broken capillaries, and vascular lesions.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/vascular-laser/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Dermalux LED -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £800</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/dermalux-led/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/dermalux.jpeg.webp" alt="Dermalux LED" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Dermalux LED</h3>
                        <p>Medical-grade LED phototherapy for skin rejuvenation and healing.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/dermalux-led/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Body Treatments Category -->
        <section id="body-treatments" class="category-section">
            <div class="category-title fade-in">
                <h2>Body Aesthetics</h2>
                <div class="category-divider"></div>
            </div>
            <div class="category-intro fade-in" style="text-align: center; margin-bottom: 40px;">
                <p style="font-size: 1.2rem; color: var(--gray); max-width: 900px; margin: 0 auto; line-height: 1.8;">
                    At Tempus Lounge, body treatments are more than contouring - they're a full-spectrum approach to vitality and refinement. Using advanced technologies and regenerative therapies, we sculpt, tone, and rejuvenate from the inside out. Each protocol is tailored to your physiology, combining cellular optimization, fat reduction, and tissue regeneration for results that are both visible and enduring.
                </p>
                <p style="font-size: 1.1rem; color: var(--primary); max-width: 900px; margin: 20px auto 0; font-weight: 600;">
                    Book a course of 4 body treatments to receive 10% off, or a course of 6 treatments to receive 20% off the package cost.
                </p>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- EMSculpt Neo -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £2,995</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/emsculpt-neo/">
                            <img src="https:"https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EMSculpting.jpeg.webp" alt="EMSculpt Neo" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>EMSculpt Neo</h3>
                        <p>Build muscle and reduce fat simultaneously with electromagnetic technology.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/emsculpt-neo/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Aqualyx -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £150</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/aqualyx-fat-dissolving/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp" alt="Aqualyx" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Lipolysis (Aqualyx/Cincelar)</h3>
                        <p>Non-surgical fat reduction treatment for stubborn pockets of fat.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/aqualyx-fat-dissolving/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Onda -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/onda/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/vascullar.jpg.webp" alt="Onda" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Onda</h3>
                        <p>Coolwaves technology for cellulite reduction and skin tightening. 1 area £350, 2 areas £560, Chin £400.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/onda/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Velashape -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/velashape/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/vascullar.jpg.webp" alt="Velashape" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Velashape</h3>
                        <p>Body contouring treatment combining multiple technologies. 1 area £350, 2 areas £560.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/velashape/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- HIFU Body -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £350</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/hifu-body/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Hifu-scaled-1.jpeg.webp" alt="HIFU Body" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>HIFU Body</h3>
                        <p>High-Intensity Focused Ultrasound for body contouring and skin tightening.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/hifu-body/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- RF Microneedling Body -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £250</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling-body/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Focus-Dual-Hifu-and-Microneedling.jpeg.webp" alt="RF Microneedling Body" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>RF Microneedling Body</h3>
                        <p>Radiofrequency microneedling for body skin tightening and texture improvement.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling-body/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Non Surgical BBL -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £450</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/non-surgical-bbl/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp" alt="Non Surgical BBL" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Non Surgical BBL</h3>
                        <p>Brazilian Butt Lift using Sculptra or Lanluma for natural enhancement.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/non-surgical-bbl/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Profhilo Body -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £700</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/profhilo-body/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Profhilo-Face-scaled-1.jpeg.webp" alt="Profhilo Body" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Profhilo Body</h3>
                        <p>Bio-remodelling treatment for body skin laxity and hydration.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/profhilo-body/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Dermapen Body -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £150</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/dermapen-body/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Dermapen.jpeg.webp" alt="Dermapen Body" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Dermapen® Body</h3>
                        <p>Micro-needling treatment for body areas - stretch marks, scars, and skin texture.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/dermapen-body/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Advanced Treatments Category -->
        <section id="advanced-treatments" class="category-section">
            <div class="category-title fade-in">
                <h2>Advanced Treatments</h2>
                <div class="category-divider"></div>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- HIFU -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £1,499</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/hifu-high-intensity-focused-ultrasound/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Hifu-scaled-1.jpeg.webp" alt="HIFU" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>HIFU Full Face & Neck</h3>
                        <p>High-Intensity Focused Ultrasound for non-surgical lifting and tightening.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/hifu-high-intensity-focused-ultrasound/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Thread Lift -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £400</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/thread-lift/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Thread-Lift-scaled-1.jpeg.webp" alt="Thread Lift" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Thread Lift</h3>
                        <p>Minimally invasive lifting treatment using dissolvable threads. Silhouette Soft® £400 per thread.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/thread-lift/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- RF Microneedling -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £750</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Focus-Dual-Hifu-and-Microneedling.jpeg.webp" alt="RF Microneedling" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>RF Microneedling Full Face & Neck</h3>
                        <p>Combine radiofrequency with microneedling for superior skin rejuvenation.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- PRP Hair Loss -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £600</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/prp-hair-loss-therapy/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/prp-hair-loos.jpeg.webp" alt="PRP Hair Loss" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>PRP Hair Loss Therapy</h3>
                        <p>Natural hair restoration using your body's own growth factors.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/prp-hair-loss-therapy/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- IV Infusions Category -->
        <section id="iv-infusions" class="category-section">
            <div class="category-title fade-in">
                <h2>IV Infusions</h2>
                <div class="category-divider"></div>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- Energy Booster -->
                <div class="treatment-card scale-in">
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/energy-booster/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655689/sam-moghadam-l9VjM-Pp7-M-unsplash_1_emsz1m.jpg" alt="Energy Booster" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Energy Booster</h3>
                        <p>Revitalize your body and mind with our energy-enhancing IV drip.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/energy-booster/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Immuno Support -->
                <div class="treatment-card scale-in">
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/immuno-support-370/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655689/sam-moghadam-l9VjM-Pp7-M-unsplash_1_emsz1m.jpg" alt="Immuno Support" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Immuno Support</h3>
                        <p>Boost your immune system with targeted vitamins and minerals.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/immuno-support-370/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Surgical Services Category -->
        <section id="surgical-services" class="category-section">
            <div class="category-title fade-in">
                <h2>Surgical Services & Minor Ops</h2>
                <div class="category-divider"></div>
            </div>
            <div class="category-intro fade-in" style="text-align: center; margin-bottom: 40px;">
                <p style="font-size: 1.2rem; color: var(--gray); max-width: 900px; margin: 0 auto; line-height: 1.8;">
                    Our Plastic Surgeons offer a full range of procedures including breast augmentation, reduction, uplift, implant removal and exchange, liposuction and blepharoplasty. The procedures are conducted at our plastic surgeon's surgery of choice, offsite. Surgical consultations are conducted at Tempus Lounge.
                </p>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- Surgical Consultation -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £250</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/surgical-consultation/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Artboard-83.png.webp" alt="Surgical Consultation" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Surgical Consultation</h3>
                        <p>Expert consultation with our plastic surgeons to discuss your surgical options.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/surgical-consultation/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Mole Removal Face -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £595</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/mole-removal/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Mole Removal Face" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Mole Removal Face</h3>
                        <p>Safe and precise removal of facial moles with minimal scarring.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/mole-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Mole Removal Body -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £495</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/mole-removal/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Mole Removal Body" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Mole Removal Body</h3>
                        <p>Professional removal of body moles using advanced surgical techniques.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/mole-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Skin Tag Removal -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £200</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/skin-tag-removal/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Skin Tag Removal" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Skin Tag Removal</h3>
                        <p>Quick and painless removal of unwanted skin tags.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/skin-tag-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Keloid Scar Removal -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £550</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/keloid-scar-removal/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Keloid Scar Removal" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Keloid Scar Removal</h3>
                        <p>Specialized treatment for raised keloid scars to improve appearance.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/keloid-scar-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Split Earlobe Repair -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £800</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/earlobe-repair/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Split Earlobe Repair" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Split Earlobe Repair</h3>
                        <p>Surgical repair of torn or stretched earlobes. 1 ear £800, 2 ears £1400.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/earlobe-repair/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Steroid Injection -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £150</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/steroid-injection/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Steroid Injection" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Steroid Injection</h3>
                        <p>Targeted steroid injections for inflammatory conditions and scar treatment.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/steroid-injection/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Scar Revision -->
                <div class="treatment-card scale-in">
                    <div class="treatment-badges">
                        <span class="badge badge-price">Starting at £1000</span>
                    </div>
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/scar-revision/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655993/pablo-merchan-montes-rrcEoas5d5A-unsplash_gshplk.jpg" alt="Scar Revision" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Scar Revision</h3>
                        <p>Advanced surgical techniques to improve scar appearance. Face £1000, Body £1200.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/scar-revision/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Laser Hair Removal Category -->
        <section id="laser-hair-removal" class="category-section">
            <div class="category-title fade-in">
                <h2>Laser Hair Removal</h2>
                <div class="category-divider"></div>
            </div>
            <div class="category-intro fade-in" style="text-align: center; margin-bottom: 40px;">
                <p style="font-size: 1.2rem; color: var(--gray); max-width: 900px; margin: 0 auto; line-height: 1.8;">
                    State-of-the-art laser technology for permanent hair reduction. Safe and effective for all skin types.
                </p>
            </div>
            
            <!-- Ladies Section -->
            <div class="subcategory-section" style="margin-bottom: 60px;">
                <h3 style="text-align: center; color: var(--primary); font-size: 2rem; margin-bottom: 30px;">Ladies Hair Removal</h3>
                <div class="treatments-grid fade-in-stagger">
                    <!-- Small Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £100</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/ultrasonic-massager-light-skin-treatment-the-wom-2022-12-20-16-33-52-utc-scaled-1.jpeg.webp" alt="Small Areas Laser" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Small Areas</h3>
                            <p>Upper lip, Chin, Ears, Stomach, Decolletage, or Areola.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Medium Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £120</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/HIFU-1.jpeg.webp" alt="Medium Areas Laser" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Medium Areas</h3>
                            <p>Hairline, Sideburns, Underarm, Bikini, or Lower leg.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Large Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £150</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Restilane-Skin-Booster-scaled-1.jpeg.webp" alt="Large Areas Laser" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Large Areas</h3>
                            <p>Jawline, Neck, Hollywood, Brazilian, Bikini, Lower Arm, or Thighs.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Extra Large Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £200</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/01/pexels-nataliya-vaitkevich-8830485-scaled-1.jpeg.webp" alt="Extra Large Areas Laser" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Extra Large Areas</h3>
                            <p>Full face or Full arm treatments.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Full Leg -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £250</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/Laser-scaled-1.jpeg.webp" alt="Full Leg Laser" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Full Leg</h3>
                            <p>Complete leg hair removal for smooth, hair-free skin.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Full Body -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £800</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/young-woman-getting-microcurrents-skin-cleansing-a-2022-12-16-21-51-46-utc-scaled-1.jpeg.webp" alt="Full Body Laser" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Full Body</h3>
                            <p>Comprehensive full body laser hair removal package.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Men's Section -->
            <div class="subcategory-section">
                <h3 style="text-align: center; color: var(--primary); font-size: 2rem; margin-bottom: 30px;">Men's Hair Removal</h3>
                <div class="treatments-grid fade-in-stagger">
                    <!-- Small Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £100</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/RF-microneedling-body.jpeg.webp" alt="Men's Small Areas" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Small Areas</h3>
                            <p>Neck, Ears, or Eyebrows grooming.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Medium Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £120</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/young-woman-getting-microcurrents-skin-cleansing-a-2022-12-16-21-51-46-utc-scaled-1.jpeg.webp" alt="Men's Medium Areas" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Medium Areas</h3>
                            <p>Back of Neck or Lower Leg treatments.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Large Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £150</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/03/Celliute.jpeg.webp" alt="Men's Large Areas" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Large Areas</h3>
                            <p>Beard shaping or Thighs treatment.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Extra Large Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £200</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Focus-Dual-Hifu-and-Microneedling.jpeg.webp" alt="Men's Extra Large Areas" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Extra Large Areas</h3>
                            <p>Lower back, Under Arms, Lower Arm, or Male Bikini.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- XXL Areas -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £300</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp" alt="Men's XXL Areas" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>XXL Areas</h3>
                            <p>Shoulders, Chest, Stomach, Full Arms, Full Leg, or Male Hollywood.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Back & Shoulders -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £400</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp" alt="Back & Shoulders" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Back & Shoulders</h3>
                            <p>Complete back and shoulders or buttocks treatment.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>

                    <!-- Men's Full Body -->
                    <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £800</span>
                        </div>
                        <div class="treatment-card-img">
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/">
                                <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Julia-Hunter-Facial-1.png.webp" alt="Men's Full Body" loading="lazy">
                            </a>
                        </div>
                        <div class="treatment-card-content">
                            <h3>Full Body</h3>
                            <p>Comprehensive full body laser hair removal for men.</p>
                            <a href="https://tempusbelgravia.co.uk/treatment/laser-hair-removal/" class="treatment-button cta-button-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    
    <!-- Book Now Section -->
    <section id="book-now" class="book-now-section" style="background: var(--primary-ultralight); padding: 80px 0; position: relative;">
        <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
        <div class="container">
            <div class="section-title fade-in-up" style="text-align: center; margin-bottom: 50px;">
                <h2 style="color: var(--primary); font-size: 3rem; margin-bottom: 20px;">Ready to Begin Your Journey?</h2>
                <p class="subtitle" style="color: var(--gray); font-size: 1.3rem; max-width: 800px; margin: 0 auto;">Schedule your personalised consultation and discover the perfect treatment plan tailored to your unique needs and aesthetic goals.</p>
                <div class="divider" style="margin: 30px auto;"></div>
            </div>
            
            <div class="book-now-content" style="max-width: 900px; margin: 0 auto;">
                <!-- Booking Form -->
                <div class="booking-form-container fade-in" style="background: #fff; padding: 50px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); margin-bottom: 50px;">
                    <h3 style="text-align: center; margin-bottom: 30px; font-size: 2rem; color: var(--primary);">Request Your Consultation</h3>
                    <iframe data-tally-src="https://tally.so/embed/wANEXl?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" title="Book Your Appointment"></iframe>
                    <script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
                </div>
                
                <!-- Contact Methods -->
                <div class="contact-methods-grid fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 50px;">
                    <div class="contact-method-card" style="background: #fff; padding: 30px; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class="fas fa-phone-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px; display: block;"></i>
                        <h4 style="color: var(--primary); margin-bottom: 10px;">Call Us</h4>
                        <p style="color: var(--gray); margin-bottom: 15px;">Speak directly with our team</p>
                        <a href="tel:+442080373265" style="color: var(--primary); font-size: 1.1rem; font-weight: 600; text-decoration: none;">+44 (0)20 8037 3265</a>
                    </div>
                    
                    <div class="contact-method-card" style="background: #fff; padding: 30px; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class="fab fa-whatsapp" style="font-size: 2.5rem; color: #25D366; margin-bottom: 15px; display: block;"></i>
                        <h4 style="color: var(--primary); margin-bottom: 10px;">WhatsApp</h4>
                        <p style="color: var(--gray); margin-bottom: 15px;">Quick and convenient messaging</p>
                        <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20a%20consultation%20please." target="_blank" rel="noopener noreferrer" style="color: #25D366; font-size: 1.1rem; font-weight: 600; text-decoration: none;">+44 (0)7538 037973</a>
                    </div>
                    
                    <div class="contact-method-card" style="background: #fff; padding: 30px; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class="fas fa-envelope" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px; display: block;"></i>
                        <h4 style="color: var(--primary); margin-bottom: 10px;">Email</h4>
                        <p style="color: var(--gray); margin-bottom: 15px;">For detailed enquiries</p>
                        <a href="mailto:info@tempusbelgravia.co.uk" style="color: var(--primary); font-size: 1.1rem; font-weight: 600; text-decoration: none;">info@tempusbelgravia.co.uk</a>
                    </div>
                </div>
                
                <!-- Location Info -->
                <div class="location-info fade-in" style="background: #fff; padding: 40px; border-radius: 8px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <i class="fas fa-map-marker-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; display: block;"></i>
                    <h4 style="color: var(--primary); margin-bottom: 15px; font-size: 1.5rem;">Visit Our Belgravia Clinic</h4>
                    <address style="color: var(--gray); font-size: 1.1rem; line-height: 1.8; font-style: normal;">
                        Tempus Belgravia<br>
                        11A West Halkin Street<br>
                        Belgravia, London SW1X 8JL
                    </address>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Tempus+Belgravia,+11A+West+Halkin+Street,+London+SW1X+8JL" target="_blank" rel="noopener noreferrer" class="cta-button" style="margin-top: 20px; display: inline-block;">Get Directions</a>
                </div>
            </div>
        </div>
    </section>
    
</main>

<!-- Include membership JS for animations -->
<script src="<?php echo get_template_directory_uri(); ?>/js/membership-v2.js"></script>

<script>
// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    // Handle smooth scrolling for hash links
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Check if it's a hash link to the same page
            if (href.includes('#') && (href.startsWith('#') || href.includes(window.location.pathname))) {
                const targetId = href.split('#')[1];
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('.site-header').offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // If page loads with a hash, scroll to it after a short delay
    if (window.location.hash) {
        setTimeout(function() {
            const targetElement = document.querySelector(window.location.hash);
            if (targetElement) {
                const headerHeight = document.querySelector('.site-header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }, 100);
    }
});
</script>

<?php get_footer(); ?>