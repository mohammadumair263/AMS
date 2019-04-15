<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            $classes = Classes::all();
            $teachers = Teacher::all();
            $students = Student::all();

            return view('backend.index',[
                'teachers_count'=> $teachers->count(),
                'classes_count'=> $classes->count(),
                'students_count'=> $students->count(),
                'classes' => $classes
                ]);
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function showLoginForm()
    {
        return view('backend.admin.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = Admin::where('email',$email)->where('password',$password)->first();

        if(!empty($user)){
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['role' => 'admin']);

            return redirect('/admin/index');
        }else{
            return redirect('/admin/login')->withErrors(['Wrong username or password.']);
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin/login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('backend.student.edit-student');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
