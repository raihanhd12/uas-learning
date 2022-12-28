<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Section;
use Barryvdh\DomPDF\Facade\Pdf;

class LessonController extends Controller
{
    //
    public function index()
    {
        //    
        
        $title = '';  
        if(request('course')){
            $course = Course::firstWhere('id', request('course'));
            $title = $course->title;
        }         
        return view('lesson.index',[
            'title' => "Lesson : ". $title,
            'lesson' => Lesson::where('course_id', $course->id)->orderBy('section_id', 'asc')->get(),
            'lesson1' => Lesson::where('course_id', $course->id)->orderBy('section_id', 'asc')->get(),
            // 'section' => Section::where('course_id', $course->id)->orderBy('id', 'asc')->get()
            // 'courseusers' => CourseUser::where('user_id', auth()->user()->id)->paginate(4)
            
        ]);
    }
    
}
