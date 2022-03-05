@extends('layout.master')
@section('title','かさネギ.com - ホーム画面')
@section('navi')
  <li class="active"><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection
@section('content')
      
<main class="main-content">

    <div class="row pt-4 mb-5 text-center">
      <div class="col-12">
        <h2 class="text-white mb-4">モンハン画像集</h2>
      </div>
    </div>

    <div class="container-fluid photos">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('storage/'.$detas->thumbnail) }}" alt="">
      <div class="carousel-caption">
        <h3>{{$detas->title}}</h3>
        <p>＠{{ $detas->userUid }}</p>
      </div>
    </div>

    @for( $i = 1 ; $i < $detas->image_count +1 ; $i++){{$image_num = 'img'.$i;}}
        <div class="item">
          <img src="{{ asset('storage/'.$detas->$image_num) }}" alt="">
          <div class="carousel-caption">
            <h3>{{$detas->title}}</h3>
            <p>＠{{ $detas->userUid }}</p>
          </div>
        </div>
    @endfor

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
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