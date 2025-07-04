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
<div class="treatment-single-page">
    <div class="banner-single-page">
        <div class="wrap">
            <div class="single-treatment-title">
                <h2><?php echo the_title();?></h2>
            </div>
        </div>
    </div>
    <div class="treatment-single-details">
        <div class="wrap">
			<div class="single-treatment-box">
				<div class="treatment-single-description">
					<p><?php echo the_field('description_for_treatment');?></p>
				</div>
				<div class="treatment-single-image">
					<?php  the_post_thumbnail();?>
				</div>
			</div>
        </div>
    </div>
</div>
<?php
}
?>