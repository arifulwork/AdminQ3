<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Stud;

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

              $listp = Stud :: Where('subject_id',$subject_id)->get();

             
              

              return view('frontend.studentList', ['list' => $list,'listp' => $listp]);
                 
        
               
            }
}
