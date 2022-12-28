<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disclaimer;

class DisclaimerController extends Controller
{
    //
    public function index(){
        return view('help/disclaimer',[
            "title" => "Disclaimer",
            "active" => "disclaimer",
            "disclaimer" => Disclaimer::all()
        ]);
    }
}
