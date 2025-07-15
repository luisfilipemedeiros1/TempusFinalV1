<?php
/**
 * Template for Surgical Services Category
 * Modern, elegant design with animations
 * 
 * @package Tempus
 */

get_header();

// Define content for this category
$intro_content = array(
    'title' => 'Refine Your Appearance Through Minimally Invasive Surgical Procedures in London',
    'paragraphs' => array(
        '<a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a> offers a range of surgical procedures in London that can subtly yet profoundly enhance your appearance and confidence. Whether you wish to remove an unsightly mole, lift sagging skin around the eyes, or improve scarring from past injuries, our experts use minimally invasive techniques to craft natural-looking outcomes.',
        'Common skin growths such as moles, skin tags, and warts can detract from an otherwise clean complexion. Our dermatological surgeons expertly remove these with precision excision or laser treatments to leave smooth, unmarked skin behind. For those wishing to refine uneven skin texture, removing unwanted moles can make a big difference with little recovery time.',
        'As the years pass, loose, sagging skin can make us appear tired when we\'re not. Blepharoplasty, commonly known as an eye lift, tightens delicate eyelid skin and refreshes the entire face. By selectively removing extra skin, fat deposits and muscle from the upper and lower eyelids, our surgeons craft a more alert, rejuvenated appearance. Scars from injuries or surgery can also impact self-esteem over time. Our skilled surgeons expertly revise raised, red scars using customised scar remodelling techniques to blend marks into surrounding skin for a natural look.'
    ),
    'additional' => array(
        array(
            'title' => 'Book The Best Skin Surgery in London',
            'paragraphs' => array(
                'With our team of highly skilled dermatological surgeons, advanced technologies and commitment to natural-looking results, Tempus Belgravia is the top choice for skin surgical services in London. Contact us today to book a private consultation to discuss your goals and options for mole removal, skin tag removal, blepharoplasty or other procedures. Our friendly patient coordinators can help select suitable dates and assist with any questions you may have. You\'ll receive expert medical advice and a customised treatment plan focused on your individual needs, values and desired aesthetics.'
            )
        )
    )
);

// Render the template using the reusable function
render_treatment_category_template(
    'Surgical Procedures In London',
    'Surgical Services',
    'https://i.ibb.co/5gFcdjm2/surgical-expertise.webp',
    $intro_content
);

get_footer(); ?>