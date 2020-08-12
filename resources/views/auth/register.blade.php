@extends('layouts.app')

@section('content')
<div class="container">

    <!--Register Form Box-->
    <div class="row">

        <!--Description box-->
        <div class="intro-msg align-self-center col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
        </div>

        <!--Form box-->
        <div class="align-self-center form col-md-6">

            <p class="text-center"><small>#LOGO HERE</small></p>

            <h3 class='text-center'>Sign up</h3>

            <!--Form-->
            <form method="POST" action="{{route('register')}}">
                @csrf  

                <!-- Full Name Input -->
                <div class="input row-md-6">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="input row-md-6">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!--Confirm Password Field-->
                <div class="input row-md-6">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    
                </div>

                <!-- Email Input -->
                <div class="input row-md-6">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Radios for registration options -->
                <div class='form-group'>

                    <h5>Sign up as:</h5>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options" id="driver" value="option1">
                        <label class="form-check-label" for="driver">Courier/Driver</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="options" id="customer" value="option2">
                        <label class="form-check-label" for="customer">Customer</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                      <label class="form-check-label" for="guest">Guest</label>
                  </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>

                <div class='text-center'>
                    <p>Already have an account? <a href='{{route('login')}}'>Log in</a></p>
                </div>
            </form>
    </div>
</div>
@endsection
