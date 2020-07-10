@extends('layouts.app')

@section('content')
<div class="container">

    <!--Reset Password Form Box-->
    <div class="row">

        <!--Description box-->
        <div class="intro-msg align-self-center col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
        </div>

        <div class="form align-self-center col-md-6">

            <!--Logo goes here-->
            <p class="text-center"><small>#LOGO HERE</small></p>

            <h3 class='text-center'>Reset Password</h3>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!--Form-->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!--Email Field-->
                <div class="input row-md-6">
                    <label for="email">Please Enter Registered Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!--Reset Password Button-->
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
