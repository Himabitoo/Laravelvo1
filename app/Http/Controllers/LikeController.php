<?php

namespace App\Http\Controllers;

use App\Models\HomeCommentLikeModel;
use App\Models\HomeCommentModel;
use App\Models\HomeLikeModel;
use App\Models\HomeModel;
use App\Models\KasanegiCommentLikeModel;
use App\Models\KasanegiCommentModel;
use App\Models\KasanegiLikeModel;
use App\Models\KasanegiModel;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function HomeLikeCreate($id)
    {
        $HomeLike = new HomeLikeModel();
        $likeRecord = $HomeLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $HomeLike->userUid = Auth::user()->userUid;
            $HomeLike->postId = $id;
            $HomeLike->save();

        }
        else{//ログインしている人が既にいいねしていたら
            
            $HomeLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        
        }
        
        //Home_likesをカウントする
        $count = $HomeLike->where('postId',$id)->count();

        //レコードidのlikesをカウントしたのを代入する
        $Defdb = HomeModel::findOrFail($id);
        $Defdb->likeit = $count;
        $Defdb->save();

        return redirect()->back();
    }


    public function HomeCommentLikeCreate($id)
    {
        $HomeCommentLike = new HomeCommentLikeModel();
        $likeRecord = $HomeCommentLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $HomeCommentLike->userUid = Auth::user()->userUid;
            $HomeCommentLike->postId = $id;
            $HomeCommentLike->save();
        }
        else{

            //ログインしている人が既にいいねしていたら
            $HomeCommentLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        }
        
        //Home_comment_likesをカウントする
        $count = $HomeCommentLike->where('postId',$id)->count();

        //レコードidのlikesをカウントしたのを代入する
        $DefCommentdb = HomeCommentModel::findOrFail($id);
        $DefCommentdb->likeit = $count;
        $DefCommentdb->save();

        return redirect()->back();
    }


    public function KasanegiLikeCreate($id)
    {
        $KasanegiLike = new KasanegiLikeModel();
        $likeRecord = $KasanegiLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $KasanegiLike->userUid = Auth::user()->userUid;
            $KasanegiLike->postId = $id;
            $KasanegiLike->save();

        }
        else{//ログインしている人が既にいいねしていたら
            
            $KasanegiLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        
        }
        
        //Kasanegi_likesをカウントする
        $count = $KasanegiLike->where('postId',$id)->count();

        //レコードidのlikesをカウントしたのを代入する
        $Kasanegidb = KasanegiModel::findOrFail($id);
        $Kasanegidb->likeit = $count;
        $Kasanegidb->save();

        return redirect()->back();
    }


    public function KasanegiCommentLikeCreate($id)
    {
        $KasanegiCommentLike = new KasanegiCommentLikeModel();
        $likeRecord = $KasanegiCommentLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $likeRecord < 1 ){
            
            //いいね保存する
            $KasanegiCommentLike->userUid = Auth::user()->userUid;
            $KasanegiCommentLike->postId = $id;
            $KasanegiCommentLike->save();
        }
        else{

            //ログインしている人が既にいいねしていたら
            $KasanegiCommentLike->where([ ['userUid',Auth::user()->userUid],['postId',$id] ])->delete();
        }
        
        //Kasanegi_comment_likesをカウントする
        $count = $KasanegiCommentLike->where('postId',$id)->count();

        //レコードidのlikesをカウントしたのを代入する
        $KasanegiCommentdb = KasanegiCommentModel::findOrFail($id);
        $KasanegiCommentdb->likeit = $count;
        $KasanegiCommentdb->save();

        return redirect()->back();
    }
    


}
