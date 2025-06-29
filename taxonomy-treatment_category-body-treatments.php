<?php
/**
 * Template for Body Treatments Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'title' => 'Body Treatments in London',
    'paragraphs' => array(
        'Here at <a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a>, we pride ourselves on offering the best body treatments in London. Our highly skilled team has years of experience in delivering advanced non-invasive procedures that transform our clients\' physiques through natural and long-lasting results. We take a tailored approach to aesthetics, developing customised treatment plans for each individual based on their specific goals and needs.',
        'Whether someone wants to reduce stubborn fat areas, tighten sagging skin or smooth cellulite, we have the expertise and cutting-edge technologies to deliver noticeable improvements. Using innovations like Emsculpt Neo, Dermapen Body, Velashape, Onda and HIFU, we create integrated wellness programs focused on complete rejuvenation - helping clients achieve the body confidence and youthful vitality we call a \'Nu Yu\'.',
        'At our luxurious clinic you\'ll find London\'s most sought-after specialists and the latest body contouring therapies all under one roof. Our dedicated practitioners have years of experience in delivering natural-looking and long-lasting results.'
    ),
    'additional' => array(
        array(
            'title' => 'Advanced Body Treatments for Natural-Looking Results',
            'paragraphs' => array(
                'Whether your goals are fat reduction, skin tightening or cellulite smoothing, our specialists have developed customised protocols using some of the most innovative treatments available in London today. By combining therapies like Emsculpt Neo, Dermapen Body, Velashape, Onda, HIFU Body and RF Microneedling, we create individually tailored plans to achieve beautiful, lasting and noticeable improvements to problem areas.',
                'Our highly trained practitioners have an in-depth understanding of anatomy and the physiological effects of each procedure. This allows them to effectively deliver pinpointed results while also ensuring utmost safety, comfort and minimal downtime. You\'ll see defined contours, tighter skin and an overall rejuvenated appearance - without invasive surgery or lengthy recovery times.'
            )
        ),
        array(
            'title' => 'Book the Best Body Treatments in London for Transformative Results',
            'style' => 'margin-top: 60px;',
            'paragraphs' => array(
                'From focusing on stubborn belly fat with Emsculpt NEO to reducing the appearance of cellulite using innovative modalities like Velashape, Waves21, Onda and Profhilo Body, we\'ve got a wide selection of advanced non-surgical treatments to truly transform your physique.',
                'And for an unbeatable all-over body contouring session, our exclusive HIFU Body and Dermapen Combination Therapy protocol targets multiple problem zones simultaneously. Using high-intensity focused ultrasound and medical-grade microneedling in a single treatment, it\'s our most effective package for noticeable and long-lasting fat reduction, skin tightening and wrinkle reduction.',
                'Ready to embrace a new you through safe, non-invasive body treatments in London? Book your free no-obligation consultation today with one of our specialists. Using our expertise, state-of-the-art facilities and tailored protocols, we\'ll help you attain the Nu Yu and body confidence you deserve.'
            )
        )
    )
);

// Render the template using the reusable function
render_treatment_category_template(
    'Body Treatments',
    'Body Treatments',
    'https://tempusbelgravia.co.uk/wp-content/uploads/2023/01/Body-Treatment.jpg',
    $intro_content
);

get_footer(); ?>