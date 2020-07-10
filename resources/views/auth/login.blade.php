@extends('layouts.app')

@section('content')
<div class="container">

    <!--Login Form Box-->
    <div class="row">

        <!--Description box-->
        <div class="intro-msg align-self-center col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
        </div>

        <!--Form box-->
        <div class="form align-self-center col-md-6">

            <!--Logo goes here-->
            <p class='text-center'><small>#LOGO HERE</small></p>

            <h3 class='text-center'>Sign in</h3>

            <!--Form-->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Password Field-->
                <div class="input row-md-6">
                    <label for="password">Password</label>    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!--Email Field-->
                <div class="input row-md-6">
                    <label for="email">Email</label>    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!--Login Button-->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>

                <!--Forgot Password Redirect-->
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <p><a href="{{ route('password.request') }}">Forgot Your Password?</a><p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
