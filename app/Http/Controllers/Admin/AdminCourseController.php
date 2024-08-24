<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'instructor_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

//        dd($request->all());
        // Create the course

        $imgPath = $this->handleFileUpload($request, 'image');
//        $imgPath = $this->handleFileUpload($request, 'image');

        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->instructor_name = $request->instructor_name;
        $course->price = $request->price;
        if ($imgPath) {
            $course->image = $imgPath;
        }
        $course->save();
        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
