@extends('layout.master')
@section('title','かさネギ.com - ホーム画面')
@section('navi')
  <li class="active"><a href="{{ route('Home.show') }}">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}">お問い合わせ</a></li>
@endsection
@section('content')
      
<div class="row pt-4 mb-5 text-center">
        <div class="col-12">
          <h2 class="text-white mb-4">'Nature' &mdash; 19 Photos</h2>
        </div>
      </div>

      <div class="row align-items-stretch">
        
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up">
          <a href="images/img_1.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_2.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="images/img_3.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
          <a href="images/img_4.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_5.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
          <a href="images/img_6.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_6.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_7.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_7.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>


        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          <a href="images/img_8.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_8.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_9.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_9.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="images/img_10.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_10.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>


        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up">
          <a href="images/img_1.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_2.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="images/img_3.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
          <a href="images/img_4.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_5.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
          <a href="images/img_6.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_6.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_7.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_7.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>


        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          <a href="images/img_8.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_8.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_9.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_9.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        

      </div>

@endsection