<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\PageController;

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

//kasanegi.comに接続したら最初にアクセスされるページ
Route::get('/', [PageController::class, 'showTop'])->name('Top.show');
//ホームページ
Route::get('/home', [PageController::class, 'showHome'])->name('Home.show');
//かさねぎ一覧
Route::get('/kasanegi', [PageController::class, 'showKasanegi'])->name('Kasanegi.show');
//他ユーザーのプロフィール画面
Route::get('/userProf', [PageController::class, 'showUserProf'])->name('UserProf.show');
//ブログ
Route::get('/blog', [PageController::class, 'showBlog'])->name('Blog.show');
//お問い合わせフォームへアクセス
Route::get('/contact', [PageController::class, 'showContact'])->name('Contact.show');
//お問い合わせフォーム値の送信
ROute::post('contact',[PostController::class,'sendContact'])->name('contact');

//ログインしてたらアクセスできない
Route::group(['middleware' => ['guest']], function () {
  // ログインフォーム表示
  Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
  // ログイン処理
  Route::post('login', [AuthController::class, 'login'])->name('login');
  //Register - Page
  Route::get('/register',[PageController::class,'showRegister'])->name('Register.show');
  //新規作成-値の送信
  Route::post('register',[PostController::class,'createUser'])->name('register');
});

//ログインしないとアクセスできない
Route::group(['middleware' => ['auth']], function () {
  // プロフィール画面
  Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');
  // ログアウト処理
  Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  //アップロード画面
  Route::get('/upload/kasanegi',[AuthController::class,'showUploadKasanegi'])->name('upKasanegi.show');
  //重ね着のアップロード実行
  Route::post('upKa',[PostController::class,'uploadKasanegi'])->name('kasanegi.up');
}); 

