@extends('auth.layouts.guest')
@section('title', 'Reset Password')
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
                            <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                        </div>
                        <form method="POST" action="{{ route('password.store') }}" class="user">
                            @csrf                            
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <!-- Email Address -->
                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control form-control-user"
                                    aria-describedby="emailHelp" required autocomplete="username" value="{{ old('email', $request->email) }}"
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
                            <button type="submit" class="btn btn-primary btn-user btn-block">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
