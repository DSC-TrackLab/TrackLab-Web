@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="intro-msg align-self-center col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
        </div>
        <div class="form align-self-center col-md-6">

            <p class="text-center">#LOGO HERE</p>
            <h3 class='text-center'>Sign in</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Password -->
                <div class="input row-md-6">
                    <label for="password">Password</label>    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input row-md-6">
                    <label for="email">Email</label>    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="text-center">                    
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>

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
