<!doctype html>
<html lang="ar" dir="rtl">

<head>
    @include('Frontend.layouts.head')
    @section('front_title', 'LandPage_3')
    {{-- <title>LandPage_2</title> --}}
</head>

<body style="background-color: var(--primaryColor); margin-top: 20px">
    <div class="text-top mt-5">
        <div class="container">
            <h2 style="line-height: 1.5" class="text-white  text-center">
                النجاح في مواقع التواصل يحتاج الى خطة
            </h2>
            <h2 style="line-height: 1.5" class="text-white  text-center">
                احصل على خطة محتوى للشهر .... مقابل 0 فقط
            </h2>
        </div>
    </div>
    <div class="iframe my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content d-flex align-items-center justify-content-center">
                        <iframe class="d-flex align-items-center justify-content-center" width="100%" height="400"
                            src="https://www.youtube.com/embed/b2q5yBL4XYI?si=RLHs2LCXE8_e77It"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="info d-flex align-items-center justify-content-center">
                        <div class="text text-center mt-3">
                            <p class="text-center" style="font-size: 18px">
                                استثمر في مشروعك مقابل 4 فقط
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start company -->
    <div class="partner-area style-2">
        <div class="container">
            <h1 class="text-center pb-4 text-white">شركاء النجاح</h1>
            <div class="partner-slider-info" data-cue="slideInUp">
                <div class="partner-slider owl-carousel owl-theme">
                    @foreach ($companies as $company)
                        <div class="single-partner-logo">
                            <img src="{{ asset($company->image) }}" alt="partner-2">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End company -->


    <div class="problems mt-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-white mb-3">هل تعاني من المشاكل </h2>
            </div>
            <div class="row ">
                <div class="col-lg-6 mt-3">
                    <div class="image">
                        <img src="{{ asset('assets/frontend/assets/images/Me_1.jpg') }}"
                            style="width: 100%; max-width: 100%; height: 400px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <ul
                        style="background-color: #ddd;width: 100%; padding: 20px; text-align: right; list-style: none; border-radius: 8px;">
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-center text-white mt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, repellat, unde? A, esse eum eveniet
                fugit
                molestiae placeat praesentium repellendus? Beatae consectetur dolor eaque molestias nihil porro quidem
                vel
                voluptatem!
            </p>
        </div>
    </div>
    <div class="features mt-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-white mb-3">عندما اشتراكك في الكورس ستستفيد التالي :</h2>
            </div>
            <div class="row ">
                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <ul
                        style="background-color: #ddd;width: 100%; padding: 20px; text-align: right; list-style: none; border-radius: 8px;">
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="image">
                        <img src="{{ asset('assets/frontend/assets/images/Me_1.jpg') }}"
                            style="width: 100%; max-width: 100%; height: 400px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Testimonial Area -->
    <div class="testimonial-area pt-100 pb-75">
        <div class="container">
            <div class="section-title text-center" data-cue="slideInUp">
                <h2 class="text-white">اراء العملاء في الخدمات</h2>
            </div>
            <div class="testimonial-slider-info" data-cue="slideInUp">
                <div class="testimonial-slider owl-carousel owl-theme">
                    @foreach ($testimonials as $testimonial)
                        <div class="single-testimonial-card">
                            <div class="testimonial-user d-flex align-items-center justify-content-between">
                                <div class="user d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{ asset($testimonial->image) }}" alt="testimonial-image">
                                    </div>
                                    <div class="content">
                                        <h3>{{ $testimonial->name }}</h3>
                                        <span>{{ $testimonial->nickname }}</span>
                                    </div>
                                </div>
                                <div class="star-icon">
                                    <ul class="list-unstyled ps-0 mb-0">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p style="color: var(--primaryColor)">
                                “{{ $testimonial->description }}“
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->


    <div class="problems mt-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-white mb-3">احد العملاء لنا </h2>
            </div>
            <div class="row ">
                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <ul
                        style="background-color: #ddd;width: 100%; padding: 20px; text-align: right; list-style: none; border-radius: 8px;">
                        <li class="d-flex align-items-center  justify-content-center">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center text-center d-block "
                                style="list-style: none; font-size: 25px;">
                                قبل
                            </a>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger"
                                style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger"
                                style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger"
                                style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <ul
                        style="background-color: #ddd;width: 100%; padding: 20px; text-align: right; list-style: none; border-radius: 8px;">
                        <li class="d-flex align-items-center  justify-content-center">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center text-center d-block "
                                style="list-style: none; font-size: 25px;">
                                بعد
                            </a>
                        </li>


                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- Contact Form --}}
    <div style="background-color: var(--primaryColor)" class="contact-form-area pb-75">
        <div class="container">
            <div class="section-title text-center" data-cue="slideInUp">
                <h2 class="text-white">تواصل معنا</h2>
            </div>
            <div class="contact-form-info" data-cue="slideInUp">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <form action="{{ route('orders') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control" placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control" placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" value="{{ old('phone') }}" name="phone"
                                    class="form-control" placeholder="phone">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" value="{{ old('subject') }}" name="subject"
                                    class="form-control" placeholder="subject">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea" value="{{ old('message') }}" name="message"
                            placeholder="Enter Your Comments" rows="3"></textarea>
                    </div>
                    <button class="btn-primary" type="submit">Send A Message</button>
                </form>
            </div>
        </div>
    </div>

    <div class="pb-5">
        <div class="container">
            <div class="section-title text-center" data-cue="slideInUp">
                <h2 class="text-white"> اخلاء مسوولية </h2>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <p class="text-white text-center" style="line-height: 2">
                        إخلاء المسؤولية: قد لا تكون النتائج نموذجية أو متوقعة لكل شخص ، ولا أقصد ان اعدك بانك ستكرر نفس
                        النتاذج (أو اي شيئ من هذا القبيل) .لدي ميزة الحصول على الكثير من التدريب والتجربة والخطأ لسنوات.
                        نحن
                        لا نقدم أي ضمانات للإيرادات مع دوراتنا أو خدماتنا. يرجى ملاحظة أن جميع النتائج الخاصة بك تستند
                        إلى
                        جهدك وتفانيك لما يتم تدريسه في دوراتنا وعوامل أخرى كثيرة. نحن لا نتعاون مع فيسبوك بأي شكل من
                        الأشكال. تستند جميع المعلومات الواردة في هذا الموقع على أفضل الممارسات ولأغراض تعليمية فقط.
                    </p>
                    <p class="text-white text-center" style="line-height: 2">
                        Disclaimer: Results may not be typical nor expected for every person, I’m not implying you’ll
                        duplicate them (or do anything for that matter).I have the benefit of having gone through much
                        training, trial, and error for years. We do not make any guarantees for revenue with our courses
                        or
                        services . Please note that all your results are based on your effort and dedication to what is
                        taught in our courses and many other factors. We are not affiliated with Facebook™ in any way.
                        All
                        information provided on this website is based on best practices and for educational-purposes
                        only.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Js Files -->
    @include('Frontend.layouts.scripts')
</body>

</html>
