<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('backend.index');
});

// Students and Attendance routes at backend side
Route::get('/Students', 'Backend\StudentController@index')->name('students');
Route::get('/Student-details', 'Backend\StudentController@show')->name('studentDetails');
Route::get('/Add-student', 'Backend\StudentController@create')->name('addStudent');
Route::get('/Edit-student', 'Backend\StudentController@edit')->name('editStudent');
Route::get('/Attendance', 'Backend\StudentController@attendance')->name('attendance');
Route::get('/Mark-attendance', 'Backend\StudentController@markAttendance')->name('markAttendance');

// Teachers routes at backend side
Route::get('/Teachers', 'Backend\TeacherController@index')->name('teachers');
Route::get('/Add-teacher', 'Backend\TeacherController@create')->name('addTeacher');
Route::get('/Edit-teacher', 'Backend\TeacherController@edit')->name('editTeacher');

// Teachers routes at backend side
Route::get('/Classes', 'Backend\ClassController@index')->name('classes');
Route::get('/Add-class', 'Backend\ClassController@create')->name('addClass');
Route::get('/Edit-class', 'Backend\ClassController@edit')->name('editClass');