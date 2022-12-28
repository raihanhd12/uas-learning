<?php

namespace App\Http\Controllers;

use App\Models\Disclaimer;
use Illuminate\Http\Request;

class DashboardDisclaimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.disclaimer.index',[
            'disclaimer' => Disclaimer::all()
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
     * @param  \App\Models\Disclaimer  $disclaimer
     * @return \Illuminate\Http\Response
     */
    public function show(Disclaimer $disclaimer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disclaimer  $disclaimer
     * @return \Illuminate\Http\Response
     */
    public function edit(Disclaimer $disclaimer)
    {
        //
        return view('dashboard.disclaimer.edit', [
            'disclaimer' => $disclaimer            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disclaimer  $disclaimer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disclaimer $disclaimer)
    {
        //
        $validatedData = $request->validate([
            'body' => 'required'
        ]);

        Disclaimer::where('id', $disclaimer->id)
            ->update($validatedData);

        return redirect('/dashboard/disclaimer')->with('success', 'Disclaimer has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disclaimer  $disclaimer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disclaimer $disclaimer)
    {
        //
    }
}
