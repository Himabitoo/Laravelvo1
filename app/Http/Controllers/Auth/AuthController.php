<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{   

    public function __construct(User $user){
        $this->user = $user;
    }

    public function showProfile(){
        return view('admin.profile');
    }

    /** 
    *   @return View 
    */

    public function showLogin(){

        return view('admin.login_form');

    }
    

    /**
     * @param App\Http\Requests\LoginFormRequest
     */

    public function login(LoginFormRequest $request){
        

        //ユーザー取得
        $credentials =  $request->only('email','password');

        //アカウントがロックされていたら弾く
        $user = $this->user->getUserByEmail($credentials['email']);

        if(!is_null($user)){
            if($this->user->isAccountLocked($user)){
                return back()->withErrors([
                    'danger' => 'アカウントがロックされています。解除したい場合は運営に連絡してください。',
                ]);;
            }
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                    //ロック数初期設定が必要な時だけ動かす処理
                   $this->user->resetErrorCount($user);

                return redirect()->route('profile')->with('login_success','ログイン成功しました。');
            }

            //⓷ログイン失敗したらエラーカウントを１増やす

            $user->error_count = $this->user->addErrorCount($user->error_count);

            //⓸エラーカウントが６以上の場合はアカウントをロックする
            if($this->user->lockAccount($user)){

                return back()->withErrors([
                    'danger' => '数回のログインミスによりアカウントがロックされました。',
                ]);;

            }

            $user->save();

        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています',
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
