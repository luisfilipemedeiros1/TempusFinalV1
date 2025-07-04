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
    <div class="press-page">
        <div class="wrap">
            <div class="press-box">
                <div class="date-comment">
                    <div class="publish-date">
                        <p> <?php echo do_shortcode('[fulldate]'); ?></p>
                    </div>
                    <!--<div class="comments-on-press"><i class="fa fa-comment" aria-hidden="true"></i><?php echo do_shortcode('[wpb_total_comments]'); ?>					  </div>-->
                </div> 
                <div class="name-date-title">
                    <div class="press-name">
                        <h2><?php echo the_field('name_of_press'); ?></h2>
                    </div>
                    <div class="title-of-press">
                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
                <div class="image-of-press">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="content-of-press">
                    <?php the_content(); ?>
                </div>
                <div class="single-press-detailed-content">
                    <?php while (have_rows('press_details')) : the_row(); ?>
                        <div class="detail-box">
                            <div class="detail-heading">
                                <h3><?php echo the_sub_field('press_detail_heading'); ?></h3>
                            </div>
                            <div class="detail-content">
                                <p><?php echo the_sub_field('details_content'); ?></p>
                            </div>
                        </div>
                    <?php endwhile;  ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>