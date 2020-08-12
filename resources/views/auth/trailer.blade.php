@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="intro-msg align-self-center col-md-6">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facilis, modi amet ratione necessitatibus laborum repellendus, perspiciatis saepe id dolores ipsam ab aliquid! Impedit non mollitia ipsam? Nostrum, voluptatibus tenetur.
		</div>

		<div class="form align-self-center col-md-6">
			<p class='text-center'><small>#LOGO HERE</small></p>
			<h3 class='text-center'>Trailer Details</h3>
			<form method="POST" action="{{ route('vehicle.create') }}">
				@csrf
				<h5>Please select vehicle type:</h5>
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
                              <label class="form-check-label" for="guest">Pick-up</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Utility Truck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Car Carrier</label>
                            </div>
						</div>
					</div>
                    <div class="text-center form-check">
                        <input type="checkbox" class="form-check-input" id="trailer">
                        <label class="form-check-label" for="trailer">Trailer?</label>
                    </div>

                    <p class="text-center">Vehicle Capacity: <i>#DropMenuToBeAdded</i></p>

                    <!--Next Button-->
                    <div class="form-group col text-center">
						<button type="button" onclick={{route('auth.trailer')}} class="btn btn-primary">Next</button>
                    </div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection