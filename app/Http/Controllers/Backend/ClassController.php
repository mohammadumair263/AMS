<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(session('id')) && session('role') == 'admin')
        {
            $class = Classes::all();
            return view('backend.class.classes')->with('classes', $class);
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function details($id){
        $query = "SELECT c.id,c.name as 'class_name',COUNT(s.class_id) as 'students',t.name as 'teacher_name' FROM classes as c INNER JOIN students AS s ON c.id=s.class_id INNER JOIN teachers as t ON t.class_id = c.id WHERE c.id = $id";
        $class = DB::select($query);
        return view('backend.class.class-details')->with('class',$class[0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!empty(session('id')) && session('role') == 'admin'){

            return view('backend.class.add-class');
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
        $class = new Classes;
        $class->name = $request->name;
        $class->save();

        return redirect('/admin/classes');
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
    public function edit($id) // $id here
    {
        if(!empty(session('id')) && session('role') == 'admin'){

            $class = Classes::where('id', $id)->first();
            return view('backend.class.edit-class')->with('class', $class);
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
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $class = Classes::where('id', $request->id)->first();

        $class->name = $request->name;
        $class->save();

        return redirect('/admin/classes');
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

            $class= Classes::find($id);
            $class->delete();

            return redirect()->back();
        }
        else{
            return redirect('/admin/login');
        }
    }
}
