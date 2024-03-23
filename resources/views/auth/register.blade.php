@extends('auth.layouts.guest')
@section('title', 'Register')
    
@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            @include('notification')
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="user">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control form-control-user"
                                    aria-describedby="emailHelp" required autocomplete="name" 
                                    placeholder="Enter Name...">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror    
                            </div>
                            <!-- Email Address -->
                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control form-control-user"
                                    aria-describedby="emailHelp" required autocomplete="username" 
                                    placeholder="Enter Email Address...">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror    
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="password" name="password"  required autocomplete="new-password"
                                    placeholder="New Password">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="password_confirmation" name="password_confirmation"  required autocomplete="new-password"
                                    placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                            <hr>
                            <a href="#" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="#" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
