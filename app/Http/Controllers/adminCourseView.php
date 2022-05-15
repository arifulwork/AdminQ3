<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class adminCourseView extends Controller
{
    public function courseShedule(){


        //  return addNewClassModel:: all();
  
         $files = Course :: all();
  
          return view('frontend.admindash', ['files' => $files]);
      }
}
