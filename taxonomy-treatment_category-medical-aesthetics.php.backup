<?php
/**
 * Template for Medical Aesthetics Category
 * Modern, elegant design with animations and subcategories
 * 
 * @package Tempus
 */

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/taxonomy.css">

<main class="taxonomy-main">
    <!-- Hero Section -->
    <section class="taxonomy-hero fade-in">
        <div class="taxonomy-hero-image">
            <img src="https://tempusbelgravia.co.uk/wp-content/uploads/2023/02/Untitled-1Artboard-1-copy-2_1.png" alt="Medical Aesthetics">
        </div>
        <div class="taxonomy-hero-overlay"></div>
        <div class="taxonomy-hero-content">
            <h1>Medical Aesthetic Treatments in London</h1>
            <div class="hero-cta">
                <a href="#book-consultation" class="cta-button">Book Your Appointment Now</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="taxonomy-content">
        <div class="taxonomy-container">
            <!-- Introduction -->
            <div class="taxonomy-intro fade-in-up">
                <h2>Book The Best Medical Aesthetic Treatments In London</h2>
                <p>Whether you're starting to notice signs of ageing or wish to refine your appearance subtly, <a href="https://tempusbelgravia.co.uk/">Tempus Belgravia</a> offers a variety of nonsurgical options to suit your goals. Through consultation, we will assess your concerns, discuss available treatments and create a personalised plan utilising the latest advancements in medical aesthetics.</p>
            </div>

            <!-- Anti-Wrinkle Injections Section -->
            <div class="subcategory-section fade-in-up">
                <h2 class="subcategory-title">Anti Wrinkle Injections</h2>
                <p class="subcategory-description">Anti-wrinkle injections with Botulinum Toxin are popular choices for minimising dynamic lines on the forehead, eyes and mouth. By relaxing overactive muscles, they smooth static wrinkles lightly for a fresher look. Our practitioners precisely target areas like brow position, marionette lines and hyperhidrosis to refine specific concerns. Those wishing a subtle lift may benefit from a brow lift or masseter reduction.</p>
                
                <div class="taxonomy-grid treatments-grid">
                    <?php
                    $anti_wrinkle_args = array(
                        'post_type' => 'treatment',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'treatment_category' => 'Anti wrinkle injections'
                    );
                    
                    $anti_wrinkle_treatments = new WP_Query($anti_wrinkle_args);
                    
                    if ($anti_wrinkle_treatments->have_posts()) :
                        while ($anti_wrinkle_treatments->have_posts()) : $anti_wrinkle_treatments->the_post();
                    ?>
                        <article class="taxonomy-card fade-in-up">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-image">
                                    <?php if (get_field('_thumb_image')) : ?>
                                        <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                                    <?php elseif (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-treatment.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (get_field('price_of_treatment')) : ?>
                                        <p class="card-price">From £<?php echo get_field('price_of_treatment'); ?>.00</p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="card-actions">
                                <a href="#book-consultation" class="cta-button-secondary">Book Now</a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <!-- Dermal Filler Section -->
            <div class="subcategory-section fade-in-up">
                <h2 class="subcategory-title">Dermal Filler</h2>
                <p class="subcategory-description">Dermal fillers inject plumping hyaluronic acid into target zones to add volume and definition. Volumizing the lips, hollow eye sockets or gaunt cheeks can enhance one's features naturally. Our products are formulated to sculpt and contour areas like the temples, jawline and chin as well. The effects of under-eye smoothing or nose contouring can be transformative yet subtle.</p>
                
                <div class="taxonomy-grid treatments-grid">
                    <?php
                    $dermal_filler_args = array(
                        'post_type' => 'treatment',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'treatment_category' => 'Dermal Filler'
                    );
                    
                    $dermal_filler_treatments = new WP_Query($dermal_filler_args);
                    
                    if ($dermal_filler_treatments->have_posts()) :
                        while ($dermal_filler_treatments->have_posts()) : $dermal_filler_treatments->the_post();
                    ?>
                        <article class="taxonomy-card fade-in-up">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-image">
                                    <?php if (get_field('_thumb_image')) : ?>
                                        <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                                    <?php elseif (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-treatment.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (get_field('description_for_treatment')) : ?>
                                        <p class="card-description"><?php echo wp_trim_words(get_field('description_for_treatment'), 25); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_field('price_of_treatment')) : ?>
                                        <p class="card-price">From £<?php echo get_field('price_of_treatment'); ?>.00</p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="card-actions">
                                <a href="#book-consultation" class="cta-button-secondary">Book Now</a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <!-- Skin Boosters Section -->
            <div class="subcategory-section fade-in-up">
                <h2 class="subcategory-title">Skin Boosters</h2>
                <p class="subcategory-description">Building collagen from within through Skin Boosters and Profhilo injections deliver hydrating hyaluronic acid serums paired with skin-activating cytokines. Targeting the face, neck and hands, they stimulate your body's natural repair systems for increased elasticity and firmness. Over time, skin takes on a lifted, fuller appearance.</p>
                
                <div class="taxonomy-grid treatments-grid">
                    <?php
                    $skin_boosters_args = array(
                        'post_type' => 'treatment',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'treatment_category' => 'Skin boosters'
                    );
                    
                    $skin_boosters_treatments = new WP_Query($skin_boosters_args);
                    
                    if ($skin_boosters_treatments->have_posts()) :
                        while ($skin_boosters_treatments->have_posts()) : $skin_boosters_treatments->the_post();
                    ?>
                        <article class="taxonomy-card fade-in-up">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-image">
                                    <?php if (get_field('_thumb_image')) : ?>
                                        <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                                    <?php elseif (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-treatment.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (get_field('description_for_treatment')) : ?>
                                        <p class="card-description"><?php echo wp_trim_words(get_field('description_for_treatment'), 25); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_field('price_of_treatment')) : ?>
                                        <p class="card-price">From £<?php echo get_field('price_of_treatment'); ?>.00</p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="card-actions">
                                <a href="#book-consultation" class="cta-button-secondary">Book Now</a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <!-- Threads Section -->
            <div class="subcategory-section fade-in-up">
                <h2 class="subcategory-title">Threads</h2>
                <p class="subcategory-description">Explore the range of transformative treatments available at our clinic, including Silhouette Soft thread lifts. By stimulating the body's natural collagen production, Silhouette Soft thread lifts offer both immediate lifting effects and long-term rejuvenation, with results lasting up to 18 months. Discover the natural contouring and revitalising benefits of Silhouette Soft thread lifts alongside our comprehensive range of treatments, and embark on your journey to radiant, youthful-looking skin.</p>
                
                <div class="taxonomy-grid treatments-grid">
                    <?php
                    $threads_args = array(
                        'post_type' => 'treatment',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'treatment_category' => 'Threads'
                    );
                    
                    $threads_treatments = new WP_Query($threads_args);
                    
                    if ($threads_treatments->have_posts()) :
                        while ($threads_treatments->have_posts()) : $threads_treatments->the_post();
                    ?>
                        <article class="taxonomy-card fade-in-up">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-image">
                                    <?php if (get_field('_thumb_image')) : ?>
                                        <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                                    <?php elseif (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-treatment.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (get_field('description_for_treatment')) : ?>
                                        <p class="card-description"><?php echo wp_trim_words(get_field('description_for_treatment'), 25); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_field('price_of_treatment')) : ?>
                                        <p class="card-price">From £<?php echo get_field('price_of_treatment'); ?>.00</p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="card-actions">
                                <a href="#book-consultation" class="cta-button-secondary">Book Now</a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <!-- Polynucleotides Section -->
            <div class="subcategory-section fade-in-up">
                <h2 class="subcategory-title">Polynucleotides</h2>
                <p class="subcategory-description">Explore the innovative Ameela Polynucleotide treatments, expertly formulated to revitalise and rejuvenate your skin with targeted solutions for specific concerns. Ameela Eyes (Polynucleotide) Treatment offers a specialised approach to combat fine lines, wrinkles, and dark circles around the delicate eye area, restoring brightness and youthfulness. For overall facial rejuvenation, discover Ameela Face (Polynucleotide) Treatment, designed to address signs of ageing, sun damage, and dullness, leaving your complexion radiant and firm. Embrace comprehensive skin renewal with Ameela Rejuvenation (Polynucleotide) Treatment, tailored to enhance skin texture and tone for a revitalised appearance.</p>
                
                <div class="taxonomy-grid treatments-grid">
                    <?php
                    $polynucleotide_args = array(
                        'post_type' => 'treatment',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'treatment_category' => 'Polynucleotide'
                    );
                    
                    $polynucleotide_treatments = new WP_Query($polynucleotide_args);
                    
                    if ($polynucleotide_treatments->have_posts()) :
                        while ($polynucleotide_treatments->have_posts()) : $polynucleotide_treatments->the_post();
                    ?>
                        <article class="taxonomy-card fade-in-up">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-image">
                                    <?php if (get_field('_thumb_image')) : ?>
                                        <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                                    <?php elseif (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-treatment.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (get_field('description_for_treatment')) : ?>
                                        <p class="card-description"><?php echo wp_trim_words(get_field('description_for_treatment'), 25); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_field('price_of_treatment')) : ?>
                                        <p class="card-price">From £<?php echo get_field('price_of_treatment'); ?>.00</p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="card-actions">
                                <a href="#book-consultation" class="cta-button-secondary">Book Now</a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Additional styles for subcategory sections */
.subcategory-section {
    margin: 80px 0;
    padding: 60px 0;
    border-top: 1px solid var(--light-gray);
}

.subcategory-section:first-of-type {
    border-top: none;
    margin-top: 40px;
}

.subcategory-title {
    font-family: var(--display-font);
    font-size: 2.2rem;
    color: var(--primary);
    text-align: center;
    margin-bottom: 0.8em;
    font-weight: 500;
}

.subcategory-description {
    max-width: 900px;
    margin: 0 auto 40px;
    text-align: center;
    font-size: 1.05rem;
    line-height: 1.8;
    color: var(--dark-text);
}
</style>

<script>
// Intersection Observer for animations
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.fade-in, .fade-in-up');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    animatedElements.forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>