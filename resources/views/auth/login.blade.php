@extends('layouts.index')

@section('title', 'Login')

@section("content")
   <form id="login-form" method="POST" action="login.php">
      <span class="login-form-title">Sign In</span>
      <div class="form-group">
        <label for="login-username">Username</label>
        <input type="text" id="login-username" placeholder="Joe12345" name="login_username">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" placeholder="●●●●●●●●" name="login_password">
        <span class="left-error"></span>
      </div>
    <div class="form-group">
      <span class="error-message"></span>
      <input type="submit" value="Sign In" class="submit-btn">
    </div>
  </form>
@endsection