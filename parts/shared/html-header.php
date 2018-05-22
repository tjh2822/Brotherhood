<!DOCTYPE html>
<html lang="en">
  <head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>
        <?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?>
    </title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<?php wp_head(); ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="primaryNav">
    <?php
    wp_nav_menu( array(
      'menu'            => 'primary',
      'theme_location'  => 'primary',
      'depth'           => 2,
      'container'     => false,
      'menu_class'      => 'navbar-nav mr-auto',
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker())
    
    );
    ?>
    <?php get_search_form(); ?>
  </div>
</nav>

  </head>
<body <?php body_class(); ?>>

