<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
    //
    public function index(){
        return view('help/contactus',[
            "title" => "Contact Us",
            "active" => "contactus"            
        ]);
    }
    public function store(Request $request){
        $validateData = $request -> validate([            
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Contact::create($validateData);
        return redirect('/contactus');
        
    }
}
