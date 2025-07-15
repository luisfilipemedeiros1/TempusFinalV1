<?php
/**
 * Template for Laser Treatments Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'title' => 'Laser Hair Removal in London',
    'paragraphs' => array(
        'Experience the freedom of smooth, hair-free skin with our state-of-the-art laser hair removal treatments at <a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a>. Using the latest medical-grade laser technology, we deliver safe, effective, and long-lasting results for all skin types.',
        'Our expert practitioners are highly trained in advanced laser techniques, ensuring precision treatment that permanently reduces unwanted hair while protecting your skin. Whether you\'re looking to treat small areas like the upper lip or larger areas such as legs and back, we provide customized treatment plans tailored to your unique needs.',
        'Say goodbye to the inconvenience of shaving, waxing, and plucking. Our cutting-edge laser systems offer a comfortable, virtually painless experience with minimal downtime, allowing you to achieve the smooth, confident appearance you desire.'
    )
);

// Render the template using the reusable function
render_treatment_category_template(
    'Laser Hair Removal',
    'Laser Treatments',
    'https://i.ibb.co/cSM3rGrL/laser-energy.webp',
    $intro_content
);

get_footer(); ?>