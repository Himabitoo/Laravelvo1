@extends('layout.master')
@section('title','かさネギ.com - 重ね着詳細')
@section('navi')
  <li><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li class="active"><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection
@section('content')
      
<main class="main-content">

    <div class="row pt-4 mb-5 text-center">
      <div class="col-12">
      <p style="font-size:20px;">{{ $detas->title }}</p>
        <p style="font-size:20px;"> <img style="height: 40px;width:auto" src="{{ $user->iconURL }}">
        {{ $user->accountName }}  観覧数：{{ $detas->watch_count }}

        <form action="{{ route('KasanegiLike.create',[ 'id' => $detas->id ]) }}" method="post">
        @csrf
          <button type="submit" class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
            いいね + {{ $detas->likeit}}
          </button>
        </form>
        
        <form action="{{ route('KasanegiDislike.create',[ 'id' => $detas->id ]) }}" method="post">
        @csrf
          <button type="submit" class="btn btn-outline-danger">
            低評価 + {{ $detas->dislike }}
          </button>
        </form>

        <form action="{{ route('KasanegiFavorite.create',[ 'id' => $detas->id]) }}" method="post">
          @csrf
          <button type="submit" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
            </svg>
              お気に入り
          </button>
        </form>
        
        </p>

        <div class="">
          <h3>モンハンシリーズ：{{ $detas->series}}</h3>
          <h3>--装備紹介--</h3>
          <h3>頭：{{$detas->head}}</h3>
          <h3>胴：{{$detas->body}}</h3>
          <h3>腕：{{$detas->arm}}</h3>
          <h3>腰：{{$detas->waist}}</h3>
          <h3>脚：{{$detas->foot}}</h3>
        </div>
      </div>
    </div>

    <div class="container-fluid photos">
        <div class="row align-items-stretch">
            <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
              <a href="{{ asset('storage/'.$detas->thumbnail) }}" class="d-block photo-item" data-fancybox="gallery">
                <img src="{{ asset('storage/'.$detas->thumbnail) }}" alt="Image" class="img-fluid">
                <div class="photo-text-more">
                   <span class="icon icon-search"></span>
                 </div>
              </a>
            </div>
        @for( $i = 1 ; $i < $detas->image_count  ; $i++)
            <?php $image_num = 'img'.$i; ?>
             <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
               <a href="{{ asset('storage/'.$detas->$image_num) }}" class="d-block photo-item" data-fancybox="gallery">
                 <img src="{{ asset('storage/'.$detas->$image_num) }}" alt="Image" class="img-fluid">
                 <div class="photo-text-more">
                   <span class="icon icon-search"></span>
                 </div>
               </a>
             </div>
            <?php $image_num++ ?>
        @endfor
        </div>

        <div class="col-md-12">
          
          <form  action="{{ route('KasanegiCreateComment',['id' => $detas->id]) }}" method="post" enctype="multipart/form-data">
          @csrf
              <div class="form-group">
                <label for="exampleFormControlTextarea1">コメント欄</label>
                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <input type="submit" value="コメント" class="btn btn-danger">
          </form>
          
          @foreach ($comments as $comment)
            <div class="">
            <a href="{{ route('UserProf.show',[ 'userUid' => $comment->userUid ]) }}" style="font-size:25px">{{ $comment->accountName }} <a style="font-size:13px">{{ '@'.$comment->userUid }}</a></a>
              <p>{{ $comment->comment }}</p>

              <form action="{{ route('KasanegiCommentLike.create',[ 'id' => $comment->id ]) }}" method="post">
              @csrf
                <button type="submit" class="btn btn-outline-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                  </svg>
                  いいね + {{ $comment->likeit }}
                </button>
              </form>

              <form action="{{ route('KasanegiCommentDislike.create',[ 'id' => $comment->id ]) }}" method="post">
              @csrf
                <button type="submit" class="btn btn-outline-danger">
                  低評価 + {{ $comment->dislike }}
                </button>
              </form>
              
            </div>
          @endforeach
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