<?php session_start(); ?>
<!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>登録完了画面</title>
</head>

<body>
  <!-- メイン -->
  <?php
  //MySQLデータベースに接続する
  require 'db_connect.php';
  //SQL文を作成
  $sql = "INSERT INTO user VALUES(:null, :name , :password , :street_address , :mail , :age)";
  //プリペアードステートメントを作成
  $stm = $pdo->prepare($sql);
  $stm->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
  $stm->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
  $stm->bindValue(':street_address', $_POST['street_address'], PDO::PARAM_STR);
  $stm->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
  $stm->bindValue(':age', $_POST['age'], PDO::PARAM_INT);
  //SQLを実行
  $stm->execute();
  echo "お客様情報を登録しました。"
  ?>
  <!-- トップページへ戻る -->
  <p><a href='top.php'>トップページへ戻る</a></p>
</body>

</html>