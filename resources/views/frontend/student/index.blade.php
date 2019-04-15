@extends('layouts.front-end')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@php echo session('name') @endphp Attendance</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Attendance</h6>
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
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Class</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $index = 1;
                        @endphp
                        @foreach ($attendance as $att)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$att->name}}</td>
                                <td>{{$att->roll_no}}</td>
                                <td>{{$att->class_name}}</td>
                                <td>{{$att->date_for}}</td>
                                @if($att->status == 'present')
                                    <td><span class="text-success">{{$att->status}}</span></td>
                                @elseif($att->status == 'absent')
                                    <td><span class="text-danger">{{$att->status}}</span></td>
                                @else
                                    <td><span class="text-warning">{{$att->status}}</span></td>
                                @endif
                                
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