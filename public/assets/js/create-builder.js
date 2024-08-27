// Select DropDown
$('.form-select').each(function() {
  $(this).select2({
      dropdownParent: $(this).parent(),
  });
});

$('.form-select').on('select2:open', function() {
    $('input.select2-search__field').attr('placeholder', 'Search...');
});

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


// Responsiveness event

$('.tab-view').on('click', function(e){
  e.preventDefault();
  $('.tab-view').removeClass('active');
  let activeCheck = $(this).hasClass('active');
  let maxWidth = $(this).data('width');
  if(!activeCheck){
    $('#websiteContainer').css('max-width', maxWidth);
    $(this).addClass('active');
  }
})

// Pinbar event

$('.pinbar-item').on('click', function(e){
  e.preventDefault();
  $('.pinbar-item').removeClass('active');
  let activeCheck = $(this).hasClass('active');
  let contentId = "#" + $(this).data('id');
  if(!activeCheck){
    $('.contentbar-item').removeClass('active');
    $(contentId).addClass('active');
    $(this).addClass('active');
  }
})

$('.shape-input').each(function(){
  $(this).on('change', function(e){
    let { target } = e;
    if(target.checked){
      $('.shape-container').removeClass('active');
      $(target).closest('.shape-container').addClass('active');
    }
  })
})

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

document.addEventListener('DOMContentLoaded', () => {
  const sliders = document.querySelectorAll('.slider');

  sliders.forEach(slider => {
      const sliderValue = slider.nextElementSibling; // Assuming the value element is the next sibling of the slider

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
      updateSliderValue(); // Initialize the value display
  });
});