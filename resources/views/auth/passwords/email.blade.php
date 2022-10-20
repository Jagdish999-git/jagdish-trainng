@extends('layouts.app')

@section('content')

<div class="container padding-bottom-3x mb-2 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="forgot">
          	
          	<h2>Forgot your password?</h2>
          <p>Change your password in three easy steps. This will help you to secure your password!</p>
          <ol class="list-unstyled">
            <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
            <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
            <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
          </ol>

          </div>	
          <form  class="card mt-4" method="POST" action="{{ route('password.email') }}">
        @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="email-for-pass">Enter your email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-success" type="submit">Get New Password</button>
             <a  class="btn btn-danger" href="{{url('login')}}">Back to Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
