<?php

namespace App\Http\Controllers\Backend;

use App\Models\Student;
use App\Models\Classes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Attendance;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            $query = "SELECT s.id,s.name,s.roll_no,c.name AS 'class_name',s.image FROM students as s INNER JOIN classes as c ON s.class_id=c.id";
            $student= DB::select($query);
            return view('backend.student.students')->with('students', $student);
        }
        else{
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!empty(session('id')) && session('role') == 'admin'){

            $classes = Classes::all();
            return view('backend.student.add-student')->with('classes', $classes);
        }
        else{

            return redirect('/admin/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'roll_no' => 'required',
            'phone_no' => 'required',
            'class' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6',
            'image' => 'max:1999'
        ]);

        //make unique name for image, and directory path directory
        if(($request->hasFile('image')))
        {
            //get file with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //file to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //upload file
            $path = $request->file('image')->move('backend/uploads ', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'avatar.png';
        }
        $student = new Student;

        $student->name = $request->name;
        $student->image = $fileNameToStore;
        $student->roll_no = $request->roll_no;
        $student->email = $request->email;
        $student->class_id = $request->class;
        $student->phone = $request->phone_no;
        $student->password = $request->password;

        $student->save();
        return redirect('/admin/students');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            $query = "SELECT s.id,s.name,s.roll_no,c.name as 'class_name',a.date_for,a.status FROM students as s INNER JOIN classes as c ON s.class_id=c.id INNER JOIN attendances as a ON s.id=a.student_id WHERE s.id = $id ORDER BY a.date_for DESC";
            $attendance = DB::select($query);
            return view('backend.student.student-details')->with('attendance', $attendance);
        }
        else{
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            $student = Student::where('id', $id)->first();
            $classes = Classes::all();
            return view('backend.student.edit-student',['student' => $student, 'classes' => $classes]);
        }
        else{
            return redirect('/admin/login');
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
        $request->validate([
            'name' => 'required|max:255',
            'roll_no' => 'required',
            'phone_no' => 'required',
            'class' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6',
            'image' => 'max:1999'
        ]);

        //make unique name for image, and directory path directory
        if($request->hasFile('image') || !empty($request->hasFile('image')))
        {
            //get file with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //file to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //upload file
            $path = $request->file('image')->move('backend/uploads ', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'avatar.png';
        }

        $student = Student::where('id', $request->id)->first();

        $student->name = $request->name;
        $student->image = $fileNameToStore;
        $student->roll_no = $request->roll_no;
        $student->email = $request->email;
        $student->class_id = $request->class;
        $student->phone = $request->phone_no;
        $student->password = $request->password;

        $student->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            $student= Student::find($id);
            $student->delete();

            return redirect()->back();
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function attendance()
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            $classes = Classes::all();
            return view('backend.student.attendance')->with('classes',$classes);
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function markAttendance($id)
    {
        if(!empty(session('id')) && session('role') == 'admin'){

            $student = Student::where('class_id',$id)->get();
            return view('backend.student.mark-attendance')->with('students', $student);
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function takeAttendance($id)
    {
        if(!empty(session('id')) && session('role') == 'admin'){

            $student = Student::where('id',$id)->first();
            return view('backend.student.take-attendance')->with('student', $student);
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function insertAttendance(Request $request)
    {
        if(!empty(session('id')) && session('role') == 'admin'){

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

            return redirect('/admin/mark-attendance/'.$request->class_id);
        }
        else{
            return redirect('/admin/login');
        }
    }
}
