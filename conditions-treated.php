<?php
/**
 * Template Name: Conditions Treated
 * Description: A comprehensive page listing all conditions treated at Tempus Belgravia
 *
 * @package tempusbelgravia
 */

get_header();

// Conditions data structure with treatment recommendations
$conditions = [
    [
        'id' => 'lines-wrinkles',
        'title' => 'Lines and Wrinkles',
        'category' => 'aging',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Artboard-83.png.webp',
        'description' => 'Fine lines and wrinkles develop as our skin loses collagen and elasticity over time. These visible signs of aging can appear on the forehead, around the eyes, and mouth.',
        'symptoms' => 'Crow\'s feet, forehead lines, frown lines, smile lines',
        'recommended_treatments' => [
            'Face Wrinkles Treatment',
            'Anti-Wrinkle Injections',
            'Dermal Fillers',
            'HIFU',
            'Thread Lift'
        ],
        'severity' => 'mild-severe'
    ],
    [
        'id' => 'volume-loss',
        'title' => 'Facial Volume Loss',
        'category' => 'aging',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Cheek-Enhancement-scaled-1.jpeg.webp',
        'description' => 'Age-related volume loss occurs when facial fat pads diminish and bone density decreases, leading to a hollow or gaunt appearance.',
        'symptoms' => 'Hollow cheeks, sunken temples, flat mid-face, loss of facial contours',
        'recommended_treatments' => [
            'Cheek Enhancement',
            'Temple Filler',
            '8 Point Lift',
            'Profhilo Face'
        ],
        'severity' => 'moderate-severe'
    ],
    [
        'id' => 'sagging-skin',
        'title' => 'Skin Laxity & Sagging',
        'category' => 'aging',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Hifu-scaled-1.jpeg.webp',
        'description' => 'Loss of skin elasticity leads to sagging in the face, neck, and body. This creates jowls, loose neck skin, and overall facial descent.',
        'symptoms' => 'Jowls, turkey neck, drooping eyelids, sagging cheeks',
        'recommended_treatments' => [
            'HIFU',
            'Thread Lift',
            'Silhouette Soft',
            'Nefertiti Neck Lift',
            'RF Microneedling'
        ],
        'severity' => 'moderate-severe'
    ],
    [
        'id' => 'under-eye-concerns',
        'title' => 'Under Eye Issues',
        'category' => 'facial',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/under-eye-scaled-1.jpeg.webp',
        'description' => 'The delicate under-eye area is prone to dark circles, hollowing, and fine lines, making you appear tired or older than you feel.',
        'symptoms' => 'Dark circles, eye bags, hollow tear troughs, crow\'s feet',
        'recommended_treatments' => [
            'Under Eye Filler',
            'PRP/Vampire Facial',
            'Skin Boosters',
            'Mesotherapy'
        ],
        'severity' => 'mild-moderate'
    ],
    [
        'id' => 'thin-lips',
        'title' => 'Thin or Aging Lips',
        'category' => 'facial',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp',
        'description' => 'Lips naturally lose volume with age, becoming thinner and developing vertical lines. Some people are born with naturally thin lips.',
        'symptoms' => 'Thin lips, lip lines, loss of definition, downturned corners',
        'recommended_treatments' => [
            'Lip Enhancement',
            'Hyaluronic Acid Fillers',
            'Skin Boosters'
        ],
        'severity' => 'mild-moderate'
    ],
    [
        'id' => 'weak-jawline',
        'title' => 'Weak Jawline Definition',
        'category' => 'facial',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/jawline-filler-scaled-1.jpeg.webp',
        'description' => 'A weak or undefined jawline can result from genetics, aging, or weight changes, affecting facial profile and confidence.',
        'symptoms' => 'Soft jawline, lack of definition, jowls, double chin',
        'recommended_treatments' => [
            'Jawline Filler',
            'Chin Filler',
            'HIFU',
            'Thread Lift'
        ],
        'severity' => 'mild-severe'
    ],
    [
        'id' => 'double-chin',
        'title' => 'Double Chin & Neck Fat',
        'category' => 'body',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Fat-disolving-scaled-1.jpeg.webp',
        'description' => 'Submental fullness, commonly known as a double chin, can be genetic or result from weight gain and aging.',
        'symptoms' => 'Excess fat under chin, lack of neck definition, fullness in neck area',
        'recommended_treatments' => [
            'Aqualyx Fat Dissolving',
            'HIFU',
            'EMSculpt Neo',
            'Velashape'
        ],
        'severity' => 'moderate'
    ],
    [
        'id' => 'nasolabial-folds',
        'title' => 'Nasolabial Folds',
        'category' => 'aging',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Nasolabial-Lines-scaled-1.jpeg.webp',
        'description' => 'Deep lines running from the nose to the corners of the mouth that deepen with age and volume loss.',
        'symptoms' => 'Deep smile lines, facial creases, aged appearance',
        'recommended_treatments' => [
            'Nasolabial Lines Filler',
            'Cheek Enhancement',
            '8 Point Lift',
            'Thread Lift'
        ],
        'severity' => 'moderate-severe'
    ],
    [
        'id' => 'marionette-lines',
        'title' => 'Marionette Lines',
        'category' => 'aging',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Marie-Antionette.jpeg.webp',
        'description' => 'Lines extending from the corners of the mouth downward, creating a sad or angry appearance.',
        'symptoms' => 'Downturned mouth corners, puppet lines, sad expression',
        'recommended_treatments' => [
            'Marionette Lines Filler',
            'Jawline Filler',
            'Thread Lift',
            'Profhilo Face'
        ],
        'severity' => 'moderate-severe'
    ],
    [
        'id' => 'acne-scarring',
        'title' => 'Acne Scarring',
        'category' => 'skin',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Focus-Dual-Hifu-and-Microneedling.jpeg.webp',
        'description' => 'Textural irregularities and pitted scars left behind after acne breakouts heal.',
        'symptoms' => 'Ice pick scars, boxcar scars, rolling scars, hyperpigmentation',
        'recommended_treatments' => [
            'RF Microneedling',
            'PRP/Vampire Facial',
            'Mesotherapy',
            'Chemical Peels'
        ],
        'severity' => 'mild-severe'
    ],
    [
        'id' => 'skin-texture',
        'title' => 'Uneven Skin Texture',
        'category' => 'skin',
        'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg',
        'description' => 'Rough, bumpy, or uneven skin texture can result from sun damage, aging, or skin conditions.',
        'symptoms' => 'Rough patches, enlarged pores, dull complexion, uneven tone',
        'recommended_treatments' => [
            'Skin Boosters',
            'AQUAGOLD Fine Touch',
            'Profhilo Face',
            'RF Microneedling'
        ],
        'severity' => 'mild-moderate'
    ],
    [
        'id' => 'dehydrated-skin',
        'title' => 'Dehydrated & Dull Skin',
        'category' => 'skin',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Restilane-Skin-Booster-scaled-1.jpeg.webp',
        'description' => 'Skin lacking moisture appears dull, feels tight, and shows fine lines more prominently.',
        'symptoms' => 'Dullness, tightness, fine lines, flaking, lack of radiance',
        'recommended_treatments' => [
            'Restylane Skin Boosters',
            'Profhilo Face',
            'Mesotherapy',
            'AQUAGOLD Fine Touch'
        ],
        'severity' => 'mild-moderate'
    ],
    [
        'id' => 'cellulite',
        'title' => 'Cellulite',
        'category' => 'body',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/vascullar.jpg.webp',
        'description' => 'Dimpled, orange-peel texture on thighs, buttocks, and abdomen caused by fat deposits pushing through connective tissue.',
        'symptoms' => 'Dimpled skin, orange peel texture, skin irregularities',
        'recommended_treatments' => [
            'Onda',
            'Velashape',
            'Profhilo Body',
            'RF Body Treatments'
        ],
        'severity' => 'mild-severe'
    ],
    [
        'id' => 'stubborn-fat',
        'title' => 'Stubborn Fat Deposits',
        'category' => 'body',
        'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner%2016:9/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg',
        'description' => 'Localized fat deposits resistant to diet and exercise, commonly in abdomen, flanks, and thighs.',
        'symptoms' => 'Love handles, belly pouch, bra fat, inner thigh fat',
        'recommended_treatments' => [
            'EMSculpt Neo',
            'Aqualyx Fat Dissolving',
            'Velashape',
            'Onda'
        ],
        'severity' => 'moderate'
    ],
    [
        'id' => 'hair-loss',
        'title' => 'Hair Loss & Thinning',
        'category' => 'hair',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/12/prp-hair-loos.jpeg.webp',
        'description' => 'Progressive hair thinning and loss affecting scalp density and hairline, impacting confidence.',
        'symptoms' => 'Thinning hair, receding hairline, bald patches, overall hair loss',
        'recommended_treatments' => [
            'PRP Hair Loss Therapy',
            'Mesotherapy for Hair',
            'IV Vitamin Therapy'
        ],
        'severity' => 'mild-severe'
    ],
    [
        'id' => 'excessive-sweating',
        'title' => 'Hyperhidrosis',
        'category' => 'medical',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/03/pexels-andrea-piacquadio-863974-scaled-1.jpeg.webp',
        'description' => 'Excessive sweating beyond normal body temperature regulation, affecting underarms, hands, and feet.',
        'symptoms' => 'Excessive underarm sweating, sweaty palms, social anxiety',
        'recommended_treatments' => [
            'Botox for Hyperhidrosis',
            'miraDry Treatment'
        ],
        'severity' => 'moderate-severe'
    ],
    [
        'id' => 'teeth-grinding',
        'title' => 'Bruxism (Teeth Grinding)',
        'category' => 'medical',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2023/03/teeth-grinding-scaled-1.jpeg.webp',
        'description' => 'Unconscious teeth grinding and jaw clenching causing jaw pain, headaches, and dental damage.',
        'symptoms' => 'Jaw pain, headaches, worn teeth, facial muscle tension',
        'recommended_treatments' => [
            'Botox for Masseter',
            'Jawline Slimming Treatment'
        ],
        'severity' => 'moderate'
    ],
    [
        'id' => 'hand-aging',
        'title' => 'Aging Hands',
        'category' => 'body',
        'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/HAND-REJUVENATION-scaled-1.jpeg.webp',
        'description' => 'Hands show visible signs of aging with volume loss, prominent veins, and age spots.',
        'symptoms' => 'Thin skin, visible veins, age spots, crepey texture',
        'recommended_treatments' => [
            'Hand Rejuvenation',
            'Profhilo Hands',
            'IPL for Age Spots'
        ],
        'severity' => 'mild-moderate'
    ]
];

// Function to get treatments for a condition
function getRecommendedTreatments($condition_treatments) {
    $treatment_links = [
        'Face Wrinkles Treatment' => '/treatment/face-wrinkles/',
        'Anti-Wrinkle Injections' => '/treatment/anti-wrinkle-injections/',
        'Dermal Fillers' => '/treatment/dermal-fillers/',
        'HIFU' => '/treatment/hifu-high-intensity-focused-ultrasound/',
        'Thread Lift' => '/treatment/thread-lift/',
        'Cheek Enhancement' => '/treatment/cheek-enhancement/',
        'Temple Filler' => '/treatment/temple-filler/',
        '8 Point Lift' => '/treatment/8-point-lift/',
        'Profhilo Face' => '/treatment/profhilo-face/',
        'Under Eye Filler' => '/treatment/under-eye/',
        'PRP/Vampire Facial' => '/treatment/prp-vampire-facial/',
        'Skin Boosters' => '/treatment/skin-boosters/',
        'Mesotherapy' => '/treatment/mesotherapy/',
        'Lip Enhancement' => '/treatment/lip-enhancement/',
        'Hyaluronic Acid Fillers' => '/treatment/dermal-fillers/',
        'Jawline Filler' => '/treatment/jawline-filler/',
        'Chin Filler' => '/treatment/chin-filler/',
        'Aqualyx Fat Dissolving' => '/treatment/aqualyx-fat-dissolving/',
        'EMSculpt Neo' => '/treatment/emsculpt-neo/',
        'Velashape' => '/treatment/velashape/',
        'Nasolabial Lines Filler' => '/treatment/nasolabial-lines/',
        'Marionette Lines Filler' => '/treatment/marionette-lines/',
        'RF Microneedling' => '/treatment/rf-microneedling/',
        'Chemical Peels' => '/treatment/chemical-peels/',
        'AQUAGOLD Fine Touch' => '/treatment/aquagold/',
        'Restylane Skin Boosters' => '/treatment/skin-boosters/',
        'Onda' => '/treatment/onda/',
        'Profhilo Body' => '/treatment/profhilo-body/',
        'PRP Hair Loss Therapy' => '/treatment/prp-hair-loss-therapy/',
        'IV Vitamin Therapy' => '/treatment_category/iv-infusions/',
        'Botox for Hyperhidrosis' => '/treatment/hyperhidrosis/',
        'Botox for Masseter' => '/treatment/masseter-botox/',
        'Hand Rejuvenation' => '/treatment/hand-rejuvenation/',
        'Silhouette Soft' => '/treatment/silhouette-soft/',
        'Nefertiti Neck Lift' => '/treatment/nefertiti-neck-lift/'
    ];
    
    return $treatment_links;
}

// Get category filter
$selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'all';
?>

<!-- Include home.css for consistent styling -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/home.css">

<style>
/* Conditions Page Specific Styles */
:root {
    --primary: #AF8F5A;
    --primary-dark: #8C6F44;
    --primary-light: #D4AF7A;
    --primary-ultralight: #F7F3ED;
    --dark-text: #333333;
    --gray: #555555;
    --light-gray: #eeeeee;
    --white: #ffffff;
}

.conditions-page-wrapper {
    background-color: var(--light);
    padding-top: 0;
}

/* Hero Section */
.conditions-hero {
    position: relative;
    height: 500px;
    overflow: hidden;
    margin-bottom: 60px;
}

.conditions-hero .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.conditions-hero .hero-background img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.conditions-hero .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.5) 100%);
}

.conditions-hero .hero-content {
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    z-index: 2;
    padding: 0 20px;
}

.hero-title {
    color: var(--white);
    font-size: 4rem;
    margin-bottom: 20px;
    font-family: var(--display-font);
    font-weight: 500;
}

.hero-subtitle {
    color: var(--white);
    font-size: 1.4rem;
    max-width: 600px;
    margin: 0 auto 30px;
    opacity: 0.9;
}

.hero-cta {
    background-color: var(--primary);
    color: var(--white);
    padding: 15px 40px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-block;
}

.hero-cta:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
}

/* Filter Section */
.conditions-filter-section {
    background-color: var(--white);
    padding: 40px 0;
    margin-bottom: 60px;
    border-bottom: 1px solid var(--light-gray);
}

.filter-wrapper h2 {
    text-align: center;
    color: var(--primary);
    margin-bottom: 30px;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 10px 25px;
    background-color: transparent;
    border: 2px solid var(--primary);
    color: var(--primary);
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background-color: var(--primary);
    color: var(--white);
}

/* Conditions Grid */
.conditions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
    gap: 40px;
    margin-bottom: 80px;
}

.condition-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.condition-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.condition-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.condition-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.condition-overlay {
    position: absolute;
    top: 0;
    right: 0;
    padding: 20px;
}

.severity-badge {
    background-color: rgba(0,0,0,0.7);
    color: var(--white);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    text-transform: uppercase;
}

.severity-mild-moderate {
    background-color: rgba(75, 192, 192, 0.8);
}

.severity-moderate {
    background-color: rgba(255, 159, 64, 0.8);
}

.severity-moderate-severe,
.severity-mild-severe {
    background-color: rgba(255, 99, 132, 0.8);
}

.condition-content {
    padding: 30px;
}

.condition-title {
    color: var(--primary);
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.condition-description {
    color: var(--gray);
    margin-bottom: 20px;
    line-height: 1.6;
}

.condition-symptoms {
    margin-bottom: 25px;
    padding: 15px;
    background-color: var(--primary-ultralight);
    border-radius: 8px;
}

.condition-symptoms h4 {
    color: var(--primary);
    margin-bottom: 10px;
    font-size: 1.1rem;
}

.condition-symptoms p {
    color: var(--dark-text);
    margin: 0;
}

.recommended-treatments h4 {
    color: var(--primary);
    margin-bottom: 15px;
}

.treatment-list {
    list-style: none;
    padding: 0;
    margin: 0 0 25px 0;
}

.treatment-list li {
    margin-bottom: 10px;
}

.treatment-link {
    color: var(--dark-text);
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px solid var(--light-gray);
    transition: all 0.3s ease;
}

.treatment-link:hover {
    color: var(--primary);
    padding-left: 10px;
}

.treatment-link i {
    font-size: 0.8rem;
    transition: transform 0.3s ease;
}

.treatment-link:hover i {
    transform: translateX(5px);
}

.condition-actions {
    display: flex;
    gap: 15px;
    margin-top: 30px;
}

.btn-primary,
.btn-secondary {
    padding: 12px 25px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary {
    background-color: var(--primary);
    color: var(--white);
    border: 2px solid var(--primary);
}

.btn-primary:hover {
    background-color: var(--primary-dark);
    border-color: var(--primary-dark);
}

.btn-secondary {
    background-color: transparent;
    color: var(--primary);
    border: 2px solid var(--primary);
}

.btn-secondary:hover {
    background-color: var(--primary);
    color: var(--white);
}

/* Treatment Matching Section */
.treatment-matching-section {
    background-color: var(--primary-ultralight);
    padding: 80px 0;
    margin-bottom: 80px;
}

.matching-header {
    text-align: center;
    margin-bottom: 60px;
}

.matching-header h2 {
    color: var(--primary);
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.matching-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
}

.feature-card {
    text-align: center;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background-color: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.feature-icon i {
    color: var(--white);
    font-size: 2rem;
}

.feature-card h3 {
    color: var(--primary);
    margin-bottom: 15px;
}

/* FAQ Section */
.conditions-faq-section {
    padding: 80px 0;
    background-color: var(--white);
}

.faq-header {
    text-align: center;
    margin-bottom: 50px;
}

.faq-header h2 {
    color: var(--primary);
    font-size: 2.5rem;
}

.faq-accordion {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    margin-bottom: 20px;
    border: 1px solid var(--light-gray);
    border-radius: 8px;
    overflow: hidden;
}

.faq-question {
    padding: 20px 30px;
    background-color: var(--white);
    cursor: pointer;
    position: relative;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background-color: var(--primary-ultralight);
}

.faq-question::after {
    content: '+';
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.5rem;
    color: var(--primary);
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question::after {
    transform: translateY(-50%) rotate(45deg);
}

.faq-answer {
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 20px 30px 30px;
    max-height: 500px;
}

/* CTA Section */
.conditions-cta-section {
    background-color: var(--primary);
    color: var(--white);
    padding: 80px 0;
    text-align: center;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.3rem;
    margin-bottom: 40px;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.conditions-cta-section .btn-primary {
    background-color: var(--white);
    color: var(--primary);
}

.conditions-cta-section .btn-primary:hover {
    background-color: var(--primary-ultralight);
}

.conditions-cta-section .btn-secondary {
    border-color: var(--white);
    color: var(--white);
}

.conditions-cta-section .btn-secondary:hover {
    background-color: var(--white);
    color: var(--primary);
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .conditions-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .condition-actions {
        flex-direction: column;
    }
    
    .filter-buttons {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 8px 20px;
        font-size: 0.9rem;
    }
}
</style>

<div class="conditions-page-wrapper">
    <main id="conditions-content" class="conditions-main-content">
        
        <!-- Hero Section -->
        <section class="conditions-hero">
            <div class="hero-background">
                <img src="https://res.cloudinary.com/drtatej7i/image/upload/t_Banner%2016:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg" alt="Conditions Treatment">
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title fade-in-up">Conditions We Treat</h1>
                <p class="hero-subtitle fade-in-up">Expert diagnosis and advanced treatment solutions for your aesthetic and medical concerns</p>
                <a href="#conditions-list" class="hero-cta fade-in-up">Explore Conditions</a>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="conditions-filter-section">
            <div class="container">
                <div class="filter-wrapper">
                    <h2>Browse by Category</h2>
                    <div class="filter-buttons">
                        <button class="filter-btn <?php echo $selected_category === 'all' ? 'active' : ''; ?>" data-category="all">All Conditions</button>
                        <button class="filter-btn <?php echo $selected_category === 'aging' ? 'active' : ''; ?>" data-category="aging">Anti-Aging</button>
                        <button class="filter-btn <?php echo $selected_category === 'facial' ? 'active' : ''; ?>" data-category="facial">Facial Concerns</button>
                        <button class="filter-btn <?php echo $selected_category === 'skin' ? 'active' : ''; ?>" data-category="skin">Skin Issues</button>
                        <button class="filter-btn <?php echo $selected_category === 'body' ? 'active' : ''; ?>" data-category="body">Body Concerns</button>
                        <button class="filter-btn <?php echo $selected_category === 'hair' ? 'active' : ''; ?>" data-category="hair">Hair & Scalp</button>
                        <button class="filter-btn <?php echo $selected_category === 'medical' ? 'active' : ''; ?>" data-category="medical">Medical</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conditions List Section -->
        <section id="conditions-list" class="conditions-list-section">
            <div class="container">
                <div class="conditions-grid">
                    <?php foreach ($conditions as $condition): ?>
                    <article class="condition-card fade-in-up" data-category="<?php echo $condition['category']; ?>">
                        <div class="condition-card-inner">
                            <div class="condition-image">
                                <img src="<?php echo $condition['image']; ?>" alt="<?php echo $condition['title']; ?>">
                                <div class="condition-overlay">
                                    <span class="severity-badge severity-<?php echo $condition['severity']; ?>">
                                        <?php echo ucfirst(str_replace('-', ' to ', $condition['severity'])); ?>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="condition-content">
                                <h3 class="condition-title"><?php echo $condition['title']; ?></h3>
                                <p class="condition-description"><?php echo $condition['description']; ?></p>
                                
                                <div class="condition-symptoms">
                                    <h4>Common Symptoms:</h4>
                                    <p><?php echo $condition['symptoms']; ?></p>
                                </div>
                                
                                <div class="recommended-treatments">
                                    <h4>Recommended Treatments:</h4>
                                    <ul class="treatment-list">
                                        <?php 
                                        $treatment_links = getRecommendedTreatments($condition['recommended_treatments']);
                                        foreach ($condition['recommended_treatments'] as $treatment): 
                                            $link = isset($treatment_links[$treatment]) ? home_url($treatment_links[$treatment]) : '#';
                                        ?>
                                        <li>
                                            <a href="<?php echo $link; ?>" class="treatment-link">
                                                <?php echo $treatment; ?> 
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                
                                <div class="condition-actions">
                                    <a href="#book-consultation" class="btn-primary">Book Consultation</a>
                                    <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%20need%20help%20with%20<?php echo urlencode($condition['title']); ?>" 
                                       class="btn-secondary" 
                                       target="_blank">
                                        <i class="fab fa-whatsapp"></i> Quick Enquiry
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Treatment Matching Section -->
        <section class="treatment-matching-section">
            <div class="container">
                <div class="matching-header fade-in-up">
                    <h2>Find Your Perfect Treatment Match</h2>
                    <p>Not sure which treatment is right for your condition? Our expert team can help create a personalized treatment plan.</p>
                </div>
                
                <div class="matching-features fade-in-stagger">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Expert Consultation</h3>
                        <p>Professional assessment by our qualified medical team</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h3>Personalized Plan</h3>
                        <p>Customized treatment approach for your specific needs</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Progress Tracking</h3>
                        <p>Regular follow-ups to ensure optimal results</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Safety First</h3>
                        <p>CQC regulated clinic with highest safety standards</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="conditions-faq-section">
            <div class="container">
                <div class="faq-header fade-in-up">
                    <h2>Frequently Asked Questions</h2>
                </div>
                
                <div class="faq-accordion fade-in">
                    <div class="faq-item">
                        <h3 class="faq-question">How do I know which treatment is right for my condition?</h3>
                        <div class="faq-answer">
                            <p>During your consultation, our expert practitioners will assess your specific condition, medical history, and aesthetic goals to recommend the most suitable treatment options. We use advanced diagnostic tools and our extensive experience to create a personalized treatment plan just for you.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question">Can multiple conditions be treated in one session?</h3>
                        <div class="faq-answer">
                            <p>Yes, many treatments can be combined for comprehensive results. We'll create a treatment plan that addresses all your concerns efficiently and safely. However, some treatments may need to be spaced out for optimal results and safety.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question">How long do treatment results typically last?</h3>
                        <div class="faq-answer">
                            <p>Results vary depending on the treatment and individual factors. For example, anti-wrinkle injections typically last 3-4 months, dermal fillers 6-18 months, and treatments like HIFU can last 1-2 years. During your consultation, we'll provide specific information about expected duration and maintenance requirements.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question">Are consultations free?</h3>
                        <div class="faq-answer">
                            <p>We offer complimentary initial consultations to discuss your concerns and treatment options. This allows you to make an informed decision without any pressure. Our experts will assess your condition, explain suitable treatments, and provide a detailed treatment plan with transparent pricing.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question">Is there any downtime after treatments?</h3>
                        <div class="faq-answer">
                            <p>Downtime varies by treatment. Many of our treatments like injectables and skin boosters have minimal to no downtime. More intensive treatments like HIFU or thread lifts may have a few days of mild swelling or redness. We'll always discuss expected downtime during your consultation so you can plan accordingly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Book Consultation Section (from home page) -->
        <section id="book-consultation" class="contact-section">
             <div class="contact-pattern"></div>
             <div class="angled-transition angled-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--light)" points="0,0 100,100 0,100"/></svg></div>
             <div class="angled-transition angled-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="var(--primary-ultralight)" points="0,100 100,0 100,100"/></svg></div>
             <div class="container">
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
                    /* Mobile Styles */
                    @media (max-width: 768px) {
                        .contact-vertical {
                            gap: 2rem;
                            padding: 0 0.5rem;
                        }
                        .visit-block,
                        .contact-methods-block,
                        .map-block {
                            padding: 1.5rem !important;
                        }
                        .visit-block h3,
                        .map-block h3 {
                            font-size: 1.8rem !important;
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
                        padding: 3rem;
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
                        padding: 3rem;
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
                     <div class="visit-block fade-in" style="background: #fff;">
                         <h3>Request Your Consultation</h3>
                         <div id="zf_div_2ocXcoePUH67HGo9WmzdB894DR7POz1NopDMCtNf5L4">
                         </div>
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
                                 f.style.height="1036px";
                                 f.style.width="90%";
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
                    <div class="contact-methods-block fade-in" style="background: #fff; padding: 3rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
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

        <!-- CTA Section -->
        <section class="conditions-cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Don't Let Your Condition Define You</h2>
                    <p>Take control with expert treatment at London's premier aesthetic clinic</p>
                    <div class="cta-buttons">
                        <a href="https://wa.me/447538037973" class="btn-primary" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us Now
                        </a>
                        <a href="tel:+442080373265" class="btn-secondary">
                            <i class="fas fa-phone"></i> Call Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const conditionCards = document.querySelectorAll('.condition-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter cards
            conditionCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            item.classList.toggle('active');
            
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });
    
    // Initialize animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all fade-in elements
    document.querySelectorAll('.fade-in, .fade-in-up, .fade-in-stagger > *, .scale-in').forEach(el => {
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>