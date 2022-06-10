<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddController;
use App\Http\Controllers\addNewClassController;

use App\Http\Controllers\classScheduleAdminView;
use App\Http\Controllers\AddCourse;
use App\Http\Controllers\adminCourseView;

use App\Http\Controllers\StudentList;
use App\Http\Controllers\addStudent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/reg', [AddController::class, 'indexReg']); // Register Login
Route::post('/checkreg', [AddController::class, 'adminsave']); // Register Login

Route::get('/', [AddController::class, 'indexLogin']); // Login

Route::post('/checklogin', [AddController::class, 'check']); // Login

Route::get('/admindashboard', [AddController::class, 'index']); // Class Add Controller

Route::get('/classschedule/{course_id}', [classScheduleAdminView::class, 'classShedule']);

Route::get('/admindashboard', [adminCourseView::class, 'courseShedule']);
Route::get('/searchclass', [adminCourseView::class,'searchCourse']);  // SearchBox Class

Route::get('/add-class', [addNewClassController::class, 'addClass']);
Route::post('/add-class', [addNewClassController::class, 'store']);
Route::get('edit-subject/{subject_id}', [addNewClassController::class, 'editSubject']);  // Edit Course Data
Route::put('/updatesubject/{subject_id}', [addNewClassController::class, 'subjectupdate']); // Update Class Data
Route::get('/Deletesubject/{subject_id}', [addNewClassController::class, 'deleteClass']); // Delete Class Data


Route::get('/add-course', [AddCourse::class, 'addcouses']);
Route::post('/add-course', [AddCourse::class, 'coursess']);
Route::get('/searchcourse', [AddCourse::class,'search']);  // SearchBox Course

Route::get('edit-course/{course_id}', [AddCourse::class, 'editCourse']);  // Edit Course Data
Route::put('/updateCourse/{course_id}', [AddCourse::class, 'courseupdate']); // Update Course Data
Route::get('/DeleteCourse/{course_id}', [AddCourse::class, 'deletecourse']); // Delete Course Data


/* Student List */

Route::get('/students-list', [StudentList::class, 'studList']);

Route::get('students-list/{subject_id}', [StudentList::class, 'studentView']); 

/*Search Student */

Route::get('/searchStudents', [StudentList::class,'searchStudent']);  // SearchBox Course


/* Add Student */

Route::get('/assignCourse', [addStudent::class, 'StudentAdd']); // Add Student from Admin

Route::post('/class-reservation', [addStudent::class, 'addThem']); // StudentReservationSystem

Route::post('/assignCourse', [addStudent::class,'kitter'])->name('available.check');; // Email

Route::get('/assignCourse', [addStudent::class,'redirectSubject']); // View Select


/*Edit and Update Student */

Route::get('/edit-info/{student_id}', [addStudent::class, 'editStudentInfo']);  // Edit Course Data
Route::put('/updateInfo/{student_id}', [addStudent::class, 'studentInfoUpdate']); // Update Course Data
Route::get('/DeleteStudent/{student_id}', [addStudent::class, 'deleteStudentInfo']); // Delete Student Data

