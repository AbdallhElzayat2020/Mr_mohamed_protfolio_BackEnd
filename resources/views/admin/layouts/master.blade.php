<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('admin.layouts.navbar')
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        @yield('content')
        @include('admin.layouts.footer')
    </div>
</div>

<!-- General JS Scripts -->

</body>
</html>
