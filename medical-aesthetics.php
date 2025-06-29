<?php
/**
 * Template Name: Medical aesthetics Template
 * Description: Modern medical aesthetics page with elegant multi-section design
 *
 * @package tempusbelgravia
 */

// Use the theme's modern header
get_header();
?>

<div class="treatment-page-wrapper">
    <main id="treatment-content" class="treatment-main-content">
        
        <!-- Hero Section -->
        <section class="treatment-hero">
            <div class="treatment-hero-content">
                <h1><?php the_field('heading-banner'); ?></h1>
                <p class="subtitle"><?php the_field('sub_text_for_banner'); ?></p>
                <?php if( get_field('text_for_banner_button') ): ?>
                <a href="#treatments" class="cta-button"><?php the_field('text_for_banner_button'); ?></a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Anti-Wrinkle Injections Section -->
        <section class="treatment-section" id="treatments">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('anti-injection-heading') ?: 'Anti-Wrinkle Injections'; ?></h2>
                    <p>Smooth away lines and wrinkles with our expert injection treatments</p>
                </div>

                <?php 
                $has_anti_wrinkle = have_rows('body_contouring');
                if( !$has_anti_wrinkle ): 
                    // Default anti-wrinkle treatments with professional images
                    $default_treatments = array(
                        array(
                            'name' => 'Botox® Treatment',
                            'description' => 'FDA-approved treatment to reduce fine lines and wrinkles, particularly in the forehead, crow\'s feet, and between the brows.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_d/v1742655013/curated-lifestyle-2RhCe25XVuM-unsplash_xyamg0.jpg'
                        ),
                        array(
                            'name' => 'Azzalure®',
                            'description' => 'Premium botulinum toxin treatment for natural-looking results, smoothing expression lines while maintaining facial movement.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Tempus-Bespoke-Facial.jpeg.webp'
                        ),
                        array(
                            'name' => 'Dysport®',
                            'description' => 'Fast-acting wrinkle treatment that spreads naturally for smooth, even results across larger treatment areas.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 16:9/v1742655685/getty-images-j_ewv-85zX8-unsplash_owcdyq.jpg'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($default_treatments as $treatment): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $treatment['name']; ?></h3>
                            <p class="treatment-description"><?php echo $treatment['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode($treatment['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="treatment-grid">
                    <?php while( have_rows('body_contouring') ): the_row(); ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Dermal Fillers Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('dermal-filter-heading') ?: 'Dermal Fillers'; ?></h2>
                    <p>Restore volume and enhance your natural features with premium dermal fillers</p>
                </div>

                <?php 
                $has_dermal_fillers = have_rows('dermal-filters');
                if( !$has_dermal_fillers ): 
                    // Default dermal filler treatments with professional images
                    $dermal_treatments = array(
                        array(
                            'name' => 'Lip Enhancement',
                            'description' => 'Create fuller, more defined lips with hyaluronic acid fillers for a natural, plump appearance.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Lip-Enhancement-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Cheek Enhancement',
                            'description' => 'Restore youthful volume and lift to the cheeks, creating beautiful facial contours.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Cheek-Enhancement-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Jawline Contouring',
                            'description' => 'Define and sculpt your jawline for a more structured, youthful profile.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/jawline-filler-scaled-1.jpeg.webp'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($dermal_treatments as $treatment): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $treatment['name']; ?></h3>
                            <p class="treatment-description"><?php echo $treatment['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode($treatment['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="treatment-grid">
                    <?php while( have_rows('dermal-filters') ): the_row(); ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Skin Boosters Section -->
        <section class="treatment-section">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('skin-heading') ?: 'Skin Boosters'; ?></h2>
                    <p>Hydrate and rejuvenate your skin from within with advanced skin boosters</p>
                </div>

                <?php 
                $has_skin_boosters = have_rows('skin-booster');
                if( !$has_skin_boosters ): 
                    // Default skin booster treatments with professional images
                    $skin_treatments = array(
                        array(
                            'name' => 'Profhilo®',
                            'description' => 'Revolutionary bio-remodelling treatment that stimulates collagen and elastin production for firmer, more hydrated skin.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Profhilo-Face-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Restylane Skin Boosters',
                            'description' => 'Deep hydration treatment that improves skin quality, elasticity and smoothness from within.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Restilane-Skin-Booster-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Seventy Hyal 2000',
                            'description' => 'Next-generation skin booster providing intense hydration and stimulating new collagen formation.',
                            'image' => 'https://res.cloudinary.com/drtatej7i/image/upload/t_Banner 9:16/v1742655689/sam-moghadam-l9VjM-Pp7-M-unsplash_1_emsz1m.jpg'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($skin_treatments as $treatment): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $treatment['name']; ?></h3>
                            <p class="treatment-description"><?php echo $treatment['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode($treatment['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="treatment-grid">
                    <?php while( have_rows('skin-booster') ): the_row(); ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Thread Lifts Section -->
        <section class="treatment-section alt-bg">
            <div class="treatment-container">
                <div class="section-header">
                    <h2><?php the_field('thread-heading') ?: 'Thread Lifts'; ?></h2>
                    <p>Achieve a natural lift and collagen stimulation with our thread treatments</p>
                </div>

                <?php 
                $has_threads = have_rows('thread');
                if( !$has_threads ): 
                    // Default thread lift treatments with professional images
                    $thread_treatments = array(
                        array(
                            'name' => 'Silhouette Soft®',
                            'description' => 'Innovative bi-directional absorbable thread cones that lift sagging facial skin and stimulate collagen.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Silhouette-Soft-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'PDO Thread Lift',
                            'description' => 'Minimally invasive treatment using dissolvable threads to lift and tighten sagging skin tissue.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/08/Thread-Lift-scaled-1.jpeg.webp'
                        ),
                        array(
                            'name' => 'Aptos Thread Lift',
                            'description' => 'Advanced thread technology for facial lifting and rejuvenation with long-lasting results.',
                            'image' => 'https://tempusbelgravia.co.uk/wp-content/webp-express/webp-images/uploads/2022/11/Silhouette-Soft-1.jpeg.webp'
                        )
                    );
                ?>
                <div class="treatment-grid">
                    <?php foreach($thread_treatments as $treatment): ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php echo $treatment['name']; ?></h3>
                            <p class="treatment-description"><?php echo $treatment['description']; ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode($treatment['name']); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="treatment-grid">
                    <?php while( have_rows('thread') ): the_row(); ?>
                    <div class="treatment-card">
                        <div class="treatment-image">
                            <img src="<?php the_sub_field('contouring_image'); ?>" alt="<?php the_sub_field('contouring_name'); ?>">
                        </div>
                        <div class="treatment-content">
                            <h3 class="treatment-name"><?php the_sub_field('contouring_name'); ?></h3>
                            <p class="treatment-description"><?php the_sub_field('contouring_description'); ?></p>
                            <div class="treatment-actions">
                                <a href="#" class="treatment-link">Learn More <i class="fas fa-arrow-right"></i></a>
                                <a href="https://wa.me/447538037973?text=Hi%20Tempus%20Lounge%2C%20I%27d%20like%20to%20book%20<?php echo urlencode(get_sub_field('contouring_name')); ?>%20please." 
                                   class="cta-button-secondary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

    </main>
</div>

<?php
// Use the theme's modern footer
get_footer();
?>