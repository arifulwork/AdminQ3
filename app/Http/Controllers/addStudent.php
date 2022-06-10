<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;
use App\Models\addNewClassModel;
use App\Models\Stud;
use DB;

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

     // Add Student


     public function kitter(Request $request)
     {
      if($request->get('email'))
      {
       $email = $request->get('email');
       $data = DB::table("students")
        ->where('email', $email)
        ->count();
       if($data > 1)
       {
        echo 'not_unique';
       }
       else
       {
        echo 'unique';
       }
      }
     }



// edit StudentInfo
public function editStudentInfo($student_id ){
    $editstudent = Student :: Where('student_id',$student_id )->first();

    $redirectdata = addNewClassModel :: all();
  
        return view('frontend.editStudentInfo', ['redirectdata' => $redirectdata, 'editstudent' => $editstudent]);


}

     // update studentInfo 

    public function studentInfoUpdate(Request $request, $student_id)
    {
        
        $student = Student::Where('student_id',$student_id)->first();
        $student->sname = $request-> sname;
        $student->email = $request-> email;
        $student->courseone = $request-> courseone;
        $student->subject_id = $request-> subject_id;
        $student->update();
        return redirect('/admindashboard');
}

// delete student info

public function deleteStudentInfo($student_id)
{

$student = Student::Where('student_id',$student_id )->first();
$student->delete();
return redirect('/admindashboard');
}

}
