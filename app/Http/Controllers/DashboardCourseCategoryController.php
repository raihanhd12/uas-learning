<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class DashboardCourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.coursecategories.index',[
            'categories' => CourseCategory::all()
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
        return view('dashboard.coursecategories.create');
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
            'name' => 'required|max:255'
        ]);
        CourseCategory::create($validatedData);

        return redirect('/dashboard/course_category')->with('success', 'New course category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CourseCategory $courseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCategory $courseCategory)
    {
        //
        return view('dashboard.coursecategories.edit', [
            'categories' => $courseCategory            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCategory $courseCategory)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        CourseCategory::where('id', $courseCategory->id)
            ->update($validatedData);

        return redirect('/dashboard/course_category')->with('success', 'Course Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseCategory $courseCategory)
    {
        //
        CourseCategory::destroy($courseCategory->id);
        return redirect('/dashboard/course_category')->with('delete', 'Course Category has been deleted!');
    }
}
