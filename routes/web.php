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

Route::get('admin/home', function () {

    return view('backend.index');
});

// Students and Attendance routes at backend side
Route::get('/admin/students', 'Backend\StudentController@index')->name('students');
Route::get('/admin/sdd-student', 'Backend\StudentController@create')->name('addStudent');
Route::post('/admin/save-student', 'Backend\StudentController@store')->name('saveStudent');
Route::get('/admin/student-details', 'Backend\StudentController@show')->name('studentDetails');
Route::get('/admin/edit-student', 'Backend\StudentController@edit')->name('editStudent');
Route::get('/admin/attendance', 'Backend\StudentController@attendance')->name('attendance');
Route::get('/admin/mark-attendance', 'Backend\StudentController@markAttendance')->name('markAttendance');

// Teachers routes at backend side
Route::get('/admin/teachers', 'Backend\TeacherController@index')->name('teachers');
Route::get('/admin/add-teacher', 'Backend\TeacherController@create')->name('addTeacher');
Route::get('/admin/edit-teacher', 'Backend\TeacherController@edit')->name('editTeacher');

// Classes routes at backend side
Route::get('/admin/classes', 'Backend\ClassController@index')->name('classes');
Route::get('/admin/add-class', 'Backend\ClassController@create')->name('addClass');
Route::get('/admin/edit-class', 'Backend\ClassController@edit')->name('editClass');

// Students routes at frontend
Route::get('/student/index', 'Frontend\StudentController@index')->name('dashboard');
Route::get('/student/profile', 'Frontend\StudentController@edit')->name('profile');

// Teachers routes at frontend
Route::get('/teacher/index', 'Frontend\TeacherController@index')->name('dashboard');
Route::get('/teacher/take-attendance', 'Frontend\TeacherController@attendance')->name('markAttendance');
Route::get('/teacher/profile', 'Frontend\TeacherController@edit')->name('profile');