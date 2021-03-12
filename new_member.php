<?php session_start(); ?>
<!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='css/style_home.css'>
  <link rel="stylesheet" href="css/style_new_member.css">
  <link rel='stylesheet' href='js/top.js'>
  <title>会員登録ページ</title>
</head>
<!-- header -->
<header>
  <?php require_once 'header.php'; ?>
</header>

<body>
  <!-- メイン -->
  <form action="member_check_true.php" method="post">
    <h2>会員登録</h2>
    <p>名前<br><input type='text' name='name'></p>
    <p>パスワード<br><input type='password' name='password'></p>
    <p>住所<br><input type='text' name="street_address"></p>
    <p>メールアドレス（半角英数字）<br><input type='email' name='mail'></p>
    <p>年齢（半角数字）<br><input type='number' name="age"></p>
    <p><a href='member_check_true.php'><input type='submit' value='登録'></a></p>
  </form>
</body>
<!-- footer -->
<footer>
  <?php require_once 'footer.php'; ?>
</footer>

</html>