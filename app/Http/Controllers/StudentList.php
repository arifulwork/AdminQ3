<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Student;
use App\Models\Course;
use App\Models\Subject;
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


             
              

              return view('frontend.studentList', ['list' => $list]);
                 
        
               
            }

            //Search Student

            public function searchStudent(Request $request){
            
                $this-> validate($request,[
                  'search' => 'required'
                ]);
              
                $search_txt = $request->search;
        
                $SearchStudent = Student:: orderBy('subject_id','desc')->where('sname','like','%'.$search_txt.'%')
                ->get();
        
                
              return view ('frontend.searchStudentList',compact('SearchStudent'));
              
              }
}
