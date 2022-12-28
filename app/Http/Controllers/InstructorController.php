<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Course;

class InstructorController extends Controller
{
    //
    public function index(){
        return view('instructor/instructors',[
            "title" => "Instructor",
            "active" => "instructor",
            "instructors" => Instructor::latest()->paginate(6)             
        ]);
    }
    public function show(Instructor $instructor){
        return view('/instructor/instructor',[
            "title" => "Instructor Page : $instructor->nama",
            "active" => "instructor",
            "instructor" => $instructor,
            "coba" => Course::latest()->get()
        ]);
    }
}
