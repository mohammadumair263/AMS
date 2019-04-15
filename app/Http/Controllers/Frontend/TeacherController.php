<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Attendance;

class TeacherController extends Controller
{
    public function index(){
        if(!empty(session('id')) && session('role') == 'teacher'){
            $teacher = Teacher::where('id',session('id'))->first();
            $students = Student::where('class_id',$teacher->class_id)->get();

            return view('frontend.teacher.attendance')->with('students',$students);
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
            return redirect('/teacher/login')->withErrors(['Wrong username or password.']);
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/teacher/login');
    }

    public function takeAttendance($id)
    {
        if(!empty(session('id')) && session('role') == 'teacher'){

            $student = Student::where('id',$id)->first();
            return view('frontend.teacher.take-attendance')->with('student', $student);
        }
        else{
            return redirect('/teacher/login');
        }
    }

    public function insertAttendance(Request $request)
    {
        if(!empty(session('id')) && session('role') == 'teacher'){

            $att = Attendance::where('student_id',$request->student_id)->where('date_for', date('Y-m-d'))->first();
            if(!empty($att)){
                $att->status = $request->status;
                $att->save();
            }
            else{
                $attendance = new Attendance;
                $attendance->student_id = $request->student_id;
                $attendance->date_for = date('Y-m-d');
                $attendance->teacher_id = session('id');
                $attendance->status = $request->status;
                $attendance->save();
            }

            return redirect('/teacher/index');
        }
        else{
            return redirect('/teacher/login');
        }
    }

}
