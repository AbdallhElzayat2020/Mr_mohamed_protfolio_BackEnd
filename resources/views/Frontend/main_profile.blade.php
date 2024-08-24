@extends('Frontend.layouts.master')

@section('front_title', 'My Courses')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->
<div class="profile-area my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h2>كورساتي</h2>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/frontend/assets/images/Me_1.jpg')}}" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="text-black">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of the card's content.</p>
                                <a href="{{route('courses-details')}}" class="btn btn-primary">200$ Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/frontend/assets/images/Me_1.jpg')}}" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="text-black">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of the card's content.</p>
                                <a href="{{route('courses-details')}}" class="btn btn-primary">200$ Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/frontend/assets/images/Me_1.jpg')}}" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="text-black">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of the card's content.</p>
                                <a href="{{route('courses-details')}}" class="btn btn-primary">200$ Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/frontend/assets/images/Me_1.jpg')}}" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="text-black">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of the card's content.</p>
                                <a href="{{route('courses-details')}}" class="btn btn-primary">200$ Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
