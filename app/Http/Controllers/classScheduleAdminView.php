<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addNewClassModel;

class classScheduleAdminView extends Controller
{
    public function classShedule($course_id){


      //  return addNewClassModel:: all();

       $data = addNewClassModel :: find($course_id);

        return view('frontend.adminclassschedule', ['data' => $data]);
    }
}


