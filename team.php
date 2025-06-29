<?php
/*
    Template Name: Team Template
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
<div id="our-doctors">
	<?php while (have_rows('team-data')) : the_row(); ?>
	<div class="concern-banner" style="background-image: url('<?php echo the_sub_field('team-background-imge'); ?>');">
		<div class="concerns-content">
			<h1 id="team-head"><?php echo the_sub_field('team-heading')?></h1>  
			<p><?php echo the_sub_field('team-text')?></p>
			<div class="button-for-banner">
				<button><?php echo the_sub_field('team-button')?></button>   
			</div>
			 <?php endwhile; ?>
		</div>
  		
	</div>
	    <div class="team-doctor-section doctors-all">
            <div class="our-doctor-category">
				
				<div class="wrap">
					<div class="our-doctors-heading">
            <h2><?php echo the_field('doctors_heading');?></h2>
        </div>
                <?php query_posts(array('post_type' => 'teams', 'orderby' => 'date', 'order'=>'ASC','team_category' => 'Doctors'));
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="doctor-box g-content-page">
                            <div class="doctor-image">
                                <?php 
                                $doctor_image= the_post_thumbnail();
 								$doctor_video = the_field('member_video');
                                if ($doctor_image){
                                    the_post_thumbnail();
                                }
                                    elseif($doctor_video){ ?>
                                        <video id="video" width="100%" height="100%" controls loop muted>
                                            <source src="<?php echo the_field('member_video'); ?>" type="video/mp4"/>
                                            </video>	
                                <?php } ?>	
                            </div>
                            <div class="doctor-name">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<div class="doctor-specialization">
								<p><?php echo the_field('doctor_specialization');?></p>
							</div>
                            <div class="read-more-button">
                                <button><?php the_excerpt();?></button>
                            </div>
							<div class="popup-g">
								<div class="facts-cross">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div> 
                      <div class="popup-wrap-g">
						  <div class="doctor-left">
                                <div class="doctor-image">
                                <?php 
                                $doctor_image= the_post_thumbnail();
 								$doctor_video = the_field('member_video');
                                if ($doctor_image){
                                    the_post_thumbnail();
                                }
                                    elseif($doctor_video){ ?>
                                        <video id="video" width="100%" height="100%" controls loop muted>
                                            <source src="<?php echo the_field('member_video'); ?>" type="video/mp4"/>
                                            </video>	
                                <?php } ?>	
                            </div>
							  <div class="doctors-social">
								  <?php
										$fb = get_field('facebook');
										if($fb){
									?>
										<a href="<?php echo $fb ?>">
											<i class="fa fa-facebook-official" aria-hidden="true"></i>
										</a>
									<?php
										} 
										$insta = get_field('insta');
										if($insta){
									?>
										<a href="<?php echo $insta ?>">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									<?php
										} 
										$tw = get_field('twitter');
										if($tw){
									?>
										<a href="<?php echo $tw ?>">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									<?php
									 }
									?>
							  </div>
                            </div>

						  <div class="doctor-page-detail">
							  
						  
                            <div class="doctor-name">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<div class="doctor-specialization">
								<p><?php echo the_field('doctor_specialization');?></p>
							</div>
						  <div class="doctor-description">
							  <p><?php echo the_content();?> </p></div>
                        </div> 
						       
						  </div>
                        
                    </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_query(); ?>
				</div>
            </div>
        </div>
    </div>
<div id="practitioners">
    <div class="team-doctor-section specialist-doc">
        <div class="wrap">
			 <div class="our-doctors-heading">
            <h2><?php echo the_field('specialist_practitioners_heading');?></h2>
            </div>
            <div class="our-doctor-category ">
                <?php query_posts(array('post_type' => 'teams', 'orderby' => 'date', 'order'=>'ASC','team_category' => 'SPECIALIST PRACTITIONERS'));
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="doctor-box g-content-page">
                            <div class="doctor-image">
                                <?php 
                                $doctor_image= the_post_thumbnail();
 								$doctor_video = the_field('member_video');
                                if ($doctor_image){
                                    the_post_thumbnail();
                                }
                                    elseif($doctor_video){ ?>
                                        <video id="video" width="100%" height="100%" controls loop muted>
                                            <source src="<?php echo the_field('member_video'); ?>" type="video/mp4"/>
                                            </video>	
                                <?php } ?>	
                            </div>
                            <div class="doctor-name">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<div class="doctor-specialization">
								<p><?php echo the_field('doctor_specialization');?></p>
							</div>
                            <div class="read-more-button">
                                <button><?php the_excerpt();?></button>
                            </div>
							<div class="popup-g">
								 <div class="facts-cross">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>  
                      <div class="popup-wrap-g">
						  <div class="doctor-left">
                                <div class="doctor-image">
                                <?php 
                                $doctor_image= the_post_thumbnail();
 								$doctor_video = the_field('member_video');
                                if ($doctor_image){
                                    the_post_thumbnail();
                                }
                                    elseif($doctor_video){ ?>
                                        <video id="video" width="100%" height="100%" controls loop muted>
                                            <source src="<?php echo the_field('member_video'); ?>" type="video/mp4"/>
                                            </video>	
                                <?php } ?>	
                            </div>
							  <div class="doctors-social">
								  <?php
										$fb = get_field('facebook');
										if($fb){
									?>
										<a href="<?php echo $fb ?>">
											<i class="fa fa-facebook-official" aria-hidden="true"></i>
										</a>
									<?php
										} 
										$insta = get_field('insta');
										if($insta){
									?>
										<a href="<?php echo $insta ?>">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									<?php
										} 
										$tw = get_field('twitter');
										if($tw){
									?>
										<a href="<?php echo $tw ?>">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									<?php
									 }
									?>
							  </div>
                            </div>

						  <div class="doctor-page-detail">
							  					  
                            <div class="doctor-name">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<div class="doctor-specialization">
								<p><?php echo the_field('doctor_specialization');?></p>
							</div>
						  <div class="doctor-description">
							  <p><?php echo the_content();?> </p></div>
                        </div>  
						 
						  </div>
                            
                    </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>
<div id="liaison">
    <div class="team-doctor-section patient-team">
        <div class="wrap">
			<div class="our-doctors-heading">
            <h2><?php echo the_field('admin_heading');?></h2>
        </div>
            <div class="our-doctor-category ">
                <?php query_posts(array('post_type' => 'teams', 'orderby' => 'date', 'order'=>'ASC','team_category' => 'patient-liaison-team'));
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                       <div class="doctor-box g-content-page">
                           <div class="doctor-image">
                                <?php 
                                $doctor_image= the_post_thumbnail();
 								$doctor_video = the_field('member_video');
                                if ($doctor_image){
                                    the_post_thumbnail();
                                }
                                    elseif($doctor_video){ ?>
                                        <video id="video" width="100%" height="100%" controls loop muted>
                                            <source src="<?php echo the_field('member_video'); ?>" type="video/mp4"/>
                                            </video>	
                                <?php } ?>	
                            </div>
                            <div class="doctor-name">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<div class="doctor-specialization">
								<p><?php echo the_field('doctor_specialization');?></p>
							</div>
                            <div class="read-more-button">
                                <button><?php the_excerpt();?></button>
                            </div>
							<div class="popup-g">
								<div class="facts-cross">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>   
                      <div class="popup-wrap-g">
						  <div class="doctor-left">
							  <div class="doctor-image">
                                <?php 
                                $doctor_image= the_post_thumbnail();
 								$doctor_video = the_field('member_video');
                                if ($doctor_image){
                                    the_post_thumbnail();
                                }
                                    elseif($doctor_video){ ?>
                                        <video id="video" width="100%" height="100%" controls loop muted>
                                            <source src="<?php echo the_field('member_video'); ?>" type="video/mp4"/>
                                            </video>	
                                <?php } ?>	
                            </div>
							  <div class="doctors-social">
								  <?php
										$fb = get_field('facebook');
										if($fb){
									?>
										<a href="<?php echo $fb ?>">
											<i class="fa fa-facebook-official" aria-hidden="true"></i>
										</a>
									<?php
										} 
										$insta = get_field('insta');
										if($insta){
									?>
										<a href="<?php echo $insta ?>">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									<?php
										} 
										$tw = get_field('twitter');
										if($tw){
									?>
										<a href="<?php echo $tw ?>">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									<?php
									 }
									?>
							  </div>
                            </div>

						  <div class="doctor-page-detail">
							  
						  
                            <div class="doctor-name">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<div class="doctor-specialization">
								<p><?php echo the_field('doctor_specialization');?></p>
							</div>
						  <div class="doctor-description">
							  <p><?php echo the_content();?> </p></div>
                        </div>  
						     
						  </div>
                        
                    </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<?php
}
?>