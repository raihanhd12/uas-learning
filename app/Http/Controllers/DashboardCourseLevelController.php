<?php

namespace App\Http\Controllers;

use App\Models\CourseLevel;
use Illuminate\Http\Request;

class DashboardCourseLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.courselevels.index',[
            'levels' => CourseLevel::all()
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
        return view('dashboard.courselevels.create');
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
        CourseLevel::create($validatedData);

        return redirect('/dashboard/course_level')->with('success', 'New course Level has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function show(CourseLevel $courseLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseLevel $courseLevel)
    {
        //
        return view('dashboard.courselevels.edit', [
            'levels' => $courseLevel           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseLevel $courseLevel)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        CourseLevel::where('id', $courseLevel->id)
            ->update($validatedData);

        return redirect('/dashboard/course_level')->with('success', 'Course Level has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseLevel  $courseLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseLevel $courseLevel)
    {
        //
        CourseLevel::destroy($courseLevel->id);
        return redirect('/dashboard/course_level')->with('delete', 'Course Level has been deleted!');
    }
}
