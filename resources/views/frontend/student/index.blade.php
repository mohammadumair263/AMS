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
            <h6 class="m-0 font-weight-bold text-primary">All Attendance</h6>
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
                    <tr>
                        <td>1</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    <tr>
                        <td>3</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Class C</td>
                        <td>12-04-2019</td>
                        <td>
                            <input type="radio" name="attendance"> Present &nbsp;
                            <input type="radio" name="attendance"> Absent &nbsp;
                            <input type="radio" name="attendance"> Leave &nbsp;
                        </td>
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection