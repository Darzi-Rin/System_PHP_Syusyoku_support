<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='css/style_home.css'>
  <link rel='stylesheet' href='js/top.js'>
</head>
<nav>
  <ul class="color">
    <li><a class="items" href="top.php">トップページ</a></li>
    <li><a class="items" href="new_member.php">会員登録</a></li>
    <li><a class="items" href="mypage.php">マイページ</a></li>
    <?php //ログイン後は表示されないように処理
    if (!(isset($_SESSION['user']))) {
    ?>
      <li><a class="items" href="login.php">ログイン</a></li>
    <?php
    }
    ?>
    <?php //ログイン前は表示されないように処理
    if (isset($_SESSION['user'])) {
    ?>
      <li><a class="items" href="logout.php">ログアウト</a></li>
    <?php
    }
    ?>
  </ul>
</nav>
<hr>