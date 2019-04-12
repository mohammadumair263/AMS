@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Student Form</h6>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="roll_no" placeholder="Enter Roll No" name="roll_no">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No" name="phone_no">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="class">Select class:</label>
                        <select class="form-control" name="class" id="class">
                            <option value="a">Class A</option>
                            <option value="a">Class B</option>
                            <option value="a">Class C</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-9 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12">
                        <button type="submit" class="btn btn-primary"> Add </button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection