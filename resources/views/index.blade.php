@extends('master')

@section('content')
    
    @guest
    <br><br>
        <form method="POST" action="/loginStore">
        @csrf

        <div class="signup-form container justify-content-center col-md-4 card">
                <h3 class="card-header text-center">LOGIN</h3>
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
    @else
    <img src={{url('storage/images/1672755953.png')}} class="img-fluid " alt="Responsive image" 
    style="
        height:115vh;
    ">
    @endguest
    
@endsection