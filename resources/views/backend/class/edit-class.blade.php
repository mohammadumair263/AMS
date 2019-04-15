@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Class Details</h6>
        </div>
        <div class="card-body">
            <form action="{{url('/admin/edit-class')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$class->id}}" name="id" />
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" required class="form-control" id="name" placeholder="Enter Class Name" name="name" value="{{$class->name}}">
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-7 col-sm-12"></div>
                    <div class="col-md-5 col-sm-12">
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