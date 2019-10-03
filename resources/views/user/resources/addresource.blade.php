@extends('layouts.user.userlayout')

@section('title', 'Edit Resource')


@section('content')

<form id="registration-form" method="POST" action="">
      <div class="registration-form-title">რესურსის დამატება</div>
      <hr>
      <div class="form-group">
        <label for="username-input">სურათი</label>
        <input type="file" placeholder="james123" name="username" id="username-input">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="email-input">სათაური</label>
        <input type="email" placeholder="james@gmail.com" name="email" id="email-input">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="email-input">კატეგორია</label>
        <select name="email" id="email-input" multiple>
            <option>კატეგორია 1</option>
            <option>კატეგორია 2</option>
        </select>
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <span class="error-message"></span>
        <input class="submit-btn" type="submit" value="დამატება">
      </div>
    </form>
@endsection