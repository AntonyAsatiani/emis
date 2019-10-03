@extends('layouts.index')

@section('title', 'Emis')

@section("content")
  <main class="index-main">
        <div class="index-main-content">
            <span class="index-login-title">სურათების ასატვირთად აუცილებელია იყოთ ავტორიზებული</span>
            <form method="POST" action="index.php">
                <input type="text" placeholder="მომხმარებლის სახელი" name="login_username">
                <input type="password" placeholder="პაროლი" name="login_password">
                <input class="index-sign-in-button" type="submit" value="Sign in">
                <a href="registration.html" class="index-registration-ref">არ ხართ რეგისტრირებული?</a>
            </form>
        </div>
        </main>
@endsection