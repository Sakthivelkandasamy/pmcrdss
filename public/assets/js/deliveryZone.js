// To open the extended window
$('.addWindow').each(function() {
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
})

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