@extends('layouts.index')

@section('title', 'Search')


@section('content')
 <h3 style="text-align: center;">ფილტრი</h3>
        <form style="width: 400px; margin: 0 auto;">
            <div class="form-group">
                <label>კატეგორია</label>
                <select name="category" class="form-control">
                    <option value="">კატეგორია 1</option>
                    <option value="">კატეგორია 2</option>
                </select>
            </div>
            <div class="form-group">
                <label>სათაური</label>
                <input name="title" class="form-control">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="გაფილტვრა">
            </div>
        </form>
        <h3 style="text-align: center;">გაფილტრული სურათები</h3>
        <div class='profile-images-div'>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
            <div class='profile-image-div'>
                <a class='image-anchor' href='image.html'><img class='profile-image' src='images/image-placeholder.png'></a>
            </div>
        </div>

@endsection
