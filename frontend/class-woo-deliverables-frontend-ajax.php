<?php

// If this file is called directly, abort.
if (!defined ('WPINC')) {
    die;
}

if (!class_exists ('WooDeliverablesFrontendAjax')) {

    class WooDeliverablesFrontendAjax {

        public $frontend_class;

        public function __construct ($frontend_obj) {
            $this->frontend_class = $frontend_obj;
        }



    }

}