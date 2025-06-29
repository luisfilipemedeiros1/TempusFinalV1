<?php
/**
 * Template for Specialist Practitioners Team Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'subtitle' => 'Excellence in Specialized Care',
    'paragraphs' => array(
        'Our Specialist Practitioners at <a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a> represent the pinnacle of expertise in their respective fields. Each practitioner brings years of specialized training and experience, offering advanced treatments and procedures that deliver exceptional results.',
        'From aesthetic specialists to advanced therapy practitioners, our team is dedicated to providing personalized care tailored to your unique needs. They combine technical excellence with a compassionate approach, ensuring you receive the highest standard of treatment in a comfortable, supportive environment.'
    )
);

// Render the template using the reusable function
render_team_category_template(
    'Specialist Practitioners',
    'specialist-practitioners',
    'https://tempusbelgravia.co.uk/wp-content/uploads/2023/01/specialist-practitioners-hero.jpg',
    $intro_content
);

get_footer(); ?>