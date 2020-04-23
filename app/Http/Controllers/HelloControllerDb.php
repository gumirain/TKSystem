<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloControllerDb extends Controller
{
    public function index(Request $req)
    {
      $items = DB::select('select * from people');
      $data = [
               ['name'=>'山田たろう','email'=>'taro@yamada','age'=>23],
               ['name'=>'田中はなこ','email'=>'hanako@tanaka','age'=>24],
               ['name'=>'鈴木さちこ','email'=>'satiko@suzuki','age'=>25],
              ];
      return view('hello.index5',['items' => $items,'data' => $data,
                   'message' => 'Hello!','data2'=>$req->data2]);
    }

    public function index2()
    {
        return view('hello.index6',['message' => 'Hello!']);
    }

}
