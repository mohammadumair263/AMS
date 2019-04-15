@extends('layouts.login')

@section('content')
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-5 col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-12">
                <div class="p-5">
                  <div class="text-center">
                    <img class="mx-auto d-block img-fluid" src="{{asset('img/logo.png')}}" alt="logo" width="100px">
                    <br>
                    <h1 class="h4 text-gray-900 mb-4">Teacher Login</h1>
                    @if($errors->any())
                      <p class="text-danger">{{$errors->first()}}</p>
                    @endif
                  </div>
                  <form method="POST" action="{{url('/teacher/login')}}" class="user">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" required class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <br>
                    <input type="submit" value="Login" href="index.html" class="btn btn-danger btn-user btn-block" />
                    <br>
                  </form>
                  <a href="{{url('/admin/login')}}" class="text-danger float-left"> Admin Login</a>
                  <a href="{{url('/student/login')}}" class="text-danger float-right"> Student Login</a>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
</div>
@endsection