<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    /** 
    *   @return View 
    */

    public function showLogin(){

        return view('login.login_form');

    }

    /**
     * @param App\Http\Requests\LoginFormRequest
     */

    public function login(LoginFormRequest $request){
        

        //ユーザー取得
        $credentials =  $request->only('email','password');

        //アカウントがロックされていたら弾く
        $user = User::where('email','=',$credentials['email'])->first();

        if(!is_null($user)){

            if($user->locked_flg === 1){
                return back()->withErrors([
                    'danger' => 'アカウントがロックされています。解除したい場合は運営に連絡してください。',
                ]);;
            }
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                    //ロック数初期設定が必要な時だけ動かす処理
                    if($user->error_count > 0){
                        $user->error_count = 0;
                        //se
                        $user->save();
                    }
                return redirect()->route('home')->with('login_success','ログイン成功しました。');
            }

            //⓷ログイン失敗したらエラーカウントを１増やす

            $user->error_count = $user->error_count + 1;

            //⓸エラーカウントが６以上の場合はアカウントをロックする
            if($user->error_count > 5){

                $user->locked_flg = 1;
                $user->save();

                return back()->withErrors([
                    'danger' => 'アカウントがロックされました。',
                ]);;

            }

            $user->save();

        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);;
        
    }

    /**
    * ユーザーをアプリケーションからログアウトさせる
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.show')->with('logout','ログアウトしました');
    }

}
