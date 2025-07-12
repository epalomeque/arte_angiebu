<?php
/**
 * Header template for Arte AngieBu Theme
 *
 * @package arte-angiebu
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes( ); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
  if ( function_exists( 'wp_body_open' ) ) {
    // WordPress 5.2+ function to ensure compatibility with themes.
    // It allows plugins to hook into the body opening tag.
    // This function is used to hook into the body opening tag.
    wp_body_open(); 
  } else {
    // Fallback for older versions of WordPress.
    do_action( 'wp_body_open' );
  }
  ?>

<div id="page" class="site">
  <header id="masthead" class="site-header" role="banner">
  <?php get_template_part( 'assets/library/template-parts/header/nav' ); ?>
  </header>
  <div id="content" class="site-content">