<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseUserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('courseuser.index', [
            "title" => "My Courses",  
            'courseusers' => CourseUser::where('user_id', auth()->user()->id)->get()
            // 'courseusers' => CourseUser::where('user_id', auth()->user()->id)->paginate(4)
            
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


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function show(CourseUser $courseUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseUser $courseUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseUser $courseUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseUser $courseUser)
    {
        //        
        CourseUser::destroy($courseUser->id);
        return redirect('/course_user')->with('delete', 'Course has been deleted!');
    }
}

