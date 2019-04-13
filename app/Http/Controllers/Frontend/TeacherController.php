<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'teacher'){
            return view('frontend.teacher.index');
        }
        else{
            return redirect('/teacher/login');
        }
    }

    public function showLoginForm()
    {
        return view('frontend.teacher.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = Teacher::where('email', $email)->where('password', $password)->first();
        
        if(!empty($user)){
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['role' => 'teacher']);

            return redirect('/teacher/index');

        }else{
            return redirect('/teacher/login');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/teacher/login');
    }

    public function attendance(){
        if(!empty(session('id')) && session('role') == 'teacher'){
            return view('frontend.teacher.attendance');
        }
        else{
            return redirect('/teacher/login');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(!empty(session('id')) && session('role') == 'teacher'){

            $teacher = Teacher::where('id',session('id'))->first();
            return view('frontend.teacher.profile')->with('teacher',$teacher);
        }
        else{
            return redirect('/teacher/login');
        }
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

}
