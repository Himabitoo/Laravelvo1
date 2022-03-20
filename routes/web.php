<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\DislikeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeCommentController;
use App\Http\Controllers\KasanegiCommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PageController::class)->group(function()
{
  //kasanegi.comに接続したら最初にアクセスされるページ
  Route::get('/','showTop')->name('Top.show');
  //ホームページ
  Route::get('/home','showHome')->name('Home.show');
  //コメントDef
  Route::get('/home/{id}','showHomeComment')->name('HomeComment.show');
  //かさねぎ一覧
  Route::get('/kasanegi','showKasanegi')->name('Kasanegi.show');
  //コメントDef
  Route::get('/kasanegi/{id}','showKasanegiComment')->name('KasanegiComment.show');
  //他ユーザーのプロフィール画面
  Route::get('/user/{userUid}','showUserProf')->name('UserProf.show');
  //ブログ
  Route::get('/blog', 'showBlog')->name('Blog.show');
  //お問い合わせフォームへアクセス
  Route::get('/contact','showContact')->name('Contact.show');

});

//お問い合わせフォーム値の送信
Route::post('contact',[PostController::class,'sendContact'])->name('contact');

//ログインしてたらアクセスできない
Route::group(['middleware' => ['guest']], function () 
{
  // ログインフォーム表示
  Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
  // ログイン処理
  Route::post('login', [AuthController::class, 'login'])->name('login');
  //Register - Page
  Route::get('/register',[PageController::class,'showRegister'])->name('Register.show');
  //新規作成-値の送信
  Route::post('register',[PostController::class,'createUser'])->name('register');


  //ソーシャルログインリダイレクトgoogle
  Route::get('/google/redirect',[GoogleLoginController::class,'redirectToGoogle'])->name('Google.redirect');
  //ソーシャルコールバック
  Route::get('/google/callback',[GoogleLoginController::class,'GoogleCallback'])->name('GoogleCallBack');
});

//ログインしないとアクセスできない
Route::group(['middleware' => ['auth']], function () 
{
  // プロフィール画面
  Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');
  // ログアウト処理
  Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  //重ね着アップロード画面
  Route::get('/upload/kasanegi',[AuthController::class,'showUploadKasanegi'])->name('upKasanegi.show');
  //重ね着のアップロード実行
  Route::post('/upload/kasanegi',[PostController::class,'uploadKasanegi'])->name('kasanegi.up');
  //ホームアップロード画面
  Route::get('/upload/def',[AuthController::class,'showUploadDef'])->name('upDef.show');
  //ホームのアップロード実行
  Route::post('/upload/def',[PostController::class,'uploadDef'])->name('Def.up');
  //コメント処理Def
  Route::post('/home/{id}/comment',[HomeCommentController::class,'postDefComment'])->name('DefCreateComment');
  //コメント処理Kasanegi
  Route::post('/kasanegi/{id}/comment',[KasanegiCommentController::class,'postKasanegiComment'])->name('KasanegiCreateComment'); 
  
  //いいね機能ルーティング
  Route::controller(LikeController::class)->group(function(){

    //HOME系ページでのいいね機能
    Route::prefix('/home')->group(function()
    {
      Route::post('/{id}/like','HomeLikeCreate')->name('HomeLike.create');
      
      Route::post('/{id}/comment/like','HomeCommentLikeCreate')->name('HomeCommentLike.create');
      
    });

    //重ね着系ページに対していいね機能
    Route::prefix('/kasanegi')->group(function()
    {
      Route::post('/{id}/like','KasanegiLikeCreate')->name('KasanegiLike.create');
      
      Route::post('/{id}/comment/like','KasanegiCommentLikeCreate')->name('KasanegiCommentLike.create');

    });
  });

  //低評価機能ルーティング
  Route::controller(DislikeController::class)->group(function()
  {
    //HOME系ページでの低評価機能
    Route::prefix('/home')->group(function(){
    
      Route::post('/{id}/dislike','HomeDislikeCreate')->name('HomeDislike.create');
      
      Route::post('/{id}/comment/dislike','HomeCommentDislikeCreate')->name('HomeCommentDislike.create');
      
    });

    //重ね着系ページでの低評価機能
    Route::prefix('/kasanegi')->group(function(){
      
      Route::post('/{id}/dislike','KasanegiDislikeCreate')->name('KasanegiDislike.create');
      
      Route::post('/{id}/comment/dislike','KasanegiCommentDislike')->name('KasanegiCommentDislike.create');

    });
  });

  //お気に入りルーティング
  Route::controller(FavoriteController::class)->group(function()
  {
    //Home投稿に対してのお気に入り機能
    Route::post('/home/{id}/favorite','HomeFavoriteCreate')->name('HomeFavorite.create');
    //Kasanegi投稿に対してのお気に入り機能
    Route::post('/kasanegi/{id}/favorite','KasanegiFavoriteCreate')->name('KasanegiFavorite.create');
  });

  //報告ルーティング
  Route::controller(ReportController::class)->group(function(){

    Route::prefix('/home')->group(function(){
      //Home投稿に対しての報告
      Route::post('/{id}/report','HomeReport')->name('HomeReport.create');
      //Homeコメントに対しての報告
      Route::post('/{id}/comment/report','HomeCommentReport')->name('HomeCommentReport.create');
    });

    Route::prefix('/kasanegi')->group(function(){
      //重ね着投稿に対しての報告
      Route::post('/{id}/report','KasanegiReport')->name('KasanegiReport.create');
      //重ね着コメントに対しての報告
      Route::post('/{id}/comment/report','KasanegiCommentReport')->name('KasanegiCommentReport.create');
    });
    
  });

}); 

