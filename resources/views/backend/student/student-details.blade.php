@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Student Attendance of Last Month</h6>
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
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-success">Present</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-danger">Absent</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-warning">Leave</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-success">Present</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-danger">Absent</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-warning">Leave</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-success">Present</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-danger">Absent</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-warning">Leave</span></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-success">Present</span></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-danger">Absent</span></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>10-04-2019</td>
                        <td><span class="text-warning">Leave</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection