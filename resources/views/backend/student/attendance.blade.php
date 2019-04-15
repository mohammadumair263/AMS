@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Attendance</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Mark Attendance</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> # </th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $index = 1;
                        @endphp
                        @foreach ($classes as $class)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$class->name}}</td>
                                <td>
                                    <a href="{{url('/admin/mark-attendance').'/'.$class->id}}" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-check"></i> Mark Attendance </a>
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