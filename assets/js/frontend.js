
'use strict';
var $ = jQuery;


var $storeslotsFrontend = {
  storeslot_settings_form: "#storeslots_settings_form",
  storeslot_settings: JSON.parse(storeslot_frontend_object.storeslot_settings),
  delivery_dates: JSON.parse(storeslot_frontend_object.delivery_dates),

  init_storeslots_frontend: function () {
    jQuery(document).ready(function ($) {

      var days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

      $("#storeslots_order_date").flatpickr({

        enable: ["2022-05-15", "2022-05-16", "2022-05-17"],
        "locale": {
          "firstDayOfWeek": 3 // start week on Monday
        },

        onOpen: [
          function (selectedDates, dateStr, instance) {
            var $flatpickr_days = $('.flatpickr-day');
            if ($flatpickr_days.length > 0) {
              $flatpickr_days.each(function (i, v) {
                var $target_date = $(v).attr('aria-label');
                var d = new Date($target_date);
                var dayName = days[d.getDay()];
                if (dayName.toLowerCase() === 'sunday') {
                  $(v).addClass('flatpickr-disabled');
                }
              });
            }
          },
        ],

      });

    });
  },






};

//load js for backend
$storeslotsFrontend.init_storeslots_frontend();
