@extends('admin.auth.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="login-box">
                <div class="login-logo">
                    <a href="/"><b>Admin</b>LTE</a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4" style="color: red">
                                {{ $message }}
                            </p>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4" style="color: red">
                                {{ $message }}
                            </p>
                            @enderror
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <!-- /.social-auth-links -->

                        <p class="mb-1">
                            <a href="#">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href={{ route('register') }} class="text-center">Register</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
