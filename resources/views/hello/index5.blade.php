{{-- @extends('layouts.helloapp')

@section('title','Index')
    
@section('menubar')
    @parent
    管理ページ
@endsection

@section('content')
    <p>TKSYSTEM</p>
    <p>管理者一覧</p>
    <table>
    @foreach ($data as $item)
    <tr>
      <th>{{$item['name']}}</th>
      <td>{{$item['email']}}</td>
      <td>{{$item['age']}}</td>
    </tr>    
    @endforeach
    </table>
    <p>Controller value<br>'message'={{$message}}</p>
    <p>ViewComposer value<br>'view_message'={{$view_message}}</p>
    <table>
      <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
      @foreach ($items as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->age}}</td>
          </tr>
      @endforeach
    </table>

   @include('components.message', ['msg_title'=>'OK',
      'msg_content'=>'サブビューです。'])

   @component('components.message')
     @slot('msg_title')
         CAUTION!
     @endslot

     @slot('msg_content')
         これは、メッセージの表示です。
     @endslot
   @endcomponent

   <ul>
       @each('components.item', $data,'item')
   </ul>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection --}}

@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
@endsection

@section('content')
<p>{{$msg}}</p>

@if (count($errors) > 0)
    <div style="color:red">
        @foreach ($errors->all() as $error)
          <ul>
            <li>※{{$error}}</li>
          </ul>
        @endforeach
    </div>
@endif
<table>
    <form method="post" action="/hello">
        {{ csrf_field() }}
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="text" name="age" value="{{old('age')}}"></td>
        </tr>
        <tr>
            <th></th><td><input type="submit" value="送信"></td>
        </tr>
</table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection