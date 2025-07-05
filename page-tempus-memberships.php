<?php
/**
 * Template Name: Tempus Memberships
 * Description: A luxury membership page for Tempus Belgravia
 *
 * @package tempusbelgravia
 */

get_header();
?>

<style>
/* Membership Page Styles - Updated to match home page */
.memberships-page {
    padding: 0;
    background-color: var(--white);
}

/* Font imports to match home page */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

/* CSS Variables to match home page */
:root {
    --primary: #AF8F5A;
    --primary-dark: #8B6F47;
    --accent: #D4AF37;
    --accent-deep: #B8860B;
    --dark: #1A1A1A;
    --gray: #4A4A4A;
    --light: #FCFBF9;
    --white: #FFFFFF;
    --body-font: 'Cormorant Garamond', serif;
    --heading-font: 'Montserrat', sans-serif;
    --display-font: 'Playfair Display', serif;
}

/* Angled transitions */
.angled-transition {
    position: absolute;
    width: 100%;
    height: 100px;
    overflow: hidden;
    z-index: 2;
}

.angled-top {
    top: 0;
}

.angled-bottom {
    bottom: 0;
    transform: rotate(180deg);
}

.angled-transition svg {
    width: 100%;
    height: 100%;
    display: block;
}

/* Hero Section */
.membership-hero {
    position: relative;
    height: 600px;
    background: linear-gradient(135deg, rgba(26, 26, 26, 0.9) 0%, rgba(139, 111, 76, 0.8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.membership-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Relax-restore.jpeg.webp');
    background-size: cover;
    background-position: center;
    opacity: 0.3;
    z-index: 1;
}

.membership-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: var(--white);
    max-width: 900px;
    padding: 0 20px;
}

.membership-hero h1 {
    font-size: 4rem;
    font-weight: 300;
    margin-bottom: 20px;
    font-family: var(--display-font);
    letter-spacing: 2px;
    text-transform: uppercase;
}

.membership-hero .subtitle {
    font-size: 1.4rem;
    opacity: 0.9;
    margin-bottom: 30px;
    line-height: 1.6;
    font-family: var(--body-font);
}

/* Benefits Section */
.membership-benefits {
    padding: 100px 0;
    background: var(--light);
    position: relative;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 50px;
}

.benefit-item {
    text-align: center;
    padding: 40px;
    background: var(--white);
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.benefit-item:hover {
    transform: translateY(-5px);
}

.benefit-icon {
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: 20px;
}

.benefit-item h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: var(--primary);
    font-family: var(--heading-font);
    font-weight: 600;
}

/* Membership Tiers */
.membership-tiers {
    padding: 100px 0;
    background: var(--white);
    position: relative;
}

.tiers-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-top: 60px;
}

.membership-card {
    position: relative;
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.membership-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
}

.membership-card.featured {
    border: 3px solid var(--primary);
    transform: scale(1.05);
}

.membership-card.featured:hover {
    transform: scale(1.08) translateY(-5px);
}

.membership-header {
    padding: 40px;
    text-align: center;
    position: relative;
}

.membership-card.platinum .membership-header {
    background: linear-gradient(135deg, #e5e4e2 0%, #c0c0c0 100%);
    color: #333;
}

.membership-card.gold .membership-header {
    background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
    color: #333;
}

.membership-card.aesthetic .membership-header {
    background: linear-gradient(135deg, #8b6f47 0%, #a0826d 100%);
    color: white;
}

.membership-name {
    font-size: 2rem;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.membership-price {
    font-size: 3rem;
    font-weight: 300;
    margin: 20px 0;
}

.membership-price .currency {
    font-size: 1.5rem;
    vertical-align: super;
}

.membership-price .period {
    font-size: 1rem;
    opacity: 0.8;
    display: block;
    margin-top: 5px;
}

.featured-badge {
    position: absolute;
    top: -1px;
    right: 20px;
    background: var(--primary);
    color: white;
    padding: 8px 20px;
    font-size: 0.8rem;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.membership-body {
    padding: 40px;
}

.membership-features {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
}

.membership-features li {
    padding: 15px 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    gap: 15px;
}

.membership-features li:last-child {
    border-bottom: none;
}

.membership-features i {
    color: var(--primary);
    font-size: 1.2rem;
}

.join-button {
    display: block;
    width: 100%;
    padding: 18px 30px;
    background: var(--primary);
    color: var(--white);
    text-align: center;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 50px;
    border: 2px solid var(--primary);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    font-family: var(--heading-font);
    position: relative;
    overflow: hidden;
}

.join-button:hover {
    background: var(--white);
    color: var(--primary);
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(175, 143, 90, 0.3);
}

.join-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.join-button:hover::before {
    left: 100%;
}


/* Section title styling to match home page */
.section-title {
    text-align: center;
    margin-bottom: 60px;
}

.section-title h2 {
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: 20px;
    font-family: var(--display-font);
    font-weight: 400;
    letter-spacing: 1px;
}

.section-title .subtitle {
    font-size: 1.2rem;
    color: var(--gray);
    max-width: 600px;
    margin: 0 auto 30px;
    line-height: 1.6;
    font-family: var(--body-font);
}

.divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--primary), var(--accent));
    margin: 0 auto;
    border-radius: 2px;
}

/* FAQ Section */
.membership-faq {
    padding: 100px 0;
    background: var(--light);
    position: relative;
}

.faq-items {
    max-width: 800px;
    margin: 50px auto 0;
}

.faq-item {
    margin-bottom: 20px;
    background: var(--light);
    border-radius: 8px;
    overflow: hidden;
}

.faq-question {
    padding: 25px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    transition: background 0.3s ease;
}

.faq-question:hover {
    background: rgba(139, 111, 76, 0.05);
}

.faq-answer {
    padding: 0 25px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 0 25px 25px;
    max-height: 500px;
}

.faq-item.active .faq-icon {
    transform: rotate(45deg);
}

.faq-icon {
    font-size: 1.5rem;
    color: var(--primary);
    transition: transform 0.3s ease;
}

/* Responsive */
@media (max-width: 768px) {
    .membership-hero h1 {
        font-size: 2.5rem;
    }
    
    .tiers-container {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .membership-card.featured {
        transform: none;
    }
    
    .membership-price {
        font-size: 2.5rem;
    }
    
    .comparison-table {
        overflow-x: auto;
    }
    
    .comparison-table table {
        min-width: 600px;
    }
}
</style>

<main class="memberships-page">
    <!-- Hero Section -->
    <section class="membership-hero">
        <div class="membership-hero-content">
            <h1 class="fade-in-up">Exclusive Membership</h1>
            <p class="subtitle fade-in-up">Unlock unlimited access to premium treatments and personalized wellness journeys</p>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="membership-benefits">
        <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
        <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,100 100,0 100,100"/></svg></div>
        <div class="container">
            <div class="section-title">
                <h2>Member Benefits</h2>
                <p class="subtitle">Experience the pinnacle of aesthetic care with exclusive privileges</p>
                <div class="divider"></div>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item fade-in-up">
                    <div class="benefit-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3>Exclusive Discounts</h3>
                    <p>Enjoy significant savings on all treatments with member-only pricing</p>
                </div>
                
                <div class="benefit-item fade-in-up">
                    <div class="benefit-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Priority Booking</h3>
                    <p>Skip the wait with priority access to appointments and new treatments</p>
                </div>
                
                <div class="benefit-item fade-in-up">
                    <div class="benefit-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Complimentary Services</h3>
                    <p>Receive exclusive treatments and consultations included with membership</p>
                </div>
                
                <div class="benefit-item fade-in-up">
                    <div class="benefit-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Personalized Care</h3>
                    <p>Dedicated care coordinator and customized treatment plans</p>
                </div>
                
                <div class="benefit-item fade-in-up">
                    <div class="benefit-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>VIP Events</h3>
                    <p>Exclusive invitations to member-only events and masterclasses</p>
                </div>
                
                <div class="benefit-item fade-in-up">
                    <div class="benefit-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Wellness Credits</h3>
                    <p>Monthly credits to use towards any treatment or product</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Tiers -->
    <section class="membership-tiers">
        <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
        <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,100 100,0 100,100"/></svg></div>
        <div class="container">
            <div class="section-title">
                <h2>Choose Your Membership</h2>
                <p class="subtitle">Select the perfect membership tier to match your wellness journey</p>
                <div class="divider"></div>
            </div>
            
            <div class="tiers-container">
                <!-- Aesthetic Membership -->
                <div class="membership-card aesthetic fade-in-up">
                    <div class="membership-header">
                        <h3 class="membership-name">Aesthetic</h3>
                        <div class="membership-price">
                            <span class="currency">£</span>2,500
                            <span class="period">per year</span>
                        </div>
                    </div>
                    <div class="membership-body">
                        <ul class="membership-features">
                            <li><i class="fas fa-check"></i> 5% discount on all treatments</li>
                            <li><i class="fas fa-check"></i> 2 complimentary facials per year</li>
                            <li><i class="fas fa-check"></i> Priority booking access</li>
                            <li><i class="fas fa-check"></i> £200 monthly treatment credits</li>
                            <li><i class="fas fa-check"></i> Complimentary skin consultations</li>
                            <li><i class="fas fa-check"></i> 10% discount on skincare products</li>
                            <li><i class="fas fa-check"></i> Birthday treatment voucher</li>
                        </ul>
                        <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20learn%20more%20about%20the%20Aesthetic%20membership." class="join-button">Join Aesthetic</a>
                    </div>
                </div>

                <!-- Gold Membership -->
                <div class="membership-card gold featured fade-in-up">
                    <div class="featured-badge">Most Popular</div>
                    <div class="membership-header">
                        <h3 class="membership-name">Gold</h3>
                        <div class="membership-price">
                            <span class="currency">£</span>3,000
                            <span class="period">per year</span>
                        </div>
                    </div>
                    <div class="membership-body">
                        <ul class="membership-features">
                            <li><i class="fas fa-check"></i> 10% discount on all treatments</li>
                            <li><i class="fas fa-check"></i> 4 complimentary treatments per year</li>
                            <li><i class="fas fa-check"></i> VIP priority booking</li>
                            <li><i class="fas fa-check"></i> £300 monthly treatment credits</li>
                            <li><i class="fas fa-check"></i> Quarterly wellness assessments</li>
                            <li><i class="fas fa-check"></i> 15% discount on all products</li>
                            <li><i class="fas fa-check"></i> Access to exclusive events</li>
                            <li><i class="fas fa-check"></i> Complimentary IV therapy session</li>
                        </ul>
                        <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20learn%20more%20about%20the%20Gold%20membership." class="join-button">Join Gold</a>
                    </div>
                </div>

                <!-- Platinum Membership -->
                <div class="membership-card platinum fade-in-up">
                    <div class="membership-header">
                        <h3 class="membership-name">Platinum</h3>
                        <div class="membership-price">
                            <span class="currency">£</span>4,000
                            <span class="period">per year</span>
                        </div>
                    </div>
                    <div class="membership-body">
                        <ul class="membership-features">
                            <li><i class="fas fa-check"></i> 15% discount on all treatments</li>
                            <li><i class="fas fa-check"></i> 6 complimentary premium treatments</li>
                            <li><i class="fas fa-check"></i> Concierge booking service</li>
                            <li><i class="fas fa-check"></i> £400 monthly treatment credits</li>
                            <li><i class="fas fa-check"></i> Monthly wellness consultations</li>
                            <li><i class="fas fa-check"></i> 20% discount on all products</li>
                            <li><i class="fas fa-check"></i> Personal treatment coordinator</li>
                            <li><i class="fas fa-check"></i> Quarterly IV therapy sessions</li>
                            <li><i class="fas fa-check"></i> Guest passes for friends</li>
                        </ul>
                        <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20learn%20more%20about%20the%20Platinum%20membership." class="join-button">Join Platinum</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    <section class="membership-faq">
        <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--white)" points="0,0 100,100 0,100"/></svg></div>
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p class="subtitle">Everything you need to know about our memberships</p>
                <div class="divider"></div>
            </div>
            
            <div class="faq-items">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do treatment credits work?</span>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Treatment credits are automatically added to your account each month and can be used towards any treatment or service. Credits do not roll over month-to-month, encouraging regular visits and consistent care. Any unused credits expire at the end of each month.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I upgrade or downgrade my membership?</span>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, you can upgrade your membership at any time, with the price difference prorated. Downgrades can be requested and will take effect at the next renewal date. Our team will help ensure a smooth transition between membership tiers.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What complimentary treatments are included?</span>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Complimentary treatments vary by membership tier and include premium facials, skin consultations, and select aesthetic treatments. Platinum members also receive quarterly IV therapy sessions. Your membership coordinator will help you schedule these throughout the year.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Is there a minimum commitment period?</span>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>All memberships are annual commitments, ensuring you receive the full value of your benefits throughout the year. We offer flexible payment options including monthly installments to make membership accessible.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do I book appointments as a member?</span>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Members receive priority booking access through our dedicated member line or WhatsApp concierge service. Platinum members have a personal coordinator who handles all bookings. Gold and Aesthetic members can book directly with priority status.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); padding: 100px 0; text-align: center; position: relative;">
        <div class="container">
            <h2 style="color: var(--white); margin-bottom: 20px; font-family: var(--display-font); font-size: 2.5rem; font-weight: 400;">Ready to Elevate Your Wellness Journey?</h2>
            <p style="color: var(--white); opacity: 0.9; font-size: 1.2rem; margin-bottom: 40px; font-family: var(--body-font); max-width: 600px; margin-left: auto; margin-right: auto;">Join Tempus Belgravia today and experience the ultimate in aesthetic care</p>
            <a href="#book-now" class="cta-button-white" style="display: inline-block; padding: 18px 40px; background: var(--white); color: var(--primary); text-decoration: none; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; border-radius: 50px; border: 2px solid var(--white); transition: all 0.3s ease; font-family: var(--heading-font);">Book a Consultation</a>
        </div>
    </section>

    <!-- Book Now Section -->
    <section id="book-now" class="book-now-section" style="background: var(--light); padding: 80px 0;">
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 50px;">
                <h2>Start Your Membership</h2>
                <p class="subtitle">Schedule a consultation to discuss the perfect membership for you</p>
                <div class="divider"></div>
            </div>
            
            <div class="book-now-content" style="max-width: 900px; margin: 0 auto;">
                <div class="booking-form-container" style="background: white; padding: 50px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <iframe data-tally-src="https://tally.so/embed/wANEXl?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" title="Book Your Appointment"></iframe>
                    <script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// FAQ Toggle
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>

<?php get_footer(); ?>