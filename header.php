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
    <?php wp_body_open(); ?>
  <header>
    <h1><?php bloginfo( 'name' ); ?> Theme</h1>
    <p>Hello wordpress theme!</p>
  </header>