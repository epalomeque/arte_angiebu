<?php
    /**
     * 
     * @package arte-angiebu
     * @since 1.0
     * This file contains the singleton trait for the theme.
     */

     namespace ARTE_ANGIEBU_THEME\Inc\Traits;

     trait Singleton {
        public function __construct() {
            // self::init();
        }

        public function __clone() {
        }

        final public static function get_instance() {
            static $instance = [];

            $called_class = get_called_class();

            if (!isset($instance[$called_class])) {
                $instance[$called_class] = new $called_class();

                do_action(sprintf('arte_angiebu_singleton_init%s', $called_class));
            }

            return $instance[$called_class];
        }
     }