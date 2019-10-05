@extends('layouts.user.userlayout')

@section('title', 'Add Category')

@section('content')
<form id="registration-form" method="POST" action="{{url('user/addcategorypost')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="registration-form-title">კატეგორიის დამატება</div>

      <hr>
      <div class="form-group">
        <label for="email-input">კატეგორია</label>
        <input type="text" placeholder="Title" name="title" id="email-input">
       @if ($errors->has('title'))
      <span class="error-message">{{$errors->first()}}</span>
      @endif
      </div>
      <div class="form-group">
        <span class="error-message"></span>
        <input class="submit-btn" type="submit" value="დამატება">
      </div>
    </form>
@endsection