<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Lesson;
use App\Models\Section;
use App\Models\User;
use App\Models\CourseCategory;
use App\Models\CourseLevel;
use App\Models\CoursePrice;
use App\Models\Instructor;


class CourseController extends Controller
{
    //
    public function index(){
        $title = '';        
        if(request('course_category')){
            $course_category = CourseCategory::firstWhere('id', request('course_category'));
            $title = ' : Category ' . $course_category->name;
        }
        if(request('course_level')){
            $course_level = CourseLevel::firstWhere('id', request('course_level'));
            $title = ' : Level ' . $course_level->name;
        }
        if(request('course_price')){
            $course_price = CoursePrice::firstWhere('id', request('course_price'));
            $title = ' : Price ' . $course_price->name;
        }
        if(request('instructor')){
            $instructor = Instructor::firstWhere('id', request('instructor'));
            $title = ' : Instructor ' . $instructor->nama;
        }
        return view('/course/courses',[
            "title" => "All Courses" . $title,
            "active" => "courses",
            "courses" => Course::latest()->filter(request(['search', 'course_category','course_level', 'course_price','instructor']))->paginate(9)->withQueryString()
        ]);
    }
    public function show(Course $course){
        return view('/course/course',[
            "title" => "Courses Detail : $course->title",
            "active" => "courses",
            "course" => $course, 
            'lesson' => Lesson::where('course_id', $course->id)->get(),
            'section' => Section::oldest()->where('course_id', $course->id)->get()
        ]);
    }
    public function indexCategory(){
        return view('course/categories',[
            'title' => 'Course Categories', 
            "active" => "categories",       
            'categories' => CourseCategory::all()
        ]);
    }

    public function store(Request $request)
    {
        //        
        $validatedData = $request->validate([
            'course_id' => 'required'
        ]);
           
        $validatedData['user_id'] = auth()->user()->id;
        CourseUser::create($validatedData);

        return redirect('/course_user')->with('success', 'New course has been added!');

    }
}
