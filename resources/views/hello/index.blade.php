<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<style>
      body {font-size:16pt; color:#999; }
      h1 { font-size:50pt; text-align:right; color:#f6f6f6;
           margin:-20px 0px -30px 0px; letter-spacing:-4pt; 
         }
</style>
<body>
<h1>Blade/Index</h1>
@if($msg != "")
<p>こんにちは、{{$msg}}さん！</p>
@else
<p>お名前を入力してください。</p>
<form method="POST" action="/helloex3">
  {{ csrf_field() }}
  <input type="text" name="msg">
  <input type="submit">
</form>
@endif
</body>
</html>