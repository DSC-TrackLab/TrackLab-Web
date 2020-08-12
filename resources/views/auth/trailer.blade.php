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
				<h5>Please select trailer type:</h5>
				<div class='container'>
					<div class='row'>
                        <div class='form-group col'>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="flatbed" value="option1">
                                <label class="form-check-label" for="flatbed">Flatbed</label>
                            </div>
        
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="enclosed" value="option2">
                                <label class="form-check-label" for="enclosed">Enclosed</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="refridgerated" value="option3">
                              <label class="form-check-label" for="refridgerated">Refridgerated</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="lowboy" value="option3">
                              <label class="form-check-label" for="lowboy">Lowboy</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="step_deck" value="option3">
                              <label class="form-check-label" for="step_deck">Step deck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="Stretch_RGN" value="option3">
                              <label class="form-check-label" for="Stretch_RGN">Stretch RGN</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="Power_only" value="option3">
                              <label class="form-check-label" for="Power_only">Power only</label>
                            </div>
                        </div>
						<div class='form-group col'>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="driver" value="option1">
                                <label class="form-check-label" for="driver">Extendable flatbed</label>
                            </div>
        
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="options" id="customer" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Stretch single drop bed</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Removable gooseneck</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Side kit</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Extendable double drop</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Conestaga</label>
                            </div>
        
                            <div class="form-check form-check">
                              <input class="form-check-input" type="radio" name="options" id="guest" value="option3">
                              <label class="form-check-label" for="guest">Multi-car</label>
                            </div>
						</div>
					</div>

                    <p class="text-center">Trailer Capacity: <i>#DropMenuToBeAdded</i></p>

                    <!--Next Button-->
                    <div class="form-group col text-center">
						<button type="button" class="btn btn-primary">Next</button>
                    </div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection