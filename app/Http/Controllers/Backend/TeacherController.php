<?php

namespace App\Http\Controllers\Backend;

use App\Models\Classes;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'admin'){
            
            $query = "SELECT t.name,t.id,t.email,t.phone,t.image,c.name as 'class_name' FROM teachers as t INNER JOIN classes as c ON t.class_id=c.id";
            $teacher = DB::select($query);
            return view('backend.teacher.teachers')->with('teachers', $teacher);
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
        if(!empty(session('id')) && session('role') == 'admin')
        {
            $classes = Classes::all();
            return view('backend.teacher.add-teacher')->with('classes', $classes);
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
            $fileNameToStore = 'avatar.png';
        }

        $teacher = new Teacher;

        $teacher->name = $request->name;
        $teacher->image = $fileNameToStore;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone_no;
        $teacher->class_id = $request->class;
        $teacher->password = $request->pwd;
        $teacher->save();
        return redirect('/admin/teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            $teacher = Teacher::find($id);
            $classes = Classes::all();
            return view('backend.teacher.edit-teacher',['teacher' => $teacher, 'classes'=> $classes]);
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

        $teacher = Teacher::where('id', $request->id)->first();

        $teacher->name = $request->name;
        $teacher->image = $fileNameToStore;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone_no;
        $teacher->class_id = $request->class;
        $teacher->password = $request->password;

        $teacher->save();
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
            $teacher= Teacher::find($id);
            $teacher->delete();

            return redirect()->back();
        }
        else{
            return redirect('/admin/login');
        }
    }
}
