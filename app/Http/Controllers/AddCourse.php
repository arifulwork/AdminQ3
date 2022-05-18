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
        return redirect('/');
        

        // delete course
    }
        public function deletecourse( $course_id)
    {
        
        $course = Course::Where('course_id',$course_id)->first();
        $course->delete();
        return redirect('/');
        


}



}