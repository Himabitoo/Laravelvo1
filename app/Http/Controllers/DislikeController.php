<?php

namespace App\Http\Controllers;

use App\Models\HomeCommentDislikeModel;
use App\Models\HomeCommentModel;
use App\Models\HomeDislikeModel;
use App\Models\HomeModel;
use App\Models\KasanegiCommentDislikeModel;
use App\Models\KasanegiCommentModel;
use App\Models\KasanegiDislikeModel;
use App\Models\KasanegiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DislikeController extends Controller
{
    public function HomeDislikeCreate($id)
    {
        $HomeDislike = new HomeDislikeModel();
        $likeRecord = $HomeDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $HomeDislike->userUid = Auth::user()->userUid;
            $HomeDislike->postId = $id;
            $HomeDislike->save();

        }
        else{//ログインしている人が既にいいねしていたら
            
            $HomeDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        
        }
        
        //Home_dislikeをカウントする
        $count = $HomeDislike->where('postId',$id)->count();

        //レコードidのdislikeをカウントしたのを代入する
        $Defdb = HomeModel::findOrFail($id);
        $Defdb->dislike = $count;
        $Defdb->save();

        return redirect()->back();
    }

    public function HomeCommentDislikeCreate($id)
    {
        $HomeCommentDislike = new HomeCommentDislikeModel();
        $likeRecord = $HomeCommentDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $HomeCommentDislike->userUid = Auth::user()->userUid;
            $HomeCommentDislike->postId = $id;
            $HomeCommentDislike->save();

        }
        else{//ログインしている人が既にいいねしていたら
            
            $HomeCommentDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        
        }
        
        //Home_dislikeをカウントする
        $count = $HomeCommentDislike->where('postId',$id)->count();

        //レコードidのdislikeをカウントしたのを代入する
        $Defdb = HomeCommentModel::findOrFail($id);
        $Defdb->dislike = $count;
        $Defdb->save();

        return redirect()->back();
    }

    public function KasanegiDislikeCreate($id)
    {
        $KasanegiDislike = new KasanegiDislikeModel();
        $likeRecord = $KasanegiDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $KasanegiDislike->userUid = Auth::user()->userUid;
            $KasanegiDislike->postId = $id;
            $KasanegiDislike->save();

        }
        else{//ログインしている人が既にいいねしていたら
            
            $KasanegiDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        
        }
        
        //kasanegi_dislikeをカウントする
        $count = $KasanegiDislike->where('postId',$id)->count();

        //レコードidのdislikeをカウントしたのを代入する
        $Kasanegidb = KasanegiModel::findOrFail($id);
        $Kasanegidb->dislike = $count;
        $Kasanegidb->save();

        return redirect()->back();
    }

    public function KasanegiCommentDislike($id)
    {
        $KasanegiCommentDislike = new KasanegiCommentDislikeModel();
        $likeRecord = $KasanegiCommentDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $KasanegiCommentDislike->userUid = Auth::user()->userUid;
            $KasanegiCommentDislike->postId = $id;
            $KasanegiCommentDislike->save();

        }
        else{//ログインしている人が既にいいねしていたら
            
            $KasanegiCommentDislike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        
        }
        
        //kasanegi_dislikeをカウントする
        $count = $KasanegiCommentDislike->where('postId',$id)->count();

        //レコードidのdislikeをカウントしたのを代入する
        $Kasanegidb = KasanegiCommentModel::findOrFail($id);
        $Kasanegidb->dislike = $count;
        $Kasanegidb->save();

        return redirect()->back();
    }
    
}
