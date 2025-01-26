@extends('layouts.auth', ['title' => 'Sign In'])

@section('content')
  <form method="POST" action="{{ route('login.store') }}" class="card">
    @csrf
    <div class="card-header">
      <h5 class="card-title">Please Sign In first to continue</h5>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email">
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
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
    </div>
    <div class="card-footer">
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </div>
  </form>

  <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
@endsection
