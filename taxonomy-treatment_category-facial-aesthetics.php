<?php
/**
 * Template for Facial Aesthetics Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'title' => 'Tailored Facial Aesthetics and Skin Treatments in London',
    'paragraphs' => array(
        '<a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a> offers a comprehensive range of cutting-edge facial aesthetics treatments to help you achieve a refreshed, youthful appearance. Whether you want to reduce wrinkles, improve skin texture and tone, or take years off your appearance, our dedicated team of experts has a personalised solution tailored to your individual concerns and goals.',
        'We believe in taking a holistic approach to facial rejuvenation, developing bespoke treatment plans that deliver not only immediately visible results but prolonged benefits for your confidence and well-being. Our popular treatments include:<br><br>• Tempus Bespoke Facial: A highly personalised facial addressing specific skin complaints.<br>• HydraFacial Bespoke: This non-surgical procedure deeply cleanses, exfoliates and hydrates skin.<br>• Focus Dual: This innovative treatment combines HIFU (high-intensity focused ultrasound) and fractional RF microneedling to treat wrinkles, scarring and laxity.'
    ),
    'additional' => array(
        array(
            'title' => 'Advanced Non-Surgical Options for Lifting, Tightening and Contouring Your Face',
            'paragraphs' => array(
                'Taking your facelift further, we provide a range of non-invasive procedures that give fabulous contouring results akin to a surgical facelift but without the downtime or risk. The award-winning Julia Hunter Facial utilises patented peels for various conditions. We also offer Exosomes Growth Factors Facial, Dermapen Microneedling and much more!'
            )
        ),
        array(
            'title' => 'Book Your Facial Aesthetics Appointment with London\'s Top Specialists',
            'style' => 'margin-top: 60px;',
            'paragraphs' => array(
                'To experience our unrivalled expertise in non-surgical rejuvenation first-hand, contact Tempus Belgravia today. Our friendly specialists will consult with you to understand your aesthetic goals and concerns before crafting a personalised treatment plan tailored to your individual skin physiology and lifestyle needs. With flexible scheduling and convenient West London location, we make achieving your most radiant, youthful-looking complexion easy and affordable.'
            )
        )
    )
);

// Render the template using the reusable function
render_treatment_category_template(
    'Facial Aesthetics',
    'Facial Aesthetics',
    'https://tempusbelgravia.co.uk/wp-content/uploads/2023/03/young-pretty-woman-having-facial-treatment-at-spa-2022-12-16-06-45-23-utc-scaled.jpg',
    $intro_content
);

get_footer(); ?>