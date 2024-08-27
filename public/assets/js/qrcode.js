// shape input for qr-code
$('.shape-input').each(function(){
  $(this).on('change', function(e){
    let { target } = e;
    if(target.checked){
      $('.shape-container').removeClass('active');
      $(target).closest('.shape-container').addClass('active');
    }
  })
})

// Slider Js
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