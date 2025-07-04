<?php
  /*
   * Theme Functions
   * @package arte-angiebu
   * @since 1.0
   * This file contains the functions for the Arte AngieBu theme.
   */
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

    // Enqueue styles and scripts
    function arte_angiebu_enqueue_scripts() {
        // Enqueue main stylesheet
        wp_enqueue_style( 'arte-angiebu-style', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', array(), null );

        // Enqueue custom script
        wp_enqueue_script( 'arte-angiebu-mainjs', get_template_directory_uri() . '/js/main.js', array(), null, true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.bundle.min.js', ['jquery'], null, true );
    }
    add_action( 'wp_enqueue_scripts', 'arte_angiebu_enqueue_scripts' );
?>