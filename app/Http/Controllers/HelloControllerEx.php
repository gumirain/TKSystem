<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloControllerEx extends Controller
{
    public function index(Request $req, Response $res){
       

        $html = <<<EOF

         <html>
         <head>
         <title>HelloEx</title>
         <style>
         body {font-size:16pt; color:#999; }
         h1 { font-size:120pt; text-align:right; color:#fafafa;
              margin:-50px 0px -120px 0px; 
            }
         </style>
         </head>
         <body>
           <h1>Hello</h1>
           <h3>Request</h3>
           <pre>{$req}</pre>
           <h3>Response</h3>
           <pre>{$res}</pre>
         </body>
         </html>
        EOF;

          $res->setContent($html);
          return $res;
    }

    public function index1(){
        return view('hello.index');
    }
}
