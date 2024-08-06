@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')

<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->

<!-- Start Login Area -->
<div style="background-color: var(--primaryColor)" class="login-area ptb-100">
    <div class="container">
        <div class="login-info" data-cue="slideInUp">
            <h1 class="text-white">Register Now</h1>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your password">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="default-btn border-0" type="submit">
                    <i class="ri-arrow-right-line"></i>
                    Log In Now
                </button>
                <p>Already have an account? Please <a class="text-decoration-none" href="login.html">Login Here</a></p>
            </form>
        </div>
    </div>
</div>
<!-- End Login Area -->

