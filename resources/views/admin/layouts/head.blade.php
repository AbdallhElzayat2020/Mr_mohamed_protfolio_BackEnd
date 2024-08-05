<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title_dashboard')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/admin_dashboard/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin_dashboard/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/admin_dashboard/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/admin_dashboard/assets/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/admin_dashboard/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin_dashboard/assets/modules/summernote/summernote-bs4.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin_dashboard/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin_dashboard/assets/css/components.css')}}">
    @stack('css')
</head>
