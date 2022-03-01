@extends('layout.master')
@section('title','かさネギ.com - 運営連絡フォーム')
@section('navi')
  <li><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li class="active"><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection
@section('content')
      
<main class="main-content">
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">お困りの場合はご連絡を。</h2>

          <div class="row">
            <div class="col-md-12">
              <p class="mb-5">＊マークは記入必須項目です。入力されたものは当サイトの向上のために使用されるものであり、第三者への公開を目的としたものではありません。<a href="#">利用規約</a></p>
             <div class="row">
                <div class="col-md-12">               
                  <form action="{{ route('contact') }}" method="post">
                    @csrf     
                    
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                          <ul>
                            <li>{{$error}}</li>
                          </ul>
                        @endforeach
                      </div>
                    @endif

                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="fname">＊姓 / First Name</label>
                        <input name="firstName" type="text" id="fname" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="lname">＊名 / Last Name</label>
                        <input name="lastName" type="text" id="lname" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">＊メールアドレス / Email</label> 
                        <input name="email" type="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white " for="subject">＊要件 / Subject</label> 
                        <input name="subject" type="subject" id="subject" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="message">＊内容 / Message</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="問い合わせ内容を細かくご記入ください / Write your notes or questions here..."></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="送信 / Send Message" class="btn btn-primary btn-md text-white">
                      </div>
                    </div>

        
                  </form>
                </div>
                
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