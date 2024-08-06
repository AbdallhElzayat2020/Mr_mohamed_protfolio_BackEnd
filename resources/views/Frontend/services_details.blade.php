@extends('Frontend.layouts.master')

@section('front_title', 'Services Details Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->

<!-- Start Services Details Area -->
<div style="background-color: var(--primaryColor)" class="services-details-area pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="services-details-left-sidebar">
                    <div class="single-pages-widget services" data-cue="slideInUp">
                        <h3>Our Services</h3>
                        <ul class="list-unstyled ps-0 mb-0">
                            <li><a class="text-decoration-none" href="{{route('services')}}">Application Security</a>
                            </li>
                            <li><a class="text-decoration-none" href="{{route('services')}}">Infrastructure Security</a>
                            </li>
                            <li><a class="text-decoration-none" href="{{route('services')}}">Cloud-Native Security</a>
                            </li>

                        </ul>
                    </div>
                    <div class="single-pages-widget text-center questions" data-cue="slideInUp">
                        <h6>ان كان لديك اي اسالة تواصل معنا للاستفسارات</h6>
                        <a style="color: var(--primaryColor)" href="{{route('contact')}}">لطلب الخدمة</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="services-details-right-sidebar" data-cue="slideInUp">
                    <h1 class="text-white">Empowering Your Digital Landscape with Our Cybersecurity Services.</h1>
                    <div class="image" data-cue="slideInUp">
                        <img src="{{asset('assets/frontend/assets/images/services/services-5.jpg')}}"
                             alt="services-image">
                    </div>
                    <p>Cybersecurity is crucial in today's digital age, where many individuals & organizations store a
                        significant amount of sensitive data on computer & other device. This data could be financial
                        information personal information, intellectual property, or other types of data for which
                        unauthorized,
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
                <div class="processing-cards" style="margin-top: 70px">
                    <div class="row" data-cues="fadeIn">
                        <div style="margin-top: 70px" class="col-lg-6 col-md-6">
                            <div class="single-security-info service-details">
                                <div class="date">
                                    01
                                </div>
                                <h3>
                                    <a class="text-decoration-none" href="{{route('services')}}">Security
                                        Management</a>
                                </h3>
                                <p>Maintaining these security measures to safeguard digital systems and data from
                                    potential threats.</p>
                                <a class="read-more text-decoration-none" href="{{route('services')}}">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <div style="margin-top: 70px" class="col-lg-6 col-md-6">
                            <div class="single-security-info service-details">
                                <div class="date">
                                    01
                                </div>
                                <h3>
                                    <a class="text-decoration-none" href="{{route('services')}}">Security
                                        Management</a>
                                </h3>
                                <p>Maintaining these security measures to safeguard digital systems and data from
                                    potential threats.</p>
                                <a class="read-more text-decoration-none" href="{{route('services')}}">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <div style="margin-top: 70px" class="col-lg-6 col-md-6">
                            <div class="single-security-info service-details">
                                <div class="date">
                                    01
                                </div>
                                <h3>
                                    <a class="text-decoration-none" href="{{route('services')}}">Security
                                        Management</a>
                                </h3>
                                <p>Maintaining these security measures to safeguard digital systems and data from
                                    potential threats.</p>
                                <a class="read-more text-decoration-none" href="{{route('services')}}">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <div style="margin-top: 70px" class="col-lg-6 col-md-6">
                            <div class="single-security-info service-details">
                                <div class="date">
                                    01
                                </div>
                                <h3>
                                    <a class="text-decoration-none" href="{{route('services')}}">Security
                                        Management</a>
                                </h3>
                                <p>Maintaining these security measures to safeguard digital systems and data from
                                    potential threats.</p>
                                <a class="read-more text-decoration-none" href="{{route('services')}}">
                                    Read More
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->
