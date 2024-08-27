<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/theme/dracula.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style/css/style.css') }}">
    @yield('styles')
    @yield('top-header-styles')
</head>
<body>
    <div class="builder-container">
        @include('ui.bms.ltr.components.builder-header')
        @include('ui.bms.ltr.components.builder-sidebar')
        <div class="orderific-website-viewer">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/mode/htmlmixed/htmlmixed.min.js"></script>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
            mode: "text/html",
            theme: "dracula",
            lineNumbers: true,
            autoCloseTags: true,
            matchBrackets: true
        });
    </script>
    @yield('scripts')
    @yield('dashboard-scripts')
</body>
</html>
