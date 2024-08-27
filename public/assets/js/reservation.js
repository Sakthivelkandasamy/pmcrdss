  VirtualSelect.init({
  ele: '#status-filter',
  maxWidth: '240px',
  multiple: true,
  search: true,
  searchGroup: false, 
});
$(function() {
  $('.table-booking-date,.table-reservation-date').daterangepicker({
    locale: {
            daysOfWeek: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
        },
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 2022,
    maxYear: parseInt(moment().format('YYYY'),11),
    "showCustomRangeLabel": false,
    "alwaysShowCalendars": true,
    "parentEl": "custom-date-range-picker",
    "startDate": "06/14/2024",
    "endDate": "06/20/2024",
    "opens": "left",
    "buttonClasses": "btn",
    "applyButtonClasses": "date-apply-btn",
    "cancelClass": "date-cancel-btn"
  });
});


$('#addWindow').each(function() {

    $(this).on('click', function(e) {
        $('#mainWindow').hide();
        let pgId = $(this).attr('page-id');
        let selector = '#' + pgId;
        $('.page').hide();
        $(selector).show();
    });
});

$('#backBtn').on('click', function(e){
    $(this).closest('.main-container').hide();
    $('#mainWindow').show();
});


        const inputpH = document.querySelector("#phonenumb");
        const itipH = window.intlTelInput(inputpH, {
          initialCountry: "af",
          formatOnDisplay: true,
          nationalMode: false,
          utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js",
        });
        
        const initialCountryCodepH = '+' + itipH.getSelectedCountryData().dialCode;
        $('#phonenumb').val(initialCountryCode); 
    
        inputpH.addEventListener('countrychange', function() {
            const countryCode = '+' + itipH.getSelectedCountryData().dialCode;
            $('#phonenumb').val(countryCode);
        });
    
        // Sanitizing the input value, for no spaces
        inputpH.addEventListener('input', function() {
            var value = this.value;
            var sanitizedValue = value.replace(/\D/g, '');
            this.value = '+' + sanitizedValue;
        });


$(document).on("click", ".table-time-data", function(event) {
    $('.hide-tt').toggleClass("show-tt");
    $('.sdots').toggle();
    $('.hidearrow').toggle();
});
$(document).on("click", ".add-special-occasion", function(event) {
    $('.add-occasion').toggleClass("open-occasion");
});
document.querySelector('.decrement').addEventListener('click', function() {
    const numberInput = document.getElementById('number');
    const currentValue = parseInt(numberInput.value);
    if (currentValue > 0) {
        numberInput.value = currentValue - 1;
    }
});

document.querySelector('.increment').addEventListener('click', function() {
    const numberInput = document.getElementById('number');
    numberInput.value = parseInt(numberInput.value) + 1;
});