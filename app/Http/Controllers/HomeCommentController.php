<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostDefCommentFormRequest;
use App\Models\HomeCommentModel;
use Illuminate\Support\Facades\Auth;

class HomeCommentController extends Controller
{
    public function postDefComment(PostDefCommentFormRequest $request,$id)
    {
        $HomeCommentdb = new HomeCommentModel();
        $postId = $id;
        $Comment = $request->comment;

        $HomeCommentdb->userUid = Auth::user()->userUid;
        $HomeCommentdb->postId = $postId;
        $HomeCommentdb->comment = $Comment;
        
        $HomeCommentdb->save();
        
        return redirect()->back();
    }
}
