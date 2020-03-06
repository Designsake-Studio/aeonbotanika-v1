<?php
/**
Template Name: Event Landing
 */


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main event-details container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		<?php if( have_rows('tickets_rsvp') ): 
        	while( have_rows('tickets_rsvp') ): the_row(); 
        	// vars
        	$link = get_sub_field('ticket_link');
        	$cta = get_sub_field('ticket_cta');
        	?>

    			<?php if( $link ): ?>
    				<div class="ticket-link">
    			     	<a class="button" href="<?php echo $link; ?>"><?php echo $cta; ?></a>
    				</div>
    			<?php endif; ?>
    			
        	<?php endwhile; ?>
    	<?php endif; ?>

		<?php if( have_rows('event_sponsors') ): ?>
			<div class="event-sponsors">
   				<?php if( get_field('sponsors_title') ): ?>
					<h3><?php the_field('sponsors_title'); ?></h3>
   				<?php endif; ?>

				<ul class="sponsors-list">
					<?php while( have_rows('event_sponsors') ): the_row(); 
  					// vars
  					$title = get_sub_field('title');
  					$image = get_sub_field('image');
  					$link = get_sub_field('link');
  					$description = get_sub_field('description'); ?>
  						<li class="sponsor-detail wow fadeIn">
  							<?php if( $link ): ?>
  								<a href="<?php echo $link; ?>" target="_blank">
  									<div class="sponsor-thumb" style="background: #EEEEEE url('<?php echo $image; ?>') no-repeat center center / cover;"></div>
									<strong><?php echo $title; ?></strong>
    								<span class="description"><?php echo $description; ?></span>
    							</a>
    						<?php else: ?>
  								<div class="sponsor-thumb" style="background: #EEEEEE url('<?php echo $image; ?>') no-repeat center center / cover;"></div>
								<strong><?php echo $title; ?></strong>
    							<span class="description"><?php echo $description; ?></span>
    						<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
