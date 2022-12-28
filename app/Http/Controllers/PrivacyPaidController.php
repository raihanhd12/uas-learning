<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPaidController extends Controller
{
    //
    public function index(){
        return view('help/privacypaid',[
            "title" => "Privacy Policy",
            "active" => "privacy",
            // "privacy" => Privacy::all()
        ]);
    }
}
