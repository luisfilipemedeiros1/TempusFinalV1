<?php
/*
    Template Name: Concern Template
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
add_filter('genesis_loop', 'concern_content');

genesis();

function concern_content()
{
?>
<div class="concerns-page">
	<?php while (have_rows('concern-data')) : the_row(); ?>
	<div class="concern-banner" style="background-image: url('<?php echo the_sub_field('concern-background-imge'); ?>');">
		<div class="concern-overlay"></div>
		<div class="concerns-content">
			<h2><?php echo the_sub_field('concern-heading')?></h2>  
			<p><?php echo the_sub_field('concern-text')?></p>
			<div class="concern-button">
				<a href="#"><?php echo the_sub_field('concern-button')?></a>   
			</div>
			 <?php endwhile; ?>
			     <div class="scroll-now-treatment-page">
            <button>
                <p>SCROLL NOW</p>
            </button>
        </div>
		</div>
  		
	</div>
	<div class="concerns-posts">
		<?php query_posts(array('post_type' => 'concern', 'orderby' => 'date'));
 if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="concern-box">
			<div class="concer-image">
				<?php the_post_thumbnail();?>
			</div>
			<div class="concern-title">
				<a href="#"> <h2><?php the_title();?></h2></a>
				<div class="concern-des">
					<?php echo the_content();?>
				</div>

			</div>

		</div>
		<?php endwhile;
 endif;
 wp_reset_query(); ?>
	</div>
</div>
<?php
}
?>