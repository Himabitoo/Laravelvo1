<?php

namespace App\Http\Controllers;

use App\Models\FavoriteModel;
use App\Models\HomeModel;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function HomeFavoriteCreate($id)
    {
        $HomeFavorite = new FavoriteModel();
        $FavoriteRecord = $HomeFavorite->where([ ['userUid',Auth::user()->userUid],['postId',$id],['feature',1] ])->count();

        //ログインいている人がいいねしていなかったら
        if( $FavoriteRecord < 1 ){
            
            //お気に入り保存する
            $HomeFavorite->userUid = Auth::user()->userUid;
            $HomeFavorite->postId = $id;
            $HomeFavorite->feature = 1;
            $HomeFavorite->save();
        }
        else{

            //ログインしている人が既にいいねしていたら
            $HomeFavorite->where([ ['userUid',Auth::user()->userUid],['postId',$id],['feature',1] ])->delete();
        }

        return redirect()->back();
    }

    public function KasanegiFavoriteCreate($id)
    {
        $KasanegiFavorite = new FavoriteModel();
        $FavoriteRecord = $KasanegiFavorite->where([ ['userUid',Auth::user()->userUid],['postId',$id],['feature',2] ])->count();

        //ログインいている人がお気に入りしていなかったら
        if( $FavoriteRecord < 1 ){
            
            //お気に入り保存する
            $KasanegiFavorite->userUid = Auth::user()->userUid;
            $KasanegiFavorite->postId = $id;
            $KasanegiFavorite->feature = 2;
            $KasanegiFavorite->save();
        }
        else{

            //ログインしている人が既にお気に入りしていたら
            $KasanegiFavorite->where([ ['userUid',Auth::user()->userUid],['postId',$id],['feature',2] ])->delete();
        }
        
        return redirect()->back();
    }
}
