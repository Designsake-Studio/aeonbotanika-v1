<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aeon
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		<?php if( have_rows('about_features') ): ?>
			<div class="about-features">
				<ul class="feature-section">
					<?php while( have_rows('about_features') ): the_row(); 
  					// vars
  					$title = get_sub_field('title');
  					$image = get_sub_field('image');
  					$description = get_sub_field('description'); ?>
  						<li class="about-section wow fadeIn">
							<h3><?php echo $title; ?></h3>
    						<div class="description"><?php echo $description; ?></div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<?php if( have_rows('location_features') ): ?>
		<div class="location-features">
			<ul class="feature-section">
				<?php while( have_rows('location_features') ): the_row(); 
  				// vars
  				$background = get_sub_field('background');
  				$primary = get_sub_field('primary');
  				$title = get_sub_field('title');
  				$image = get_sub_field('image');
  				$description = get_sub_field('description'); ?>
  					<li class="feature" style="background-color: <?php echo $background; ?>;">
						<?php if( $image ): ?>
						<div class="thumbnail" style="background: url('<?php echo $image; ?>') no-repeat center center; background-size: cover;"></div>
    					<?php endif; ?>
						<div class="location-detail" style="color: <?php echo $primary; ?>;">
							<h3 class="wow fadeIn" style="color: <?php echo $primary; ?>;"><?php echo $title; ?></h3>
    						<div class="description wow fadeIn"><?php echo $description; ?></div>
    					</div>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif; ?>


<?php get_footer(); ?>
