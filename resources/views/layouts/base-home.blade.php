<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB Wikrama</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css') }}">
    {{-- End Bootstrap --}}

    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ url('assets/css/base-home.css') }}">
    {{-- End Custom Css --}}

    @yield('css')
</head>

<body>

    @yield('content')


    {{-- Jquery --}}
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/jvectormap.bundle.js') }}"></script>
    {{-- End Jquery --}}

    {{-- Bootstrap JS --}}
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- End Bootstrap JS --}}

    {{-- Script --}}
    @yield('js')
    {{-- End Script --}}

</body>

</html>
