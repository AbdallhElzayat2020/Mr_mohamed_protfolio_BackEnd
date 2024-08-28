<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\BannerHome;
use App\Models\Admin\Company;
use App\Models\Admin\Gallery;
use App\Models\Admin\Service;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function handleLogin(Request $request)
    {
        $request->authenticate();
//        toast(__('You have  been login successfully!'), 'success');

        return redirect()->route('admin.dashboard');
    }

    public function index()
    {
        $companies = Company::all();
        $courses = Course::paginate(6);
        $banners = BannerHome::all();
        $testimonials = Testimonial::all();
        return view('Frontend.home', compact('banners', 'companies', 'testimonials', 'courses'));
    }

    public function about()
    {
        $banners = BannerHome::all();
        $companies = Company::all();
        return view('Frontend.about', compact('banners', 'companies'));
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function courses()
    {
        $courses = Course::paginate(6);
        return view('Frontend.courses', compact('courses'));
    }

    public function courses_details($id)
    {
        $course = Course::findOrFail($id);
        return view('Frontend.courses_details', compact('course'));
    }

    public function services()
    {
//        $service = Service::findOrFail($id);

        $companies = Company::all();
        $services = Service::paginate(4);
        $testimonials = Testimonial::take(8)->get();

        return view('Frontend.services', compact('testimonials', 'companies', 'services'));
    }

    public function services_details($id)
    {
        $service = Service::findOrFail($id);

        $services = Service::paginate(4);

        return view('Frontend.services_details', compact('service', 'services'));
    }

    public function gallery()
    {
        $galleries = Gallery::paginate(6);
        return view('Frontend.gallery', compact('galleries'));
    }

    public function blogs()
    {
        $blogs = Blog::paginate(6);
        return view('Frontend.blogs', compact('blogs'));
    }

    public function blog_details($id)
    {
        $blog = Blog::findorFail($id);
        $blogs = Blog::paginate(6);
        return view('Frontend.blog_details', compact('blogs', 'blog'));
    }


    public function products()
    {
        $products = Product::paginate(6);
        return view('Frontend.products', compact('products'));
    }

    public function products_details($id)
    {
        $product=Product::findorFail($id);
        return view('Frontend.products_details',compact('product'));
    }

    public function gallery_details($id)
    {
        $gallery = Gallery::findOrFail($id);

        $galleries = Gallery::paginate(4);
        return view('Frontend.gallery_details', compact('gallery', 'galleries'));
    }

    public function team()
    {
        $team = Team::paginate(4);
        return view('Frontend.team', compact('team'));
    }

    public function profile()
    {
        return view('Frontend.main_profile');
    }


}
