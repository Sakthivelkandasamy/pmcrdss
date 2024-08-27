{
    // Toggle Password
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

    // Checkbox
    $('#checkRef').on('change', function() {
        $('.remb-me .custom-check').removeClass('active');
        if ($(this).is(':checked')) {
            $('.remb-me .custom-check').addClass('active');
        }
    })

    // Select DropDown
    $('.select').select2({
        width: 'auto',
        dropdownParent: $('.select-parent'),
        sorter: data => data.sort((a, b) => a.text.localeCompare(b.text))
    });

    $('.select').on('select2:open', function() {
        $('input.select2-search__field').attr('placeholder', 'Search...');
    });

}
