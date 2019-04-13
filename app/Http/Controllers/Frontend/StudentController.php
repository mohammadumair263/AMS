<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'student'){
            return view('frontend.student.index');
        }
        else{
            return redirect('/student/login');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/student/login');
    }

    public function showLoginForm()
    {
        return view('frontend.student.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = Student::where('email', $email)->where('password', $password)->first();
        
        if(!empty($user)){
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['role' => 'student']);
            return redirect('/student/index');

        }else{
            return redirect('/student/login');
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
        if(!empty(session('id')) && session('role') == 'student'){

            $student = Student::where('id',session('id'))->first();
            return view('frontend.student.profile')->with('student',$student);
        }
        else{
            return redirect('/student/login');
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
