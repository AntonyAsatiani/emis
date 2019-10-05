@extends('layouts.index')

@section('title', 'Login')

@section("content")
   <form id="login-form" method="POST" action="{{route('login')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <span class="login-form-title">Sign In</span>
      <div class="form-group">
        <label for="login-username">Username</label>
        <input type="text" id="login-username" placeholder="Joe12345" name="username">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" placeholder="●●●●●●●●" name="password">
        <span class="left-error"></span>
      </div>
    <div class="form-group">
      @if ($errors->has('username') || $errors->has('password'))
      <span class="error-message">{{$errors->first()}}</span>
      @endif
      <input type="submit" value="Sign In" class="submit-btn">
    </div>
  </form>
@endsection