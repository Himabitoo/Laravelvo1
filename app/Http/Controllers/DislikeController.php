<?php

namespace App\Http\Controllers;

use App\Models\HomeCommentDislikeModel;
use App\Models\HomeDislikeModel;
use App\Models\KasanegiCommentDislikeModel;
use App\Models\KasanegiDislikeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DislikeController extends Controller
{
    public function HomeDislike($id)
    {
        $HomeDislike = new HomeDislikeModel();
        $HomeDislike->userUid = Auth::user()->userUid;
        $HomeDislike->postId = $id;

        $HomeDislike->save();
        
        return redirect()->back();
    }

    public function HomeCommentDislike($id)
    {
        $HomeCommentDislike = new HomeCommentDislikeModel();
        $HomeCommentDislike->userUid = Auth::user()->userUid;
        $HomeCommentDislike->postId = $id;

        $HomeCommentDislike->save();
        
        return redirect()->back();
    }

    public function KasanegiDislike($id)
    {
        $KasanegiDislike = new KasanegiDislikeModel();
        $KasanegiDislike->userUid = Auth::user()->userUid;
        $KasanegiDislike->postId = $id;

        $KasanegiDislike->save();
        
        return redirect()->back();
    }

    public function KasanegiCommentDislike($id)
    {
        $KasanegiCommentDislike = new KasanegiCommentDislikeModel();
        $KasanegiCommentDislike->userUid = Auth::user()->userUid;
        $KasanegiCommentDislike->postId = $id;

        $KasanegiCommentDislike->save();
        
        return redirect()->back();
    }
    
}
