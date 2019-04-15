<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'student'){
            $query = "SELECT s.id,s.name,s.roll_no,c.name as 'class_name',a.date_for,a.status FROM students as s INNER JOIN classes as c ON s.class_id=c.id INNER JOIN attendances as a ON s.id=a.student_id WHERE s.id = ".session('id')." ORDER BY a.date_for DESC";
            $attendance = DB::select($query);
            return view('frontend.student.index')->with('attendance',$attendance);
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
            return redirect('/student/login')->withErrors(['Wrong username or password.']);
        }
    }

}
