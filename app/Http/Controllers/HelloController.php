<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF

<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px; }
</style>
EOF;

$body = '</head><body>';
$end = '</body></html>';

// function tag($tag, $txt)
// {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }
class HelloController extends Controller
{
    // public function index() {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title','Hello/Index') . $style .
    //         $body
    //         . tag('h1','Index') . tag('p','this is Index page')
    //         . '<a href="/hello/other">go to Other page</a>'
    //         . $end;
    //     return $html;
    // }


    public function index(Request $req)
    {
        $msg = 'フォームを入力してください。';
    //   $validator = Validator::make($req->query(),[
    //      'id' => 'required',
    //      'pass' => 'required',
    //   ]);
    //   if($validator->fails())
    //   {
    //       $msg = 'クエリに問題があります。';
    //   }else
    //   {
    //       $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
    //   }

      $items = DB::select('select * from people');
      $data = [
               ['name'=>'山田たろう','email'=>'taro@yamada','age'=>23],
               ['name'=>'田中はなこ','email'=>'hanako@tanaka','age'=>24],
               ['name'=>'鈴木さちこ','email'=>'satiko@suzuki','age'=>25],
              ];
      return view('hello.index5',['items' => $items,'data' => $data,
                   'msg' => $msg,'data2'=>$req->data2]);
    }

    // public function other(){
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title','Hello/Other') . $style .
    //         $body
    //         . tag('h1','Other') . tag('p','this is Other page')
    //         . $end;
    //     return $html;
    // }

    // public function post(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'mail' => 'nullable|email',
    //         'age' => 'nullable|numeric|between:0,150',
    //     ],[
    //         'name.required' => 'nameは必須項目です。',
    //         'mail.email' => 'mailを正しく入力してください。。',
    //         'age.numeric' => 'ageは半角数字で入力してください。',
    //         'age.between' => 'ageは0~150の間で入力してください。',
    //     ]);
    //     if($validator->fails())
    //     {
    //       return redirect('/hello')
    //       ->withErrors($validator)
    //       ->withInput();
    //     }
    //    return view('hello.index5',['msg'=>'正しく入力されました。']);
    // }

    public function post(HelloRequest $request)
    {
        return view('hello.index5', ['msg'=>'正しく入力されました。']);
    }
}