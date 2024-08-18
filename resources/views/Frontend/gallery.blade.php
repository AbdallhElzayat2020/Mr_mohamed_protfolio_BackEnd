@extends('Frontend.layouts.master')

@section('front_title', 'Gallery Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->

<!-- Start Blog Area -->
<div style="background-color: var(--primaryColor)" class="blog-area pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">معرض الاعمال</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
            @foreach($galleries as $key=> $gallery)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-card style-3 blog-style">
                        <div class="image">
                            <a href="{{route('gallery-details',$gallery->id)}}">
                                <img style="height: 300px!important; width: 100%; max-width: 100%"
                                     src="{{asset($gallery->image)}}" alt="blog-image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a class="text-decoration-none"
                                   href="{{route('gallery-details',$gallery->id)}}">
                                    {{ \Illuminate\Support\Str::limit($gallery->name, 20, '.......') }}
                                </a>
                            </h3>
                            <p>
                                {{ \Illuminate\Support\Str::limit($gallery->description, 50, '......') }}
                            </p>
                            <a class="read-more text-white text-decoration-none"
                               href="{{route('gallery-details',$gallery->id)}}">
                                Read More
                                <i class="ri-arrow-right-line text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center align-items-center">
            {{$galleries->links()}}
        </div>
    </div>
</div>
<!-- End Blog Area -->

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
