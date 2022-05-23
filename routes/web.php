<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddController;
use App\Http\Controllers\addNewClassController;

use App\Http\Controllers\classScheduleAdminView;
use App\Http\Controllers\AddCourse;
use App\Http\Controllers\adminCourseView;

use App\Http\Controllers\StudentList;


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

Route::get('/', [AddController::class, 'index']); // Class Add Controller

Route::get('/classschedule/{course_id}', [classScheduleAdminView::class, 'classShedule']);

Route::get('/', [adminCourseView::class, 'courseShedule']);
Route::get('/searchclass', [adminCourseView::class,'searchCourse']);  // SearchBox Class

Route::get('/add-class', [addNewClassController::class, 'addClass']);
Route::post('/add-class', [addNewClassController::class, 'store']);
Route::get('edit-subject/{subject_id}', [addNewClassController::class, 'editSubject']);  // Edit Course Data
Route::put('/updatesubject/{subject_id}', [addNewClassController::class, 'subjectupdate']); // Update Class Data


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
