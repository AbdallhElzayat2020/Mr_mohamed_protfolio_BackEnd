@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')


<!-- Start Navbar Area -->
@include('Frontend.layouts.navbar')
<!-- End Navbar Area -->

<!-- Start Login Area -->
<div style="background-color: var(--primaryColor)" class="login-area ptb-100">
    <div class="container">
        <div class="login-info" data-cue="slideInUp">
            <h1 class="text-white">تسجيل الدخول </h1>
            <form>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="كلمة السر">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        تذكرني
                    </label>
                </div>
                <button class="default-btn border-0" type="submit">
                    <i class="ri-arrow-right-line"></i>
                    سجل الدخول الان
                </button>
                <p><a class="text-decoration-none " style="color: #0a001f!important"
                      href="{{ route('register') }}">انشاء حساب</a></p>
            </form>
        </div>
    </div>
</div>
<!-- End Login Area -->

