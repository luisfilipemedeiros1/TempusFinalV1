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
            </div>
        </section>

        <!-- Body Treatments Category -->
        <section id="body-treatments" class="category-section">
            <div class="category-title fade-in">
                <h2>Body Treatments</h2>
                <div class="category-divider"></div>
            </div>
            <div class="treatments-grid fade-in-stagger">
                <!-- EMSculpt Neo -->
                <div class="treatment-card scale-in">
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
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/aqualyx-fat-dissolving/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp" alt="Aqualyx" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Aqualyx Fat Dissolving</h3>
                        <p>Non-surgical fat reduction treatment for stubborn pockets of fat.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/aqualyx-fat-dissolving/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Onda -->
                <div class="treatment-card scale-in">
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/onda/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/vascullar.jpg.webp" alt="Onda" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Onda</h3>
                        <p>Coolwaves technology for cellulite reduction and skin tightening.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/onda/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Velashape -->
                <div class="treatment-card scale-in">
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/velashape/">
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner%2016:9/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg" alt="Velashape" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Velashape</h3>
                        <p>Body contouring treatment combining multiple technologies for optimal results.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/velashape/" class="treatment-button cta-button-secondary">Learn More</a>
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
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/hifu-high-intensity-focused-ultrasound/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Hifu-scaled-1.jpeg.webp" alt="HIFU" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>HIFU</h3>
                        <p>High-Intensity Focused Ultrasound for non-surgical lifting and tightening.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/hifu-high-intensity-focused-ultrasound/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- Thread Lift -->
                <div class="treatment-card scale-in">
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/thread-lift/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Thread-Lift-scaled-1.jpeg.webp" alt="Thread Lift" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>Thread Lift</h3>
                        <p>Minimally invasive lifting treatment using dissolvable threads.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/thread-lift/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- RF Microneedling -->
                <div class="treatment-card scale-in">
                    <div class="treatment-card-img">
                        <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling/">
                            <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Focus-Dual-Hifu-and-Microneedling.jpeg.webp" alt="RF Microneedling" loading="lazy">
                        </a>
                    </div>
                    <div class="treatment-card-content">
                        <h3>RF Microneedling</h3>
                        <p>Combine radiofrequency with microneedling for superior skin rejuvenation.</p>
                        <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling/" class="treatment-button cta-button-secondary">Learn More</a>
                    </div>
                </div>

                <!-- PRP Hair Loss -->
                <div class="treatment-card scale-in">
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
                            <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg" alt="Energy Booster" loading="lazy">
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