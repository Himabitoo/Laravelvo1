<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showTop(){
        return view('top');
    }

    public function showHome(){
        return view('home');
    }

    public function showSeries(){
        return view('choose');
    }

    public function showKasanegi(){
        return view('kasanegi');
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
}
