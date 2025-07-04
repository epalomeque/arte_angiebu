<?php
/**
 * Navigation template part for Arte AngieBu Theme
 *
 * @package arte-angiebu
 * @since 1.0
 */
?>
<nav>
  <?php
  wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class'     => 'primary-menu',
  ) );
  ?>
</nav>