@extends('Frontend.layouts.master')

@section('front_title', 'Team Page')

<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->


<!-- Start Team Area -->
<div style="background-color: var(--primaryColor)" class="team-area pages-style pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">فريق العمل</h2>
        </div>
        <div class="row" data-cues="fadeIn">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card team-style">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-5.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none text-white" href="#">Paula Vines</a>
                    </h3>
                    <p>CEO & Founder</p>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card team-style">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-5.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none text-white" href="#">Paula Vines</a>
                    </h3>
                    <p>CEO & Founder</p>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card team-style">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-5.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none text-white" href="#">Paula Vines</a>
                    </h3>
                    <p>CEO & Founder</p>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card team-style">
                    <div class="image">
                        <a class="text-decoration-none" href="#">
                            <img src="{{asset('assets/frontend/assets/images/team/team-5.jpg')}}" alt="team-image">
                        </a>
                    </div>
                    <h3>
                        <a class="text-decoration-none text-white" href="#">Paula Vines</a>
                    </h3>
                    <p>CEO & Founder</p>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-ellipse"></div>
</div>
<!-- End Team Area -->


