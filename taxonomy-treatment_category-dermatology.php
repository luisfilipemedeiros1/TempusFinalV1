<?php
/**
 * Template for Dermatology Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'title' => 'Dermatology Treatments in London',
    'paragraphs' => array(
        'Welcome to <a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a>, where we offer comprehensive dermatology services combining medical expertise with aesthetic excellence. Our team of experienced dermatologists provides cutting-edge treatments for various skin conditions while maintaining the highest standards of care.',
        'From acne management to advanced skin cancer screening, our dermatology department utilizes state-of-the-art technology and evidence-based treatments. We believe in a holistic approach to skin health, addressing both medical concerns and aesthetic goals to help you achieve healthy, radiant skin.',
        'Our luxurious Belgravia clinic provides a comfortable, discrete environment where patients receive personalized treatment plans tailored to their unique skin needs and concerns.'
    )
);

// Render the template using the reusable function
render_treatment_category_template(
    'Dermatology',
    'Dermatology',
    'https://i.ibb.co/sp9Y8V8S/medical-dermatology.webp',
    $intro_content
);

get_footer(); ?>