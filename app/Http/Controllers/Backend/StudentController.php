<?php

namespace App\Http\Controllers\Backend;

use App\Models\Student;
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
        $student = Student::all();
        return view('backend.student.students')->with('students', $student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.student.add-student');
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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'roll_no' => 'required',
            'phone_no' => 'required',
            'class' => 'required',
            'email' => 'required|string|email|max:255',
            'pwd' => 'required|min:6',
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

        $student->name = $request->fname. ' ' .$request->lname;
        $student->image = $fileNameToStore;
        $student->roll_no = $request->roll_no;
        $student->class_id = $request->class;
        $student->email = $request->email;
        $student->phone = $request->phone_no;
        $student->password = $request->pwd;

        $student->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('backend.student.student-details');
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

    public function attendance()
    {
        return view('backend.student.attendance');
    }

    public function markAttendance()
    {
        return view('backend.student.mark-attendance');
    }
}
