@extends('layouts.helloapp')

@section('title','Index')
    
@section('menubar')
    @parent
    管理ページ
@endsection

@section('content')
    <p>TKSYSTEM</p>
    <p>管理者一覧</p>
    <table>
    @foreach ($data2 as $item)
    <tr>
      <th>{{$item['name']}}</th>
      <td>{{$item['mail']}}</td>
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
            <td>{{$item->mail}}</td>
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
@endsection