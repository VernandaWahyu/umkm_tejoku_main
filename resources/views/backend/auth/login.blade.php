@extends('backend.auth.auth_master')

@section('auth_title')
    Login | Admin Panel
@endsection

@section('auth-content')
    <!-- login area start -->
    <div class="login-area" style="background: linear-gradient(to right, #198754, #198754); min-height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="container">
            <div class="login-box ptb--100 animate__animated animate__fadeInDown" style="box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); border-radius: 10px; overflow: hidden; background: #fff;">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <div class="login-form-head" style="background-color: #198754; color: #fff; padding: 20px;">
                        <h4 style="margin: 0;">Sign In</h4>
                        <p>Masuk Untuk Mengelola Data Website</p>
                    </div>
                    <div class="login-form-body" style="padding: 20px;">
                        @include('backend.layouts.partials.messages')
                        <div class="form-gp">
                            {{-- <label for="exampleInputEmail1">Email address or Username</label> --}}
                            <input type="text" id="exampleInputEmail1" name="email" class="input-animate" placeholder="Username atau Email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            {{-- <label for="exampleInputPassword1">Password</label> --}}
                            <input type="password" id="exampleInputPassword1" name="password" class="input-animate" placeholder="Password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" class="btn-login">Sign In <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- Include Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .form-gp {
            position: relative;
            margin-bottom: 30px;
        }

        .form-gp input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .form-gp input:focus {
            border-color: #198754;
            box-shadow: 0 0 8px#198754(0, 114, 255, 0.2);
            transition: all 0.3s ease;
        }

        .form-gp i {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #198754;
        }

        .btn-login {
            display: inline-block;
            background-color: #198754;
            color: #fff;
            padding: 10px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-login:hover {
            background-color: #198754;
            box-shadow: 0px 8px 25px #198754(0, 118, 255, 0.4);
        }

        .input-animate {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .input-animate:focus {
            transform: scale(1.05);
            opacity: 1;
        }
    </style>
@endsection
