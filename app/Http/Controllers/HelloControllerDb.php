<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloControllerDb extends Controller
{
    public function index(Request $req)
    {
      $items = DB::select('select * from people');
      return view('hello.index5',['items' => $items]);
    }
}
