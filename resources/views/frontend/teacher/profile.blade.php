@extends('layouts.front-end')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Teacher Details</h6>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-sm-12 col-md-4">
                        <img src="img/class.jpg" class="img-fluid img-thumbnail mx-auto d-block" alt="profile picture" style="height:150px; width:200px;">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <br><br><br>
                        {{--  <input type="file" accept="image/*" name="file">  --}}
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-8">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="name" disabled value="{{$teacher->name}}">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-8">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" disabled value="{{$teacher->email}}">
                    </div>
                    {{--  <div class="form-group col-sm-12 col-md-4">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>  --}}
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="phone">Phone No:</label>
                        <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No" name="phone_no" disabled value="{{$teacher->phone}}">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-9 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12">
                        {{--  <button type="submit" class="btn btn-primary"> Update </button>  --}}
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection