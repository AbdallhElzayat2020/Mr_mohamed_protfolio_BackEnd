<div class="navbar-area fixed-top">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/frontend/assets/images/black-logo.png') }}" class="main-logo"
                             alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand me-0" href="index.html">
                    <img src="{{ asset('assets/frontend/assets/images/black-logo.png') }}" class="black-logo"
                         alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link active">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link">من انا</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services')}}" class="nav-link">الخدمات</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gallery')}}" class="nav-link">معرض الاعمال</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('courses')}}" class="nav-link">الكورسات</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('team')}}" class="nav-link">فريق العمل</a>
                        </li>
                        <li class="nav-item dropdown ">
                            @auth
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-user-line"></i> {{ Auth::user()->name }}
                                </a>
                                <ul style="width: 90px" class="dropdown-menu dropdown-menu-end text-end"
                                    aria-labelledby="userDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile') }}">الملف الشخصي</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            تسجيل الخروج
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a class="default-btn text-white text-decoration-none px-3 py-1"
                                   href="{{route('login')}}"></i> سجل الان
                                </a>
                            @endauth
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
