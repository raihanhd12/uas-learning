<?php

namespace App\Http\Controllers;

use App\Models\CoursePrice;
use Illuminate\Http\Request;

class DashboardCoursePriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.courseprices.index',[
            'prices' => CoursePrice::all()
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
        return view('dashboard.courseprices.create');
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
        CoursePrice::create($validatedData);

        return redirect('/dashboard/course_price')->with('success', 'New Course Price has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoursePrice  $coursePrice
     * @return \Illuminate\Http\Response
     */
    public function show(CoursePrice $coursePrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoursePrice  $coursePrice
     * @return \Illuminate\Http\Response
     */
    public function edit(CoursePrice $coursePrice)
    {
        //
        return view('dashboard.courseprices.edit', [
            'prices' => $coursePrice            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoursePrice  $coursePrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoursePrice $coursePrice)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        CoursePrice::where('id', $coursePrice->id)
            ->update($validatedData);

        return redirect('/dashboard/course_price')->with('success', 'Course Price has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoursePrice  $coursePrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoursePrice $coursePrice)
    {
        //
        CoursePrice::destroy($coursePrice->id);
        return redirect('/dashboard/course_price')->with('delete', 'Course Price has been deleted!');
    }
}
