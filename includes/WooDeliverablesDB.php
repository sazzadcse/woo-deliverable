<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('WooDeliverablesDB')) {
    class WooDeliverablesDB {

        public $admin_class;
        public $wpdb;

        public function __construct($admin_obj) {
            $this->admin_class = $admin_obj;
        }
    }
}
