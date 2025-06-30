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
/* Membership Page Styles */
.memberships-page {
    padding: 0;
    background-color: var(--white);
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
    font-family: var(--display-font, 'Playfair Display', serif);
    letter-spacing: 2px;
    text-transform: uppercase;
}

.membership-hero .subtitle {
    font-size: 1.4rem;
    opacity: 0.9;
    margin-bottom: 30px;
    line-height: 1.6;
}

/* Benefits Section */
.membership-benefits {
    padding: 80px 0;
    background: var(--light);
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
}

/* Membership Tiers */
.membership-tiers {
    padding: 100px 0;
    background: var(--white);
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
    padding: 18px;
    background: var(--primary);
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.join-button:hover {
    background: var(--primary-dark, #6b5b3a);
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(139, 111, 76, 0.3);
}

/* Comparison Table */
.comparison-section {
    padding: 80px 0;
    background: var(--light);
}

.comparison-table {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 30px rgba(0,0,0,0.08);
    margin-top: 50px;
}

.comparison-table table {
    width: 100%;
    border-collapse: collapse;
}

.comparison-table th,
.comparison-table td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.comparison-table th {
    background: var(--primary);
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.comparison-table th:first-child {
    width: 40%;
}

.comparison-table td {
    color: #666;
}

.comparison-table tr:last-child td {
    border-bottom: none;
}

.comparison-table .check {
    color: var(--primary);
    font-size: 1.2rem;
}

/* FAQ Section */
.membership-faq {
    padding: 80px 0;
    background: var(--white);
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
        <div class="container">
            <div class="section-title text-center">
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
        <div class="container">
            <div class="section-title text-center">
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
                            <li><i class="fas fa-check"></i> 15% discount on all treatments</li>
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
                            <li><i class="fas fa-check"></i> 20% discount on all treatments</li>
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
                            <li><i class="fas fa-check"></i> 25% discount on all treatments</li>
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

    <!-- Comparison Table -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Compare Memberships</h2>
                <p class="subtitle">Find the perfect membership tier for your needs</p>
                <div class="divider"></div>
            </div>
            
            <div class="comparison-table">
                <table>
                    <thead>
                        <tr>
                            <th>Benefits</th>
                            <th>Aesthetic</th>
                            <th>Gold</th>
                            <th>Platinum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Treatment Discount</td>
                            <td>15%</td>
                            <td>20%</td>
                            <td>25%</td>
                        </tr>
                        <tr>
                            <td>Monthly Credits</td>
                            <td>£200</td>
                            <td>£300</td>
                            <td>£400</td>
                        </tr>
                        <tr>
                            <td>Complimentary Treatments</td>
                            <td>2 per year</td>
                            <td>4 per year</td>
                            <td>6 per year</td>
                        </tr>
                        <tr>
                            <td>Product Discount</td>
                            <td>10%</td>
                            <td>15%</td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <td>Priority Booking</td>
                            <td><i class="fas fa-check check"></i></td>
                            <td><i class="fas fa-check check"></i></td>
                            <td><i class="fas fa-check check"></i></td>
                        </tr>
                        <tr>
                            <td>Wellness Assessments</td>
                            <td>Annual</td>
                            <td>Quarterly</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td>IV Therapy Sessions</td>
                            <td>-</td>
                            <td>1 per year</td>
                            <td>4 per year</td>
                        </tr>
                        <tr>
                            <td>Personal Coordinator</td>
                            <td>-</td>
                            <td>-</td>
                            <td><i class="fas fa-check check"></i></td>
                        </tr>
                        <tr>
                            <td>Guest Passes</td>
                            <td>-</td>
                            <td>-</td>
                            <td><i class="fas fa-check check"></i></td>
                        </tr>
                        <tr>
                            <td>Exclusive Events</td>
                            <td>-</td>
                            <td><i class="fas fa-check check"></i></td>
                            <td><i class="fas fa-check check"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="membership-faq">
        <div class="container">
            <div class="section-title text-center">
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
    <section class="cta-section" style="background: var(--primary); padding: 80px 0; text-align: center;">
        <div class="container">
            <h2 style="color: white; margin-bottom: 20px;">Ready to Elevate Your Wellness Journey?</h2>
            <p style="color: white; opacity: 0.9; font-size: 1.2rem; margin-bottom: 30px;">Join Tempus Belgravia today and experience the ultimate in aesthetic care</p>
            <a href="#book-now" class="cta-button cta-button-white">Book a Consultation</a>
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