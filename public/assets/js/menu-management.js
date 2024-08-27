
VirtualSelect.init({
    ele: '#status-filter',
    maxWidth: '240px',
    multiple: true,
    search: true,
    searchGroup: false, 
  });
  VirtualSelect.init({
    ele: '#service-type-filter',
    maxWidth: '240px',
    multiple: true,
    search: true,
    searchGroup: false, 
  });
  VirtualSelect.init({
    ele: '#supplier-filter',
    maxWidth: '240px',
    multiple: true,
    search: true,
    searchGroup: false, 
  });
  VirtualSelect.init({
    ele: '#discount-type-filter',
    maxWidth: '240px',
    multiple: true,
    search: true,
    searchGroup: false, 
  });
  VirtualSelect.init({
    ele: '#category-filter',
    maxWidth: '240px',
    multiple: true,
    search: true,
    searchGroup: false, 
  });

$('.addWindow').on('click', function(e){
    $('#mainWindow').hide();
    
    let pgId = $(this).attr('page-id');
    console.log(pgId);
    let selector = '#' + pgId;
    $(selector).show();
});

$('.backBtn').on('click', function(e){
    $(this).closest('.main-container').hide();
    $('#mainWindow').show();
});


$(document).ready(function() {
    $('.r-btn input').change(function() {
        if ($(this).is(':checked')) {
            $(this).parent().next().addClass('has-border');
        } else {
            $(this).parent().next().removeClass('has-border');
        }
    });
});

$('.file-upload-input').each(function(){
    $(this).on('change', function(e){
        console.log(e.target.value);
        if(e.target.value){
            let targetEle = e.target;
            let uploadFileEle = $(this).prev('.file-upload').find('.input-file');
            let closeEle = $(this).prev('.file-upload').find('.empty-file');

            if (!uploadFileEle.hasClass('active')) {
                uploadFileEle.addClass('active');
            }

            closeEle.on('click', function(){
                targetEle.value = '';
                uploadFileEle.removeClass('active');
            })
        }
    })
});



// Color Picker
const colourPickerFields = document.querySelectorAll('.colour-picker-field');

colourPickerFields.forEach(item => {
  const text = item.querySelector('.colour-picker-field__item--text');
  const picker = item.querySelector('.colour-picker-field__item--picker');
  const colorShow = item.querySelector('.circle');

  function handleSetColours(item1 = text, item2 = picker) {
    let colour = item1.value;
    item2.value = colour;
    colorShow.style.backgroundColor = `${colour}`;
  }

  if (text.value) {
    handleSetColours();
  }
  text.addEventListener('change', (e) => {
    handleSetColours();
  });
  picker.addEventListener('input', (e) => {
    handleSetColours(picker, text);
  });
})

// Select DropDown
$('.form-select').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent(),
    });
});
$('.form-select-multiple').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent(),
        placeholder: {
          id: -1,
          text: $(this).data('placeholder'),
        }
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


$(function() {
    $('.timePicker').daterangepicker({
             timePicker : true,
             singleDatePicker:true,
             timePicker24Hour : true,
             timePickerIncrement : 1,
             timePickerSeconds : true,
             locale : {
                 format : 'HH:mm'
             },
            "parentEl": "custom-date-range-picker",
            "opens": "left",
            "buttonClasses": "btn",
            "applyButtonClasses": "date-apply-btn",
            "cancelClass": "date-cancel-btn"
         }).on('show.daterangepicker', function(ev, picker) {
             picker.container.find(".calendar-table").hide();
    });
 })
 

 $(document).ready(function() {
    let counter = 1; 

    $('.add-modifieroption-btn').click(function() {
        counter++; 
        var inputMainGroup = $('<div class="form-item add-modifieroption"></div>');
        var inputLabel = $('<label class="form-label" for="">Options #1</label>').text('Options #' + counter);
        var inputGroup = $('<div class="add-modifieroption-flex d-flex"></div>').attr('id', 'modifier-iption-' + counter);
        var input = $('<input type="text" name="add-modifieroption" placeholder="Size">').attr('id', 'input-' + counter);
        var deleteButton = $('<button class="remove-modifieroption-btn style-n"> <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"> <rect width="48" height="48" rx="24" fill="black" fill-opacity="0.1"/> <path d="M20.3077 32.4997C19.8026 32.4997 19.375 32.3247 19.025 31.9747C18.675 31.6247 18.5 31.1972 18.5 30.692V19.9998H29.5V30.692C29.5 31.1972 29.325 31.6247 28.975 31.9747C28.625 32.3247 28.1974 32.4997 27.6923 32.4997H20.3077Z" fill="black"/> <path d="M18.5 17.9998H17.5V16.4998H21V15.6152H27V16.4998H30.5V17.9998C30.5 17.9998 29.9999 17.9999 29.5 17.9998C29 17.9998 18.5 17.9998 18.5 17.9998Z" fill="black"/> </svg> </button>');
        deleteButton.click(function() {
            inputMainGroup.remove();
        });
        inputMainGroup.append(inputLabel);
        inputMainGroup.append(inputGroup);
        inputGroup.append(input);
        inputGroup.append(deleteButton);
        $('.add-modifieroption-area').prepend(inputMainGroup);
    });
});



$(document).on("click", ".add-combo-item button", function(event) {
    $('.combo-product-box').removeAttr("style");
});

$(document).ready(function() {
    $('.itemcheckbox').change(function() {
        var checkedCount = $('.itemcheckbox:checked').length;
        if (checkedCount > 1) {
            $('.multipleedit-options').show();
        } else {
            $('.multipleedit-options').hide();
        }
    });
});
$(document).on("click", ".bulk-edit-close-btn", function(event) {
    $('.multipleedit-options').hide();
});


$(document).ready(function() {
    $('.smodifier-item[data-id]').change(function() {
        var dataId = $(this).data('id');
        var targetDiv = $('#' + dataId);
        if ($(this).is(':checked')) {
            targetDiv.addClass("active");
        } else {
            targetDiv.removeClass("active");
        }
    });
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

document.querySelector('.number-input-modal .decrement').addEventListener('click', function() {
    const numberInput = document.getElementById('modal-number');
    const currentValue = parseInt(numberInput.value);
    if (currentValue > 0) {
        numberInput.value = currentValue - 1;
    }
});

document.querySelector('.number-input-modal .increment').addEventListener('click', function() {
    const numberInput = document.getElementById('modal-number');
    numberInput.value = parseInt(numberInput.value) + 1;
});



$('.multi-select').each(function() {
    $(this).select2({
    multiple: true,
        dropdownParent: $(this).parent(),
        placeholder: {
          id: -1,
          text: $(this).data('placeholder'),
        }
    });
});

$(document).ready(function() {
    $('.supplier-add-detail').change(function() {
        var selectedOption = $(this).val();
        console.log(selectedOption);
        var optionDiv = $('.item-with-stock-sub-fields');
        if (selectedOption == 'item-with-stock') {
            optionDiv.addClass("active-iws");
        } else {
            optionDiv.removeClass("active-iws");
        }
    });
});
