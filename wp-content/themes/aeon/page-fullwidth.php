<?php
/**
Template Name: Full Width
 */

get_header();
?>

 <?php if( have_rows('color_header') ): 
    while( have_rows('color_header') ): the_row(); 
        // vars
        $background = get_sub_field('background');
        $primary = get_sub_field('primary');
        $secondary = get_sub_field('secondary');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        ?>

		<div class="hero-section content-area" style="background-color:<?php echo $background; ?>; color: <?php echo $secondary; ?>;">
			<div class="container wow fadeIn">
				<header class="entry-header">
					<h1 class="entry-title" style="color: <?php echo $primary; ?>;"><?php echo $title; ?></h1>
				</header><!-- .entry-header -->
				<?php if( $description ): ?>
					<div class="hero-content">
						<?php echo $description; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

    <?php endwhile; ?>
<?php endif; ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<div id="primary" class="fullwidth-content">
					<div class="container">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content wow fadeIn">
								<?php the_content(); ?>
							</div>
						
   							<?php if( get_field('contact_form') ): ?>
							<div class="contact-form">
								<?php the_field('contact_form'); ?>
							</div>
   							<?php endif; ?>
						</article>
					</div>
				</div>
			<?php endwhile; ?>


			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'aeon' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>

		</div><!-- #primary -->


	<?php if( have_rows('brand_partners') ): ?>
		<div class="partners brand">
			<div class="container wow fadeIn">
				<!---<h3>Our Partners</h3> -->
				<ul class="partners-list">
					<?php if( have_rows('brand_partners') ): 
						while( have_rows('brand_partners') ): the_row();
				  			// vars
				  			$name = get_sub_field('name');
				  			$link = get_sub_field('link');
				  			$logo = get_sub_field('logo'); ?>
				  				<li class="partner">
									<a href="<?php echo $link; ?>"><img src="<?php echo $logo; ?>" alt="<?php echo $name; ?>"></a>
								</li>
				  	<?php endwhile; ?>
					<?php endif; ?>
				</ul>

			</div>
		</div>
	<?php endif; ?>

	<?php if( have_rows('members') ): ?>
		<div class="team-members-list">
			<div class="container">
				<ul class="team-members">
					<?php while( have_rows('members') ): the_row(); 
  					// vars
  					$name = get_sub_field('name');
  					$title = get_sub_field('job_title');
  					$image = get_sub_field('image');
  					$description = get_sub_field('description'); ?>
  						<li class="team-member wow fadeIn">
							<?php if( $image ): ?>
								<img class="thumbnail" src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
    						<?php endif; ?>
							<div class="team-detail">
								<h3 class="name"><?php echo $name; ?></h3>
								<?php if( $title ): ?>
									<span class="job-title"><?php echo $title; ?></span>
    							<?php endif; ?>
    							<div class="description"><?php echo $description; ?></div>
    						</div>
						</li>
			  		<?php endwhile; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>

	<?php if( have_rows('advisory') ): ?>
		<div class="advisory-list">
			<div class="container wow fadeIn">
				<h2>Medical Advisory Board</h2>
				<ul class="advisory-board">
					<?php if( have_rows('advisory') ): 
						while( have_rows('advisory') ): the_row();
				  			// vars
				  			$name = get_sub_field('name');
				  			$description = get_sub_field('description'); ?>
				  				<li class="advisory">
									<h3 class="name"><?php echo $name; ?></h3>
				    				<div class="description"><?php echo $description; ?></div>
								</li>
				  	<?php endwhile; ?>
					<?php endif; ?>
				</ul>

			</div>
		</div>
	<?php endif; ?>

<?php
get_footer();
