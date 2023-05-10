<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('front.index');
    }


    public function about() {
        return view('front.about');
        // return redirect(route("contact"));       // Yonlendirme methodu 1
        // return redirect()->route('contact');     // Yonlendirme methodu 2
        // return Redirect::route("contact");       // Yonlendirme methodu 3
    }


    public function contact() {
        return view('front.contact');
    }
}
