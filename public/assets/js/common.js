$('.sidebar-body').on('click', function (event) {
    event.stopPropagation();
  });
  $(document).on("click",".mobile-nav",function() {
      $('.sidebar-container').addClass("open-sidebar");
      $('body').addClass("bg-overlay");
  });
  $(document).on("click",".mobile-nav-close",function() {
      $('.sidebar-container').removeClass("open-sidebar");
      $('body').removeClass("bg-overlay");
  });
  $(document).on("click",".bg-overlay",function() {
      $('.sidebar-container').removeClass("open-sidebar");
      $('body').removeClass("bg-overlay");
  });

$(document).ready(function() {
      $('#top-brand').select2({
        dropdownParent: $('.select-top-parent-form'),
        templateResult: formatOption,
        templateSelection: formatOption,
        sorter: function(data) {
            return data.sort(function(a, b) {
                return a.text.localeCompare(b.text);
            });
        }
      });

      function formatOption(option) {
        if (!option.id) {
          return option.text;
        }
        var buttonClass =  option.id + '-btn';
        var $option = $(
          '<span>' + option.text + '</span>' +
          '<button type="button" class="top-brand-edit-btn ' + buttonClass + '"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M0 14V10.8125L10.375 0.4375C10.5278 0.284722 10.6944 0.173611 10.875 0.104167C11.0556 0.0347222 11.2431 0 11.4375 0C11.6319 0 11.8194 0.0347222 12 0.104167C12.1806 0.173611 12.3472 0.284722 12.5 0.4375L13.5625 1.5C13.7153 1.65278 13.8264 1.81944 13.8958 2C13.9653 2.18056 14 2.36806 14 2.5625C14 2.75694 13.9653 2.94444 13.8958 3.125C13.8264 3.30556 13.7153 3.47222 13.5625 3.625L3.1875 14H0ZM11.4375 3.625L12.5 2.5625L11.4375 1.5L10.375 2.5625L11.4375 3.625Z" fill="black" fill-opacity="0.4"/></svg></button>'
        );

        $option.find('button' + buttonClass).on('click', function(e) {
          e.stopPropagation();
          alert('Edit clicked for: ' + option.text);
        });

        return $option;
      }

$(document).on("click",".top-brand-form .select2-selection",function() {
    var $customButton = $('<li><button class="add-new-brand-btn btn p-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M11 13H5V11H11V5H13V11H19V13H13V19H11V13Z" fill="black"/></svg> Add New Brand</button></li>');
    $('.select2-results__options').append($customButton);
    });
});

$(document).on("click", ".search-btn", function(event) {
    event.stopPropagation(); 
    $('.search-area').addClass("open-search-box");
});
$(document).on("click", ".search-box, .search-area input", function(event) {
        event.stopPropagation();
});

$(document).on("click", function(event) {
    if (!$(event.target).closest(".search-btn").length) {
        $(".search-area").removeClass("open-search-box");
    }
});

$(document).on("click", ".notification-btn", function(event) {
    event.stopPropagation(); 
    $('.notification-area').addClass("open-notification-box");
});

$(document).on("click", function(event) {
    if (!$(event.target).closest(".notification-btn").length) {
        $(".notification-area").removeClass("open-notification-box");
    }
});

$(document).on("click", ".help-btn", function(event) {
    event.stopPropagation(); 
    $('.help-area').addClass("open-help-box");
});

$(document).on("click", function(event) {
    if (!$(event.target).closest(".help-btn").length) {
        $(".help-area").removeClass("open-help-box");
    }
});
$(document).on("click", ".profile-btn", function(event) {
    event.stopPropagation(); 
    $('.profile-section').addClass("profile-section-active");
});
$(document).on("click", ".profile-close-btn", function(event) {
    event.stopPropagation(); 
    $('.profile-section').removeClass("profile-section-active");
});

$(document).on("click", ".pnameedit-btn", function(event) {
    $('.profile-name-edit-model').addClass("pe-show");
    $('body').addClass("profile-overlay");
});
$(document).on("click", ".pphoneedit-btn", function(event) {
    $('.profile-phone-edit-model').addClass("pe-show");
    $('body').addClass("profile-overlay");
});
$(document).on("click", ".pverifypass-btn", function(event) {
    $('.profile-verify-pass-model').addClass("pe-show");
    $('body').addClass("profile-overlay");
});

$(document).on("click", ".next-step", function(event) {
    $('.profile-phone-verify-model').addClass("pe-show");
    $('.profile-phone-edit-model').removeClass("pe-show");
    $('body').addClass("profile-overlay");
});

$(document).on("click", ".pclose-btn", function(event) {
    $('.common-model').removeClass("pe-show");
    $('body').removeClass("profile-overlay");
});



const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
    initialCountry: "af",
    formatOnDisplay: true,
    nationalMode: false,
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js",
});

const initialCountryCode = '+' + iti.getSelectedCountryData().dialCode;
$('#phone').val(initialCountryCode); 

input.addEventListener('countrychange', function() {
    const countryCode = '+' + iti.getSelectedCountryData().dialCode;
    $('#phone').val(countryCode);
});
input.addEventListener('input', function() {
    var value = this.value;
    var sanitizedValue = value.replace(/\D/g, '');
    this.value = '+' + sanitizedValue;
});





document.addEventListener('DOMContentLoaded', (event) => {
    const inputs = document.querySelectorAll('.code-input');

    inputs.forEach((input, index) => {
        input.addEventListener('input', (event) => {
            input.classList.add('active');
            if (input.value.length === 1) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            } else if (input.value.length === 0 && index > 0) {
                inputs[index - 1].focus();
            }
        });

        input.addEventListener('keydown', (event) => {
            if (event.key === 'Backspace' && input.value.length === 0 && index > 0) {
                inputs[index - 1].focus();
            }
        });

        input.addEventListener('focus', () => {
            input.classList.add('active');
        });

        input.addEventListener('blur', () => {
            if (input.value.length === 0) {
                input.classList.remove('active');
            }
        });
    });
});


function togglePassword() {
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
        $(this).click(togglePassword);
    });