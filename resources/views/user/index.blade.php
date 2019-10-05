@extends('layouts.user.userlayout')

@section('title', 'user')


@section('content')


<main class="index-main">
    <a href="{{url('user/addresource')}}" id="upload-button">რესურსის დამატება</a>
</main>

<main class="index-main">
    <a href="{{url('user/category')}}" id="upload-button">კატეგორიის დამატება</a>
</main>


@endsection