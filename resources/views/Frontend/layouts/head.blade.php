    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('front_title')</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/magnific.popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/responsive.css') }}">
    @stack('css')
    {{-- <link href="assets/images/favicon.png" type="image/x-icon" rel="icon"> --}}
