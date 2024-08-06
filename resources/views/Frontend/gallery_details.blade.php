@extends('Frontend.layouts.master')

@section('front_title', 'Gallery Details Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->


<!-- Start Blog Area -->
<div style="background-color: var(--primaryColor)" class="blog-details-area pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-details-left-sidebar">
                    <div class="single-pages-widget latest-posts" data-cue="slideInUp">
                        <h3>خدمات اخري</h3>
                        <div class="post-card d-flex align-items-center">
                            <div class="image">
                                <a href="{{route('gallery')}}"><img
                                            src="{{asset('assets/frontend/assets/images/blog/blog-22.jpg')}}"
                                            alt="blog-image"></a>
                            </div>
                            <div class="content">
                                <h4>
                                    <a class="text-decoration-none" href="{{route('gallery')}}">
                                        Your Trusted Partner in Digital Security.</a>
                                </h4>
                            </div>
                        </div>
                        <div class="post-card d-flex align-items-center">
                            <div class="image">
                                <a href="{{route('gallery')}}">
                                    <img src="{{asset('assets/frontend/assets/images/blog/blog-22.jpg')}}"
                                         alt="blog-image"></a>
                            </div>
                            <div class="content">
                                <h4>
                                    <a class="text-decoration-none" href="{{route('gallery')}}">Your Trusted Partner in
                                        Digital
                                        Security.</a>
                                </h4>
                            </div>
                        </div>
                        <div class="post-card d-flex align-items-center">
                            <div class="image">
                                <a href="{{route('gallery')}}"><img
                                            src="{{asset('assets/frontend/assets/images/blog/blog-22.jpg')}}"
                                            alt="blog-image"></a>
                            </div>
                            <div class="content">
                                <h4>
                                    <a class="text-decoration-none" href="{{route('gallery')}}">Your Trusted Partner in
                                        Digital
                                        Security.</a>
                                </h4>
                            </div>
                        </div>
                        <div class="post-card d-flex align-items-center">
                            <div class="image">
                                <a href="{{route('gallery')}}"><img
                                            src="{{asset('assets/frontend/assets/images/blog/blog-22.jpg')}}"
                                            alt="blog-image"></a>
                            </div>
                            <div class="content">
                                <h4>
                                    <a class="text-decoration-none" href="{{route('gallery')}}">Your Trusted Partner in
                                        Digital
                                        Security.</a>
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-details-right-sidebar" data-cue="slideInUp">
                    <div class="blog-info" data-cue="slideInUp">
                        <h1 class="text-white">Beyond Boundaries Safeguard</h1>
                        <div class="image" data-cue="slideInUp">
                            <img src="{{asset('assets/frontend/assets/images/blog/blog-26.jpg')}}" alt="blog-image">
                        </div>
                        <p>Cybersecurity is crucial in today's digital age, where many individuals & organizations store
                            a significant amount of sensitive data on computer & other device. This data could be
                            financial information personal information, intellectual property, or other types of data
                            for which unauthorized,
                        </p>
                        <div class="row">
                            <div class="col-lg-4 my-3">
                                <img src="{{asset('assets/frontend/assets/images/service-details.webp')}}" alt="">
                            </div>
                            <div class="col-lg-4 my-3">
                                <img src="{{asset('assets/frontend/assets/images/service-details.webp')}}" alt="">
                            </div>
                            <div class="col-lg-4 my-3">
                                <img src="{{asset('assets/frontend/assets/images/service-details.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->
