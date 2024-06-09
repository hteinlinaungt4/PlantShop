@extends('master.layout')
@section('title',"Register")
@section('content')
    <div class="d-flex  justify-content-center align-items-center " style="height:100vh">
        <div class="card w-25">
           <div class="card-header">
            <div class="card-title">
                <h3 class=" text-center">Login Form</h3>
            </div>
           </div>
            <div class="card-body">
               <form action="{{route('login')}}" method="post">
                @csrf

                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                    @error ('email')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error ('password')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button class="btn btn-primary float-end">Login</button>
               </form>
            </div>
        </div>
    </div>
@endsection
