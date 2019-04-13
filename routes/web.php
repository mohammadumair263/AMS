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

// Route::get('/', function () {
//     return view('welcome');
// });

// Admin login routes
Route::get('/admin/index', 'Backend\AdminController@index');
Route::get('/admin/edit', 'Backend\AdminController@edit');
Route::get('/admin/login', 'Backend\AdminController@showLoginForm');
Route::post('/admin/login', 'Backend\AdminController@login');
Route::get('/admin/logout', 'Backend\AdminController@logout');

// Students and Attendance routes at backend side
Route::get('/admin/students', 'Backend\StudentController@index')->name('students');
Route::get('/admin/sdd-student', 'Backend\StudentController@create')->name('addStudent');
Route::post('/admin/save-student', 'Backend\StudentController@store')->name('saveStudent');
Route::get('/admin/student-details/{id}', 'Backend\StudentController@show')->name('studentDetails');
Route::get('/admin/edit-student/{id}', 'Backend\StudentController@edit')->name('editStudent');
Route::get('/admin/attendance', 'Backend\StudentController@attendance')->name('attendance');
Route::get('/admin/mark-attendance', 'Backend\StudentController@markAttendance')->name('markAttendance');

// Teachers routes at backend side
Route::get('/admin/teachers', 'Backend\TeacherController@index')->name('teachers');
Route::get('/admin/add-teacher', 'Backend\TeacherController@create')->name('addTeacher');
Route::post('/admin/save-teacher', 'Backend\TeacherController@store')->name('saveTeacher');
Route::get('/admin/edit-teacher/{id}', 'Backend\TeacherController@edit')->name('editTeacher');
Route::PUT('/admin/update-teacher/{id}', 'Backend\TeacherController@update')->name('updateTeacher');
Route::get('/admin/delete-teacher/{id}', 'Backend\TeacherController@destroy')->name('deleteTeacher');

// Classes routes at backend side
Route::get('/admin/classes', 'Backend\ClassController@index')->name('classes');
Route::get('/admin/add-class', 'Backend\ClassController@create')->name('addClass');
Route::get('/admin/edit-class', 'Backend\ClassController@edit')->name('editClass');

// Students routes at frontend
Route::get('/student/index', 'Frontend\StudentController@index')->name('dashboard');
Route::get('/student/profile', 'Frontend\StudentController@edit')->name('profile');
Route::get('/student/login', 'Frontend\StudentController@showLoginForm');
Route::post('/student/login', 'Frontend\StudentController@login');
Route::get('/student/logout', 'Frontend\StudentController@logout');

// Teachers routes at frontend
Route::get('/teacher/index', 'Frontend\TeacherController@index')->name('dashboard');
Route::get('/teacher/take-attendance', 'Frontend\TeacherController@attendance')->name('markAttendance');
Route::get('/teacher/profile', 'Frontend\TeacherController@edit')->name('profile');
Route::get('/teacher/login', 'Frontend\TeacherController@showLoginForm');
Route::post('/teacher/login', 'Frontend\TeacherController@login');
Route::get('/teacher/logout', 'Frontend\TeacherController@logout');