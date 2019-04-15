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

// Admin login routes
Route::get('/', 'Backend\AdminController@index');
Route::get('/admin/index', 'Backend\AdminController@index');
Route::get('/admin/login', 'Backend\AdminController@showLoginForm');
Route::post('/admin/login', 'Backend\AdminController@login');
Route::get('/admin/logout', 'Backend\AdminController@logout');

// Students and Attendance routes at backend side
Route::get('/admin/students', 'Backend\StudentController@index')->name('students');
Route::get('/admin/sdd-student', 'Backend\StudentController@create')->name('addStudent');
Route::post('/admin/save-student', 'Backend\StudentController@store')->name('saveStudent');
Route::get('/admin/student-details/{id}', 'Backend\StudentController@show')->name('studentDetails');
Route::get('/admin/edit-student/{id}', 'Backend\StudentController@edit')->name('editStudent');
Route::PUT('/admin/update-student/{id}', 'Backend\StudentController@update')->name('updateStudent');
Route::get('/admin/delete-student/{id}', 'Backend\StudentController@destroy')->name('deleteStudent');
Route::get('/admin/attendance', 'Backend\StudentController@attendance')->name('attendance');
Route::get('/admin/mark-attendance/{id}', 'Backend\StudentController@markAttendance')->name('markAttendance');
Route::get('/admin/take-attendance/{id}', 'Backend\StudentController@takeAttendance')->name('takeAttendance');
Route::post('/admin/take-attendance', 'Backend\StudentController@insertAttendance')->name('takeAttendance');

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
Route::post('/admin/add-class', 'Backend\ClassController@store')->name('saveClass');
Route::get('/admin/edit-class/{id}', 'Backend\ClassController@edit')->name('editClass');
Route::post('/admin/edit-class', 'Backend\ClassController@update')->name('updateClass');
Route::get('/admin/delete-class/{id}', 'Backend\ClassController@destroy')->name('editClass');
Route::get('/admin/class-details/{id}', 'Backend\ClassController@details')->name('classDetails');

// Students routes at frontend
Route::get('/student/index', 'Frontend\StudentController@index')->name('dashboard');
Route::get('/student/login', 'Frontend\StudentController@showLoginForm');
Route::post('/student/login', 'Frontend\StudentController@login');
Route::get('/student/logout', 'Frontend\StudentController@logout');

// Teachers routes at frontend
Route::get('/teacher/index', 'Frontend\TeacherController@index');
Route::get('/teacher/login', 'Frontend\TeacherController@showLoginForm');
Route::post('/teacher/login', 'Frontend\TeacherController@login');
Route::get('/teacher/logout', 'Frontend\TeacherController@logout');
Route::get('/teacher/take-attendance/{id}', 'Frontend\TeacherController@takeAttendance');
Route::post('/teacher/take-attendance', 'Frontend\TeacherController@insertAttendance');