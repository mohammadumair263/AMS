@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Classes</h1>
        <a href="{{route('addClass')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Class</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Classes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Students</th>
                        <th>Attendance</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Students</th>
                        <th>Attendance</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Class A</td>
                        <td>John Doe</td>
                        <td>10</td>
                        <td>80%</td>
                        <td>
                            <a href="{{route('editClass')}}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Class B</td>
                        <td>John Doe</td>
                        <td>12</td>
                        <td>80%</td>
                        <td>
                            <a href="class-details.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Class C</td>
                        <td>John Doe</td>
                        <td>10</td>
                        <td>80%</td>
                        <td>
                            <a href="class-details.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Class D</td>
                        <td>John Doe</td>
                        <td>12</td>
                        <td>80%</td>
                        <td>
                            <a href="class-details.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
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