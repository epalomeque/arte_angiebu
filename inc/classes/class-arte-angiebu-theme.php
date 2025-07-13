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
        }
    }