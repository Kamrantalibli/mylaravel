<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $age = 20;

        $person = new \stdClass();  //create person object
        $person->age = $age;

        // return view('front.index', ['age' => $age]);                             // Displaying the age value on the screen (method 1)
        // return view('front.index', compact("age"));                              // Displaying the age value on the screen (method 2)
        // return view('front.index')->with('age', $age)->with('name', "kamran");   // Displaying the age and name values on the screen (method 3)
        // return view('front.index')->with(['age' => $age, 'name' => "kamran"]);   // Displaying the age and name values on the screen (method 4)

        return view('front.index', compact('person'));
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
