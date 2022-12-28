<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.instructors.index', [
            'instructors' => Instructor::all()
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
        return view('dashboard.instructors.create');
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
            'nama' => 'required|max:255',
            'keahlihan' => 'required',
            'image' => 'image|file|max:1024',
            'about' => 'required',
            'instagram' => 'max:255',
            'facebook' => 'max:255',
            'twitter' => 'max:255',
            'linkedin' => 'max:255'

        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->about), 200, '...');

        Instructor::create($validatedData);

        return redirect('/dashboard/instructors')->with('success', 'New Instructor has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
        return view('dashboard.instructors.show', [
            'instructor' => $instructor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        //
        return view('dashboard.instructors.edit', [
            'instructor' => $instructor            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'keahlihan' => 'required',
            'image' => 'image|file|max:1024',
            'about' => 'required',
            'instagram' => 'max:255',
            'facebook' => 'max:255',
            'twitter' => 'max:255',
            'linkedin' => 'max:255'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        
        $validatedData['excerpt'] = Str::limit(strip_tags($request->about), 200, '...');

        Instructor::where('id', $instructor->id)
            ->update($validatedData);

        return redirect('/dashboard/instructors')->with('success', 'Instructor has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        //
        if ($instructor->image) {
            Storage::delete($instructor->image);
        }
        Instructor::destroy($instructor->id);
        return redirect('/dashboard/instructors')->with('delete', 'Instructor has been deleted!');
    }
}
