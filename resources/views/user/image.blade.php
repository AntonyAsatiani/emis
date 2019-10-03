@extends('layouts.user.userlayout')

@section('title', 'image')


@section('content')
 <div class="display-image"><img src="{{URL::asset('images/image-placeholder.png') }}"></div>
    <p style="text-align: center;">სურათის სათაური</p>
    <p style="text-align: center;">კატეგორიები: კატეგორია1, კატეგორია2, კატეგორია3</p>
    <div class="image-footer">
      <div class="left-side"><span class="user-profile-image-span"><img src="{{URL::asset('images/profile_default2.png') }}"></span><span class="user-image-username">Username</span></div>
      <div class="right-side"><a class="thumb-up-anchor" href=""><i class="fa fa-thumbs-up thumb-up-icon"></i></a><a class="thumb-down-anchor" href=""><i class="fa fa-thumbs-down thumb-down-icon"></i></a><a class="download-image-button" href="image/download" download>Download Image</a></div>
    </div>
    <div class="container">
      <form method="POST" action="image.php">
        <textarea class="comment-textarea" placeholder="Leave a Comment" name="comment"></textarea>
        <input class="comment-submit-button" type="submit" value="Comment">
      </form>
      <span class="comment-amount-span">5 Comments</span>
        <div class="user-comment-div">
          <div class="user-comment-image-div"><img class="user-comment-image" src="{{URL::asset('images/profile_default2.png') }}"></div>
          <div class="user-comment-right-div">
            <a href="" class="user-comment-username">Username</a>
            <span class="user-comment-time">2 hours ago</span>
            <div class="user-comment">კომენტარი</div>
          </div>
        </div>
        <div class="user-comment-div">
          <div class="user-comment-image-div"><img class="user-comment-image" src="{{URL::asset('images/profile_default2.png') }}"></div>
          <div class="user-comment-right-div">
            <a href="" class="user-comment-username">Username</a>
            <span class="user-comment-time">2 hours ago</span>
            <div class="user-comment">კომენტარი</div>
          </div>
        </div>
        <div class="user-comment-div">
          <div class="user-comment-image-div"><img class="user-comment-image" src="{{URL::asset('images/profile_default2.png') }}"></div>
          <div class="user-comment-right-div">
            <a href="" class="user-comment-username">Username</a>
            <span class="user-comment-time">2 hours ago</span>
            <div class="user-comment">კომენტარი</div>
          </div>
        </div>
        <div class="user-comment-div">
          <div class="user-comment-image-div"><img class="user-comment-image" src="{{URL::asset('images/profile_default2.png') }}"></div>
          <div class="user-comment-right-div">
            <a href="" class="user-comment-username">Username</a>
            <span class="user-comment-time">2 hours ago</span>
            <div class="user-comment">კომენტარი</div>
          </div>
        </div>
        <div class="user-comment-div">
          <div class="user-comment-image-div"><img class="user-comment-image" src="{{URL::asset('images/profile_default2.png') }}"></div>
          <div class="user-comment-right-div">
            <a href="" class="user-comment-username">Username</a>
            <span class="user-comment-time">2 hours ago</span>
            <div class="user-comment">კომენტარი</div>
          </div>
        </div>
    </div>
@endsection