@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="text-center col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
        </div>
        <div class="form col-md-6">

            <h2 class='text-center'>Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Full Name Input -->
                    <div class="input row-md-6">
                        <label for="name">Full Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                <!-- Password Input -->
                    <div class="input row-md-6">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                <!--<div class="form-group row">

                    <div class="col-md-6">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>-->

                <!-- Radios -->
                <div>
                    <h5>Signup as</h5>
                    <input type="radio" name="driver" id="driver" value="option1">
                    <label class="radio-inline">Courier/Driver</label>
                    
                    <input type="radio" name="customer" id="customer" value="option2">
                    <label class="radio-inline">Customer</label>

                    <input type="radio" name="guest" id="guest" value="option3">
                    <label class="radio-inline">Guest</label>
                </div>

                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-success">{{ __('Create Account') }}</button>
                </div>
            </form>
    </div>
</div>
@endsection
