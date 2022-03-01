@extends('layout.master')
@section('title','かさネギ.com - 重ね着アップロードフォーム')
@section('navi')
  <li><a href="{{ route('Home.show') }}" style="font-size:20px;">ホーム</a></li>
  <li class="active"><a href="{{ route('Kasanegi.show') }}" style="font-size:20px;">重ね着写真集</a></li>
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
                  <h2 class="text-black mb-4 text-center">重ね着アップロードページ</h2>
                </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <p class="mb-5">＊マークは記入必須項目です。入力されたものは当サイトの向上のために使用されるものであり、第三者への公開を目的としたものではありません。<a href="#">利用規約</a></p>
             <div class="row">
                <div class="col-md-12">               
                  <form action="{{ route('kasanegi.up') }}" method="post" enctype="multipart/form-data">
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
                    
                    <p>＊最低１枚、最大６枚を一度にアップロードできます。<a href="#">利用規約</a></p>
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
                    
                    <label class="text-black" for="">＊キャラクターの性別 / Character's gender</label> 
                    <div class="form-check">
                      <input name="sex" class="form-check-input" type="radio" value="1" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        男 / Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="sex" class="form-check-input" type="radio" value="2" id="flexCheckChecked">
                      <label  class="form-check-label" for="flexCheckChecked">
                        女 / Female
                      </label>
                    </div>
                    <br>

                    <label class="text-black" for="">＊モンハンシリーズ / Monster Hunter Series</label>
                    <select name="series" class="form-select" aria-label="Default select example">
                      <option hidden>モンハンシリーズを選択してください / Choose Series</option>
                      <option value="1">モンハンダブルクロス</option>
                      <option value="2">モンハンワールド</option>
                      <option value="3">モンハンライズ</option>
                      <option value="4">モンハンサンブレイク</option>
                    </select>
                    <br>
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black " for="subject">＊コンセプト / Concept</label> 
                        <input placeholder="参考やコンセプトを書いてください。ユーザーの目に留まり易くなります" name="concept" type="subject" id="subject" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="email">＊頭 / head</label> 
                        <input name="head" type="text" class="form-control" placeholder="例:)銀レウ">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="email">＊胴 / body</label> 
                        <input name="body" type="text" class="form-control" placeholder="例:)銀レウ">
                      </div>
                    </div>
                    
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="email">＊腕 / arm</label> 
                        <input name="arm" type="text" class="form-control" placeholder="例:)銀レウ">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="email">＊腰 / weight</label> 
                        <input name="waist" type="text" class="form-control" placeholder="例:)銀レウ">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="email">＊脚 / foot</label> 
                        <input name="foot" type="text" class="form-control" placeholder="例:)銀レウ">
                      </div>
                    </div>


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