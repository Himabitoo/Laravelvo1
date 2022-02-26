@extends('layout.master')
@section('title','かさネギ.com - 運営連絡フォーム')
@section('navi')
  <li><a href="{{ route('Home.show') }}">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}">運営者のブログ</a></li>
  <li class="active"><a href="{{ route('Contact.show') }}">お問い合わせ</a></li>
@endsection
@section('content')
      
<div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">お困りごとはこちらへ。</h2>

          <div class="row">
            <div class="col-md-12">
              <p class="mb-6">メールアドレスやお名前は第三者への公開はされません。アカウント報告、禁止事項など気になったことは是非運営へ連絡ください あなたのフィードバック是非お待ちしております。 <a href="#">利用規約</a></p>
              

              <div class="row">
                <div class="col-md-12">

                  

                  <form action="#" method="post" >
                  @csrf
                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="fname">姓 (First Name)</label>
                        <input type="text" id="fname" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="lname">名 (Last Name)</label>
                        <input type="text" id="lname" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">メールアドレス (Email)</label> 
                        <input type="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="subject">要件 (Subject)</label> 
                        <input type="subject" id="subject" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="message">内容 (Message)</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="要件を詳細に記入してください / Write your notes or questions here..."></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                      </div>
                    </div>

        
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>

@endsection