@extends('Frontend.layouts.master')

@section('front_title', 'Services Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->



<!-- Start Page Title Area -->
<div class="page-title-area" style="background-color: var(--primaryColor)">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="text-white">خدماتنا بين يديكم</h1>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Security Area -->
<div class="security-area services-style" style="background-color: var(--primaryColor)">
    <div class="container-fluid">
        <div class="row" data-cue="slideInUp">
            <div class="col-lg-3 col-sm-6">
                <div class="single-security-info">
                    <div class="date">
                        01
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="{{route('services-details')}}">Security Management</a>
                    </h3>
                    <p>The Imperative of Cybersecurity in an Interconnected World.</p>
                    <a class="read-more text-decoration-none" href="{{route('services-details')}}">
                        Read More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-security-info">
                    <div class="date">
                        02
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="{{route('services-details')}}">Data Privacy</a>
                    </h3>
                    <p>The Imperative of Cybersecurity in an Interconnected World.</p>
                    <a class="read-more text-decoration-none" href="{{route('services-details')}}">
                        Read More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-security-info">
                    <div class="date">
                        03
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="{{route('services-details')}}">Network Security</a>
                    </h3>
                    <p>The Imperative of Cybersecurity in an Interconnected World.</p>
                    <a class="read-more text-decoration-none" href="{{route('services-details')}}">
                        Read More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-security-info">
                    <div class="date">
                        04
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="{{route('services-details')}}">DDOS Protection</a>
                    </h3>
                    <p>The Imperative of Cybersecurity in an Interconnected World.</p>
                    <a class="read-more text-decoration-none" href="{{route('services-details')}}">
                        Read More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Security Area -->


<!-- Start Partner Area -->
<div class="partner-area style-2 pb-75">
    <div class="container">
        <h1 class="text-center py-2 text-white">شرركاء النجاح</h1>
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
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

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
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
                        potency
                        to a service provider. Services may include security monitoring, incident
                        response, and managing security devices and systems. And how to
                        respond to security incidents."</p>
                </div>
                <div class="single-testimonial-card">
                    <div class="testimonial-user d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="{{asset('assets/frontend/assets/images/testimonial/testimonial-1.jpg')}}"
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
                    <p style="color: var(--primaryColor)">“This involves outsourcing some or all of a company's safety
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
                            <a class="text-decoration-none text-white" href="abdallhelzayata194@gmail.com">abdallhelzayata194@gmail.com</a>
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

