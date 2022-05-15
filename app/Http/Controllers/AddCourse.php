<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class AddCourse extends Controller
{
    public function addcouses(){

        return view('frontend.admindash');
    }


    public function coursess(Request $request)
    {
        $course = new Course;
        $course->title = $request->input('title');
        $course->save();
        return redirect()->back()->with('status','');
    }
}
