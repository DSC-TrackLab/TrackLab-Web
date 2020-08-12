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

            <h3 class='text-center'>Driver Sign-Up</h3>

            <!--Form-->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h5>Please select vehicle type:</h5>
                {{$request}}
                <!-- Radios for registration options -->
                <div class='container'>
                    <div class='row'>
                        <div class='form-group col'>
        
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="driver" value="option1">
                                <label class="form-check-label" for="driver">Motobike</label>
                            </div>
        
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="customer" value="option2">
                                <label class="form-check-label" for="inlineRadio2">SUV</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Step Van</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Flatbed Truck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Straight Truck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Step Van</label>
                            </div>
                        </div>

                        <div class='form-group col'>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="driver" value="option1">
                                <label class="form-check-label" for="driver">Compact</label>
                            </div>
        
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="customer" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Van</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Step Van</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Flatbed Truck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Straight Truck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Step Van</label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Password Field-->
                {{-- <div class="input row-md-6">
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
                </div> --}}
            </form>
        </div>
    </div>
</div>
@endsection
