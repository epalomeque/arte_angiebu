<?php
/**
 * Assets class
 * 
 * @package ARTE_ANGIEBU_THEME
 * 
 */

namespace ARTE_ANGIEBU_THEME\Inc;

use ARTE_ANGIEBU_THEME\Inc\Traits\Singleton;

class ASSETS {
    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles() {
        // Enqueue main stylesheet
        wp_enqueue_style( 'arte-angiebu-style', ARTE_ANGIEBU_DIR_URI . '/style.css', array(), null );
        wp_enqueue_style( 'bootstrap-style', ARTE_ANGIEBU_DIR_URI . '/assets/library/css/bootstrap.min.css', array(), null );
    }

    public function register_scripts() {
        // Enqueue custom script
        wp_enqueue_script( 'arte-angiebu-mainjs', ARTE_ANGIEBU_DIR_URI . '/js/main.js', array(), null, true );
        wp_enqueue_script( 'bootstrap-js', ARTE_ANGIEBU_DIR_URI . '/assets/library/js/bootstrap.bundle.min.js', ['jquery'], null, true );
    }
}