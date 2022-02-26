@extends('layout.master')
@section('title','重ね着写真集')
@section('navi')
  <li><a href="{{ route('Home.show') }}">ホーム</a></li>
  <li class="active"><a href="{{ route('Kasanegi.show') }}">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}">お問い合わせ</a></li>
@endsection
@section('content')
      
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          <a href="single.html" class="d-block photo-item">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <div class="photo-text-more">
                  <h3 class="heading">Photos Title Here</h3>
                  <span class="meta">42 Photos</span>
              </div>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="single.html" class="d-block photo-item">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Photos Title Here</h3>
              <span class="meta">42 Photos</span>
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="single.html" class="d-block photo-item">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <h3 class="heading">Photos Title Here</h3>
              <span class="meta">42 Photos</span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          <a href="single.html" class="d-block photo-item">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Photos Title Here</h3>
              <span class="meta">42 Photos</span>
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="single.html" class="d-block photo-item">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Photos Title Here</h3>
              <span class="meta">42 Photos</span>
            </div>
            </div>
          </a>
        </div>

@endsection
