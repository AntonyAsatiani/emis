@extends('layouts.user.userlayout')

@section('title', 'profile')

@section('content')
<style>
            .profile-image-div:hover .edit {
                display: block;
            }

            .profile-image-div .edit {
                visibility: visible;
                display: none;
                position: absolute;
                right: 35px;
                top: 5px;
                color: #fff;
                font-size: 30px;
            }
        </style>
 <div class="profile-content-div">
          <div class="profile-content-div-header">
            <div class="profile-image-div">
              <img style="width: 100%;" src="{{URL::asset('images/profile_default.png') }}">
            </div>
            <div class="centered">
                <span class="user-name">Username</span>
                <form id="profile-picture-form" enctype="multipart/form-data" method="POST" action="profile.html">
                  <input type="file" id="profile-picture-input" class="hidden" name="profile_picture">
                  <label for="profile-picture-input" class="profile-picture-input-label">Change Profile Picture</label>
                </form>
            </div>
          </div>
        </div>
            <h2 style="text-align: center;">ჩემს მიერ ატვირთული სურათები</h2>
          <div class='profile-images-div'>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
              <div class='profile-image-div'>
                    <a class='image-anchor' href='image.html'><img class='profile-image' src="{{URL::asset('images/image-placeholder.png') }}"></a>
                    <a class="edit" href="edit"><i class="fa fa-edit"></i></a>
                    <a class='delete-icon-a' href='delete'><span>&times;</span></a>
              </div>
        </div>

        <script>
          _("profile-picture-input").onchange = function() {
            _("profile-picture-form").submit();
          };
        </script>

@endsection