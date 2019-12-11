       @extends('layout')
       @section('title','Login')
           

       @section('content')


       @if(session('error'))
       <div class="alert alert-danger">
            <center><p> {{session('error')}}</p></center>
            </div>
        @endif 

       
<div align="center">
       <form method="post" action="{{route('login')}}" class="login100-form validate-form" >
            @csrf
        <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <span class="label-input100">Email Id</span>
            <input class="input100" type="email" name="email_id" placeholder="Enter Email">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="phone_number" placeholder="Enter password">
            <span class="focus-input100"></span>
        </div>
        <button class="login100-form-btn">
            Login
        </button>
        {{-- <button class="btn btn-success" type="submit" name="submit" type="button" value="Login In" >Login</button> --}}
</form>
       @endsection
        