@extends('layouts.index')

@section('content')
 <form id="registration-form" method="POST" action="{{route('register')}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="registration-form-title">Account Creation</div>
        <hr>
        <div class="form-group">
          <label for="username-input">Username</label>
          <input type="text" name="username" id="username-input">
          @if ($errors->has('username'))
           <span class="left-error">{{ $errors->first('username') }}</span>
          @endif
        </div>
        <div class="form-group">
          <label for="email-input">Email Address</label>
          <input type="email" name="email" id="email-input">
          @if ($errors->has('email'))
           <span class="left-error">{{ $errors->first('email') }}</span>
          @endif
         
        </div>
        <div class="form-group">
          <label for="password-input">Password</label>
          <input type="password" placeholder="●●●●●●●●" name="password" id="password-input">
          @if ($errors->has('password'))
           <span class="left-error">{{ $errors->first('password') }}</span>
          @endif
         </div>
        <div class="form-group">
          <label for="password-repeat-input">Repeat Password</label>
          <input type="password" placeholder="●●●●●●●●" name="password_confirmation" id="password-repeat-input">
           @if ($errors->has('password_confirmation'))
           <span class="left-error">{{ $errors->first('password_confirmation') }}</span>
          @endif
        </div>
        <div class="form-group">
          <span class="error-message"></span>
          <input class="submit-btn" type="submit" value="Create Account">
        </div>
      </form>
@endsection
