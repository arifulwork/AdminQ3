<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addNewClassModel;

class addNewClassController extends Controller
{
    public function addClass(){

        
       
        return view('frontend.adminclassschedule');
    }
   
    public function store(Request $request)
    {
        $addnewclassmodel = new addNewClassModel;
        $addnewclassmodel->title = $request->input('title');
        $addnewclassmodel->seats = $request->input('seats');
        $addnewclassmodel->date = $request->input('date');
        $addnewclassmodel->starttime = $request->input('starttime');
        $addnewclassmodel->endtime = $request->input('endtime');
        $addnewclassmodel->endtime = $request->input('endtime');
        $addnewclassmodel->course_id = $request->input('course_id');
        $addnewclassmodel->save();
        return redirect()->back()->with('status','');
    }

}
