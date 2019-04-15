@extends('layouts.front-end')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Attendance Form</h6>
        </div>
        <div class="card-body">

            <form action="{{url('/teacher/take-attendance')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$student->id}}" name="student_id" />
                <input type="hidden" value="{{$student->class_id}}" name="class_id" />
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-8">
                        <input type="text" class="form-control" id="name" placeholder="Enter Full Name" value="{{$student->name}}">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="form-group col-sm-12 col-md-8">
                        <input type="radio" name="status" value="present"> Present &nbsp;
                        <input type="radio" name="status" value="absent"> Absent &nbsp;
                        <input type="radio" name="status" value="leave"> Leave &nbsp;
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