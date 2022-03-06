<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function postDefComment(PostDefCommentFormRequest $request, $id)
    // {
    //     $HomeCommentdb = new HomeCommentModel();

    //     $postId = $id;
    //     $Comment = $request->comment;

    //     $HomeCommentdb->userUid = Auth::user()->userUid;
    //     $HomeCommentdb->postId = $postId;
    //     $HomeCommentdb->comment = $Comment;
        
    //     $HomeCommentdb->save();
        
    //     return redirect()->route('home.comment');
    // }

    // public function postKasanegiComment(PostKasanegiCommentFormRequest $request, $id)
    // {
    //     $KasanegiCommentdb = new KasanegiCommentModel();

    //     $postId = $id;
    //     $Comment = $request->comment;

    //     $KasanegiCommentdb->userUid = Auth::user()->userUid;
    //     $KasanegiCommentdb->postId = $postId;
    //     $KasanegiCommentdb->comment = $Comment;
        
    //     $KasanegiCommentdb->save();
        
    //     return redirect()->route('kasanegi.comment');
    // }
}
