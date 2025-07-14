<?php
    /**
     *  
     * @package arte-angiebu
     * @since 1.0
     * This file contains the main theme class.
     * Bootstraps the theme.
     */

    namespace ARTE_ANGIEBU_THEME\Inc;

    use ARTE_ANGIEBU_THEME\Inc\Traits\Singleton;

    class ARTE_ANGIEBU_THEME {
        use Singleton;

        protected function __construct() {
            // Load classes
            ASSETS::get_instance();
            $this->setup_hooks();
        }

        protected function setup_hooks() {
            // Actions
            add_action( 'after_setup_theme', [$this, 'setup_theme'] );
        }

        public function setup_theme() {
            // Add support for title tag
            add_theme_support( 'title-tag' );
            
            // Add support for custom logo
            add_theme_support( 'custom-logo', array(
                'height'      => 100,
                'width'       => 400,
                'flex-height' => true,
                'flex-width'  => true,
                'header-text' => [ 'site-title', 'site-description' ],
            ) );

            // Add support for custom background
            add_theme_support( 'custom-background', array(
                'default-color' => 'ffffff',
                'default-image' => ARTE_ANGIEBU_DIR_URI . '/imgs/background.jpg',
            ) );
        
            // Add support for post thumbnails
            add_theme_support( 'post-thumbnails' );
        
            // Register navigation menus
            register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'arte-angiebu' ),
            'footer'  => __( 'Footer Menu', 'arte-angiebu' ),
            ) );
        }
    }