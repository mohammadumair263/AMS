@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Class Form</h6>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="name" placeholder="Enter Class Name" name="name">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="shift" placeholder="Enter Class Shift" name="shift">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="stime" placeholder="Enter Start Time" name="stime">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="etime" placeholder="Enter End Time" name="etime">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="">Assign Teacher:</label>
                        <select class="form-control" name="teacher_assign" id="">
                            <option value="">Select</option>
                            <option value="">Teacher A</option>
                            <option value="">Teacher B</option>
                            <option value="">Teacher C</option>
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