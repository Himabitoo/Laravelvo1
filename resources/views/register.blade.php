@extends('layout.master')
@section('title','かさネギ.com - アカウント作成')
@section('navi')
  <li><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection
@section('content')
<main class="main-content">
  <div class="container-fluid photos">
        <div class="row justify-content-center">
          <div class="col-md-6 pt-4"  data-aos="fade-up">
            <h2 class="text-white mb-4">アカウント新規作成</h2>

            <div class="row">
              <div class="col-md-12">

              <form action="{{ route('RegisterPost.show') }}" method="post" autocomplete="off">
                @csrf
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">@</span>
                  <input name="userUid" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">メールアドレス</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="example@example.net">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">パスワード</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div>
                  <input type="submit" value="アカウント作成" class="btn btn-danger">
                </div>

              </form>

              </div>
            </div>

          </div>
        </div>
  </div>
</main>

@endsection