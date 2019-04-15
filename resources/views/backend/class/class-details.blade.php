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
            <p><strong class="text-danger">Class Name : </strong> {{$class->class_name}}</p>
            <p><strong class="text-danger">Total Students : </strong> {{$class->students}}</p>
            <p><strong class="text-danger">Teacher Name : </strong> 
                @if(!empty($class->teacher_name)) 
                    {{$class->teacher_name}}
                @else 
                    not assigned
                @endif
            </p>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection