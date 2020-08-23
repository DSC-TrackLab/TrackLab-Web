@extends('layouts.app')

@section('content')
<div class="container form profile">
    <div class="text-center">
        <h1>Driver Profile Update</h1>
        <p>Update by entering new information.<br/> Leave the field blank if it's up to date</p>
    </div>
    <div class="row justify-content-md-center">
        <form class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="surname">Surname</label>
              <input type="text" class="form-control" id="surname">
            </div> 
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address">
            </div>
            <div class="form-group">
              <label for="password">Current Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
              <label for="password">New Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" class="form-control" id="password">
            </div><br>
            <h4>Vehicle Information</h4><br>
            <p><strong>Are you using a different vehicle?</strong></p>
            <div class="form-group">
              <label for="vehicle">Vehicle</label>
              <input type="text" class="form-control" id="vehicle">
            </div>
            <div class="form-group">
              <p><strong>Enter your trailer type, if any</strong></p>
              <label for="text">Trailer</label>
              <input type="text" class="form-control" id="trailer">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection