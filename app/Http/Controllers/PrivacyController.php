<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    //
    public function index(){
        return view('help/privacy',[
            "title" => "Privacy Policy",
            "active" => "privacy",
            "privacy" => Privacy::all()
        ]);
    }
}
