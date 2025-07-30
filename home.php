<?php
/**
 * Template Name: New Home Template Integrated
 * Description: A custom home page template using the theme's header, footer, and base styles. Requires specific inline styles for content sections.
 *
 * @package tempusbelgravia
 */

// Use the theme's header (includes <head>, <body>, theme header/nav)
get_header();
?>
<div class="new-home-content"> <?php // Optional wrapper div for scoping CSS ?>

<!--     Fixed Appointment Button - Uncomment if needed
    <div class="fixed-appointment">
        <div class="fixed-cta-text">Book Consultation</div>
        <a href="#contact" class="fixed-cta" aria-label="Book Consultation">
            <i class="fas fa-calendar-alt"></i>
        </a>
    </div>
    <a href="https://wa.me/YOUR_WHATSAPP_NUMBER" class="whatsapp-button" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a> -->

    <main id="genesis-content" class="new-home-main-content"> <?php // Use a unique ID or class if needed ?>
        <!-- Enhanced Hero Section -->
        <section class="hero">
            <div class="hero-background">
                <video class="hero-video" autoplay muted loop playsinline poster="https://tempusbelgravia.co.uk/wp-content/uploads/2022/11/3.-Final-Promotional-Video-Draft-2-Tempus-Belgravia-.mp4">
                    <source src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/11/3.-Final-Promotional-Video-Draft-2-Tempus-Belgravia-.mp4" type="video/mp4">
                    <!-- Fallback Image -->
                    <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Relax-restore.jpeg.webp" alt="Elegant interior of Tempus Lounge">
                </video>
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-content container"> <?php // Add .container or .wrap if needed for width constraint ?>
                <h1 class="fade-in-up" style="animation-delay: 0.3s; animation-play-state: running;">Visible Health & Vitality</h1>
                <p class="fade-in-up" style="animation-delay: 0.6s; animation-play-state: running;">Welcome to Tempus Lounge, your number one source of Visible Health & Vitality. Where pioneering specialists wield tomorrow's technologies - exosome therapy, polynucleotide regeneration, cellular optimization. Not just treatments, but your transformation made visible.</p>
                <div class="fade-in-up" style="animation-delay: 0.9s; animation-play-state: running;">
                    <a href="#treatments" class="cta-button cta-button-white">Explore Services</a> <?php // White background, Gold text on hero ?>
                    <a href="#contact" class="cta-button cta-button-secondary">Book Consultation</a> <?php // Transparent background, White text/border on hero ?>
                </div>
            </div>
            <div class="hero-scroll">
                 <a>
                </a>
            </div>          
            <div class="hero-badges">
                 <div class="hero-badge">
                    <i class="fas fa-shield-alt" style="font-size: 2.5rem; color: var(--accent-deep);" aria-hidden="true"></i> <!-- Decorative icon -->
                </div>
            </div>
        </section>

        <!-- Rotating Promotional Banner -->
        <section class="promo-banner-section">
            <div class="promo-banner-container">
                <div class="promo-banner-frame">
                    <!-- Banner 1: Body Contouring -->
                    <a href="#contact" class="promo-banner-slide active" aria-label="Body Contouring Treatment">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://i.ibb.co/93bSfrSC/tempuslounge-bodycontourbanner-mobile.webp">
                            <img src="https://i.ibb.co/Zzb9k67z/BODYCONTOURING.webp" 
                                 alt="Body Contouring Treatment" 
                                 class="promo-banner-image"
                                 loading="lazy">
                        </picture>
                    </a>
                    
                    <!-- Banner 2: 50% Off Skin Boosters -->
                    <a href="#contact" class="promo-banner-slide" aria-label="50% Off Skin Boosters">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://i.ibb.co/0j0wMf2x/skinboosters-mobile.webp">
                            <img src="https://i.ibb.co/Ty5fWPp/02.webp" 
                                 alt="50% Off Skin Boosters" 
                                 class="promo-banner-image"
                                 loading="lazy">
                        </picture>
                    </a>
                    
                    <!-- Banner 3: £100 Off -->
                    <a href="#contact" class="promo-banner-slide" aria-label="£100 Off Your Next Treatment">
                        <picture>
                            <source media="(max-width: 768px)" srcset="https://i.ibb.co/wNmqjmP3/next-treatment-mobile.webp">
                            <img src="https://i.ibb.co/Nd5SC8ZS/01.webp" 
                                 alt="£100 Off Your Next Treatment" 
                                 class="promo-banner-image"
                                 loading="lazy">
                        </picture>
                    </a>
                    
                    <!-- Navigation dots -->
                    <div class="promo-banner-dots">
                        <button class="promo-dot active" aria-label="Go to slide 1" data-slide="0"></button>
                        <button class="promo-dot" aria-label="Go to slide 2" data-slide="1"></button>
                        <button class="promo-dot" aria-label="Go to slide 3" data-slide="2"></button>
                    </div>
                </div>
            </div>
        </section>

         <!-- Brands We Work With Section -->
        <section id="brands" class="brands-section">
            <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,100 100,0 100,100"/></svg></div>
            <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                <h2 class="screen-reader-text">Trusted Technology & Product Partners</h2>
                <div class="brand-carousel-container">
                    <div class="brand-logos" id="brand-carousel" aria-label="Partner brands carousel">
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/aquagold/" aria-label="Aquagold"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/aquagold.png.webp" alt="Aquagold Logo" loading="lazy"></a></div>
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/anti-wrinkle-injections/" aria-label="Azzalure"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/azzalure.png.webp" alt="Azzalure Logo" loading="lazy"></a></div>
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/cryotherapy/" aria-label="Cryopen"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/cryopen.png.webp" alt="Cryopen Logo" loading="lazy"></a></div>
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/microneedling/" aria-label="Dermapen"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/dermapen.png.webp" alt="Dermapen Logo" loading="lazy"></a></div>
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/emsculpt/" aria-label="Emsculpt"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/emsculpt.png.webp" alt="Emsculpt Logo" loading="lazy"></a></div>
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/focus-dual/" aria-label="Focus Dual"><img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/10/focus.png" alt="Focus Dual Logo" loading="lazy"></a></div>
                        <div class="brand-logo"><a href="https://tempusbelgravia.co.uk/treatment/fotona4d-facelift/" aria-label="Fotona"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/fotona-06-1.png.webp" alt="Fotona Logo" loading="lazy"></a></div>
                        <!-- Add more logos here if needed, duplicates handled by JS -->
                    </div>
                    <button class="brand-nav brand-prev" aria-label="Previous brands"><i class="fas fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="brand-nav brand-next" aria-label="Next brands"><i class="fas fa-chevron-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </section>

        <!-- START: REVISED Signature Treatments Section -->
        <section id="treatments" class="featured-treatments">
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
            <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,100 100,0 100,100"/></svg></div>
            <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                <div class="section-title fade-in-up">
                     <h2>TEMPUS LOUNGE SIGNATURE TREATMENTS</h2>
                     <p class="subtitle">Where aesthetic excellence meets regenerative science. Experience treatments that compound into extraordinary results - your transformation made visible.</p>
                     <div class="divider"></div>
                 </div>
                 <div class="treatment-grid horizontal-scroll-container fade-in-stagger" data-autorotate="true">

                    <!-- Card 1: EMSculpt Neo - LIMITED TIME SUMMER SALE -->
                     <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-trending">Summer Sale</span>
                             <span class="badge badge-price"><s style="opacity: 0.6;">£300</s> £175</span>
                         </div>
                         <div class="treatment-card-img"><img src="https://i.ibb.co/BV3PcczG/emsculpt-detail.webp" loading="lazy" alt="EMSculpt Neo Treatment"></div>
                        <div class="treatment-card-content">
                            <h3>EMSculpt Neo™</h3>
                            <p>Revolutionary body sculpting that builds muscle and burns fat simultaneously using HIFEM+™ and synchronized RF technology. FDA-cleared for non-invasive body contouring.</p>
                             <div class="treatment-details">
                                <span class="treatment-detail"><i class="fas fa-dumbbell" aria-hidden="true"></i> +25% Muscle</span>
                                <span class="treatment-detail"><i class="fas fa-fire" aria-hidden="true"></i> -30% Fat</span>
                                <span class="treatment-detail"><i class="far fa-clock" aria-hidden="true"></i> 30 min</span>
                            </div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/emsculpt-neo/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20the%20EMSculpt%20Neo%20Summer%20Sale%20at%20%C2%A3175%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Book Summer Special <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                     </div>

                    <!-- Card 2: Exosomes - WITH TRENDING BADGE -->
                     <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-trending">Trending</span>
                             <span class="badge badge-price">Starting at £500</span>
                         </div>
                         <div class="treatment-card-img"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/EXOSOMES-GROWTH-FACTORS-FACIAL.jpeg.webp" loading="lazy" alt="Exosomes Therapy"></div>
                         <div class="treatment-card-content">
                            <h3>Exosome Regenerative Therapy</h3>
                            <p>Harness the power of exosomes for advanced skin regeneration, reducing inflammation, improving texture, and promoting youthful vitality.</p>
                             <div class="treatment-details">
                                <span class="treatment-detail"><i class="fas fa-atom" aria-hidden="true"></i> Regeneration</span>
                                <span class="treatment-detail"><i class="fas fa-seedling" aria-hidden="true"></i> Youthful Skin</span>
                                <span class="treatment-detail"><i class="fas fa-star" aria-hidden="true"></i> Cutting-Edge</span></div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatments-overview/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20Exosome%20Regenerative%20Therapy%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                     </div>

                    <!-- Card 2: Morpheus8 (Best Seller) -->
                     <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-bestseller">Best Seller</span>
                             <span class="badge badge-price">Starting at £750</span>
                         </div>
                         <div class="treatment-card-img"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Silhouette-Soft-scaled-1.jpeg.webp" loading="lazy" alt="Morpheus8 RF microneedling device detail"></div>
                         <div class="treatment-card-content">
                            <h3>RF Microneedling</h3>
                            <p>Advanced fractional technology combining radiofrequency and microneedling to remodel tissue, tighten skin, and improve texture.</p>
                             <div class="treatment-details">
                                <span class="treatment-detail"><i class="far fa-clock" aria-hidden="true"></i> 75-90 min</span>
                                <span class="treatment-detail"><i class="fas fa-layer-group" aria-hidden="true"></i> Remodelling</span>
                                <span class="treatment-detail"><i class="fas fa-arrow-up" aria-hidden="true"></i> Tightening</span>
                            </div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/rf-microneedling/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20the%20RFNeedling%20treatment%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                     </div>

                     <!-- Card 3: Lips Augmentation -->
                      <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-price">Starting at £450</span>
                         </div>
                         <div class="treatment-card-img"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp" loading="lazy" alt="Lips Augmentation Treatment"></div>
                         <div class="treatment-card-content">
                             <h3>Lips Augmentation</h3>
                            <p>Enhance lip volume, shape, and definition using premium dermal fillers for natural-looking, beautifully balanced results.</p>
                             <div class="treatment-details">
                                <span class="treatment-detail"><i class="fas fa-smile-beam" aria-hidden="true"></i> Volume & Shape</span>
                                <span class="treatment-detail"><i class="fas fa-syringe" aria-hidden="true"></i> Filler</span>
                                <span class="treatment-detail"><i class="fas fa-leaf" aria-hidden="true"></i> Natural Look</span>
                            </div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/lip-enhancement/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20the%20Lips%20Augmentation%20treatment%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                      <!-- Card 4: Hifu -->
                      <div class="treatment-card scale-in">
                        <div class="treatment-badges">
                            <span class="badge badge-price">Starting at £350</span>
                        </div>
                        <div class="treatment-card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp" loading="lazy" alt="HIFU Treatment"></div>
                        <div class="treatment-card-content">
                            <h3>HIFU Skin Tightening</h3>
                            <p>Non-surgical lift using focused ultrasound energy to tighten skin on the face, neck, and décolletage for a youthful contour.</p>
                            <div class="treatment-details">
                                <span class="treatment-detail"><i class="fas fa-arrow-up" aria-hidden="true"></i> Lifting</span>
                                <span class="treatment-detail"><i class="fas fa-layer-group" aria-hidden="true"></i> Non-invasive</span>
                                <span class="treatment-detail"><i class="fas fa-sync-alt" aria-hidden="true"></i> Minimal Downtime</span>
                            </div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/hifu-high-intensity-focused-ultrasound/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20the%20HIFU%20Skin%20Tightening%20treatment%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                     <!-- Card 6: Aquagold Fine Touch -->
                      <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-price">Starting at £350</span>
                         </div>
                        <div class="treatment-card-img"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/09/aquagold.jpeg.webp" loading="lazy" alt="Aquagold Fine Touch microinfusion device"></div>
                        <div class="treatment-card-content">
                            <h3>Aquagold Fine Touch™</h3>
                            <p>A luxury 24-carat gold micro-infusion facial delivering bespoke nutrients directly into the skin for unparalleled glow and refinement.</p>
                            <div class="treatment-details">
                                <span class="treatment-detail"><i class="far fa-clock" aria-hidden="true"></i> 60 min</span>
                                <span class="treatment-detail"><i class="fas fa-sync-alt" aria-hidden="true"></i> Minimal Downtime</span>
                                <span class="treatment-detail"><i class="fas fa-star" aria-hidden="true"></i> Radiance Boost</span>
                            </div>
                           <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/aquagold/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20the%20Aquagold%20Fine%20Touch%20treatment%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                     <!-- Card 7: Injectable Skin Boosters -->
                      <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-price">Starting at £450</span>
                         </div>
                         <div class="treatment-card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/skin-boosters.webp" loading="lazy" alt="Skin booster treatment enhancing hydration"></div>
                         <div class="treatment-card-content">
                             <h3>Injectable Skin Boosters</h3>
                            <p>Deeply hydrate and revitalise skin from within using micro-droplets of hyaluronic acid for lasting radiance and improved texture.</p>
                             <div class="treatment-details">
                                <span class="treatment-detail"><i class="far fa-clock" aria-hidden="true"></i> 45 min</span>
                                <span class="treatment-detail"><i class="fas fa-tint" aria-hidden="true"></i> Hydration</span>
                                <span class="treatment-detail"><i class="fas fa-leaf" aria-hidden="true"></i> Subtle Glow</span>
                            </div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/skin-boosters/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20Injectable%20Skin%20Boosters%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                     <!-- Card 8: Anti-Wrinkle Injections -->
                     <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-price">Starting at £295</span>
                         </div>
                        <div class="treatment-card-img"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/New-Project-2.png.webp" loading="lazy" alt="Anti-Wrinkle injection areas illustration"></div>
                        <div class="treatment-card-content">
                            <h3>Precision Anti-Wrinkle Injections</h3>
                            <p>Expertly administered neuromodulators to soften dynamic lines for a refreshed, natural, and expressive look.</p>
                             <div class="treatment-details">
                                <span class="treatment-detail"><i class="far fa-clock" aria-hidden="true"></i> 30 min</span>
                                <span class="treatment-detail"><i class="fas fa-feather-alt" aria-hidden="true"></i> Line Smoothing</span>
                                <span class="treatment-detail"><i class="fas fa-sync-alt" aria-hidden="true"></i> No Downtime</span>
                            </div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment/anti-wrinkle-injections/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20Anti-Wrinkle%20Injections%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                     </div>

                     <!-- Card 9: Longevity IV Infusions -->
                    <div class="treatment-card scale-in">
                         <div class="treatment-badges">
                             <span class="badge badge-price">Price on consultation</span>
                         </div>
                        <div class="treatment-card-img"><img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/01/Nutrition-2.jpg.webp" loading="lazy" alt="IV Vitamin Drip therapy in progress"></div>
                        <div class="treatment-card-content">
                            <h3>Longevity IV Infusions</h3>
                            <p>Bespoke intravenous nutrient therapy (e.g., NAD+, Vitamin C) designed to optimize cellular health, boost energy, and enhance overall vitality.</p>
                            <div class="treatment-details">
                                <span class="treatment-detail"><i class="far fa-clock" aria-hidden="true"></i> 60 min</span>
                                <span class="treatment-detail"><i class="fas fa-atom" aria-hidden="true"></i> Cellular Health</span>
                                <span class="treatment-detail"><i class="fas fa-bolt" aria-hidden="true"></i> Energy Boost</span></div>
                            <div class="treatment-buttons" style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
                                <a href="https://tempusbelgravia.co.uk/treatment_category/iv-infusions/" class="cta-button-secondary" style="width: 100%;">
                                    Learn More
                                </a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20more%20details%20about%20Longevity%20IV%20Infusions%20please." class="cta-button-secondary" target="_blank" rel="noopener noreferrer" style="width: 100%; background-color: var(--primary); color: var(--white); border-color: var(--primary);">
                                    Quick Inquiry <i class="fab fa-whatsapp" style="margin-left: 8px; color: var(--white);" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                 </div> <!-- End .treatment-grid -->

                  <div class="all-treatments-link fade-in">
                    <a href="https://tempusbelgravia.co.uk/treatments-overview/" class="cta-button">View All Services</a>
                 </div>
             </div> <!-- End .container -->
        </section>
        <!-- END: REVISED Signature Treatments Section -->


        <!-- Before & After Section -->
        <section class="before-after">
            <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
            <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--primary-ultralight)" points="0,100 100,0 100,100"/></svg></div>
            <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                <div class="section-title fade-in-up">
                     <h2>Visible Transformations</h2>
                     <p class="subtitle">Authentic results showcasing the refined vitality achieved through bespoke aesthetic journeys at Tempus Lounge, London.</p>
                    <div class="divider"></div>
                </div>
                 <div class="ba-grid fade-in-stagger">
                     <!-- Card 1 -->
                     <div class="ba-reveal-card scale-in">
                        <div class="ba-reveal-images">
                             <div class="ba-image-container">
                                <img class="ba-before-img" src="https://res.cloudinary.com/drtatej7i/image/upload/v1743752535/Before2_sjjugc.png" loading="lazy" alt="Before Facial Harmonisation Treatment">
                                <img class="ba-after-img" src="https://res.cloudinary.com/drtatej7i/image/upload/v1743752532/After2_lsdrmw.png" loading="lazy" alt="After Facial Harmonisation Treatment">
                            </div>
                            <div class="ba-reveal-divider" aria-hidden="true"></div>
                            <div class="ba-reveal-labels" aria-hidden="true"><span class="ba-label-before">Before</span><span class="ba-label-after">After</span></div>
                        </div>
                         <div class="ba-reveal-info">
                            <h4>Lips Harmonisation</h4>
                             <p>Subtle line smoothing and volume restoration achieving a balanced, naturally refreshed, and vibrant appearance.</p>
                        </div>
                     </div>
                     <!-- Card 2 -->
                     <div class="ba-reveal-card scale-in">
                         <div class="ba-reveal-images">
                             <div class="ba-image-container">
                                <img class="ba-before-img" src="https://res.cloudinary.com/drtatej7i/image/upload/v1743752535/Before1_aklops.png" loading="lazy" alt="Before Skin Tone Correction Treatment">
                                <img class="ba-after-img" src="https://res.cloudinary.com/drtatej7i/image/upload/v1743752533/After1_cnlq0m.png" loading="lazy" alt="After Skin Tone Correction Treatment">
                            </div>
                            <div class="ba-reveal-divider" aria-hidden="true"></div>
                            <div class="ba-reveal-labels" aria-hidden="true"><span class="ba-label-before">Before</span><span class="ba-label-after">After</span></div>
                        </div>
                         <div class="ba-reveal-info">
                             <h4>Wrinkle Treatment</h4>
                             <p>Marked reduction in expression wrinkles, unveiling a significantly clearer, natural complexion.</p>
                         </div>
                     </div>
                     <!-- Card 3 -->
                     <div class="ba-reveal-card scale-in">
                         <div class="ba-reveal-images">
                            <div class="ba-image-container">
                                <img class="ba-before-img" src="https://res.cloudinary.com/drtatej7i/image/upload/v1743752532/Before3_w1q592.png" loading="lazy" alt="Before Jawline Definition Treatment">
                                <img class="ba-after-img" src="https://res.cloudinary.com/drtatej7i/image/upload/v1743752531/After3_rghajk.png" loading="lazy" alt="After Jawline Definition Treatment">
                            </div>
                            <div class="ba-reveal-divider" aria-hidden="true"></div>
                            <div class="ba-reveal-labels" aria-hidden="true"><span class="ba-label-before">Before</span><span class="ba-label-after">After</span></div>
                        </div>
                         <div class="ba-reveal-info">
                             <h4>Jawline Definition</h4>
                             <p>Enhanced skin firmness and texture, resulting in a visibly lifted and more defined lower face contour.</p>
                         </div>
                     </div>
            </div>
        </section>

        <!-- Your Journey Section -->
        <section class="process-section your-journey-section">
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--primary-ultralight)" points="0,0 100,100 0,100"/></svg></div>
             <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--primary-ultralight)" points="0,0 100,100 0,100"/></svg></div>
             <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                 <div class="section-title fade-in-up">
                     <h2>Your Journey, Reimagined: A Holistic Map</h2>
                     <p class="subtitle">Charting your bespoke path to enduring visible health, graceful aging, and optimized longevity, guided by science and artistry.</p>
                     <div class="divider"></div>
                 </div>
                 <div class="process-grid horizontal-scroll-container fade-in-stagger" data-autorotate="true">
                     <!-- Step 1: Discovery & Vision Crafting -->
                     <div class="process-step-card scale-in">
                         <div class="process-step-header">
                             <div class="process-icon-circle"><i class="fas fa-compass" aria-hidden="true"></i></div>
                             <div class="process-step-title"><h3>1. Discovery & Vision</h3></div>
                         </div>
                         <div class="journey-highlight-img">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journey/discovery-vision.webp" loading="lazy" alt="Personalized consultation discussing vision and goals at Tempus Lounge">
                         </div>
                         <div class="process-step-content">
                             <p>Our dialogue begins with understanding your unique aspirations – enhancing <strong>visible health</strong> while nurturing inner vitality. We listen deeply to craft a truly <strong>bespoke</strong> vision for your aesthetic and <strong>longevity</strong> goals.</p>
                         </div>
                     </div>
                     <!-- Step 2: Holistic Assessment & Insight -->
                     <div class="process-step-card scale-in">
                         <div class="process-step-header">
                             <div class="process-icon-circle"><i class="fas fa-microscope" aria-hidden="true"></i></div>
                             <div class="process-step-title"><h3>2. Holistic Insight</h3></div>
                         </div>
                          <div class="journey-highlight-img">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journey/holistic-insight.webp" loading="lazy" alt="Advanced 3D facial imaging analysis in progress">
                          </div>
                         <div class="process-step-content">
                             <p>Beyond the surface, we utilize advanced diagnostics – from 3D imaging to potential biomarker analysis – gaining deep insights into your skin health, biological <strong>aging</strong> markers, and wellness status for precise, data-driven planning.</p>
                         </div>
                     </div>
                     <!-- Step 3: Bespoke Vitality Blueprint -->
                     <div class="process-step-card scale-in">
                         <div class="process-step-header">
                             <div class="process-icon-circle"><i class="fas fa-drafting-compass" aria-hidden="true"></i></div>
                             <div class="process-step-title"><h3>3. Bespoke Blueprint</h3></div>
                         </div>
                           <div class="journey-highlight-img">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treatments/hifu-treatment.webp" loading="lazy" alt="Planning bespoke treatments and longevity protocols with a specialist">
                           </div>
                          <div class="process-step-content">
                             <p>Your unique 'Vitality Blueprint' is designed, synergistically integrating cutting-edge aesthetic treatments (addressing <strong>visible health</strong>) with targeted <strong>longevity</strong> protocols (optimizing cellular function), reflecting a truly <strong>bespoke</strong> strategy.</p>
                         </div>
                     </div>
                     <!-- Step 4: Expert Treatment Harmonisation -->
                     <div class="process-step-card scale-in">
                          <div class="process-step-header">
                              <div class="process-icon-circle"><i class="fas fa-magic" aria-hidden="true"></i></div>
                              <div class="process-step-title"><h3>4. Harmonisation</h3></div>
                          </div>
                            <div class="journey-highlight-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journey/harmonisation.webp" loading="lazy" alt="Expert performing an aesthetic treatment in a serene Tempus Lounge room">
                            </div>
                          <div class="process-step-content">
                             <p>Experience treatments delivered with medical precision and artistic sensibility in our serene sanctuary. We focus on achieving harmonious, natural-looking results that enhance your <strong>visible health</strong> and reflect refined vitality, respecting the natural process of <strong>aging</strong>.</p>
                         </div>
                     </div>
                     <!-- Step 5: Evolving Partnership & Optimization -->
                     <div class="process-step-card scale-in">
                          <div class="process-step-header">
                             <div class="process-icon-circle"><i class="fas fa-chart-line" aria-hidden="true"></i></div>
                             <div class="process-step-title"><h3>5. Evolving Partnership</h3></div>
                          </div>
                           <div class="journey-highlight-img">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/journey/evolving-partnership.webp" loading="lazy" alt="Ongoing client support and progress monitoring discussion">
                           </div>
                          <div class="process-step-content">
                             <p>Your journey evolves with us. We provide ongoing support, monitor progress, and adapt your plan, ensuring sustained results and optimizing your path towards long-term <strong>longevity</strong> and enduring <strong>visible health</strong> through a continuous, <strong>bespoke</strong> relationship.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

        <!-- Testimonials Section -->
         <section class="testimonials-section">
             <!-- <div class="testimonials-background"></div> -->
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
             <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
             <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                 <div class="testimonials-container">
                     <div class="testimonials-header fade-in-up">
                        <h2>Client Experiences</h2>
                        <p class="subtitle">Voices from our community, sharing their journey to vitality and confidence at Tempus Lounge.</p>
                         <div class="divider"></div>
                     </div>
                     <div class="testimonials-grid fade-in-stagger">
                         <div class="testimonial-card scale-in">
                             <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                             <p class="testimonial-quote">Tempus offers the highest standards in a wonderful, welcoming environment. Lenka performed my treatment with professionalism and expertise. She is thorough with explanations and has gifted hands.</p>
                             <div class="testimonial-author">
                                <div class="testimonial-avatar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/badges/google-reviews-logo.webp" loading="lazy" alt="Google Review Avatar Placeholder"></div>
                                <div class="testimonial-info"><h4 class="testimonial-name">Badia E.</h4><p class="testimonial-meta">Verified Client Review</p></div>
                            </div>
                         </div>
                         <div class="testimonial-card scale-in">
                              <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                              <p class="testimonial-quote">Only one word describes my experience: "amazing"! The attention to detail, the serene atmosphere, and the results... Tempus is simply the best.</p>
                             <div class="testimonial-author">
                                 <div class="testimonial-avatar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/badges/google-reviews-logo.webp" loading="lazy" alt="Google Review Avatar Placeholder"></div>
                                 <div class="testimonial-info"><h4 class="testimonial-name">Gloria P. V.</h4><p class="testimonial-meta">Verified Client Review</p></div>
                            </div>
                         </div>
                          <div class="testimonial-card scale-in">
                              <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                              <p class="testimonial-quote">I rarely write reviews, but Dr. Rotsaert exceeded all expectations. I've met top plastic surgeons globally, and she is #1 in every aspect - skill, artistry, and care.</p>
                             <div class="testimonial-author">
                                <div class="testimonial-avatar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/badges/google-reviews-logo.webp" loading="lazy" alt="Google Review Avatar Placeholder"></div>
                                <div class="testimonial-info"><h4 class="testimonial-name">Sophie L. S.</h4><p class="testimonial-meta">Verified Client Review</p></div>
                            </div>
                         </div>
                     </div>
                      <div class="testimonials-more-link fade-in" style="text-align: center; margin-top: 60px;">
                           <a href="https://www.google.com/maps/place/Tempus+Belgravia/@51.4990371,-0.1584864,17z/data=!4m8!3m7!1s0x4876053c78215a11:0x75a6eb4b0115f140!8m2!3d51.4990371!4d-0.1562977!9m1!1b1!16s%2Fg%2F11h81229n9?entry=ttu" target="_blank" rel="noopener noreferrer" class="cta-button-secondary">Read More Reviews</a>
                      </div>
                 </div>
             </div>
        </section>

         <!-- Team Section -->
        <section class="team-section">
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--primary-ultralight)" points="0,0 100,100 0,100"/></svg></div>
             <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,100 100,0 100,100"/></svg></div>
             <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                 <div class="section-title fade-in-up">
                    <h2>Our Medical Experts</h2>
                    <p class="subtitle">Meet the highly skilled aesthetic doctors, surgeons, and wellness specialists guiding your Tempus Lounge journey.</p>
                     <div class="divider"></div>
                 </div>
                  <div class="team-grid fade-in-stagger">
                     <!-- Member: Dr. Veerle Rotsaert -->
                     <div class="team-member scale-in">
                        <div class="team-image">
                             <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Dr.-Veerle-Rotsaert-scaled.jpg.webp" loading="lazy" alt="Portrait of Dr. Veerle Rotsaert, Plastic Surgeon">
                            <div class="team-overlay">
                                 <div class="team-info">
                                    <h3 class="team-name">Dr. Veerle Rotsaert</h3>
                                    <p class="team-role">Consultant Plastic Surgeon & Aesthetic Doctor</p>
                                     <div class="team-bio"><p>Renowned for her surgical precision and aesthetic eye, Dr. Rotsaert specialises in facial rejuvenation and body contouring artistry.</p></div>
                                 </div>
                             </div>
                        </div>
                     </div>
                      <!-- Member: Dr. Nadine Haram -->
                      <div class="team-member scale-in">
                         <div class="team-image">
                              <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Dr.-Nadine-Hachach-Haram-scaled.jpg.webp" loading="lazy" alt="Portrait of Dr. Nadine Haram, Plastic Surgeon">
                             <div class="team-overlay">
                                 <div class="team-info">
                                     <h3 class="team-name">Dr. Nadine Haram</h3>
                                     <p class="team-role">Consultant Plastic Surgeon & Aesthetic Doctor</p>
                                     <div class="team-bio"><p>A leader in reconstructive and aesthetic surgery, Dr. Haram brings innovation and profound empathy to patient care.</p></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Member: Dr. Souphiyeh Samizadeh -->
                      <div class="team-member scale-in">
                         <div class="team-image">
                             <img src="https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/10/Dr.-Souphi-Samizadeh--scaled.jpg.webp" loading="lazy" alt="Portrait of Dr. Souphiyeh Samizadeh, Aesthetic Doctor">
                             <div class="team-overlay">
                                 <div class="team-info">
                                     <h3 class="team-name">Dr. Souphiyeh Samizadeh</h3>
                                    <p class="team-role">Aesthetic Doctor & Dermatologist</p>
                                     <div class="team-bio"><p>Expert in advanced non-surgical facial aesthetics and dermatology, focused on achieving radiant, natural-looking results.</p></div>
                                 </div>
                            </div>
                        </div>
                     </div>
                     <!-- Member: Dr. Shideh Pouria -->
                 </div>
                 <div class="team-link fade-in">
                    <a href="https://tempusbelgravia.co.uk/tempus-team/" class="cta-button">Meet Our Full Team</a>
                </div>
             </div>
        </section>

        <!-- Shop Highlight Section - HIDDEN -->
        <?php /* Commenting out the Curated Skincare Essentials section
        <section class="shop-highlight-section">
            <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
            <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,100 100,0 100,100"/></svg></div>
             <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                 <div class="section-title fade-in-up">
                     <h2>Curated Skincare Essentials</h2>
                     <p class="subtitle">Discover our selection of medical-grade skincare products, expertly chosen to complement your treatments and enhance your results.</p>
                     <div class="divider"></div>
                 </div>
                 <div class="product-grid horizontal-scroll-container fade-in-stagger" data-autorotate="true">
                      <!-- Product Card 1 -->
                      <div class="product-card scale-in">
                          <div class="product-card-img">
                              <img src="https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/intelligent-face-and-body-cream-purple-v.3-300x300.jpg" loading="lazy" alt="Injectual Intelligent Face + Body Cream Product Image">
                          </div>
                          <div class="product-card-content">
                              <h3>Injectual Intelligent Face + Body Cream</h3>
                              <p>Rich, multi-action cream for deep hydration and rejuvenation. PM only.</p>
                              <span class="product-price">£100.00</span>
                              <a href="https://tempusbelgravia.co.uk/product/intelligent-face-body-cream/" target="_blank" rel="noopener" class="cta-button-secondary">View Product</a>
                          </div>
                      </div>
                      <!-- Product Card 2 -->
                       <div class="product-card scale-in">
                           <div class="product-card-img">
                               <img src="https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/Zeitschild_-Anti-Wrinkle-Serum-scaled-300x300.jpg" loading="lazy" alt="Anti Wrinkle Serum Product Image">
                           </div>
                           <div class="product-card-content">
                               <h3>Anti Wrinkle Serum</h3>
                               <p>Advanced serum targeting fine lines and promoting smoother skin daily.</p>
                               <span class="product-price">£96.00</span>
                               <a href="https://tempusbelgravia.co.uk/product/zeitschild_-anti-wrinkle-serum/" target="_blank" rel="noopener" class="cta-button-secondary">View Product</a>
                           </div>
                       </div>
                      <!-- Product Card 3 -->
                      <div class="product-card scale-in">
                          <div class="product-card-img">
                              <img src="https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/instant-eye-revive-open-purple-v.3-scaled-300x300.jpg" loading="lazy" alt="Injectual Instant Eye Revive Product Image">
                          </div>
                          <div class="product-card-content">
                              <h3>Injectual Instant Eye Revive</h3>
                              <p>Targeted treatment to refresh and brighten the delicate eye area. PM only.</p>
                              <span class="product-price">£70.00</span>
                              <a href="https://tempusbelgravia.co.uk/product/instant-eye-revive/" target="_blank" rel="noopener" class="cta-button-secondary">View Product</a>
                          </div>
                      </div>
                      <!-- Product Card 4 -->
                       <div class="product-card scale-in">
                           <div class="product-card-img">
                               <img src="https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/08_05_2022_Injectual_186-edited-v.3-300x300.jpg" loading="lazy" alt="Injectual Innovative Correcting SPF 50+ Product Image">
                           </div>
                           <div class="product-card-content">
                               <h3>Injectual Innovative Correcting SPF 50+</h3>
                               <p>High-protection, correcting sunscreen for daily defense. Apply every 2-3 hours.</p>
                               <span class="product-price">£60.00</span>
                               <a href="https://tempusbelgravia.co.uk/product/innovative-correcting-spf-50/" target="_blank" rel="noopener" class="cta-button-secondary">View Product</a>
                           </div>
                       </div>
                      <!-- Product Card 5 -->
                      <div class="product-card scale-in">
                           <div class="product-card-img">
                               <img src="https://cdn-ljahp.nitrocdn.com/iJfXjnUaLEgdjHFPFrPQVJUWPeICKGxo/assets/images/optimized/rev-557fc46/tempusbelgravia.co.uk/wp-content/uploads/2022/09/Zeitschild-Neck-and-Neckline-Firming-scaled-300x300.jpg" loading="lazy" alt="Firming Neck Creme Serum Product Image">
                           </div>
                           <div class="product-card-content">
                               <h3>Firming Neck Creme Serum</h3>
                               <p>Specifically formulated to firm and smooth the delicate neck and décolletage.</p>
                               <span class="product-price">£75.00</span>
                               <a href="https://tempusbelgravia.co.uk/product/zeitschild-neck-and-neckline-firming/" target="_blank" rel="noopener" class="cta-button-secondary">View Product</a>
                           </div>
                       </div>
                 </div>
                 <div class="all-products-link text-center fade-in" style="margin-top: 60px;">
                     <a href="https://tempusbelgravia.co.uk/shop/" class="cta-button">Discover All Products</a>
                 </div>
             </div>
        </section>
        */ ?>

        <!-- Instagram Gallery Section -->
         <section class="instagram-section">
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
             <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,100 100,0 100,100"/></svg></div>
            <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                 <div class="instagram-container">
                     <div class="section-title fade-in-up">
                         <h2>Moments of Stillness & Transformation</h2>
                         <p class="subtitle">Glimpses into the Tempus Lounge experience | Follow us <a href="https://www.instagram.com/tempusbelgravialondon/" target="_blank" rel="noopener noreferrer" style="text-decoration: underline; font-weight: 500;">@tempusbelgravialondon</a></p>
                         <div class="divider"></div>
                     </div>
                     <div class="instagram-grid fade-in">
                          <div class="instagram-item scale-in"><a href="https://www.instagram.com/p/CEXAMPLE1/" target="_blank" rel="noopener noreferrer" aria-label="View Instagram Post 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram/gallery-1.webp" loading="lazy" alt="Instagram Image: Serene treatment room aesthetic"><span class="instagram-overlay"><i class="fab fa-instagram instagram-icon"></i></span></a></div>
                          <div class="instagram-item scale-in"><a href="https://www.instagram.com/p/CEXAMPLE2/" target="_blank" rel="noopener noreferrer" aria-label="View Instagram Post 2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram/gallery-2.webp" loading="lazy" alt="Instagram Image: Tempus Lounge atmosphere detail"><span class="instagram-overlay"><i class="fab fa-instagram instagram-icon"></i></span></a></div>
                          <div class="instagram-item scale-in"><a href="https://www.instagram.com/p/CEXAMPLE3/" target="_blank" rel="noopener noreferrer" aria-label="View Instagram Post 3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram/gallery-3.webp" loading="lazy" alt="Instagram Image: RF Needling skin tightening results example"><span class="instagram-overlay"><i class="fab fa-instagram instagram-icon"></i></span></a></div>
                          <div class="instagram-item scale-in"><a href="https://www.instagram.com/p/CEXAMPLE4/" target="_blank" rel="noopener noreferrer" aria-label="View Instagram Post 4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram/gallery-4.webp" loading="lazy" alt="Instagram Image: Luxury skincare product display"><span class="instagram-overlay"><i class="fab fa-instagram instagram-icon"></i></span></a></div>
                          <div class="instagram-item scale-in"><a href="https://www.instagram.com/p/CEXAMPLE5/" target="_blank" rel="noopener noreferrer" aria-label="View Instagram Post 5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram/gallery-5.webp" loading="lazy" alt="Instagram Image: Client receiving IV vitamin drip therapy"><span class="instagram-overlay"><i class="fab fa-instagram instagram-icon"></i></span></a></div>
                          <div class="instagram-item scale-in"><a href="https://www.instagram.com/p/CEXAMPLE6/" target="_blank" rel="noopener noreferrer" aria-label="View Instagram Post 6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram/gallery-6.webp" loading="lazy" alt="Instagram Image: Exterior view of Tempus Lounge Belgravia"><span class="instagram-overlay"><i class="fab fa-instagram instagram-icon"></i></span></a></div>
                     </div>
                     <div class="instagram-follow fade-in">
                         <i class="fab fa-instagram" aria-hidden="true"></i>
                         <a href="https://www.instagram.com/tempusbelgravialondon/" target="_blank" rel="noopener noreferrer" class="cta-button-secondary">Follow @tempusbelgravialondon</a>
                     </div>
                 </div>
             </div>
         </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
            <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
            <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                 <div class="faq-container">
                     <div class="faq-header fade-in-up">
                        <h2>Your Questions, Answered</h2>
                         <p class="subtitle">Guidance on aesthetic treatments, longevity science, and the Tempus Lounge experience.</p>
                         <div class="divider"></div>
                     </div>
                     <div class="faq-grid fade-in">
                           <div class="faq-item">
                            <div class="faq-question" tabindex="0" role="button" aria-expanded="false" aria-controls="faq-answer-1"><span>What defines the Tempus Lounge approach?</span><i class="fas fa-plus faq-icon" aria-hidden="true"></i></div>
                             <div class="faq-answer" id="faq-answer-1" role="region" aria-hidden="true"><p>Our approach is a unique synergy of medical expertise, cutting-edge aesthetic technology (like RF Needling, lasers), and evidence-based longevity science (IV therapy, functional nutrition). We focus on personalised, natural-looking results within a luxurious, calming Belgravia sanctuary – the 'Stillness Revolution'.</p></div>
                         </div>
                           <div class="faq-item">
                             <div class="faq-question" tabindex="0" role="button" aria-expanded="false" aria-controls="faq-answer-2"><span>How are treatments personalized for me?</span><i class="fas fa-plus faq-icon" aria-hidden="true"></i></div>
                             <div class="faq-answer" id="faq-answer-2" role="region" aria-hidden="true"><p>Personalisation is paramount. Following an in-depth consultation and potential advanced diagnostics (e.g., skin imaging, biomarker analysis), we craft a bespoke pathway. This may involve combining modalities (e.g., Aquagold with fillers) and adjusting protocols based on your unique skin type, physiology, lifestyle, and aesthetic aspirations.</p></div>
                         </div>
                           <div class="faq-item">
                              <div class="faq-question" tabindex="0" role="button" aria-expanded="false" aria-controls="faq-answer-3"><span>What does 'longevity science' mean at Tempus?</span><i class="fas fa-plus faq-icon" aria-hidden="true"></i></div>
                             <div class="faq-answer" id="faq-answer-3" role="region" aria-hidden="true"><p>It means integrating scientifically validated wellness strategies alongside aesthetics. This includes cellular optimisation techniques like NAD+ IV infusions, personalised nutritional guidance based on functional testing, and protocols designed to enhance vitality, support cellular repair, and promote graceful ageing from the inside out.</p></div>
                         </div>
                           <div class="faq-item">
                              <div class="faq-question" tabindex="0" role="button" aria-expanded="false" aria-controls="faq-answer-4"><span>Are your practitioners medically qualified?</span><i class="fas fa-plus faq-icon" aria-hidden="true"></i></div>
                             <div class="faq-answer" id="faq-answer-4" role="region" aria-hidden="true"><p>Absolutely. Tempus Lounge is a CQC-regulated clinic led by Consultant Plastic Surgeons and highly qualified Aesthetic Doctors, Dermatologists, and functional medicine specialists. We uphold the highest standards of medical safety, ethics, and continuous professional development.</p></div>
                         </div>
                           <div class="faq-item">
                              <div class="faq-question" tabindex="0" role="button" aria-expanded="false" aria-controls="faq-answer-5"><span>Where is Tempus Lounge located?</span><i class="fas fa-plus faq-icon" aria-hidden="true"></i></div>
                              <div class="faq-answer" id="faq-answer-5" role="region" aria-hidden="true"><p>We are conveniently situated in the heart of Belgravia, London, at 11A West Halkin Street, SW1X 8JL. Our clinic provides a discreet and easily accessible sanctuary near Knightsbridge and Hyde Park Corner.</p></div>
                         </div>
                     </div>
                 </div>
             </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="contact-section">
             <div class="contact-pattern"></div>
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
             <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--primary-ultralight)" points="0,100 100,0 100,100"/></svg></div>
             <div class="container"> <?php // Use theme's .wrap or this custom .container ?>
                  <div class="section-title fade-in-up">
                     <h2>Begin Your Journey</h2>
                     <p class="subtitle">Connect with Tempus Lounge in Belgravia to schedule your personal consultation and explore your unique pathway to timeless vitality.</p>
                     <div class="divider"></div>
                 </div>
                  <div class="contact-vertical fade-in">
                    <style>
                    .contact-vertical {
                        display: flex;
                        flex-direction: column;
                        gap: 4rem;
                        max-width: 900px;
                        margin: 0 auto;
                        padding: 0 1rem;
                    }
                    /* Form Container Styling */
                    #zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4 {
                        padding: 0 10px 10px 10px;
                        box-sizing: border-box;
                        width: 100%;
                    }
                    #zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4 iframe {
                        width: 100% !important;
                        max-width: 100% !important;
                        margin: 0 auto;
                        display: block;
                    }
                    /* Tablet/iPad Styles */
                    @media (min-width: 769px) and (max-width: 1024px) {
                        .visit-block h3,
                        .map-block h3 {
                            font-size: 2rem !important;
                            margin-bottom: 1.5rem !important;
                        }
                    }
                    /* Mobile Styles */
                    @media (max-width: 768px) {
                        .contact-form-title {
                            font-size: 1.8rem !important;
                            padding: 15px 10px 10px 10px !important;
                        }
                        .contact-vertical {
                            gap: 2rem;
                            padding: 0 0.5rem;
                        }
                        .visit-block,
                        .contact-methods-block,
                        .map-block {
                            padding: 10px !important;
                        }
                        .visit-block h3,
                        .map-block h3 {
                            font-size: 1.8rem !important;
                            margin-bottom: 1rem !important;
                        }
                        .contact-item {
                            padding: 1rem;
                            flex-direction: column;
                            text-align: center;
                        }
                        .contact-item i {
                            margin-right: 0;
                            margin-bottom: 0.5rem;
                        }
                        .contact-item-content {
                            text-align: center;
                        }
                        .contact-methods {
                            max-width: 100%;
                        }
                        .hours-section {
                            padding: 1.5rem;
                        }
                        .hours-table {
                            font-size: 0.9rem;
                        }
                        .hours-table td {
                            padding: 0.4rem 0.5rem;
                        }
                        .contact-map {
                            height: 350px !important;
                        }
                    }
                    .visit-block {
                        background: #f8f8f8;
                        padding: 10px;
                        border-radius: 12px;
                        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
                        text-align: center;
                        box-sizing: border-box;
                    }
                    .visit-block h3 {
                        font-size: 2.5rem;
                        margin-bottom: 2rem;
                        color: #333;
                    }
                    .visit-info {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                        gap: 3rem;
                        margin-top: 2rem;
                    }
                    .visit-address {
                        text-align: center;
                    }
                    .visit-address i {
                        font-size: 3rem;
                        color: #333;
                        margin-bottom: 1.5rem;
                        display: block;
                    }
                    .visit-address h4 {
                        font-size: 1.5rem;
                        margin-bottom: 1rem;
                        color: #333;
                    }
                    .visit-address address {
                        font-size: 1.1rem;
                        line-height: 1.6;
                        color: #666;
                    }
                    .contact-methods {
                        display: flex;
                        flex-direction: column;
                        gap: 1.5rem;
                        max-width: 400px;
                        margin: 0 auto;
                    }
                    .contact-item {
                        display: flex;
                        align-items: center;
                        padding: 1.5rem;
                        background: #f8f8f8;
                        border-radius: 8px;
                        transition: background 0.3s;
                    }
                    .contact-item:hover {
                        background: #f0f0f0;
                    }
                    .contact-item i {
                        font-size: 2rem;
                        color: #333;
                        margin-right: 1.5rem;
                        width: 40px;
                        text-align: center;
                    }
                    .contact-item-content {
                        flex: 1;
                        text-align: left;
                    }
                    .contact-item h4 {
                        font-size: 1.1rem;
                        margin: 0 0 0.3rem 0;
                        color: #333;
                    }
                    .contact-item p {
                        margin: 0;
                    }
                    .contact-item a {
                        color: #666;
                        text-decoration: none;
                        font-size: 1rem;
                        transition: color 0.3s;
                    }
                    .contact-item a:hover {
                        color: #333;
                    }
                    .hours-section {
                        background: #fff;
                        padding: 2rem;
                        border-radius: 8px;
                        margin-top: 2rem;
                    }
                    .hours-section h4 {
                        text-align: center;
                        margin-bottom: 1.5rem;
                        font-size: 1.5rem;
                        color: #333;
                    }
                    .hours-table {
                        margin: 0 auto;
                        max-width: 350px;
                        width: 100%;
                    }
                    .hours-table td {
                        padding: 0.5rem 1rem;
                        border-bottom: 1px solid #eee;
                    }
                    .hours-table td:first-child {
                        font-weight: 600;
                        color: #333;
                    }
                    .hours-table td:last-child {
                        text-align: right;
                        color: #666;
                    }
                    .map-block {
                        background: #fff;
                        padding: 10px;
                        border-radius: 12px;
                        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
                        box-sizing: border-box;
                    }
                    .contact-methods-block {
                        box-sizing: border-box;
                    }
                    .map-block h3 {
                        text-align: center;
                        margin-bottom: 2rem;
                        font-size: 2.5rem;
                        color: #333;
                    }
                    .contact-map {
                        height: 500px;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    }
                    </style>
                     <!-- Contact Form Block -->
                     <div class="fade-in" style="background: #fff; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                         <h3 class="contact-form-title" style="text-align: center; padding: 20px 10px 10px 10px; margin: 0; font-size: 2.5rem; color: #333;">Request Your Consultation</h3>
                         <div id="zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4"></div>
                         <script type="text/javascript">
                         (function() {
                             try{
                                 var f = document.createElement("iframe");
                                 
                                     var ifrmSrc = 'https://forms.zohopublic.eu/foundershealth1/form/ContactUs/formperma/2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4?zf_rszfm=1';
                                 
                                 
                                 try{
                                     if ( typeof ZFAdvLead != "undefined" && typeof zfutm_zfAdvLead != "undefined" ) {
                                         for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
                                             var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
                                             utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
                                             var utmVal = zfutm_zfAdvLead.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
                                             if ( typeof utmVal !== "undefined" ) {
                                               if ( utmVal != "" ) {
                                                 if(ifrmSrc.indexOf('?') > 0){
                                                      ifrmSrc = ifrmSrc+'&'+utmPm+'='+utmVal;
                                                 }else{
                                                     ifrmSrc = ifrmSrc+'?'+utmPm+'='+utmVal;
                                                 }
                                               }
                                             }
                                         }
                                     }
                                     if ( typeof ZFLead !== "undefined" && typeof zfutm_zfLead !== "undefined" ) {
                                         for( var prmIdx = 0 ; prmIdx < ZFLead.utmPNameArr.length ; prmIdx ++ ) {
                                             var utmPm = ZFLead.utmPNameArr[ prmIdx ];
                                             var utmVal = zfutm_zfLead.zfutm_gC_enc( ZFLead.utmPNameArr[ prmIdx ] );
                                             if ( typeof utmVal !== "undefined" ) {
                                               if ( utmVal != "" ){
                                                 if(ifrmSrc.indexOf('?') > 0){
                                                   ifrmSrc = ifrmSrc+'&'+utmPm+'='+utmVal;//No I18N
                                                 }else{
                                                   ifrmSrc = ifrmSrc+'?'+utmPm+'='+utmVal;//No I18N
                                                 }
                                               }
                                             }
                                           }
                                     }
                                 }catch(e){}
                                 
                                 f.src = ifrmSrc;
                                 f.style.border="none";
                                 f.style.height="1041px";
                                 f.style.width="100%";
                                 f.style.transition="all 0.5s ease";
                                 f.setAttribute("aria-label", 'Contact Us');
                                 
                                 var d = document.getElementById("zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4");
                                 d.appendChild(f);
                                 window.addEventListener('message', function (){
                                     var evntData = event.data;
                                     if( evntData && evntData.constructor == String ){
                                         var zf_ifrm_data = evntData.split("|");
                                         if ( zf_ifrm_data.length == 2 || zf_ifrm_data.length == 3 ) {
                                             var zf_perma = zf_ifrm_data[0];
                                             var zf_ifrm_ht_nw = ( parseInt(zf_ifrm_data[1], 10) + 15 ) + "px";
                                             var iframe = document.getElementById("zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4").getElementsByTagName("iframe")[0];
                                             if ( (iframe.src).indexOf('formperma') > 0 && (iframe.src).indexOf(zf_perma) > 0 ) {
                                                 var prevIframeHeight = iframe.style.height;
                                                 var zf_tout = false;
                                                 if( zf_ifrm_data.length == 3 ) {
                                                     iframe.scrollIntoView();
                                                     zf_tout = true;
                                                 }

                                                 if ( prevIframeHeight != zf_ifrm_ht_nw ) {
                                                     if( zf_tout ) {
                                                         setTimeout(function(){
                                                             iframe.style.height = zf_ifrm_ht_nw;
                                                         },500);
                                                     } else {
                                                         iframe.style.height = zf_ifrm_ht_nw;
                                                     }
                                                 }
                                             }
                                         }
                                     }
                                 }, false);
                             }catch(e){}
                         })();
                         </script>
                     </div>
                     
                     <!-- Visit Tempus Lounge Block -->
                    <div class="visit-block fade-in">
                        <h3>Visit Tempus Lounge</h3>
                        <div class="visit-address">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <address>
                                Tempus Belgravia<br>
                                11A West Halkin Street<br>
                                Belgravia, London SW1X 8JL
                            </address>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Tempus+Belgravia,+11A+West+Halkin+Street,+London+SW1X+8JL" target="_blank" rel="noopener noreferrer" class="btn-primary" style="margin-top: 1.5rem; display: inline-block;">Get Directions</a>
                        </div>
                    </div>
                    
                    <!-- Contact Methods Block -->
                    <div class="contact-methods-block fade-in" style="background: #fff; padding: 10px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                        <h3 style="text-align: center; margin-bottom: 2rem; font-size: 2.5rem; color: #333;">Get in Touch</h3>
                        <div class="contact-methods">
                            <div class="contact-item">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                <div class="contact-item-content">
                                    <h4>Call Us</h4>
                                    <p><a href="tel:+442080373265">+44 (0)20 8037 3265</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                <div class="contact-item-content">
                                    <h4>WhatsApp</h4>
                                    <p><a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge," target="_blank" rel="noopener noreferrer">+44 (0)7538 037973</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                                <div class="contact-item-content">
                                    <h4>Email Us</h4>
                                    <p><a href="mailto:info@tempusbelgravia.co.uk">info@tempusbelgravia.co.uk</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Hours Section -->
                        <div class="hours-section">
                            <h4><i class="fas fa-clock" aria-hidden="true" style="margin-right: 0.5rem;"></i>Clinic Opening Hours</h4>
                            <table class="hours-table">
                                <tbody>
                                    <tr><td>Monday</td><td>9:00am - 6:00pm</td></tr>
                                    <tr><td>Tuesday</td><td>9:00am - 6:00pm</td></tr>
                                    <tr><td>Wednesday</td><td>9:00am - 6:00pm</td></tr>
                                    <tr><td>Thursday</td><td>9:00am - 6:00pm</td></tr>
                                    <tr><td>Friday</td><td>9:00am - 6:00pm</td></tr>
                                    <tr><td>Saturday</td><td>By Appointment</td></tr>
                                    <tr><td>Sunday</td><td>Closed</td></tr>
                                </tbody>
                            </table>
                            <p class="hours-note" style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #666;">Weekend and extended hours may be available upon request.</p>
                        </div>
                    </div>
                    
                    <!-- Map Block -->
                    <div class="map-block fade-in">
                        <h3>Find Us</h3>
                        <div class="contact-map" style="height: 500px; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.7727759795657!2d-0.15848638485867464!3d51.49903711913661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876053c78215a11%3A0x75a6eb4b0115f140!2sTempus%20Belgravia!5e0!3m2!1sen!2suk!4v1677594982156!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Location of Tempus Lounge Belgravia on Google Maps"></iframe>
                        </div>
                    </div>
                 </div>
             </div>
        </section>
    </main>

    <!-- Treatment Popups -->
    <?php include get_stylesheet_directory() . '/template-parts/treatment-popups.php'; ?>

</div> <?php // End optional .new-home-content wrapper ?>

<?php
// Use the theme's footer (includes scripts via wp_footer(), closing body/html)
get_footer();