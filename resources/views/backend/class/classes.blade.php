@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Classes</h1>
        <a href="{{route('addClass')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Class</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Classes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th> # </th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    @php $index=1; @endphp
                    @foreach($classes as $class)
                    <tr>
                        <td>{{$index++}}</td>
                        <td>{{$class->name}}</td>
                        <td>
                            <a href="{{url('/admin/class-details').'/'.$class->id}}" class="btn btn-success btn-sm"><i class="far fa-list-alt"></i></a>
                            &nbsp;
                            <a href="{{url('/admin/edit-class').'/'.$class->id}}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            &nbsp;
                            <a href="{{url('/admin/delete-class').'/'.$class->id}}" class="btn btn-danger btn-sm"><i class="far fa-fw fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection