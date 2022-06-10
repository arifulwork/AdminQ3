<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class AddCourse extends Controller
{
    public function addcouses(){

        return view('frontend.admindash');
    }


    public function coursess(Request $request)
    {
        $course = new Course;
        $course->title = $request->input('title');
        $course->save();
        return redirect()->back()->with('status','');
    }
// edit course
    public function editCourse($course_id){
        $editdata = Course :: Where('course_id',$course_id)->first();
        return view('frontend.editClassName', compact('editdata'));  

        
    }
//update course
    public function courseupdate(Request $request, $course_id)
    {
        
        $course = Course::Where('course_id',$course_id)->first();
        
        $course->title = $request-> title;
        $course->update();
        return redirect('/admindashboard');
        

        // delete course
    }
        public function deletecourse( $course_id)
    {
        
        $course = Course::Where('course_id',$course_id)->first();
        $course->delete();
        return redirect('/admindashboard');
        


}


    //Search Course
    
    public function search(Request $request){
            
        $this-> validate($request,[
          'search' => 'required'
        ]);
      
        $search_txt = $request->search;

        $postSearch = Course:: orderBy('course_id','desc')->where('title','like','%'.$search_txt.'%')
        ->get();

        
      return view ('frontend.searchAdminDash',compact('postSearch'));
      
      }





}