<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;
use App\Models\addNewClassModel;
use App\Models\Stud;

class addStudent extends Controller
{
    public function StudentAdd()
    {
        return view('frontend.addStudent');
    }


    public function addThem(Request $request)
    {
        $student = new Student;
        $student->sname = $request->input('sname');
        $student->email = $request->input('email');
        $student->courseone = $request->input('courseone');
        $student->subject_id  = $request->input('subject_id');

       
        $student->save();
        return redirect()->back()->with('status','Done');
    }


    public function redirectSubject(){

        

        $redirect = addNewClassModel :: all();
  
        return view('frontend.addStudent', ['redirect' => $redirect]);
        

     }
}


