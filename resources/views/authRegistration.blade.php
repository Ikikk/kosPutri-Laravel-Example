@extends('master')

@section('content')
    <br><br>
    <form method="POST" action="/registrationStore">
        @csrf

        <div class="signup-form container justify-content-center col-md-4 card">
                <h3 class="card-header text-center">REGISTRATION USER</h3>

                <div class="form-group mb-3">
                    <label for="name">Name:</label><br>
                    <input type="text" placeholder="Name" id="name" name="name" class="form-control" required autofocus>
            
                    @if ($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>   
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email:</label><br>
                    <input type="text" placeholder="Email" id="email" name="email" class="form-control" required autofocus>
            
                    @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>   
                    @endif
                </div>
            
                <div class="form-group mb-3">
                    <label for="password">Password:</label><br>
                    <input type="text" placeholder="Password" id="password" name="password" class="form-control" required autofocus>
            
                    @if ($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>   
                    @endif
                </div>

                <input type="submit" value="Submit" class="btn btn-dark btn-block">

        </div>
@endsection