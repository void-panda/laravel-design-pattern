@extends('layouts.auth', ['title' => 'Sign In'])

@section('content')
  <form method="POST" action="{{ route('register.store') }}" class="card">
    @csrf
    <div class="card-header">
      <h5 class="card-title">Please Sign Up</h5>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email">
        @error('email')
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @error('password')
          <span class="text-danger">{{ $errors->first('password') }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        @error('password_confirmation')
          <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        @enderror
      </div>
    </div>
    <div class="card-footer">
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </div>
  </form>

  <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>

@endsection
