<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\addNewClassModel;

use App\Models\Course;

class adminCourseView extends Controller
{
    public function courseShedule(){


        //  return addNewClassModel:: all();
  
         $files = Course :: all();
  
          return view('frontend.admindash', ['files' => $files]);
      }


      
    //Search Course
    
    public function searchCourse(Request $request){
            
        $this-> validate($request,[
          'search' => 'required'
        ]);
      
        $search_txt = $request->search;

        $SearchCourse = addNewClassModel:: orderBy('course_id','desc')->where('title','like','%'.$search_txt.'%')
        ->get();

        
      return view ('frontend.searchClassSchedule',compact('SearchCourse'));
      
      }
}
