// Select Inputs inside Datatable

VirtualSelect.init({
  ele: '#payment-filter',
  maxWidth: '240px',
  multiple: true,
  search: false,
  searchGroup: false, 
  searchByStartsWith: false,
});

VirtualSelect.init({
  ele: '#status-filter',
  maxWidth: '240px',
  multiple: true,
  search: true,
  searchGroup: false, 
});
  
// Select DropDown
$('.form-select').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent(),
    });
});
$('.form-select-simple').each(function() {
    $(this).select2({
        minimumResultsForSearch: -1,
        dropdownParent: $(this).parent(),
    });
});
$('.form-select').on('select2:open', function() {
    $('input.select2-search__field').attr('placeholder', 'Search...');
});
$('.select-btn-wrapper select').on('change',function(e){
    if(e.target.value == 'addnew'){
        let id = $(this).attr('id');
        let modalID = '#' + id + 'Modal';
        $(modalID).modal('show');
        e.target.value = '';
    }
})
$('.form-select-multiple').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent(),
        placeholder: {
          id: -1,
          text: $(this).data('placeholder'),
        }
    });
});

// Create Brand Window
{
    // progress tabs
    let progressNavs = $('.progress-navs .nav-link');
    let progressTabs = $('.progress-tabs .tab-pane');
    let progressTabsIndex = 0;
    let nextBtn = $('.progress-navs .next-button');
    

    nextBtn.on('click',function(e){
        if(progressTabsIndex < progressNavs.length - 1){
            $(progressNavs).removeClass('active');
            $(progressNavs[progressTabsIndex]).addClass('complete');
            progressTabsIndex += 1;
            $(progressNavs[progressTabsIndex]).addClass('active');
            $(progressTabs).removeClass('show active');
            $(progressTabs[progressTabsIndex]).addClass('show active');
        }
    });

}

// Brand Settings Section
{
    // service options when allowbooking is clicked
    
    $('#s03').on('change', function(e){
        let { target } = e;
        if(target.checked){
            $('.allow-booking').show()
        }else{
            $('.allow-booking').hide()
        }
    })
    
    // counter forMaxNumber of Guest
    let countMaxGuest = parseInt($('#max-guest').attr('value'));
    
    $('.controller.dec').on('click', function(e){
        if (countMaxGuest > 0){
            countMaxGuest -= 1;
            $('#max-guest').attr('value', countMaxGuest);
        }
    });
    $('.controller.inc').on('click', function(e){
        countMaxGuest += 1;
        $('#max-guest').attr('value', countMaxGuest);
    });

}

// Brand Settings Section
{
    // Upload File Input

    $('.file-upload-input').each(function(){
        $(this).on('change', function(e){

            if(e.target.value){
                let targetEle = e.target;
                let uploadFileEle = $(this).siblings('.file-upload').find('.input-file');
                let closeEle = $(this).siblings('.file-upload').find('.empty-file');

                if (!uploadFileEle.hasClass('active')) {
                    uploadFileEle.addClass('active');
                }

                closeEle.on('click', function(){
                    targetEle.value = '';
                    uploadFileEle.removeClass('active');
                })
            }

        })
    })

}

// Brand Settings Section
{
    // Slider Input
    const slider = document.getElementById('myRange');
    const sliderValue = document.getElementById('sliderValue');

    const updateSliderValue = () => {
        const value = slider.value;
        const max = slider.max;
        const min = slider.min;

        // Calculate the position of the value on the slider
        const percentage = (value - min) / (max - min) * 100;
        sliderValue.style.left = `calc(${percentage}% + (${8 - percentage * 0.15}px))`; // Adjust the positioning formula if needed

        sliderValue.textContent = value;
    };

    slider.addEventListener('input', updateSliderValue);
    updateSliderValue();
}

// Working Hours Section
{
    // Show/Hide time picker for Working Hours Section
    $('.day-view').each(function(){
        $(this).on('change',function(e){
            let { target } = e;
            let timeViewId = '#' + $(this).data('id');
            if(target.checked){
                $(timeViewId).css('display', 'flex');
            }else{
                $(timeViewId).hide();
            }
        })
    })
    
    // Alternative Working Hours
    $('#altInputChkbx').on('change', function(e){
        let { target } = e;
        if(target.checked){
            $('.alt-wh').css('display', 'flex');
        }else{
            $('.alt-wh').hide();
        }
    })


    $('#dropdownSearch').on('focus', function() {
      $(this).parent('.search-area').siblings('.dropdown-menu').addClass('show');
    });

    $('#dropdownSearch').on('blur', function() {
      setTimeout(() => {
        $(this).parent('.search-area').siblings('.dropdown-menu').removeClass('show');
      }, 200);
    });

}

// To open the extended window
$('#addWindow').on('click', function(e){
    $('#mainWindow').hide();
    
    let pgId = $(this).attr('page-id');
    let selector = '#' + pgId;
    $(selector).show();
})

$('#backBtn').on('click', function(e){
    $(this).closest('.main-container').hide();
    $('#mainWindow').show();
})

// Phone Number Input Init
{
    const inputpH = document.querySelector("#phoneNumber");
    const itipH = window.intlTelInput(inputpH, {
      initialCountry: "af",
      formatOnDisplay: true,
      nationalMode: false,
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js",
    });
    
    const initialCountryCodepH = '+' + itipH.getSelectedCountryData().dialCode;
    $('#phone').val(initialCountryCode); 

    inputpH.addEventListener('countrychange', function() {
        const countryCode = '+' + itipH.getSelectedCountryData().dialCode;
        $('#phone').val(countryCode);
    });

    // Sanitizing the input value, for no spaces
    inputpH.addEventListener('input', function() {
        var value = this.value;
        var sanitizedValue = value.replace(/\D/g, '');
        this.value = '+' + sanitizedValue;
    });

}