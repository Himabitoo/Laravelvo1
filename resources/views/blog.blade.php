@extends('layout.master')
@section('title','かさネギ.com - ブログ')
@section('navi')
  <li><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li class="active"><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection
@section('content')
      
<main class="main-content">
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-8 pt-4">
          
          <div class="row mb-5" data-aos="fade-up">
            <div class="col-12">
              <h2 class="text-white mb-4 text-center">My Blog</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">サイト作るの大変やな。</a></h2>
                  <div class="meta mb-3">投稿日：<a href="#">2022/03/05</a></div>
                  <p>完成はまだまだ先だよ。</p>
                </div>
              </div>
            </div>

            <div class="col-12 text-center">
              <div class="custom-pagination">
                <span>1</span>
                <!-- <a href="#">2</a>
                <a href="#">3</a>
                <span>...</span>
                <a href="#">7</a> -->
              </div>
            </div>
          </div>
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