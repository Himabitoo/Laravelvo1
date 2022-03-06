@extends('layout.master')
@section('title','かさネギ.com')
@section('navi')
  <li><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection
@section('content')
      
<main class="main-content">

    <div class="row pt-4 mb-5 text-center">
      <div class="col-12">
        <h2 class="text-white mb-4">かさネギ.com</h2>
      </div>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
            <p>
             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>.
                 Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
      </div>

    </div>
  </main>

@endsection