<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentList extends Controller
{
    //

    public function studList(){

        
       
        return view('frontend.studentList');
    }

    public function studentView($subject_id){

        /*
              return addNewClassModel:: all();
        */
              


              $list = Student :: Where('subject_id',$subject_id)->get();

              $list = Student :: Where('subject_id',$subject_id)->get();

             
              

              return view('frontend.studentList', ['list' => $list,'listp' => $listp]);
                 
        
               
            }
}
