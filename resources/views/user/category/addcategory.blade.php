@extends('layouts.user.userlayout')

@section('title', 'Add Category')

@section('content')
<form id="registration-form" method="POST" action="">
      <div class="registration-form-title">კატეგორიის დამატება</div>
      <hr>
      <div class="form-group">
        <label for="email-input">კატეგორია</label>
        <input type="email" placeholder="" name="email" id="email-input">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <span class="error-message"></span>
        <input class="submit-btn" type="submit" value="დამატება">
      </div>
    </form>
@endsection