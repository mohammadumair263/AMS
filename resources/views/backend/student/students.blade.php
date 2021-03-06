@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Students</h1>
        <a href="{{route('addStudent')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Student</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Students</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Name</th>
                            <th>Roll No</th>
                            <th>Class</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $index=1;
                    @endphp
                    @foreach($students as $student)
                    <tr>
                        <td>{{$index++}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->roll_no}}</td>
                        <td>{{$student->class_name}}</td>
                        <td><img src="{{asset('backend/uploads/'.$student->image)}}" alt="picture"}} height=40px ></td>
                        <td>
                            <a href="{{url('/admin/student-details').'/'.$student->id}}" class="btn btn-success btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="{{url('/admin/edit-student').'/'.$student->id}}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="{{route('deleteStudent', ['id' => $student->id])}}" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection