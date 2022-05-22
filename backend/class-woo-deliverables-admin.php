<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('WooDeliverablesAdmin')) {
    class WooDeliverablesAdmin {


        public $utils;
        public $db;
        public $storeslot_settings = array();

        public function __construct() {
            $this->utils = new WooDeliverablesUtils();

            add_action("admin_menu", array($this, 'woo_deliverables_admin_menu'));
            add_action('admin_enqueue_scripts', array($this, 'woo_deliverables_admin_enqueue'));
            add_action( 'plugin_action_links_' . WOODELIVERABLES_BASE_PATH, array( $this, 'woo_deliverables_action_links') );
            $this->db = new WooDeliverablesDB($this);
            new WooDeliverablesAdminAjax($this);

            $this->storeslot_settings = get_option( 'woodeliveriables_settings', false );

        }


        public function woo_deliverables_action_links($links) {
            $settings_url = add_query_arg( 'page', 'woodeliverables', get_admin_url() . 'admin.php' );
            $setting_arr = array('<a href="' . esc_url( $settings_url ) . '">Dashboard</a>');
            $links = array_merge($setting_arr, $links);
            return $links;
        }

        public function woo_deliverables_admin_menu() {
            $icon_url = WOODELIVERABLES_IMG_DIR . "woodeliverables_icon.svg";
            add_menu_page("WooDeliverables", "WooDeliverables", 'manage_options', "woodeliverables", array($this, 'woodeliverables_admin_dashboard'), $icon_url, 6);
        }

        public function woo_deliverables_admin_enqueue( $page ) {
            if($page == "toplevel_page_woodeliverables"){
                $this->utils->enqueue_style('select2', 'select2.min.css');
                $this->utils->enqueue_style('toastr', 'toastr.min.css');
                $this->utils->enqueue_style('admin', 'admin.css');
                
              
                $this->utils->enqueue_script('select2', 'select2.min.js', array('jquery'));
                $this->utils->enqueue_script('toastr', 'toastr.min.js', array('jquery'));
                $this->utils->enqueue_script('admin', 'admin.js', array('jquery'),'',true); 
            }

        }


       public function woodeliverables_admin_dashboard(){
            include_once WOODELIVERABLES_PATH . "backend/templates/dashboard.php";
        }

    }
}


new WooDeliverablesAdmin();