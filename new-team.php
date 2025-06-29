<?php
/**
 * Template Name: Team Page New
 * Description: Beautiful neutral team page template with all members
 */

// Include WordPress header
get_header();
?>

<style>
/* Reset and Base Styles */
* {
    box-sizing: border-box;
}

.team-page {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: #333;
    line-height: 1.6;
}

/* Hero Section */
.team-hero {
    background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
    padding: 100px 0 80px;
    text-align: center;
}

.team-hero h1 {
    font-size: 3rem;
    font-weight: 300;
    margin-bottom: 1rem;
    color: #1a1a1a;
    letter-spacing: -0.5px;
}

.team-hero .subtitle {
    font-size: 1.25rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Section Styles */
.team-section {
    padding: 80px 0;
}

.team-section.alt-bg {
    background-color: #fafafa;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 300;
    margin-bottom: 1rem;
    color: #1a1a1a;
}

.section-header p {
    font-size: 1.125rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

/* Team Grid */
.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-bottom: 80px;
}

/* Team Member Card - Unified Styles */
.team-member-card {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-member-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 30px rgba(0,0,0,0.12);
}

.member-image {
    position: relative;
    height: 350px;
    overflow: hidden;
    background-color: #f0f0f0;
}

.member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 20%;
}

.member-content {
    padding: 30px;
}

.member-content h3 {
    font-size: 1.5rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    color: #1a1a1a;
}

.member-content .title {
    font-size: 1rem;
    color: #666;
    margin-bottom: 1rem;
    font-weight: 500;
}

.member-content .specialties {
    font-size: 0.875rem;
    color: #888;
    margin-bottom: 1.5rem;
    font-style: italic;
}

/* Bio Preview */
.bio-preview {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 1rem;
}

/* Read More Button */
.read-more-btn {
    background: none;
    border: none;
    color: #333;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    padding: 8px 0;
    display: inline-flex;
    align-items: center;
    transition: color 0.3s ease;
}

.read-more-btn:hover {
    color: #666;
}

.read-more-btn .arrow {
    margin-left: 5px;
    transition: transform 0.3s ease;
    display: inline-block;
}

.read-more-btn.active .arrow {
    transform: rotate(180deg);
}

/* Full Bio (Hidden by default) */
.member-bio {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.7;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, padding 0.5s ease;
}

.member-bio.expanded {
    max-height: 2000px;
    padding-top: 1rem;
}

.member-bio p {
    margin-bottom: 1rem;
}

.member-bio p:last-child {
    margin-bottom: 0;
}

.member-bio ul {
    margin: 1rem 0;
    padding-left: 1.5rem;
}

.member-bio ul li {
    margin-bottom: 0.5rem;
    color: #555;
}

/* Responsive Design */
@media (max-width: 768px) {
    .team-hero h1 {
        font-size: 2rem;
    }
    
    .section-header h2 {
        font-size: 1.75rem;
    }
    
    .team-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .member-image {
        height: 300px;
    }
}

/* Divider */
.divider {
    width: 60px;
    height: 2px;
    background-color: #ddd;
    margin: 40px auto;
}
</style>

<div class="team-page">
    <!-- Hero Section -->
    <section class="team-hero">
        <div class="container">
            <h1>Meet Our Expert Team</h1>
            <p class="subtitle">Dedicated professionals committed to excellence in aesthetic medicine and patient care</p>
        </div>
    </section>

    <!-- Medical Experts Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Medical Experts</h2>
                <p>Board-certified physicians and specialists leading the way in aesthetic medicine</p>
            </div>
            
            <div class="team-grid">
                <!-- Dr. Nadine Hachach-Haram -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/08/Dr.-Nadine-Hachach-Haram-scaled.jpg" alt="Dr. Nadine Hachach-Haram">
                    </div>
                    <div class="member-content">
                        <h3>Dr. Nadine Hachach-Haram</h3>
                        <p class="title">Plastic Surgeon and Aesthetics Doctor</p>
                        <p class="specialties">FRCS(Plast), British Empire Medal Recipient</p>
                        <p class="bio-preview">A surgeon, professor, and clinical entrepreneur, Dr. Nadine Hachach-Haram was awarded the British Empire Medal in the 2018 Queen's Birthday Honours.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>At Guy's & St. Thomas' Hospital in London, she is a consultant plastic surgeon and the clinical lead for innovation.</p>
                            <p>She is also the visionary founder of Proximie, a groundbreaking augmented reality platform transforming the future of surgery and global healthcare collaboration.</p>
                            <p><strong>Specialties:</strong></p>
                            <ul>
                                <li>Non-surgical rejuvenation</li>
                                <li>Liposuction</li>
                                <li>Skin cancer surgery</li>
                                <li>Body contouring (including post-weight loss patients)</li>
                            </ul>
                            <p>With fellowships in microsurgery and aesthetics, she finished her plastic surgery training during the London Rotation. Nadine is actively involved in training plastic surgeons and is a founding member of the MI-4 Microsurgery Simulation Program, the BAPRAS Innovation Committee, and the RSM Plastic Surgery Council.</p>
                            <p>Recognized worldwide as a thought leader in innovation, her work was branded by CNN as "the future of surgery" and in 2021 she was recognized as one of the "50 Women Changing the World." She has been invited to speak at TED and WEF, and her story was chosen as the Science Story of the Year by the Foreign Press Association.</p>
                        </div>
                    </div>
                </div>

                <!-- Dr. Veerle Rotsaert -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/08/Dr.-Veerle-Rotsaert-scaled.jpg" alt="Dr. Veerle Rotsaert">
                    </div>
                    <div class="member-content">
                        <h3>Dr. Veerle Rotsaert</h3>
                        <p class="title">Plastic Surgeon and Aesthetics Doctor</p>
                        <p class="specialties">Fellow of the European Board of Plastic Surgeons</p>
                        <p class="bio-preview">Dr. Rotsaert completed her Plastic, Aesthetic & Reconstructive Surgery training at renowned institutions in the UK, the US, Australia, Spain, Belgium, and Sweden.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>She trained at Chelsea and Westminster Hospital in London and University Hospitals Leuven, Belgium.</p>
                            <p>During her training fellowships, she worked with world-renowned facelift surgeon Timothy Marten in San Francisco and with Professor Anand Deva in Sydney – the world-authority in aesthetic breast surgery. She ranked first in her final Belgian Board Exam at the University of Leuven and became a fellow of the European Board of Plastic Surgeons in 2018.</p>
                            <p><strong>Areas of Expertise:</strong></p>
                            <ul>
                                <li>Facial rejuvenation surgery</li>
                                <li>Breast surgery</li>
                                <li>Body contouring</li>
                                <li>Non-invasive facial medicine (practicing since 2013)</li>
                            </ul>
                            <p>Dr. Rotsaert was recently appointed Ambassador for Vivacy, a French manufacturer specialising in injectable hyaluronic acid-based medical devices for aesthetic and anti-aging medicine. With the eye of a plastic surgeon, she creates natural, elegant looking results for her patients, matching specific desires with an honest opinion.</p>
                        </div>
                    </div>
                </div>

                <!-- Dr. Ewa Kania -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2025/06/Ewa-Photo.jpg" alt="Dr. Ewa Kania">
                    </div>
                    <div class="member-content">
                        <h3>Dr. Ewa Kania, PhD</h3>
                        <p class="title">Aesthetics and Longevity Doctor</p>
                        <p class="specialties">PhD in Stem Cells and Regenerative Medicine</p>
                        <p class="bio-preview">Dr. Kania is a leading specialist in regenerative aesthetics, recognized for her scientific approach to beauty to achieve subtle, natural, and enduring results.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>A member of the Royal Society of Medicine, The Aesthetic Multispecialty Society, and the British Beauty Council, she also serves as a peer reviewer for the Journal of Cosmetic Dermatology.</p>
                            <p>Her path into regenerative medicine was deeply personal, leading to a PhD in Stem Cells and Regenerative Medicine, advanced training in cosmetic dermatology, and aesthetic medicine - a unique mix of insights that distinguishes her within the field.</p>
                            <p><strong>Treatment Philosophy:</strong></p>
                            <p>Dr. Kania's approach is guided by the belief that beauty begins with biology. Anchored by regenerative principles, she is known for integrating injectables like exosomes and biostimulators with energy-based technologies.</p>
                            <p><strong>Services Include:</strong></p>
                            <ul>
                                <li>Regenerative Treatments</li>
                                <li>Chemical Peels</li>
                                <li>IV Drips</li>
                                <li>Intramuscular Injections</li>
                                <li>Advanced Skin Care systems</li>
                            </ul>
                            <p>Each plan is personalised through careful assessment and tailored sequencing to achieve natural, balanced, and long-lasting results.</p>
                            <p><em>"My philosophy is to help you look fresher, healthier, and more energized, and ultimately, the best version of yourself."</em> – Dr. Kania</p>
                        </div>
                    </div>
                </div>

                <!-- Dr. Souphiyeh Samizadeh -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/10/Dr.-Souphi-Samizadeh--scaled.jpg" alt="Dr. Souphiyeh Samizadeh">
                    </div>
                    <div class="member-content">
                        <h3>Dr. Souphiyeh Samizadeh</h3>
                        <p class="title">Aesthetics Doctor</p>
                        <p class="specialties">Master's in Aesthetic Medicine, University of London</p>
                        <p class="bio-preview">Enhancing natural beauty comes easily to Dr Souphi Samizadeh, a true artist in aesthetic medicine.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>Thanks to her in-depth understanding of facial architecture and aesthetic ideals, Dr Souphi rejuvenates her patients' faces with subtle treatments that deliver beautifully harmonious results.</p>
                            <p><strong>Qualifications & Academic Positions:</strong></p>
                            <ul>
                                <li>Dental surgeon with multiple qualifications</li>
                                <li>Master's degree (with distinction) in aesthetic medicine from the University of London</li>
                                <li>Visiting clinical teacher at King's College London</li>
                                <li>Clinical teaching fellow at University College London</li>
                                <li>Visiting associate professor at Shanghai Jiao Tong University</li>
                            </ul>
                            <p>Dr Souphi's patients all comment on her caring and compassionate nature. When you book an appointment with Dr Souphi, you know you are her number one priority and always in safe hands.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Team Section -->
    <section class="team-section alt-bg">
        <div class="container">
            <div class="section-header">
                <h2>Our Clinical Aesthetician Team</h2>
                <p>Skilled professionals ensuring your comfort and delivering exceptional care</p>
            </div>
            
            <div class="team-grid">
                <!-- Camelia Olariu -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/10/Camelia-Olariu-scaled.jpg" alt="Camelia Olariu">
                    </div>
                    <div class="member-content">
                        <h3>Camelia Olariu</h3>
                        <p class="title">Clinical Aesthetician</p>
                        <p class="specialties">Laser therapy, Chemical peels, HydraFacial, Phlebotomy</p>
                        <p class="bio-preview">Camelia is a skilled beauty and laser therapist with over five years' experience at a respected dermatology clinic in London's Harley Street.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>She has a further four years at a New York laser clinic.</p>
                            <p><strong>Areas of Expertise:</strong></p>
                            <ul>
                                <li>Electrical facial treatments</li>
                                <li>Laser hair removal</li>
                                <li>IPL (Intense Pulsed Light)</li>
                                <li>Microdermabrasion</li>
                                <li>Chemical peels</li>
                                <li>HydraFacial</li>
                                <li>Sublative laser treatments</li>
                            </ul>
                            <p>She is also a highly qualified phlebotomist and is trained in mesotherapy, High-intensity focused ultrasound technology, and Coolsculpting and Velashape procedures.</p>
                        </div>
                    </div>
                </div>

                <!-- Lenka Anthony -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/10/Lenka-Anthony-1-scaled.jpg" alt="Lenka Anthony">
                    </div>
                    <div class="member-content">
                        <h3>Lenka Anthony</h3>
                        <p class="title">Clinical Aesthetician</p>
                        <p class="specialties">Medical-grade lasers, Advanced skincare, Celebrity treatments</p>
                        <p class="bio-preview">Lenka has more than 12 years' experience working alongside several top cosmetic surgeons, plastic surgeons, dermatologists, and GPs.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>An expert aesthetician, her clients include royalty, celebrities, and individuals who want the very best for their skin.</p>
                            <p>Lenka has a tailored approach to each client, utilising medical-grade lasers, advanced skincare, and technologies. She holds a number of diplomas in her field and has undertaken advanced laser and aesthetic training over the years.</p>
                            <p>Known for her friendly yet professional approach, Lenka offers thorough consultations taking time to fully understand your skin or body requirements, allowing her to provide honest advice and treatment recommendations for superb results.</p>
                        </div>
                    </div>
                </div>

                <!-- Maya Hensel -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2025/06/Maya-PHOTO-2025-06-17-15-02-17.jpg" alt="Maya Hensel">
                    </div>
                    <div class="member-content">
                        <h3>Maya Hensel</h3>
                        <p class="title">Clinical Aesthetician</p>
                        <p class="specialties">VIP treatments, Prestigious settings expertise</p>
                        <p class="bio-preview">Maya's 10 year journey has led her to become a highly skilled and experienced aesthetician.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>Through dedication and curiosity, she has mastered the art of this craft, enabling her to perform treatments from a unique perspective.</p>
                            <p>Throughout Maya's career, she has exclusively worked in prestigious settings. Her clientele includes royals, VIPs and high-end guests. She has honed her skills to deliver unparalleled service and exceptional results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clinic Leadership Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2>Clinic Leadership</h2>
                <p>Guiding Tempus Belgravia with vision, expertise, and dedication to excellence</p>
            </div>
            
            <div class="team-grid">
                <!-- Kate Zochowska -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2022/10/Kate-Zochowska-scaled.jpg" alt="Kate Zochowska">
                    </div>
                    <div class="member-content">
                        <h3>Kate Zochowska</h3>
                        <p class="title">Operations Manager</p>
                        <p class="bio-preview">Kate qualified in 2004 from the Institute of Cosmetology and Healthcare in Poland with a Bachelor's degree in Applied Cosmetology.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>Shortly after graduating she moved to London where she specialized in body sculpting treatments for over 5 years.</p>
                            <p>Kate realized her passion was delivering a superb and seamless patient journey. She has gained her vast experience managing London's most reputable aesthetic clinics, where she looked after patients throughout their journey in the most honest, caring, tailored and discreet way, building their trust and respect.</p>
                            <p>Kate oversees the general running of the practice and brings a thorough understanding of every element. She also ensures that all healthcare quality standards are met.</p>
                            <p>With her technical knowledge and calm manner Kate exudes confidence and excitement in our patients. With Kate's peaceful nature, she has a strong connection with the team she works with and our patients.</p>
                        </div>
                    </div>
                </div>

                <!-- Virginia Pelaez -->
                <div class="team-member-card">
                    <div class="member-image">
                        <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2025/06/Virginia19-06-2025-19-36-20.jpeg" alt="Virginia Pelaez">
                    </div>
                    <div class="member-content">
                        <h3>Virginia Pelaez</h3>
                        <p class="title">Clinic Manager</p>
                        <p class="bio-preview">Virginia is a highly experienced professional with over 15 years in luxury aesthetics, known for her refined approach and exceptional client care.</p>
                        <button class="read-more-btn" onclick="toggleBio(this)">
                            Read more <span class="arrow">▼</span>
                        </button>
                        <div class="member-bio">
                            <p>Based in London, she holds a BA in Business Administration and a prestigious VTCT Level 3 qualification in Beauty Therapy, bringing together clinical knowledge and a deep understanding of VIP service.</p>
                            <p>Virginia specializes in crafting bespoke treatment journeys, offering personalized guidance on advanced aesthetics and premium skincare. Her passion lies in helping clients look and feel their absolute best, using a combination of the latest innovations and time-honored techniques.</p>
                            <p>Known for her discretion, politeness, and unwavering attention to detail, Virginia takes pride in creating experiences that go beyond expectations, delivering not just visible results, but renewed confidence and wellbeing.</p>
                            <p>Whether you're seeking rejuvenation, refinement, or a new level of self-care, you're in expert hands.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="team-section alt-bg">
        <div class="container">
            <div class="section-header">
                <h2>Ready to Meet Our Team?</h2>
                <p>Schedule a consultation to discuss your aesthetic goals with our experts</p>
                <div class="divider"></div>
                <div style="text-align: center;">
                    <a href="/contact" style="display: inline-block; padding: 15px 40px; background-color: #333; color: #fff; text-decoration: none; border-radius: 4px; font-size: 1.1rem; transition: background-color 0.3s ease;">Book Your Consultation</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function toggleBio(button) {
    const memberContent = button.parentElement;
    const bio = memberContent.querySelector('.member-bio');
    const isExpanded = bio.classList.contains('expanded');
    
    if (isExpanded) {
        bio.classList.remove('expanded');
        button.classList.remove('active');
        button.innerHTML = 'Read more <span class="arrow">▼</span>';
    } else {
        bio.classList.add('expanded');
        button.classList.add('active');
        button.innerHTML = 'Read less <span class="arrow">▼</span>';
    }
}
</script>

<?php
// Include WordPress footer
get_footer();
?>