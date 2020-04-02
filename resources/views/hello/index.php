<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<style>
      body {font-size:16pt; color:#999; }
      h1 { font-size:100pt; text-align:right; color:#f6f6f6;
           margin:-50px 0px -100px 0px; 
         }
</style>
<body>
    <h1>Index</h1>
    <p><?= $msg?></p>
    <p style="color:red;">ユーザー[<?= $id?>]さんでログイン中</p>
    <p><?= date("Y年n月j日");?></p>
</body>
</html>