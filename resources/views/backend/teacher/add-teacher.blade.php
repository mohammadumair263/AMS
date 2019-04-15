@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Add Teacher Form</h6>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>
        <div class="card-body">
            <form action="{{route('saveTeacher')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-sm-12 col-md-4">
                        <img src="{{asset('img/avatar.png')}}" class="img-fluid img-thumbnail mx-auto d-block" alt="profile picture" style="height:150px; width:200px;">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <br><br><br>
                        <input type="file" accept="image/*" name="image">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" required class="form-control" id="fname" placeholder="Enter Full Name" name="name">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" required class="form-control" id="phone_no" placeholder="Enter Phone No" name="phone_no">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="email" required class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="password" required class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="class">Select class:</label>
                        <select class="form-control" name="class" id="class">
                            @foreach ($classes as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
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
                        <button type="submit" class="btn btn-danger"> Add </button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection