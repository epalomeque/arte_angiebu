<?php
/**
 * Navigation template part for Arte AngieBu Theme
 *
 * @package arte-angiebu
 * @since 1.0
 */
?>
<nav>
  <?php if ( has_custom_logo() ) : ?>
    <div class="site-logo">
      <?php the_custom_logo(); ?>
    </div>
  <?php endif; ?>
  
  <?php
  wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class'     => 'primary-menu',
  ) );
  ?>
</nav>