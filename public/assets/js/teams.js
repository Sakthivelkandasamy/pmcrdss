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

// Time picker component
//flatpickr(".timePicker", {
//    enableTime: true,
//    noCalendar: true,
//    dateFormat: "H:i",
//    time_24hr: true
//});

//$('.timePicker').on('focus', function(e){
//    $(this).siblings('.timepicker-dropdown').dropdown('show');
//})
//
//$('.timePicker').on('blur', function(e){
//    setTimeout(() => {
//        $(this).siblings('.timepicker-dropdown').dropdown('hide');
//    }, 200)
//})

// To open the extended window
$('.addWindow').on('click', function(e){
    $('#mainWindow').hide();
    
    let pgId = $(this).attr('page-id');
    let selector = '#' + pgId;
    $(selector).show();
})

$('.backBtn').on('click', function(e){
    $(this).closest('.main-container').hide();
    $('#mainWindow').show();
})

// Open Modals on Select Options Click
$('.select-btn-wrapper select').on('change',function(e){
    console.log(e.target.value)
    if(e.target.value == 'addnew'){
        let id = $(this).attr('id');
        let modalID = '#' + id + 'Modal';
        $(modalID).modal('show');
        e.target.value = '';
    }
})

// Toggle Password
function togglePassword(e) {
    const targetId = $(this).data('target');
    const passwordInput = $('#' + targetId);

    if ($(this).hasClass('fa-eye-slash')) {
        $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        passwordInput.attr('type', 'text');
    } else {
        $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        passwordInput.attr('type', 'password');
    }
};

$('.toggle-password').each(function(e){
    $(this).click(togglePassword(e));
});

// Working Schedule Component
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
}