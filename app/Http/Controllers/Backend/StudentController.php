<?php

namespace App\Http\Controllers\Backend;

use App\Models\Student;
use App\Models\Classes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            $student = Student::all();
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
            $fileNameToStore = 'noimage.jpeg';
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
        return redirect()->back();

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
            $student = Student::where('id', $id)->first();
            return view('backend.student.student-details')->with('student', $student);
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
            return view('backend.student.edit-student')->with('student', $student);
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
            $fileNameToStore = 'noimage.jpeg';
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
            return view('backend.student.attendance');
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function markAttendance()
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            return view('backend.student.mark-attendance');
        }
        else{
            return redirect('/admin/login');
        }
    }
}
