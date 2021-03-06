@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Student Details</h6>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>
        <div class="card-body">
            <form action="{{route('updateStudent', ['student_id' => $student->id])}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" value="{{$student->id}}" name="id" />
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-sm-12 col-md-4">
                        <img src="{{asset('/backend/uploads').'/'.$student->image}}" class="img-fluid img-thumbnail mx-auto d-block" alt="profile picture" style="height:150px; width:200px;">
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
                    <div class="form-group col-sm-12 col-md-8">
                        <label for="name">Full Name:</label>
                        <input type="text" required class="form-control" id="name" placeholder="Enter Full Name" name="name" value="{{$student->name}}">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="roll_no">Roll No:</label>
                        <input type="text" required class="form-control" id="roll_no" placeholder="Enter Roll No" name="roll_no" value="{{$student->roll_no}}">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="phone">Phone No:</label>
                        <input type="text" required class="form-control" id="phone_no" placeholder="Enter Phone No" name="phone_no" value="{{$student->phone}}">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="email">Email:</label>
                        <input type="email" required class="form-control" id="email" placeholder="Enter email" name="email" value="{{$student->email}}">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="password">Password:</label>
                        <input type="password" required class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{$student->password}}">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="class">Select class:</label>
                        <select class="form-control" name="class" id="class">
                            @foreach ($classes as $class)
                                <option value="{{$class->id}}"
                                    @if ($class->id == $student->class_id)
                                        {{ 'selected' }}
                                    @endif
                                    >{{$class->name}}</option>
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
                        <button type="submit" class="btn btn-danger"> Update </button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection