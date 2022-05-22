<div id="storeslots_dashboard">

    <form class="storeslots-settings-form" id="storeslots_settings_form">

        <div class="storeslots_content_wrapper">

            <div class="storeslots_bottom_form">
                <div class="content_wrapper">
                    <div class="storeslots_left_content">
                        <div class="storeslots_data_tabs">
                            <div class="tab_item tab_item_active" data-target="order_settings">
                                <h3> <?php _e('Order Settings', 'storeslots'); ?> </h3>
                            </div>
                            <div class="tab_item" data-target="delivery_date">
                                <h3> <?php _e('Date of Delivery ', 'storeslots'); ?> </h3>
                            </div>
                            <div class="tab_item" data-target="pickup_date">
                                <h3> <?php _e('Date of Pickup ', 'storeslots'); ?> </h3>
                            </div>
                            <div class="tab_item" data-target="delivery_time">
                                <h3> <?php _e('Time of Delivery', 'storeslots'); ?> </h3>
                            </div>
                            <div class="tab_item" data-target="pickup_time">
                                <h3> <?php _e('Time of Pickup', 'storeslots'); ?> </h3>
                            </div>
                            <div class="tab_item" data-target="timezone-settings">
                                <h3> <?php _e('Timezone Settings', 'storeslots'); ?> </h3>
                            </div>
                        </div>
                    </div>

                    <div class="storeslots_right_content">
                        <!-- Start order settings -->
                        <div data-id="order_settings" class="storeslots_tab_body">
                            <div class="tab_body_title">
                                <h1><?php _e('Order Settings', 'storeslots'); ?></h1>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Enable Delivery or Pickup?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="storeslots_enable_delivery_or_pickup" class="storeslots_default_checked" name="storeslots_enable_delivery_or_pickup" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['storeslots_enable_delivery_or_pickup']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable if you want home delivery or picks orderd product from a pickup location.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Order Type Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="storeslots_order_type_label" id="" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_order_type_label']) ? $this->storeslot_settings['storeslots_order_type_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Order type field label</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery Option Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="storeslots_delivery_option_label" id="" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_delivery_option_label']) ? $this->storeslot_settings['storeslots_delivery_option_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Order type's home delivery option.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup Option Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="storeslots_pickup_option_label" id="" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_pickup_option_label']) ? $this->storeslot_settings['storeslots_pickup_option_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Order type's pickup delivery option.</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End order settings -->

                        <!-- Start Delivery Date -->
                        <div data-id="delivery_date" class="storeslots_tab_body">
                            <div class="tab_body_title">
                                <h1><?php _e('Delivery Date Settings', 'storeslots'); ?></h1>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Enable Delivery Date?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="storeslots_enable_delivery_date" class="storeslots_default_checked" name="storeslots_enable_delivery_date" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['storeslots_enable_delivery_date']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable delivery date in storecommerce order checkout page.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery Date Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="ssd_date_label" id="storeslots_delivery_date_label" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_date_label']) ? $this->storeslot_settings['ssd_date_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Delivery date input field.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery in Next Available Days', 'store-slots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="number" name="ssd_available_days" id="storeslots_delivery_available_days" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_available_days']) ? $this->storeslot_settings['ssd_available_days'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">User can specify next available days.</small>
                                    </div>
                                </div>
                            </div>


                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Week Starts From', 'store-slots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php 
                                        $ssd_week_starts_from  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_week_starts_from']) ? $this->storeslot_settings['ssd_week_starts_from'] : '';                                        
                                        ?>

                                            <select name="ssd_week_starts_from" class="storeslots_select_control storeslots_select2">
                                                <option value="">Select Day</option>
                                                <option value="saturday" <?php echo 'saturday' == $ssd_week_starts_from ? 'selected' : ''; ?>>Saturday</option>
                                                <option value="sunday" <?php echo 'sunday' == $ssd_week_starts_from ? 'selected' : ''; ?> >Sunday</option>
                                                <option value="monday" <?php echo 'monday' == $ssd_week_starts_from ? 'selected' : ''; ?>>Monday</option>
                                                <option value="tuesday" <?php echo 'tuesday' == $ssd_week_starts_from ? 'selected' : ''; ?>>Tuesday</option>
                                                <option value="wednesday" <?php echo 'wednesday' == $ssd_week_starts_from ? 'selected' : ''; ?>>Wednesday</option>
                                                <option value="thursday" <?php echo 'thursday' == $ssd_week_starts_from ? 'selected' : ''; ?>>Thursday</option>
                                                <option value="friday" <?php echo 'friday' == $ssd_week_starts_from ? 'selected' : ''; ?>>Friday </option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>Delivery dates will be start from the day that is selected.</small>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery Date Format', 'store-slots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                       <?php 
                                       $ssd_date_formet  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_date_formet']) ? $this->storeslot_settings['ssd_date_formet'] : ''; 

                                        ?>
                                            <select name="ssd_date_formet" id="ssd_date_formet" class="storeslots_select_control storeslots_select2">
                                                <option value="">Select Date format</option>
                                                <option value="F j, Y" <?php echo 'F j, Y' == $ssd_date_formet ? 'selected' : ''; ?>>F j, Y ( ex. March 6, 2011 )</option>
                                                <option value="d-m-Y" <?php echo 'd-m-Y' == $ssd_date_formet ? 'selected' : ''; ?>>d-m-Y ( ex. 29-03-2011 )</option>
                                                <option value="m/d/Y"  <?php echo 'm/d/Y' == $ssd_date_formet ? 'selected' : ''; ?>>m/d/Y ( ex. 03/29/2011 )</option>
                                                <option value="d.m.Y" <?php echo 'd.m.Y' == $ssd_date_formet ? 'selected' : ''; ?>>d.m.Y ( ex. 29.03.2011 )</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>Select delivery date format.</small>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Auto Select 1st Available Date ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="storeslots_enable_autoselect_first_date" class="storeslots_default_checked" name="ssd_enable_autoselect_first_date" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['ssd_enable_autoselect_first_date']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable the option if you want to select the first available date.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery Days ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php                                                                                 
                                            $storeslots_delivery_days = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_delivery_days']) ? explode(',', $this->storeslot_settings['storeslots_delivery_days']) : array();
                                        ?>
                                            <div class="delivery_days_wrapper">
                                                <input type="checkbox" name="storeslots_delivery_days" value="saturday" <?php echo (!empty($storeslots_delivery_days) && in_array('saturday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Saturday</label><br>
                                                <input type="checkbox" name="storeslots_delivery_days" value="sunday" <?php echo (!empty($storeslots_delivery_days) && in_array('sunday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Sunday</label><br>
                                                <input type="checkbox" name="storeslots_delivery_days" value="monday" <?php echo (!empty($storeslots_delivery_days) && in_array('monday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Monday</label><br>
                                                <input type="checkbox" name="storeslots_delivery_days" value="tuesday" <?php echo (!empty($storeslots_delivery_days) && in_array('tuesday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Tuesday</label><br>
                                                <input type="checkbox" name="storeslots_delivery_days" value="wednesday" <?php echo (!empty($storeslots_delivery_days) && in_array('wednesday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Wednesday</label><br>
                                                <input type="checkbox" name="storeslots_delivery_days" value="thursday" <?php echo (!empty($storeslots_delivery_days) && in_array('thursday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Thursday</label><br>
                                                <input type="checkbox" name="storeslots_delivery_days" value="friday" <?php echo (!empty($storeslots_delivery_days) && in_array('friday', $storeslots_delivery_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_delivery_days_label">Friday</label><br>
                                            </div>
                                        </div>

                                        <small class="storeslots-hints">Delivery is only available in those days that are checked.</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Delivery Date -->

                        <!-- Start Pickup Date -->
                        <div data-id="pickup_date" class="storeslots_tab_body">
                            <div class="tab_body_title">
                                <h1><?php _e('Pickup Date Settings', 'storeslots'); ?></h1>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Enable Pickup Date?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="storeslots_enable_pickup_date" class="storeslots_default_checked" name="storeslots_enable_pickup_date" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['storeslots_enable_pickup_date']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable pickup date in storecommerce order checkout page.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup Date Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="ssp_date_label" id="storeslots_pickup_date_label" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_date_label']) ? $this->storeslot_settings['ssp_date_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Pickup date input field.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup in Next Available Days', 'store-slots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="number" name="ssp_available_days" id="storeslots_pickup_available_days" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_available_days']) ? $this->storeslot_settings['ssp_available_days'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">User can specify next available days.</small>
                                    </div>
                                </div>
                            </div>


                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Week Starts From', 'store-slots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php 
                                        $ssp_week_starts_from  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_week_starts_from']) ? $this->storeslot_settings['ssp_week_starts_from'] : '';                                        
                                        ?>
                                            <select name="ssp_week_starts_from" class="storeslots_select_control storeslots_select2">
                                                <option value="">Select Day</option>
                                                <option value="saturday" <?php echo 'saturday' == $ssp_week_starts_from? 'selected' : '' ; ?> >Saturday</option>
                                                <option value="sunday" <?php echo 'sunday' == $ssp_week_starts_from? 'selected' : '' ; ?>>Sunday</option>
                                                <option value="monday" <?php echo 'monday' == $ssp_week_starts_from? 'selected' : '' ; ?>>Monday</option>
                                                <option value="tuesday" <?php echo 'tuesday' == $ssp_week_starts_from? 'selected' : '' ; ?>>Tuesday</option>
                                                <option value="wednesday" <?php echo 'wednesday' == $ssp_week_starts_from? 'selected' : '' ; ?>>Wednesday</option>
                                                <option value="thursday" <?php echo 'thursday' == $ssp_week_starts_from? 'selected' : '' ; ?>>Thursday</option>
                                                <option value="friday" <?php echo 'friday' == $ssp_week_starts_from? 'selected' : '' ; ?>>Friday </option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>Delivery dates will be start from the day that is selected.</small>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup Date Format', 'store-slots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php
                                        $ssp_date_formet  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_date_formet']) ? $this->storeslot_settings['ssp_date_formet'] : '';                                        
                                        ?>
                                            <select name="ssp_date_formet" id="storeslots_date_formet" class="storeslots_select_control storeslots_select2">
                                                <option value="">Select Date format</option>
                                                <option value="F j, Y" <?php echo 'F j, Y' == $ssp_date_formet? 'selected' : '' ; ?>>F j, Y ( ex. March 6, 2011 )</option>
                                                <option value="d-m-Y" <?php echo 'd-m-Y' == $ssp_date_formet? 'selected' : '' ; ?>>d-m-Y ( ex. 29-03-2011 )</option>
                                                <option value="m/d/Y" <?php echo 'm/d/Y' == $ssp_date_formet? 'selected' : '' ; ?>>m/d/Y ( ex. 03/29/2011 )</option>
                                                <option value="d.m.Y" <?php echo 'd.m.Y' == $ssp_date_formet? 'selected' : '' ; ?>>d.m.Y ( ex. 29.03.2011 )</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>Select delivery date format.</small>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Auto Select 1st Available Date ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="enable_pickup_autoselect_first_date" class="storeslots_default_checked" name="enable_pickup_autoselect_first_date" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['enable_pickup_autoselect_first_date']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable the option if you want to select the first available date.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup Days ?', 'storeslots'); ?></h4>
                                </div>
                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php                                                                                 
                                            $storeslots_pickup_days = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_pickup_days']) ? explode(',', $this->storeslot_settings['storeslots_pickup_days']) : array();
                                        ?>
                                            <div class="pickup_days_wrapper">
                                                <input type="checkbox" name="storeslots_pickup_days" value="saturday" <?php echo (!empty($storeslots_pickup_days) && in_array('saturday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Saturday</label><br>
                                                <input type="checkbox" name="storeslots_pickup_days" value="sunday" <?php echo (!empty($storeslots_pickup_days) && in_array('sunday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Sunday</label><br>
                                                <input type="checkbox" name="storeslots_pickup_days" value="monday" <?php echo (!empty($storeslots_pickup_days) && in_array('monday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Monday</label><br>
                                                <input type="checkbox" name="storeslots_pickup_days" value="tuesday" <?php echo (!empty($storeslots_pickup_days) && in_array('tuesday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Tuesday</label><br>
                                                <input type="checkbox" name="storeslots_pickup_days" value="wednesday" <?php echo (!empty($storeslots_pickup_days) && in_array('wednesday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Wednesday</label><br>
                                                <input type="checkbox" name="storeslots_pickup_days" value="thursday" <?php echo (!empty($storeslots_pickup_days) && in_array('thursday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Thursday</label><br>
                                                <input type="checkbox" name="storeslots_pickup_days" value="friday" <?php echo (!empty($storeslots_pickup_days) && in_array('friday', $storeslots_pickup_days)) ? 'checked' : ''; ?>>
                                                <label class="storeslots_pickup_days_label">Friday</label><br>
                                            </div>
                                        </div>

                                        <small class="storeslots-hints">Pickup is only available in those days that are checked.</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Pickup Date -->

                        <!-- Start delivery time -->
                        <div data-id="delivery_time" class="storeslots_tab_body">
                            <div class="tab_body_title">
                                <h1><?php _e('Delivery Time Settings', 'storeslots'); ?></h1>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Enable Delivery Time?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="storeslots_enable_delivery_time" class="storeslots_default_checked" name="storeslots_enable_delivery_time" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['storeslots_enable_delivery_time']) ? 'checked' : ''; ?>>
                                                <span class="slider round" ></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable delivery time select field in woocommerce order checkout page.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery Time Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="ssd_time_label" id="storeslots_pickup_date_label" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_time_label']) ? $this->storeslot_settings['ssd_time_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Delivery time select field label and placeholder.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Time Slot Starts From', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="time" name="ssd_time_starts_from" id="ssd_time_starts_from" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_time_starts_from']) ? $this->storeslot_settings['ssd_time_starts_from'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Delivery time will start from the time that specified here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Time Slot Ends At', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="time" name="ssd_time_ends_from" id="ssd_time_ends_from" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_time_ends_from']) ? $this->storeslot_settings['ssd_time_ends_from'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Delivery time will ends from the time that specified here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Time Slot Duration', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item ss_slot_text_control">
                                            <input class="storeslots_text_control  h50" type="number" name="ssd_slot_duration_time" id="ssd_time_ends_from" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_slot_duration_time']) ? $this->storeslot_settings['ssd_slot_duration_time'] : ''; ?>" placeholder="">
                                        <?php
                                        $ssd_slot_duration_type  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_slot_duration_type']) ? $this->storeslot_settings['ssd_slot_duration_type'] : '';                                        
                                        ?>

                                            <select name="ssd_slot_duration_type" class="storeslots_select_control">
                                                <option value="">Select </option>
                                                <option value="minutes" <?php echo 'minutes' == $ssd_slot_duration_type? 'selected' : '' ; ?> >Minutes</option>
                                                <option value="hour" <?php echo 'hour' == $ssd_slot_duration_type? 'selected' : '' ; ?>>Hour</option>
                                            </select>

                                        </div>
                                        <small class="storeslots-hints">Delivery duration will specified from here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Maximum Order Per Time Slot ', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control  h50" type="number" name="ssd_time_maximum_order" id="ssd_time_maximum_order" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_time_maximum_order']) ? $this->storeslot_settings['ssd_time_maximum_order'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Each time slot takes maximum number of orders that is specified here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Delivery Time Format', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php
                                        $ssd_time_format  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssd_time_format']) ? $this->storeslot_settings['ssd_time_format'] : '';                                        
                                        ?>
                                            <select name="ssd_time_format" class="storeslots_select_control">
                                                <option value="">Select Time Format</option>
                                                <option value="12"  <?php echo '12' == $ssd_time_format? 'selected' : '' ; ?>>12 Hours</option>
                                                <option value="24" <?php echo '24' == $ssd_time_format? 'selected' : '' ; ?>>24 Hours</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Disable Current Time Slot ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="ssd_disable_current_time_slot" class="storeslots_default_checked" name="ssd_disable_current_time_slot" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['ssd_disable_current_time_slot']) ? 'checked' : ''; ?>>
                                                <span class="slider round" ></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Disabled current time slot.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Auto Select 1st Available Time  ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="ssd_auto_select_first_date" class="storeslots_default_checked" name="ssd_auto_select_first_date" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['ssd_auto_select_first_date']) ? 'checked' : ''; ?>>
                                                <span class="slider round" ></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable if you want to auto select the first time slot.</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End delivery time -->

                        <!-- Start pickup time -->
                        <div data-id="pickup_time" class="storeslots_tab_body">
                            <div class="tab_body_title">
                                <h1><?php _e('Pickup Time Settings', 'storeslots'); ?></h1>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Enable Pickup Time?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="storeslots_enable_pickup_time" class="storeslots_default_checked" name="storeslots_enable_pickup_time" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['storeslots_enable_pickup_time']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable pickup time select field in woocommerce order checkout page.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup Time Label', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="text" name="ssp_time_label" id="storeslots_pickup_date_label" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_time_label']) ? $this->storeslot_settings['ssp_time_label'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Pickup time select field label and placeholder.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Time Slot Starts From', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="time" name="ssp_time_starts_from" id="ssp_time_starts_from" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_time_starts_from']) ? $this->storeslot_settings['ssp_time_starts_from'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Pickup time will start from the time that specified here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Time Slot Ends At', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control h50" type="time" name="ssp_time_ends_from" id="ssp_time_ends_from" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_time_ends_from']) ? $this->storeslot_settings['ssp_time_ends_from'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Pickup time will ends from the time that specified here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Time Slot Duration', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item ss_slot_text_control">
                                            <input class="storeslots_text_control  h50" type="number" name="ssp_slot_duration_time" id="ssp_time_ends_from" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_slot_duration_time']) ? $this->storeslot_settings['ssp_slot_duration_time'] : ''; ?>" placeholder="">
                                        <?php
                                        $ssp_slot_duration_type  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_slot_duration_type']) ? $this->storeslot_settings['ssp_slot_duration_type'] : '';                                        
                                        ?>

                                            <select name="ssp_slot_duration_type" class="storeslots_select_control">
                                                <option value="">Select </option>
                                                <option value="minutes" <?php echo 'minutes' == $ssp_slot_duration_type? 'selected' : '' ; ?>>Minutes</option>
                                                <option value="hour" <?php echo 'hour' == $ssp_slot_duration_type? 'selected' : '' ; ?>>Hour</option>
                                            </select>

                                        </div>
                                        <small class="storeslots-hints">Pickup duration will specified from here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Maximum Order Per Time Slot ', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <input class="storeslots_text_control  h50" type="number" name="ssp_time_maximum_order" id="ssp_time_maximum_order" value="<?php echo !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_time_maximum_order']) ? $this->storeslot_settings['ssp_time_maximum_order'] : ''; ?>" placeholder="">
                                        </div>
                                        <small class="storeslots-hints">Each time slot takes maximum number of orders that is specified here.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Pickup Time Format', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                        <?php
                                        $ssp_time_format  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['ssp_time_format']) ? $this->storeslot_settings['ssp_time_format'] : '';                                        
                                        ?>
                                            <select name="ssp_time_format" class="storeslots_select_control">
                                                <option value="">Select Time Format</option>
                                                <option value="12" <?php echo '12' == $ssp_time_format? 'selected' : '' ; ?>>12 Hours</option>
                                                <option value="24" <?php echo '24' == $ssp_time_format? 'selected' : '' ; ?>>24 Hours</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Disable Current Time Slot ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="ssp_disable_current_time_slot" class="storeslots_default_checked" name="ssp_disable_current_time_slot" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['ssp_disable_current_time_slot']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Disabled current time slot.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Auto Select 1st Available Time  ?', 'storeslots'); ?></h4>
                                </div>

                                <div class="label_content ">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">
                                            <label class="toggle_switch">
                                                <input id="ssp_auto_select_first_date" class="storeslots_default_checked" name="ssp_auto_select_first_date" type="checkbox" value="yes" <?php echo !empty($this->storeslot_settings) && isset($this->storeslot_settings['ssp_auto_select_first_date']) ? 'checked' : ''; ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <small class="storeslots-hints">Enable if you want to auto select the first time slot.</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End pickup time -->

                        <!-- Start pickup time -->
                        <div data-id="timezone-settings" class="storeslots_tab_body">
                            <div class="tab_body_title">
                                <h1><?php _e('Timezone Settings', 'storeslots'); ?></h1>
                            </div>

                            <div class="storeslots_form_group">
                                <div class="label_title">
                                    <h4><?php _e('Store Location Timezone', 'storefusion'); ?></h4>
                                </div>

                                <div class="label_content">
                                    <div class="storeslots_list_items">
                                        <div class="storeslots_item">  
                                        <?php
                                        $storeslots_time_timezone  = !empty($this->storeslot_settings) && !empty($this->storeslot_settings['storeslots_delivery_time_timezone']) ? $this->storeslot_settings['storeslots_delivery_time_timezone'] : '';                                        
                                        ?>
                                            <select class="storeslots_select_control storeslots_select2" name="storeslots_delivery_time_timezone">
                                                <option value="" ><?php _e('Select Timezone', 'woo-delivery'); ?></option>
                                                <?php echo $this->utils->get_store_sloat_time_zones( $storeslots_time_timezone ); ?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End pickup time -->

                    </div>
                </div>

                <div class="storeslots_footer">

                    <button type="submit" class="storeslots-btn"> <?php _e('Save Settings', 'storeslots'); ?>
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>