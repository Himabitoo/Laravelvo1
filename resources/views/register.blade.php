@extends('layout.master')
@section('title','かさネギ.com - ホーム画面')
@section('navi')
  <li><a href="{{ route('Home.show') }}">ホーム</a></li>
  <li><a href="{{ route('Kasanegi.show') }}">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}">お問い合わせ</a></li>
@endsection