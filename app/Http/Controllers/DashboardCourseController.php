<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseLevel;
use App\Models\CoursePrice;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.courses.index', [
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //       
        return view('dashboard.courses.create', [
            'categories' => CourseCategory::all(),
            'course_levels' => CourseLevel::all(),
            'course_prices' => CoursePrice::all(),
            'instructors' => Instructor::all()
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'course_category_id' => 'required',
            'course_level_id' => 'required',
            'course_price_id' => 'required',
            'instructor_id' => 'required',
            'image' => 'image|file|max:1024',
            'learn' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 50, '...');
        $validatedData['excerptitle'] = Str::limit(strip_tags($request->title), 40, '...');

        Course::create($validatedData);

        return redirect('/dashboard/courses')->with('success', 'New course has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('dashboard.courses.show', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('dashboard.courses.edit', [
            'course' => $course,
            'categories' => CourseCategory::all(),
            'course_levels' => CourseLevel::all(),
            'course_prices' => CoursePrice::all(),
            'instructors' => Instructor::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'course_category_id' => 'required',
            'course_level_id' => 'required',
            'course_price_id' => 'required',
            'instructor_id' => 'required',
            'image' => 'image|file|max:1024',
            'learn' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 50, '...');
        $validatedData['excerptitle'] = Str::limit(strip_tags($request->title), 40, '...');

        Course::where('id', $course->id)
        ->update($validatedData);

        return redirect('/dashboard/courses')->with('success', 'Course has been updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        if ($course->image) {
            Storage::delete($course->image);
        }
        Course::destroy($course->id);
        return redirect('/dashboard/courses')->with('delete', 'Course has been deleted!');
    }
}
