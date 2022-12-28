<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Checkout;

class MembershipController extends Controller
{
    //
    public function index(){
        return view('shop/memberships',[
            "title" => "Membership",
            "memberships" => Membership::orderBy('id')->paginate(4)
        ]);
    }
    public function show(Membership $membership){
        return view('/shop/membership',[
            "title" => "Checkout : $membership->title",            
            "membership" => $membership
        ]);
    }
    public function store(Request $request){             
        $validateData = $request -> validate([  
            'username' => 'required',
            'membership' => 'required',          
            'image' => 'image|file|max:1024'
        ]);        

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image');
        }
        Checkout::create($validateData);
        return redirect('/courses')->with('success', 'Tunggu Verifikasi Admin');      
    }
}
