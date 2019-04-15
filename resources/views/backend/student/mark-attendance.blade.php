@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Attendance for @php echo date('d-m-Y') @endphp</h1>
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
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @php $index = 1; @endphp
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll_no}}</td>
                                <td>{{$student->email}}</td>
                                <td><a href="{{url('/admin/take-attendance'.'/'.$student->id)}}" class="btn btn-danger btn-sm">Mark</a></td>
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