<?php
  /*
   * Theme Functions
   * @package arte-angiebu
   * @since 1.0
   * This file contains the functions for the Arte AngieBu theme.
   */
    if ( ! defined( 'ARTE_ANGIEBU_DIR_PATH' ) ) {
        define( 'ARTE_ANGIEBU_DIR_PATH', untrailingslashit( get_template_directory() ) );
    }

    if ( ! defined( 'ARTE_ANGIEBU_DIR_URI' ) ) {
        define( 'ARTE_ANGIEBU_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
    }

    require_once ARTE_ANGIEBU_DIR_PATH . '/inc/helpers/autoloader.php';
    // require_once ARTE_ANGIEBU_DIR_PATH . '/inc/traits/trait-singleton.php';

    function arte_angiebu_get_theme_instance() {
        \ARTE_ANGIEBU_THEME\Inc\ARTE_ANGIEBU_THEME::get_instance();
    }
    arte_angiebu_get_theme_instance();

    function arte_angiebu_setup() {
        // Add support for title tag
        add_theme_support( 'title-tag' );
    
        // Add support for post thumbnails
        add_theme_support( 'post-thumbnails' );
    
        // Register navigation menus
        register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'arte-angiebu' ),
        'footer'  => __( 'Footer Menu', 'arte-angiebu' ),
        ) );
    }
    add_action( 'after_setup_theme', 'arte_angiebu_setup' );
?>