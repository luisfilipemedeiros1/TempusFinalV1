<?php
/*
 *
 * @package      Devinsta
 * @author       Devinsta
 * @copyright    Copyright (c) 2018, Devinsta
 * @license
 *
 */
// Force full width
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

// Content Area
remove_action('genesis_loop', 'genesis_do_loop');
add_filter('genesis_loop', 'home_content');

genesis();

function home_content()
{
?>
<div class="team-single-page">
<!-- <div class="banner-for-doctor-category-single">
    </div> -->
    <div class="team-doctor-section">
        <div class="wrap">
			<div class="sigle-team-box">
				<div class="our-doctor-category">
					<div class="single-doctor-box">
						<div class="doctor-image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="doctor-name">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="about-doctor-single">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<?php
}
?>