<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class DashboardPrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.privacy.index',[
            'privacy' => Privacy::all()
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
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Privacy $privacy)
    {
        //
        return view('dashboard.privacy.edit', [
            'privacy' => $privacy            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Privacy $privacy)
    {
        //
        $validatedData = $request->validate([
            'body' => 'required'
        ]);

        Privacy::where('id', $privacy->id)
            ->update($validatedData);

        return redirect('/dashboard/privacy')->with('success', 'Privacy & Policy has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privacy $privacy)
    {
        //
    }
}
