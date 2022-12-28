<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use BenSampo\Embed\Rules\EmbeddableUrl;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.lessons.index', [
            'lesson' => Lesson::all()
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
        
        return view('dashboard.lessons.create', [
            'lesson' => Lesson::all(),
            'course' => Course::latest()->get(),
            'section' => Section::orderBy('course_id', 'desc')->get(),
            // 'section' => Section::where('course_id', $lesson->course->id)
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
            'course_id' =>'required',
            'section_id' => 'required',
            'pdf' => 'mimes:pdf',
            'videotitle' => 'required|max:255',
            'video' =>  new EmbeddableUrl,  
            'body' => 'min:0',      
            'file' => 'mimes:doc,docx,pdf,xlsx,ppt,pptx'          
        ]);

        if ($request->file('pdf')) {   
            $filenameWithExt = $request->file('pdf')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  
            $filenamesimpan = $filename.' - '.'RHD Learning';       
            $validatedData['pdf'] = $request->file('pdf')->storeAs('course-pdf', $filenamesimpan);
        }
        if ($request->file('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  
            $extension = $request->file('file')->getClientOriginalExtension();
            $filenamesimpan1 = $filename.' - '.'RHD Learning'.'.'.$extension;       
            $validatedData['file'] = $request->file('file')->storeAs('course-file',$filenamesimpan1);
        }

        Lesson::create($validatedData);

        return redirect('/dashboard/lesson')->with('success', 'New lesson has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
        return view('dashboard.lessons.edit', [
            'lesson' => $lesson,
            'course' => Course::latest()->get(),
            'section' => Section::orderBy('course_id', 'desc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
        $validatedData = $request->validate([
            'course_id' =>'required',
            'section_id' => 'required',
            'pdf' => 'mimes:pdf',
            'videotitle' => 'required|max:255',
            'video' =>  new EmbeddableUrl,   
            'body' => 'min:0',    
            'file' => 'mimes:doc,docx,pdf,xlsx,ppt,pptx'          
        ]);

        if ($request->file('pdf')) {
            if ($request->oldPdf) {
                Storage::delete($request->oldPdf);
            }
            $validatedData['pdf'] = $request->file('pdf')->store('course-pdf');
        }
        if ($request->file('file')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validatedData['file'] = $request->file('file')->store('course-file');
        }       
        Lesson::where('id', $lesson->id)
        ->update($validatedData);

        return redirect('/dashboard/lesson')->with('success', 'Lesson has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
        if ($lesson->pdf) {
            Storage::delete($lesson->pdf);
        }
        if ($lesson->file) {
            Storage::delete($lesson->file);
        }
        Lesson::destroy($lesson->id);
        return redirect('/dashboard/lesson')->with('delete', 'Lesson has been deleted!');
    }
}
