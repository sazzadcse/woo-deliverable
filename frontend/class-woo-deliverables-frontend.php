<?php
// If this file is called directly, abort.
if (!defined ('WPINC')) {
    die;
}

if (!class_exists ('WooDeliverablesFrontend')) {
    class WooDeliverablesFrontend {

        public $utils;
        public $woodeliverables_settings = array();
        public $delivery_dates = array();
        public $extended_dates = array();
          
        public function __construct (){
            $this->utils = new WooDeliverablesUtils();
            
            new WooDeliverablesFrontendAjax($this);
            add_action ('wp_enqueue_scripts', array($this, 'store_slots_frontend_enqueue'));
            add_action('woocommerce_after_order_notes', array($this, 'storeslots_add_custom_field'));
            add_action('woocommerce_checkout_process', array($this, 'storeslots_checkout_field_process'));
            add_action('woocommerce_checkout_update_order_meta', array( $this,'storeslots_checkout_field_update_order_meta'));

            $this->woodeliverables_settings = get_option('woodeliverables_settings', false);
            $this->storeslots_generate_delivery_dates();

        }

        public function store_slots_frontend_enqueue ($page) {           
            $this->utils->enqueue_style('flatpickr', 'flatpickr.min.css');
            $this->utils->enqueue_style('frontend', 'frontend.css');

          
            $this->utils->enqueue_script('flatpickr', 'flatpickr.js', array('jquery'),'',true);
            $this->utils->enqueue_script('frontend', 'frontend.js', array('jquery'),'',true);

            // create localize
            wp_localize_script( "store-slots-frontend", 'storeslot_frontend_object', array(
                'storeslot_settings' => !empty( $this->storeslot_settings) ? json_encode ( $this->storeslot_settings) : json_encode( array() ),
                'delivery_dates' => !empty( $this->delivery_dates) ? json_encode ( $this->delivery_dates) : json_encode( array() ),

            ));

        }

        public function storeslots_add_custom_field($checkout){
            echo '<div id="storeslots_custom_checkout_field">';

            woocommerce_form_field(
                'storeslots_ordertype_selection_box',
                array(
                    'type' => 'select',
                    'class' => array(
                        'storeslots_ordertype_selection_box'
                    ),
                    'label' => __('Order Type'),
                    'placeholder' => __('Order Type'),
                    
                    'options' => array(
                         '' => __('Choose Order type'),
                        'delivery' => __('Delivery'),
                        'pickup' => __('Pickup')
                    ),

                    'required' => true,
                ),
                $checkout->get_value('storeslots_ordertype_selection_box')
            );

            echo '</div>';


            echo '<div id="storeslots_custom_checkout_date">';
            woocommerce_form_field(
                'storeslots_order_date',
                array(
                    'type' => 'text',
                    'class' => array(
                        'storeslots_order_date'
                    ),
                    'label' => __('Delivery Date'),
                    'placeholder' => __('Delivery Date'),
                    'required' => true,
                ),
                $checkout->get_value('storeslots_order_date')
            );

            echo '</div>';

            echo '<div id="storeslots_custom_checkout_time">';
            woocommerce_form_field(
                'storeslots_order_time',
                array(
                    'type' => 'select',
                    'class' => array(
                        'storeslots_order_schedule'
                    ),
                    'label' => __('Delivery Time'),
                    'placeholder' => __('Delivery Time'),

                    'options' => array(
                        'yes' => '4pm -6pm',
                        'no' => '7pm -8pm',
                    ),

                    'required' => true,
                ),
                $checkout->get_value('storeslots_order_time')
            );

            echo '</div>';

        }

        public function storeslots_checkout_field_process(){
            // Show an error message if the field is not set.
            if (!$_POST['storeslots_ordertype_selection_box']) wc_add_notice(__('Please enter value!'), 'error');
            if (!$_POST['storeslots_order_date']) wc_add_notice(__('Please enter value!'), 'error');
            if (!$_POST['storeslots_order_time']) wc_add_notice(__('Please enter value!'), 'error');
        }

        public function storeslots_checkout_field_update_order_meta( $order_id ){
            $order_type_val = '';

            if (!empty($_POST['storeslots_ordertype_selection_box'])) {
                $order_type_val = $_POST['storeslots_ordertype_selection_box'];

                update_post_meta($order_id, 'delivery_type', sanitize_text_field($_POST['storeslots_ordertype_selection_box']));
            }

            if (!empty($_POST['storeslots_order_date'])) {

                update_post_meta($order_id, $order_type_val .'_date_time', sanitize_text_field($_POST['storeslots_order_date']));
            }

            if (!empty($_POST['storeslots_order_time'])) {

                update_post_meta($order_id, $order_type_val .'_date_time', sanitize_text_field($_POST['storeslots_order_time']));
            }


        }

        public function storeslots_generate_delivery_dates () {

            $delivery_available_days = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_available_days']) ? $this->storeslot_settings['ssd_available_days'] : '';

            $delivery_days = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_delivery_days']) ? explode (',', $this->storeslot_settings['storeslots_delivery_days']) : array();

            $i = 1;
            while (1) {
                $next_date = date ("Y-m-d", strtotime ("+$i day"));
                $nameOfDay = strtolower (date ('l', strtotime ($next_date)));
                if (in_array ($nameOfDay, $delivery_days)) {
                    $this->delivery_dates[] = $next_date;
                }
                if(count($this->delivery_dates) == $delivery_available_days){
                    break;
                }
                $i++;
            }
        }

    }
}

new WooDeliverablesFrontend();
