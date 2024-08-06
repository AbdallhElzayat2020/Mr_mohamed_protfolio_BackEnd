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
                            <a href="index-2.html" class="nav-link active">
                                الرئيسية
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="about.html" class="nav-link">من انا</a>
                        </li>

                        <li class="nav-item">
                            <a href="services.html" class="nav-link">
                                الخدمات
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="gallery.html" class="nav-link">
                                معرض الاعمال
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="courses.html" class="nav-link ">
                                الكورسات
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="team.html" class="nav-link">
                                فريق العمل
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">تواصل معنا</a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link">الملف الشخصي</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li>
                                <a class="default-btn text-decoration-none" href="{{route('login')}}">
                                    <i class="ri-arrow-right-line"></i>
                                    سجل الان
                                </a>

                                <a class="quote d-none text-decoration-none" href="contact.html">
                                    <i class="ri-chat-quote-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</div>
