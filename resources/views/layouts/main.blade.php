<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
     @vite('resources/css/bootstrap/bootstrap.min.css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/style/css/style.css') }}">
    @yield('styles')
</head>
<body>
    <div class="main-container" style="background: #fff;">
        <div class="sidebar-container">
            @include('layouts.main')
        </div>
        <div class="content-container">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
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
    </script>
    @yield('scripts')
</body>
</html>
