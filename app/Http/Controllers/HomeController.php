<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Instructor;
use App\Models\Blog;
use App\Models\User;


class HomeController extends Controller
{
    //
    public function index(){
        return view('home',[
            "title" => "Home",
            "active" => "home",
            "courses" => Course::latest()->paginate(3),
            "instructors" => Instructor::latest()->paginate(3),            
            "blogs" => Blog::latest()->paginate(3), 
            "categories" =>CourseCategory::All(),            
            
            "allcourse" => Course::All(),
            "allinstructor" => Instructor::All(),            
            "allblog" => Blog::All(),
            "alluser" => User::All()     
        ]);
    }
}
