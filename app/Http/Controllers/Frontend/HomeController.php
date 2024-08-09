<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\BannerHome;
use App\Models\Admin\Company;
use App\Models\Admin\Gallery;
use App\Models\Admin\Service;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;
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
        $banners = BannerHome::all();
        $testimonials = Testimonial::all();
        return view('Frontend.home', compact('banners', 'companies', 'testimonials'));
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function courses()
    {
        return view('Frontend.courses');
    }

    public function courses_details()
    {
        return view('Frontend.courses_details');
    }

    public function services()
    {
//        $service = Service::findOrFail($id);

        $companies = Company::all();
        $services = Service::paginate(4);
        $testimonials = Testimonial::all();

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
        $galleries = Gallery::paginate(8);
        return view('Frontend.gallery', compact('galleries'));
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
        return view('Frontend.profile');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
