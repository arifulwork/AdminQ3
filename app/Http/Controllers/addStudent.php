<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;
use App\Models\addNewClassModel;
use App\Models\Stud;

class addStudent extends Controller
{
    public function StudentAdd()
    {
        return view('frontend.addStudent');
    }


    public function addThem(Request $request)
    {
        $student = new Student;
        $student->sname = $request->input('sname');
        $student->email = $request->input('email');
        $student->courseone = $request->input('courseone');
        $student->subject_id  = $request->input('subject_id');

       
        $student->save();
        return redirect()->back()->with('status','Done');
    }


    public function redirectSubject(){

        

        $redirect = addNewClassModel :: all();
  
        return view('frontend.addStudent', ['redirect' => $redirect]);
        

     }



// edit StudentInfo
public function editStudentInfo($subject_id){
    $editstudent = Student :: Where('subject_id',$subject_id)->first();

    $redirectdata = addNewClassModel :: all();
  
        return view('frontend.editStudentInfo', ['redirectdata' => $redirectdata, 'editstudent' => $editstudent]);


}

     // update studentInfo 

    public function studentInfoUpdate(Request $request, $subject_id)
    {
        
        $student = Student::Where('subject_id',$subject_id)->first();
        $student->sname = $request-> sname;
        $student->email = $request-> email;
        $student->courseone = $request-> courseone;
        $student->subject_id = $request-> subject_id;
        $student->update();
        return redirect('/');
}

// delete student info

public function deleteStudentInfo( $subject_id)
{

$course = Student::Where('subject_id',$subject_id)->first();
$course->delete();
return redirect('/');
}

}
