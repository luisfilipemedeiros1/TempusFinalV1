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
<div class="condition-single-page">
    <div class="banner-single-page">
        <div class="wrap">
    		<div class="condition-single-image">
					<?php  the_post_thumbnail();?>
				</div>
            <div class="mt-20 single-treatment-title">
                <h1><?php echo the_title();?></h1>
            </div>
        </div>
    </div>
    <div class="treatment-single-details">
        <div class="wrap">
			<div class="single-treatment-box">
				<div class="treatment-single-description">
					<p><?php echo the_field('description_for_treatment');?></p>
					<div class="book-now-button">
                        <button class="book-now ">Book Now</button></div>
					<div class="popup-price">
												<?php
												if ($price) {
												?>
													<a href="#">
														<p>From £<?php echo $price ?>.00</p>
													</a>
											<?php
												} ?>
										</div>
				</div>
				
			</div>
			
        </div>
    </div>
</div>
<?php
}
?>