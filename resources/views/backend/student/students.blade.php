@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Students</h1>
        <a href="add-student.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Student</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
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
                        <th>Attendance</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Class</th>
                        <th>Attendance</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Donna Snider</td>
                        <td>234</td>
                        <td>Infant</td>
                        <td>50%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Johnathan</td>
                        <td>234</td>
                        <td>Toddler</td>
                        <td>80%</td>
                        <td>
                            <a href="student-details.html" class="btn btn-primary btn-sm"><i class="far fa-fw fa-list-alt"></i></a>
                            &nbsp;
                            <a href="edit-student.html" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
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