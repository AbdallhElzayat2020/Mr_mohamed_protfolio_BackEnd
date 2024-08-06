<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Profile Page</title>
    <!-- Favicon -->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{asset('assets/frontend/assets/profile_assets/images/favicon.png')}}"
    />
    <!-- Bootstrap core CSS -->
    <link
        href="{{asset('assets/frontend/assets/profile_assets/css/bootstrap.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <!--Custom CSS-->

    <link
        href="{{asset('assets/frontend/assets/profile_assets/css/style.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <!--Plugin CSS-->
    <link
        href="{{asset('assets/frontend/assets/profile_assets/css/plugin.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <!--dashboard CSS-->
    <link
        href="{{asset('assets/frontend/assets/profile_assets/css/dashboard.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <!--Flaticons CSS-->
    <link
        href="{{asset('assets/frontend/assets/profile_assets/fonts/flaticon.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <!--Font Awesome-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css"/>

    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/bootstrap.rtl.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/scrollCue.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/remixicon.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/meanmenu.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/odometer.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/magnific.popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/responsive.css')}}"/>

    <!--    home files-->
</head>
<body dir="rtl">
<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->

<!-- Dashboard -->
<div
    style="background-color: var(--primaryColor);height: 100vh;"
    id="dashboard"
    class="pt-10 pb-10"
>
    <div class="container">
        <div class="dashboard-main">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard-sidebar">
                        <div class="profile-sec">
                            <div
                                style="background-color: var(--secondaryColor)"
                                class="author-news mb-3"
                            >
                                <div class="author-news-content text-center p-4 py-5">
                                    <div class="author-content pt-2 p-0">
                                        <h5 class="mb-1 white">
                                            <a href="#" class="white">اهلا {{auth()->user()->name}}</a>
                                        </h5>
                                        <p class="detail white"> {{auth()->user()->email}}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-nav">
                            <div class="dashboard-nav-inner">
                                <ul>
                                    <li>
                                        <a class="text-decoration-none" href="#"> الكورسات </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard-content">
                        <div class="row align-items-center">
                            <!-- Item -->
                            <div class="col-lg-4 col-md-12 col-xs-12">
                                <div class="dashboard-stat mb-4">
                                    <div class="dashboard-stat-content">
                                        <h2
                                            style="color: var(--primaryColor) !important"
                                            class="theme2 mb-0"
                                        >
                                            16
                                        </h2>
                                        <span>Active Listings</span>
                                    </div>
                                    <div class="dashboard-stat-item">
                                        <p style="color: var(--primaryColor) !important">
                                            Someone bookmarked your listing!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard / End -->

<!-- *Scripts* -->
<!--home files-->

<script src="{{asset('assets/frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/meanmenu.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/scrollCue.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/jquery.magnific.popup.js')}}"></script>
<script src="{{asset('assets/frontend/assets/js/custom.js')}}"></script>
<!--home files-->

<script src="{{asset('assets/frontend/assets/profile_assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/profile_assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/profile_assets/js/plugin.js')}}"></script>
<script src="{{asset('assets/frontend/assets/profile_assets/js/main.js')}}"></script>
<script src="{{asset('assets/frontend/assets/profile_assets/js/custom-nav.js')}}"></script>
<script src="{{asset('assets/frontend/assets/profile_assets/js/jpanelmenu.min.js')}}"></script>
<script src="{{asset('assets/frontend/assets/profile_assets/js/dashboard-custom.js')}}"></script>
</body>
</html>
