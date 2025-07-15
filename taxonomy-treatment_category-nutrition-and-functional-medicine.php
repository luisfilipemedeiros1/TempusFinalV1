<?php
/**
 * Template for Nutrition and Functional Medicine Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'title' => 'Nutrition & Functional Medicine Services In London',
    'paragraphs' => array(
        'At Tempus Belgravia, we understand that true wellness comes from within. Our specialists in nutrition and functional medicine are dedicated to addressing the root causes of your health concerns through personalised plans and cutting-edge modalities.'
    ),
    'additional' => array(
        array(
            'title' => 'A Holistic Approach to Achieving Optimal Health',
            'paragraphs' => array(
                'Whether you\'re seeking to boost your energy levels, manage chronic conditions more effectively or simply wish to age in the healthiest way possible, our experts can support you. Led by GP Nutrition\'s Gabriela Peacock and PK Health\'s Dr. Shideh Pouria, they employ functional testing, diet therapy, supplements and lifestyle strategies to balance your whole system.',
                'Through comprehensive consultations and gradual lifestyle tweaks, you\'ll uncover how environmental toxins, inflammation or imbalances may be impacting you. Gentle therapies are then designed to restore harmony, allowing your body to heal and function optimally once more. The results often surprise even the most sceptical clients!'
            )
        ),
        array(
            'title' => 'Discover Effective Solutions with London\'s Top Nutrition Practitioners',
            'paragraphs' => array(
                'Gabriela Peacock is renowned for her customised plans that address both the physical and emotional aspects of wellness. With a background in nutrition, she helps clients overcome mental barriers too. Meanwhile, Dr. Shideh Pouria\'s approach to medical problems is based on the concept of cause and effect as well as seeking out the effects of environmental and nutritional factors on the health of the individual.',
                'Using cutting-edge modalities, they identify underlying disruptions and develop personalised protocols.'
            )
        ),
        array(
            'title' => 'Book The Best Nutrition & Functional Medicine Services In London',
            'style' => 'margin-top: 60px;',
            'paragraphs' => array(
                'At <a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a>, high-quality wholefoods, vitamins, probiotics and herbal medicines all play a role in restoring balance. Our care plans empower you to improve Digestion, Immunity, Mental Clarity and more through nutritional optimisation.',
                'Interested to feel your best once more? Book your free consultation today with Gabriela or Dr Shideh. Both are pioneers in their field, dedicated to helping clients embrace long-lasting health from the inside out. With their guidance, you\'ll learn to truly nourish your mind and body.'
            )
        )
    )
);

// Render the template using the reusable function
render_treatment_category_template(
    'Nutrition and Functional Medicine',
    'Nutrition and Functional Medicine',
    'https://i.ibb.co/zLftQx7/longevity-science.webp',
    $intro_content
);

get_footer(); ?>