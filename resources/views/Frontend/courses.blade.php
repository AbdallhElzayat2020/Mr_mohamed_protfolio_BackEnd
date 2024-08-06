@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')


<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->
<!-- Start Blog Area -->
<div style="background-color: var(--primaryColor)" class="blog-area pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">اهم الكورسات</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-3 blog-style">
                    <div class="image">
                        <a href="{{route('courses-details')}}">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-13.jpg')}}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a class="text-decoration-none" href="{{route('courses-details')}}">Empowering Your Digital
                                Defense
                                with
                                Comprehensive Cybersecurity.</a>
                        </h3>
                        <a class="read-more text-white text-decoration-none" href="{{route('courses-details')}}">
                            Read More
                            <i class="ri-arrow-right-line text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-3 blog-style">
                    <div class="image">
                        <a href="{{route('courses-details')}}">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-13.jpg')}}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a class="text-decoration-none" href="{{route('courses-details')}}">Empowering Your Digital
                                Defense
                                with
                                Comprehensive Cybersecurity.</a>
                        </h3>
                        <a class="read-more text-white text-decoration-none" href="{{route('courses-details')}}">
                            Read More
                            <i class="ri-arrow-right-line text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-3 blog-style">
                    <div class="image">
                        <a href="{{route('courses-details')}}">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-13.jpg')}}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a class="text-decoration-none" href="{{route('courses-details')}}">Empowering Your Digital
                                Defense
                                with
                                Comprehensive Cybersecurity.</a>
                        </h3>
                        <a class="read-more text-white text-decoration-none" href="{{route('courses-details')}}">
                            Read More
                            <i class="ri-arrow-right-line text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-3 blog-style">
                    <div class="image">
                        <a href="{{route('courses-details')}}">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-13.jpg')}}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a class="text-decoration-none" href="{{route('courses-details')}}">Empowering Your Digital
                                Defense
                                with
                                Comprehensive Cybersecurity.</a>
                        </h3>
                        <a class="read-more text-white text-decoration-none" href="{{route('courses-details')}}">
                            Read More
                            <i class="ri-arrow-right-line text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-3 blog-style">
                    <div class="image">
                        <a href="{{route('courses-details')}}">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-13.jpg')}}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a class="text-decoration-none" href="{{route('courses-details')}}">Empowering Your Digital
                                Defense
                                with
                                Comprehensive Cybersecurity.</a>
                        </h3>
                        <a class="read-more text-white text-decoration-none" href="{{route('courses-details')}}">
                            Read More
                            <i class="ri-arrow-right-line text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card style-3 blog-style">
                    <div class="image">
                        <a href="{{route('courses-details')}}">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-13.jpg')}}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a class="text-decoration-none" href="{{route('courses-details')}}">Empowering Your Digital
                                Defense
                                with
                                Comprehensive Cybersecurity.</a>
                        </h3>
                        <a class="read-more text-white text-decoration-none" href="{{route('courses-details')}}">
                            Read More
                            <i class="ri-arrow-right-line text-white"></i>
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- End Blog Area -->
