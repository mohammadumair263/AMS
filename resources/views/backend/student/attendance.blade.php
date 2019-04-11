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
            <h6 class="m-0 font-weight-bold text-primary">Mark Attendance</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th>Class</th>
                        <th>Teacher</th>
                        <th>Students</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> # </th>
                        <th>Class</th>
                        <th>Teacher</th>
                        <th>Students</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Class A</td>
                        <td>Teacher A</td>
                        <td>20</td>
                        <td>
                            <a href="{{route('markAttendance')}}" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-check"></i> Mark Attendance </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Class B</td>
                        <td>Teacher B</td>
                        <td>20</td>
                        <td>
                            <a href="student-attendance.html" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-check"></i> Mark Attendance </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Class C</td>
                        <td>Teacher C</td>
                        <td>20</td>
                        <td>
                            <a href="student-attendance.html" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-check"></i> Mark Attendance </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Class D</td>
                        <td>Teacher D</td>
                        <td>20</td>
                        <td>
                            <a href="student-attendance.html" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-check"></i> Mark Attendance </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Class E</td>
                        <td>Teacher E</td>
                        <td>20</td>
                        <td>
                            <a href="student-attendance.html" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-check"></i> Mark Attendance </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection