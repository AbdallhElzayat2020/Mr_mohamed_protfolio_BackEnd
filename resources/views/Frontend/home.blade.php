@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')



<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->
<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <div class="title">
                        <h5 class="text-white">شريكك نحو التطور</h5>
                        <h1>الاسم هيبقي هنا كدا</h1>
                        <p>هنا هيبقي نبذة بسيطة كدا سطرين ولا حاجة اقل شئ</p>
                    </div>
                    <div class="banner-button d-flex align-items-center">
                        <a class="demo text-decoration-none" href="contact.html">اعمالي</a>
                        <div style="border: 1px solid var(--whiteColor); border-radius: 6px; padding: 5px 10px "
                            class="play-btn d-flex align-items-center">
                            <a href="#" class="text-decoration-none popup-youtube icon">
                                <i class="ri-play-mini-fill"></i>
                            </a>
                            <a class="text-decoration-none land-btn popup-youtube" href="#">
                                مشاهدة كورساتي
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-image">
                    <img src="{{ asset('assets/frontend/assets/images/Me_1.jpg') }}" alt="about-image">
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <div class="shape-2">
            <img src="{{ asset('assets/frontend/assets/images/shape/shape-2.png') }}" alt="shape">
        </div>
    </div>
</div>
<!-- End Banner Area -->

<!-- Start Partner Area -->
<div class="partner-area style-2 pb-75">
    <div class="container">
        <h1 class="text-center pb-2 text-white">شرركاء النجاح</h1>
        <div class="partner-slider-info" data-cue="slideInUp">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
                <div class="single-partner-logo">
                    <img src="{{ asset('assets/frontend/assets/images/partner/partner-6.png') }}" alt="partner-2">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start About Area -->
<div class="about-area pt-100 pb-75">
    <div class="container">
        <div class="row align-items-center" data-cue="slideInUp">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/frontend/assets/images/about/about-7.png') }}" alt="about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content about-style">
                    <div class="title">
                        <span class="d-block">نبذة عني</span>
                        <h2 class="text-white">الاسم هنا ثلاثس</h2>
                        <p class="text-white">نبذة بسيطة هنا لا تزيد عن سطرين ايضا</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="about-item">
                                <div class="point text-white">
                                    4.7+
                                </div>
                                <h3 class="text-white">اراء العملاء</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="about-item">
                                <div class="point text-white">
                                    4K+
                                </div>
                                <h3 class="text-white">المشاريع المكتملة</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="about-item">
                                <div class="point text-white">
                                    4K+
                                </div>
                                <h3 class="text-white">عملاء من مختلف العالم</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                    </div>
                    <a class="demo text-decoration-none" href="contact.html">تواصل معي</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->


<!-- Start Counter Area -->
<div class="counter-area  style-2">
    <div class="container">
        <div class="row" data-cues="fadeIn">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">36</span>+
                    </h2>
                    <p>سنين الخبرة</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">645</span>+
                    </h2>
                    <p>العملاء المرضيين</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">100</span>%
                    </h2>
                    <p>نسبة رضا العملاء</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">35</span>

                    </h2>
                    <p>الدول التي عملت بها</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter Area -->


<!-- Start Testimonial Area -->
<div class="testimonial-area pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">اراء عملاءنا</h2>
        </div>
        <div class="testimonial-slider-info" data-cue="slideInUp">
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Pamela Downs</h3>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Larry Shoemaker</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Pamela Downs</h3>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Larry Shoemaker</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Pamela Downs</h3>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Larry Shoemaker</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Pamela Downs</h3>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg') }}"
                                    alt="testimonial-image">
                            </div>
                            <div class="content">
                                <h3>Larry Shoemaker</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                        <div class="star-icon">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-line"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's
                        safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Area -->


<!-- Start Courses Area -->
<div class="blog-area pb-75 style-2">
    <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
            <span class="d-block pt-3">Our Courses</span>
            <h2>Latest Courses & Articles</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-2">
                    <div class="image">
                        <a href="gallery-details.html">
                            <img src="{{ asset('assets/frontend/assets/images/blog/blog-1.jpg') }}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled ps-0 list">
                            <li class="d-inline-block">
                                <i class="ri-user-line"></i>
                                By <a class="text-decoration-none" href="author.html">Admin</a>
                            </li>
                            <li class="d-inline-block">
                                <i class="ri-calendar-2-line"></i>
                                November 6, 2024
                            </li>
                        </ul>
                        <h3>
                            <a class="text-decoration-none" href="gallery-details.html">Ensuring Data Security
                                Amid
                                Office
                                Transitions The Emerging Trend of 2024.</a>
                        </h3>
                        <a class="read-more text-decoration-none" href="gallery-details.html">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-2">
                    <div class="image">
                        <a href="gallery-details.html">
                            <img src="{{ asset('assets/frontend/assets/images/blog/blog-1.jpg') }}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled ps-0 list">
                            <li class="d-inline-block">
                                <i class="ri-user-line"></i>
                                By <a class="text-decoration-none" href="author.html">Admin</a>
                            </li>
                            <li class="d-inline-block">
                                <i class="ri-calendar-2-line"></i>
                                November 8, 2024
                            </li>
                        </ul>
                        <h3>
                            <a class="text-decoration-none" href="gallery-details.html">Navigating the Impact of
                                Blockchain
                                Technology in the Logistics Sector.</a>
                        </h3>
                        <a class="read-more text-decoration-none" href="gallery-details.html">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-2">
                    <div class="image">
                        <a href="gallery-details.html">
                            <img src="{{ asset('assets/frontend/assets/images/blog/blog-1.jpg') }}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled ps-0 list">
                            <li class="d-inline-block">
                                <i class="ri-user-line"></i>
                                By <a class="text-decoration-none" href="author.html">Admin</a>
                            </li>
                            <li class="d-inline-block">
                                <i class="ri-calendar-2-line"></i>
                                November 6, 2024
                            </li>
                        </ul>
                        <h3>
                            <a class="text-decoration-none" href="gallery-details.html">Securing the Future: How
                                AI
                                Redefines Customer Workload Protection.</a>
                        </h3>
                        <a class="read-more text-decoration-none" href="gallery-details.html">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Courses Area -->

<!-- Start Contact Area -->
<div style="background-color: var(--primaryColor)" class="contact-area pages-style pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center" data-cues="fadeIn">
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-card text-center">
                    <div class="icon">
                        <i class="ri-map-pin-line text-white"></i>
                    </div>
                    <h3 class="text-white">Our Address:</h3>
                    <p class="text-white">521684 Majadra Street Victoria Road, New York.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-card text-center">
                    <div class="icon">
                        <i class="ri-phone-line text-white"></i>
                    </div>
                    <h3 class="text-white">Contact Info:</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a class="text-decoration-none text-white" href="tel:52367388264">+523 6738 8264</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white" href="tel:52234527986">+522 3452 7986</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-card text-center">
                    <div class="icon">
                        <i class="ri-mail-open-line text-white"></i>
                    </div>
                    <h3 class="text-white">Email:</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a class="text-decoration-none text-white"
                                href="mailto:support@gmail.com">support@gmail.com</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white" href="mailto:info@email.com">info@email.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: var(--primaryColor)" class="contact-form-area pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">تواصل معنا</h2>
        </div>
        <div class="contact-form-info" data-cue="slideInUp">
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control textarea" placeholder="Enter Your Comments" rows="3"></textarea>
                </div>
                <button class="btn-primary" type="submit">Send A Message</button>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->
