@extends('front.layouts.app')

<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', 'Customer Login page')
@section('description', 'customer Login Page')
@section('keywords', 'Login')
<!-- -------------- these are for dynamic meta header -------------------->

@section('content')
<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Sign In</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">Sign In</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- about us area start here  -->
<div class="sign-in-page section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="login-wrap">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="far fa-user"></span>
                    </div>
                    <h1 class="text-center mb-4">Sign In</h1>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control rounded-left @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" placeholder="Password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3 primary-btn auth-btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <hr>
                        <div class="form-group">
                            <a href="/user/auth/google"
                                class="form-control btn btn-primary rounded submit px-3 google-btn"><i
                                    class="fab fa-google"></i> Login With Google</a>
                        </div>
                        <hr>
                        <div class="remember-box form-group text-center mb-0">
                            <!-- <div>
                                <label class="checkbox-wrap">Remember Me
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <div class="text-md-end text-lg-end">
                                @if (Route::has('password.request'))
                                <a class="forget-password-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="already-have-account">
                            Dont have an account?<a href="{{ route('register')}}" class="forget-password-link">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end here  -->
@endsection


