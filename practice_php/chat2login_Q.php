<?php
// 課題：フォームから送られてきた値がDBに存在すればsessionを発行して
//      chat_Q.phpにリダイレクトする処理を実装する
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
 <div class="container">
<h1 class="bg-primary">ログイン</h1>
<form action="" method="post">
  <div class="form-group">
  <label>ID</label>
  <input type="text" name="name" value="">
  <label>パスワード</label>
  <input type="text" name="passwprd" value="">
  </div>
  <button type="submit" class="btn btn-default">ログイン</button>
</form>
</div>
</body>
</html>