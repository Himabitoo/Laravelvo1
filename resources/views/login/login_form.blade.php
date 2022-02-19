<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
<script src="{{ asset('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
    
<form class="form-signin" method="POST" action="{{ route('login') }}">
 @csrf 
    <img src="{{asset('img/LOGO.png')}}">
  <h1 class="h3 mb-3 font-weight-normal">ログインしてください</h1>
 @if   ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
   </div>
 @endif
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">パスワード</label>
  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <!-- <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
</form>


</body>
</html>