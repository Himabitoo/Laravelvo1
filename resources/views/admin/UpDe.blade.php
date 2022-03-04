@extends('layout.master')
@section('title','かさネギ.com - モンハン画像集')
@section('navi')
  <li class="active"><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}" style="font-size:20px;">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}" style="font-size:20px;">お問い合わせ</a></li>
@endsection



@section('content')
      
<main class="main-content">
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                  <h2 class="text-black mb-4 text-center">モンハン画像アップロードページ</h2>
                </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <p class="mb-5">＊マークは記入必須項目です。入力されたものは当サイトの向上のために使用されるものであり、第三者への公開を目的としたものではありません。<a href="#">利用規約</a></p>
             <div class="row">
                <div class="col-md-12">               
                  <form action="{{ route('Def.up') }}" method="post" enctype="multipart/form-data">
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
                    
                    <br>
                    <p>＊サムネイルを指定してください</p>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                          
                        <input name="thumbnail" type="file" class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01"  multiple="multiple">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>

                    <br>

                    <p>＊アップロードする画像を参照してください。最低１枚、最大20枚を一度にアップロードできます。<a href="#">利用規約</a></p>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                          
                        <input name="images[]" type="file" class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01"  multiple="multiple">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>

                    <br>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black " for="subject">＊タイトル / Title</label> 
                        <input name="title" placeholder="例)オトモしか勝たん" type="subject" id="subject" class="form-control">
                      </div>
                    </div>

                    <label class="text-black" for="">モンハンシリーズ / Monster Hunter Series</label>
                    <select name="series" class="form-select" aria-label="Default select example">
                      <option hidden>モンハンシリーズを選択してください / Choose Series</option>
                      <option value="1">指定しない</option>
                      <option value="2">モンハンダブルクロス</option>
                      <option value="3">モンハンワールド</option>
                      <option value="4">モンハンライズ</option>
                      <option value="5">モンハンサンブレイク</option>
                    </select>
                    <br>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-black" for="message">コメント / Comment</label> 
                        <textarea name="comment" id="message" cols="30" rows="7" class="form-control" placeholder="コメントあればご記入ください。(省略可"></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="アップロード / UPLOAD" class="btn btn-primary btn-md text-white">
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