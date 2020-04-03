@extends('layouts.helloapp')

@section('title','Index')
    
@section('menubar')
    @parent
    管理ページ
@endsection

@section('content')
    <p>TKSYSTEM</p>
    <p>管理者一覧</p>
    <p>Controller value<br>'message'={{$message}}</p>
    <p>ViewComposer value<br>'view_message'={{$view_message}}</p>

@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection