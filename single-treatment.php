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
<style>
    .treatment-single-page {
        padding: 40px 0;
    }
    .treatment-single-details {
        padding: 60px 0;
    }
    .single-treatment-box {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .treatment-single-description {
        font-size: 18px;
        line-height: 1.8;
        color: #333;
    }
    .treatment-single-description p {
        margin-bottom: 20px;
    }
    .single-treatment-title h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #111;
        font-size: 2.5rem;
    }
    .treatment-single-image {
        text-align: center;
        margin-bottom: 30px;
    }
    .treatment-single-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .book-now-btn:hover {
        background-color: #8C6F44 !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(175, 143, 90, 0.3);
    }
    .treatment-price {
        margin: 30px 0;
        padding: 20px;
        background: #f8f8f8;
        border-radius: 5px;
        text-align: center;
    }
    .price-label {
        font-size: 20px;
        color: #333;
        margin: 0;
    }
    .price-label strong {
        color: #AF8F5A;
        font-size: 24px;
    }
    @media (max-width: 768px) {
        .single-treatment-box {
            padding: 20px;
        }
        .single-treatment-title h1 {
            font-size: 2rem;
        }
    }
</style>
<div class="treatment-single-page">
    <div class="banner-single-page">
        <div class="wrap">
            <div class="treatment-single-image">
            	<?php the_post_thumbnail(); ?>
            </div>
            <div class="mt-20 single-treatment-title">
                <h1><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="treatment-single-details">
        <div class="wrap">
			<div class="single-treatment-box">
				<div class="treatment-single-description">
					<?php 
					$description = get_field('description_for_treatment');
					if ($description) {
						echo '<p>' . $description . '</p>';
					}
					
					// Display price if available
					$price = get_field('price'); // Assuming there's a price field
					if ($price) {
						echo '<div class="treatment-price">';
						echo '<p class="price-label">Starting from <strong>£' . $price . '</strong></p>';
						echo '</div>';
					}
					?>
				</div>
				
				<!-- Book Now Button -->
				<div class="treatment-book-now" style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee;">
					<a href="<?php echo home_url('/#contact'); ?>" class="book-now-btn" style="display: inline-block; background-color: #AF8F5A; color: #fff; padding: 15px 40px; font-size: 18px; font-weight: 600; text-decoration: none; border-radius: 5px; transition: all 0.3s ease; font-family: 'Montserrat', sans-serif;">
						Book Consultation
					</a>
				</div>
			</div>
        </div>
    </div>
</div>
<?php
}
?>