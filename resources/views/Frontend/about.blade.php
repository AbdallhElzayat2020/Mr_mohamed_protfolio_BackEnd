@extends('Frontend.layouts.master')

@section('front_title', 'About Page')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start About Area -->
<div class="about-area pt-100  ">
    <div class="container">
        <div class="row align-items-center" data-cue="slideInUp">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{asset('assets/frontend/assets/images/Me_1.jpg')}}" alt="about-image">
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
                    <a class="demo text-decoration-none" href="#">تواصل معي</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start Team Area -->
<div class="team-area ">
    <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
            <span class="d-block">فريق العمل</span>
            <h2>فريق عمل متميز وخبير</h2>
        </div>
        <div class="row" data-cues="fadeIn">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-1.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="#">Bonnie Acosta</a>
                    </h3>
                    <p>Lead Developer</p>
                    <div class="social-list">
                        <ul class="list-unstyled ps-0 mb-0">
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/">
                                    <i class="ri-facebook-circle-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://twitter.com/">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.pinterest.com/">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-1.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="#">Bonnie Acosta</a>
                    </h3>
                    <p>Lead Developer</p>
                    <div class="social-list">
                        <ul class="list-unstyled ps-0 mb-0">
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/">
                                    <i class="ri-facebook-circle-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://twitter.com/">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.pinterest.com/">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-1.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="#">Bonnie Acosta</a>
                    </h3>
                    <p>Lead Developer</p>
                    <div class="social-list">
                        <ul class="list-unstyled ps-0 mb-0">
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/">
                                    <i class="ri-facebook-circle-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://twitter.com/">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.pinterest.com/">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-1.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="#">Bonnie Acosta</a>
                    </h3>
                    <p>Lead Developer</p>
                    <div class="social-list">
                        <ul class="list-unstyled ps-0 mb-0">
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/">
                                    <i class="ri-facebook-circle-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://twitter.com/">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none" target="_blank" href="https://www.pinterest.com/">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-ellipse"></div>
</div>
<!-- End Team Area -->

<!-- Start Partner Area -->
<div class="partner-area style-2 pb-75">
    <div class="container">
        <h1 class="text-center py-4 text-white">شركاء النجاح</h1>
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




