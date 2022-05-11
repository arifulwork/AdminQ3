<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddController;
use App\Http\Controllers\addNewClassController;

use App\Http\Controllers\classScheduleAdminView;




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

Route::get('/classschedule', [classScheduleAdminView::class, 'classShedule']);

Route::get('/add-student', [addNewClassController::class, 'addClass']);
Route::post('/add-student', [addNewClassController::class, 'store']);
