<?php
/**
Template Name: Home
 */

get_header();
?>

	<div id="primary" class="home content-area">
		<div class="container">

			<div class="home-hero-carousel">
				<div class="hero-header wow fadeIn">
				 	<h1 class="entry-title"><?php the_field('hero_title'); ?></h1>
        	        <span class="subtitle"><?php the_field('hero_subtitle'); ?></span>
        	    </div>
				<?php $images = get_field('hero_image');if( $images ): ?>
				    <div class="owl-carousel home-carousel">
				        <?php foreach( $images as $image ): ?>
				            <div class="slide" style="background: url('<?php echo esc_url($image['url']); ?>') no-repeat center center / cover;"></div>
				        <?php endforeach; ?>
				    </div>
				<?php endif; ?>
      		</div>


		<div class="press-section">
			<span class="press-title">Featured In:</span>
			<ul class="press-links">
            	<?php $query = new WP_Query( array( 'post_type' => 'press', 'orderby' => 'rand', 'posts_per_page' => 5, ) ); if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                	<li class="press-item">
                    	<a href="<?php the_field('press_link'); ?>" target="_blank"><img src="<?php the_field('press_logo'); ?>" alt="<?php the_field('press_title'); ?>"></a>
                	</li>
                	<?php endwhile; endif; ?>
           		<?php wp_reset_query(); ?>
            </ul>
        </div>

			<?php
			while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
	
			<?php endwhile; // End of the loop.?>
		</div>
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
