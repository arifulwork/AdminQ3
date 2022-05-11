<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addNewClassModel;

class classScheduleAdminView extends Controller
{
    public function classShedule(){


      //  return addNewClassModel:: all();

       $data = addNewClassModel :: all();

        return view('frontend.adminclassschedule', ['data' => $data]);
    }
}


