<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm() {
        return view('front.contact');
    }


    public function contact(Request $request) {
        // dd(\request()->get("email")); // request method 1
        // dd($request->fullname);       // request method 2
        dd($request->all());          // request method 3
    }

    public function user(Request $request, int $id) {
        dd(gettype($id));
        // dd($request->id); // id=5  
        dd($request->all());
    }
}
