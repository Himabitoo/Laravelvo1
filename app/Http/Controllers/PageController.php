<?php

namespace App\Http\Controllers;

use App\Models\Controll;
use App\Models\HomeModel;
use App\Models\KasanegiModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function showTop(){
        return view('top');
    }

    public function showHome(){
        $detas = HomeModel::all();
        return view('home',['detas' => $detas]);
    }

    public function showSeries(){
        return view('choose');
    }

    public function showKasanegi(){
        $detas = KasanegiModel::all();
        return view('kasanegi',['detas' => $detas]);
    }

    public function showUserProf(){
        return view('userProf');
    }

    public function showBlog(){
        return view('blog');
    }

    public function showContact(){
        return view('contact');
    }

    public function showRegister(){
        return view('register');
    }

    public function showHomeComment($id)
    {   
        // $authUser = Auth::user()->userUid;
        $detas = HomeModel::findOrFail($id);
        $user_id = $detas->userUid;

        // if ($authUser !== $user_id) {
            $detas->watch_count = $detas->watch_count + 1;
            $detas->save();   
        // }

        $comments = DB::table('comment_def')->where('postId',$id);

        $user = DB::table('users')->where('userUid',$user_id)->first();
    
        return view('CoDe',['detas'=> $detas,'user'=>$user,'comments'=> $comments,'id'=> $id]);
    }

    public function showKasanegiComment($id)
    {   
        // $authUser = Auth::user()->userUid;
        $detas = KasanegiModel::findOrFail($id);
        $user_id = $detas->userUid;

        // if($authUser !== $user_id){
            $detas->watch_count = $detas->watch_count + 1;
            $detas->save();
        // }

        $user = DB::table('users')->where('userUid',$user_id)->first();
    
        return view('CoKa',['detas'=> $detas,'user'=>$user]);
    }

}