<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aeon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.svg" color="#000000">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
    <script>
    	new WOW().init();
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150844446-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-150844446-1');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aeon' ); ?></a>

    <?php if ( is_active_sidebar( 'announcement-bar' ) ) : ?>
        <?php dynamic_sidebar( 'announcement-bar' ); ?>
    <?php endif; ?>


    <?php if( have_rows('color_header') ): ?>
    <?php while( have_rows('color_header') ): the_row(); 
        // vars
        $background = get_sub_field('background');
        $primary = get_sub_field('primary');
        $secondary = get_sub_field('secondary');
        ?>

        <style>
          .site-branding svg path{ fill: <?php echo $primary; ?> !important;}
          header#masthead ul.menu li a { color: <?php echo $primary; ?>; }
        </style>
        <header id="masthead" class="site-header" style="background-color:<?php echo $background; ?>;">

        <?php endwhile; ?>

        <?php else : ?>

        <header id="masthead" class="site-header">
    <?php endif; ?>

        
		<div class="container">
       <nav class="left-navigation">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'left-menu',
              'menu_id'        => 'left-menu',
            ) );
            ?>
       </nav>

			<div class="site-branding">
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 544.3 279.2" style="enable-background:new 0 0 544.3 279.2;" xml:space="preserve">
     <style type="text/css"> .st0{fill:#395878;} </style>
     <path class="st0" d="M105.2,233.1c-0.4-0.6-0.9-1.2-1.5-1.7c-0.5-0.5-1-0.9-1.5-1.1c0.3-0.2,0.6-0.4,1-0.8c0.4-0.4,0.7-0.8,1-1.3
    c0.3-0.5,0.5-1.2,0.7-1.9c0.2-0.7,0.3-1.5,0.3-2.4c0-1.5-0.3-2.9-0.8-4c-0.6-1.1-1.3-2-2.2-2.7c-0.9-0.7-2-1.2-3.2-1.5
    c-1.2-0.3-2.4-0.5-3.6-0.5H77.8v31.5h17.6c1.3,0,2.7-0.1,4-0.4c1.3-0.2,2.6-0.7,3.6-1.3c1.1-0.7,2-1.6,2.6-2.7c0.7-1.1,1-2.6,1-4.5
    c0-0.9-0.1-1.8-0.4-2.6C106,234.5,105.6,233.7,105.2,233.1z M81.5,218.9h13.9c2.1,0,3.7,0.5,4.7,1.4c1,0.9,1.5,2,1.5,3.4
    c0,1.5-0.5,2.7-1.6,3.7c-1.1,0.9-2.6,1.4-4.6,1.4H81.5V218.9z M102.4,240.5c-0.4,0.6-0.9,1.2-1.6,1.5c-0.7,0.4-1.5,0.7-2.4,0.8
    c-0.9,0.2-2,0.3-3.1,0.3H81.5v-10.6h13.9c2.4,0,4.3,0.5,5.6,1.4c1.4,0.9,2,2.3,2,4.2C103,239,102.8,239.8,102.4,240.5z M160.3,219.5
    c-1.5-1.5-3.3-2.7-5.4-3.6c-2.1-0.9-4.3-1.3-6.7-1.3c-2.4,0-4.7,0.4-6.8,1.3c-2.1,0.9-3.8,2.1-5.4,3.6c-1.5,1.5-2.7,3.2-3.6,5.2
    c-0.9,2-1.3,4.1-1.3,6.3c0,2.2,0.4,4.3,1.3,6.3c0.9,2,2,3.7,3.6,5.2c1.5,1.5,3.3,2.7,5.4,3.6c2.1,0.9,4.3,1.3,6.7,1.3
    c2.4,0,4.7-0.4,6.7-1.3c2.1-0.9,3.9-2.1,5.4-3.6c1.5-1.5,2.7-3.2,3.6-5.2c0.9-2,1.3-4.1,1.3-6.3c0-2.2-0.4-4.3-1.3-6.3
    C163,222.7,161.8,221,160.3,219.5z M160.4,235.9c-0.7,1.5-1.6,2.9-2.8,4.1c-1.2,1.2-2.6,2.1-4.2,2.8c-1.6,0.7-3.4,1-5.3,1
    c-1.9,0-3.6-0.3-5.3-1c-1.6-0.7-3-1.6-4.2-2.8c-1.2-1.2-2.1-2.5-2.8-4.1c-0.7-1.5-1-3.2-1-4.9c0-1.7,0.3-3.4,1-4.9
    c0.7-1.6,1.6-2.9,2.8-4.1c1.2-1.2,2.6-2.1,4.2-2.7c1.6-0.7,3.4-1,5.3-1c1.9,0,3.7,0.3,5.3,1c1.6,0.7,3,1.6,4.2,2.7
    c1.2,1.1,2.1,2.5,2.8,4.1c0.7,1.6,1,3.2,1,4.9C161.4,232.7,161.1,234.4,160.4,235.9z M188.6,215.2h26.7v3.7h-11.5v27.8h-3.7v-27.8
    h-11.5V215.2z M250.5,215.2l-15,31.5h4.1l5-10.8h15.1l5.1,10.8h4.1l-14.8-31.5H250.5z M246.4,232.3l5.9-12.5l5.7,12.5H246.4z
     M317.2,215.2h3.7v31.5h-3.7l-20.4-25.7h-0.1v25.7H293v-31.5h3.7l20.4,26h0.1V215.2z M350.2,215.2h3.7v31.5h-3.7V215.2z
     M398.6,226.3l12.8,20.5H407L395.8,229l-8.6,8.2v9.5h-3.7v-31.5h3.7v17.3l17.6-17.3h4.9L398.6,226.3z M444.8,215.2l-15,31.5h4.1
    l5-10.8H454l5.1,10.8h4.1l-14.8-31.5H444.8z M440.7,232.3l5.9-12.5l5.7,12.5H440.7z M524.4,156.1c-5.9,0-10.2-0.6-13-1.8
    c-2.8-1.2-4.7-3.3-5.7-6.3c-1-3-1.5-7.8-1.5-14.3V69.9c0-13-3.3-22.9-9.8-29.6c-6.5-6.7-15.8-10.1-28-10.1c-8.7,0-17.1,2.3-25.2,6.8
    c-8.1,4.6-16.3,11.6-24.6,21.1c0-7.8-1.1-14.2-3.2-19.2c-2.2-5-4.2-7.5-6.2-7.5c-0.9,0-1.5,0.1-2,0.3l-44.2,20.4
    c-4-4.8-8.6-9.1-14-12.6c-9.5-6.3-20.7-9.4-33.5-9.4c-11.1,0-22,2.4-32.7,7.3c-10.7,4.9-19.5,12.3-26.3,22.1
    c-6.8,9.9-10.3,21.8-10.3,35.9c0,12.4,2.6,23.8,7.8,34.3c0.7,1.5,1.5,2.9,2.3,4.2c-12.2,8.3-29.6,18.4-46.2,18.4
    c-16,0-28.6-5.9-37.7-17.7c-9.1-11.8-13.7-27.2-13.7-46c0-1.2,0-2.4,0.1-3.5l78.4-28.9c6.6-2.2,5.9-5.3,5.5-6.9
    c-0.3-1.3-0.9-2.4-2.6-4.4c-9.4-10.7-21.2-13.5-33-13.5c-13,0-24.8,3.1-35.5,9.3c-10.6,6.2-19,14.6-25.2,25.2
    c-4,6.9-6.7,14.4-8.1,22.3l-23.9,8.7V67.3c0-11.9-2.6-20.9-7.8-26.8c-5.2-6-12.1-8.9-20.8-8.9c-7.4,0-15.7,2-24.9,5.9
    c-9.2,3.9-17.1,8.7-23.6,14.3c-6.5,5.6-9.8,11-9.8,15.9c0,3,1,5.4,2.9,7.2c2,1.7,4.7,2.6,8.1,2.6c7.2,0,11.2-4.1,12-12.4
    c0.9-7.4,3.4-13.7,7.5-18.9c4.1-5.2,9.9-7.8,17.2-7.8c6.5,0,11.6,2.9,15.3,8.6c3.7,5.8,5.5,15.8,5.5,30.1v26.6L55,118.1
    c-11.5,3.9-19.5,7.6-23.9,11.2c-4.4,3.6-6.7,8.3-6.7,14.1c0,5.4,1.8,9.9,5.4,13.5c3.6,3.6,8.7,5.4,15.5,5.4c4.1,0,8.3-0.8,12.7-2.3
    c4.3-1.5,9.9-4,16.6-7.5l20.2-10.7c0.7,6.5,2.1,11.6,4.2,15.3c2.2,3.7,4.7,5.5,7.5,5.5c0.9,0,1.7-0.2,2.6-0.7l30-14.8
    c0.9-0.4,1.2-1.1,1-2.1c-0.2-1-0.8-1.5-1.6-1.5h-0.7c-6.5,2.8-8.3,3.1-12.5,3.1c-4.6,0-7.8-1.7-9.8-5.2c-2-3.5-2.9-9-2.9-16.6v-23.3
    l23.2-8.6c-0.3,2.8-0.5,5.6-0.5,8.4c0,11.1,2.3,21.3,7,30.7c4.7,9.4,11.7,17.1,21,22.9c9.3,5.9,20.4,8.8,33.2,8.8
    c21,0,44.3-13.8,60.4-25.8c4.7,6.7,10.5,12.4,17.4,16.8c9.6,6.2,20.8,9.3,33.3,9.3c12.4,0,23.8-2.8,34.3-8.3
    c10.5-5.5,18.9-13.3,25.2-23.4c6.3-10.1,9.4-21.8,9.4-35.3c0-11.5-2.6-22.4-7.6-32.7c-1.5-3-3.1-5.8-5-8.4
    c9.5-3.7,20.4-7.7,22.7-7.7c4.1,0,7,1.6,8.8,4.9c1.7,3.3,2.6,8.6,2.6,15.9v64.4c0,6.5-0.5,11.3-1.5,14.3c-1,3-2.9,5.2-5.7,6.3
    c-2.8,1.2-7.2,1.8-13,1.8c-0.7,0-1,0.7-1,2c0,1.3,0.3,2,1,2c5,0,8.9-0.1,11.7-0.3l17.9-0.3l17.6,0.3c2.8,0.2,6.7,0.3,11.7,0.3
    c0.7,0,1-0.7,1-2c0-1.3-0.3-2-1-2c-5.9,0-10.2-0.6-13-1.8c-2.8-1.2-4.7-3.3-5.7-6.3c-1-3-1.5-7.8-1.5-14.3V63.8
    c5.6-6.3,11.9-11.2,18.7-14.8c6.8-3.6,13.6-5.4,20.3-5.4c10.2,0,17.7,3,22.6,9.1c4.9,6.1,7.3,15.5,7.3,28.3v52.7
    c0,6.5-0.5,11.3-1.5,14.3c-1,3-2.9,5.2-5.7,6.3c-2.8,1.2-7.2,1.8-13,1.8c-0.7,0-1,0.7-1,2c0,1.3,0.3,2,1,2c5,0,8.9-0.1,11.7-0.3
    l17.9-0.3l17.6,0.3c2.8,0.2,6.7,0.3,11.7,0.3c0.6,0,1-0.7,1-2C525.4,156.8,525.1,156.1,524.4,156.1z M94.4,135.3v2l-19.8,10.1
    c-4.8,2.2-9.2,3.3-13.3,3.3c-4.1,0-7.5-1.2-10.1-3.7c-2.6-2.5-3.9-6-3.9-10.6c0-3.7,1-6.7,3.1-9.1c2.1-2.4,5.6-4.6,10.6-6.5
    l33.5-12.4V135.3z M158.5,71.9l1-4.6c2.4-9.3,6.6-16.5,12.5-21.6c6-5.1,13.4-7.6,22.3-7.6c7.8,0,13.8,2.7,18.7,7.3
    c0.9,0.9,4.5,3.8,6.3,7.4c2.3,4.5-0.8,5.7-0.8,5.7l-61.2,22.3C157.5,77.9,157.9,74.9,158.5,71.9z M344.8,145.4
    c-6.5,8.5-15.7,12.7-27.6,12.7c-9.8,0-18.5-3.3-26.3-9.8C283,141.8,277,133,272.6,122c-4.3-11.1-6.5-23.2-6.5-36.4
    c0-15.8,3.2-28,9.6-36.4c6.4-8.5,15.5-12.7,27.2-12.7c10,0,18.9,3,26.7,8.9c7.8,6,13.9,14.3,18.4,24.9c4.4,10.6,6.7,22.7,6.7,36.1
    C354.6,123.9,351.3,137,344.8,145.4z"/>
    </svg></a>
			</div>

			<nav class="right-navigation">
				    <?php
				    wp_nav_menu( array(
				    	'theme_location' => 'right-menu',
				    	'menu_id'        => 'right-menu',
				    ) );
				    ?>
			</nav>

		</div>

        <nav id="site-navigation" class="main-navigation">          
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php wp_nav_menu( array(
                    'theme_location' => 'mobile-menu',
                    'menu_id'        => 'mobile-menu',
                    'menu_class'     => 'main-navigation',
                ) );?>
        </nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
