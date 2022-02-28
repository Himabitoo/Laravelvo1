<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function createUser(RegisterFormRequest $request){

        //コンストラクト化
        $Userdb = new User();
    
        $Userdb->userUid = $request->userUid;
        $Userdb->name = $request->firstName.' '.$request->lastname;
        $Userdb->email = $request->email;
        $Userdb->password = Hash::make($request->password);
        
        $Userdb->save();
        
        return redirect()->route('login.show')->with('successCreateAccount','アカウント作成できました。ログインしてください。');
    }
}
