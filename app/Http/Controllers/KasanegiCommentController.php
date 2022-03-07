<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostKasanegiCommentFormRequest;
use App\Models\KasanegiCommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasanegiCommentController extends Controller
{
    public function postKasanegiComment(PostKasanegiCommentFormRequest $request,$id)
    {
        $KasanegiCommentdb = new KasanegiCommentModel();
        $postId = $id;
        $Comment = $request->comment;

        $KasanegiCommentdb->userUid = Auth::user()->userUid;
        $KasanegiCommentdb->postId = $postId;
        $KasanegiCommentdb->comment = $Comment;
        
        $KasanegiCommentdb->save();
        
        return redirect()->back();
    }
}
