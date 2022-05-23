<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addNewClassModel;
use App\Models\Course;

class classScheduleAdminView extends Controller
{
    public function classShedule($course_id){

/*
      return addNewClassModel:: all();
*/
      $data = addNewClassModel :: Where('course_id',$course_id)->get();

      return view('frontend.adminclassschedule', compact('data'));  
         

       
    }

    
}


