<?php
/*
    Template Name: Surgical Service Template
*/
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
    <div class="face-asthetic-treatment-page-banner">
     <div class="face-overflow">
        <div class="face-asthetic-treatment-banner-heading">
             <h2><?php echo the_field('heading_banner');?></h2>
        </div>
        <div class="face-asthetic-treatment-banner-subtext">
            <p><?php echo the_field('sub_text_for_banner'); ?></p>
        </div>
        <div class="button-for-banner">
            <button><?php echo the_field('text_for_banner_button'); ?></button>
        </div>
	</div>
<!--         <div class="scroll-now-face-asthetic-treatment-page">
            <button>
                <p>SCROLL NOW</p>
            </button>
        </div> -->
    </div>
    <div class="tempus-asthetic-treatment-we-offer">
        <div class="tempus-asthetic-treatment-details">
		  <h2><?php echo the_field('sergical-heading'); ?></h2>
            <?php while (have_rows('Surgical-Services')) : the_row();
            ?>
                <div class="tempus-cards">
                    <div class="tempus-asthetic-treatment-page-box">
                        <div class="tempus-asthetic-treatment-image">
                            <img src="<?php echo the_sub_field('contouring_image');?>" alt="">
                        </div>
                        <div class="tempus-name-detail">
                            <div class="tempus-asthetic-treatment-name">
                                <h2><?php echo the_sub_field('contouring_name'); ?></h2>
                            </div>
                            <div class="tempus-asthetic-treatment-detail">
                                <p><?php echo the_sub_field('contouring_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;  ?>
        </div>
    </div>
<?php
}
?>