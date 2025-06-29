<?php
/*
    Template Name: Treatments Template
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

	<?php while (have_rows('treatment-data')) : the_row(); ?>
	<div class="concern-banner" style="background-image: url('<?php echo the_sub_field('treatment-background-imge'); ?>');">
		<div class="concern-overlay"></div>
		<div class="concerns-content">
			<h2><?php echo the_sub_field('treatment-heading')?></h2>  
			<p><?php echo the_sub_field('treatment-text')?></p>
			<div class="button-for-banner">
				<button><?php echo the_sub_field('treatment-button')?></button>   
			</div>
			 <?php endwhile; ?>
<!-- 			     <div class="scroll-now-treatment-page">
            <button>
                <p>SCROLL NOW</p>
            </button>
        </div> -->
		</div>
  		
	</div>
    <div class="treatments-we-offer">
        <div class="treatment-details">
            <?php query_posts(array('post_type' => 'treatment', 'orderby' => 'date','order' => 'ASC','posts_per_page' => 50,'treatment_category' => 'Treatment Page'));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                     <div class="background-color">
					   <a href="<?php the_permalink(); ?>">
                        <div class="treatment-page-box">

                            <div class="treatment-image">
<!--                                <?php the_post_thumbnail(); ?> -->
								<?php if( get_field('_thumb_image') ): ?>
                                    <img src="<?php the_field('_thumb_image'); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="pricing-details">
                                <div class="treatment-name">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="treatment-detail">
                                    <p><?php echo the_field('description_for_treatment'); ?></p>
                                </div>
                                <div class="treatment-price">
                                    <?php
                                    $price = get_field('price_of_treatment');
                                    if ($price) {
                                    ?>
                                        
                                            <p>From £<?php echo $price ?>.00</p>
                                       
                                </div>
                            <?php
                                    } ?>
                            </div>
                            
                        </div></a>
					   <div class="book-now-button"><button class="book-now">Book Now</button></div>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_query(); ?>
        </div>
    </div>
 <div class="membership-package" id="menu-package">
        <div class="heading-membersip-package">
            <h2><?php echo the_field('membership_package_heading');?></h2>
			<p><?php echo the_field('description_for_membership_package');?></p>
        </div>
        <div class="membership-products-details">
            <?php $i=0; while (have_rows('membership_packages')) : the_row(); $i++;
                ?>
                    <div class="membership-package-box" id="package_<?php echo $i; ?>">
                        <div class="membership-type">
                            <h4><?php echo the_sub_field('package_name'); ?></h4>
                            <p>Annual Membership</p>
                        </div>
                        <div class="price-of-package">
                            <p><span id="currency-icon">£</span><?php echo the_sub_field('price_of_package'); ?><span class="vat"> + VAT</span></p>
                        </div>
                        <div class="description-of-package">
                            <p><?php echo the_sub_field('description_of_package'); ?></p>
                        </div>
                        <div class="button-for-banner">
                            <button>Join Now</button>
                        </div>
                    </div>
                    <?php endwhile;  ?>
        </div>
    </div> 
<?php
}
?>