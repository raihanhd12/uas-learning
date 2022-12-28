<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Blog;
use App\Models\User;
use App\Models\Instructor;

class AboutUsController extends Controller
{
    //
    public function index(){
        return view('help/aboutus',[
            "title" => "About Us",
            "active" => "aboutus",

            "allcourse" => Course::All(),
            "allinstructor" => Instructor::All(),            
            "allblog" => Blog::All(),
            "alluser" => User::All()              
        ]);
    }
}
