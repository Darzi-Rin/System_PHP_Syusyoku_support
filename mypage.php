<?php session_start(); ?>
<!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='css/style_home.css'>
  <link rel='stylesheet' href='css/style_mypage.css'>
  <link rel='stylesheet' href='js/top.js'>
  <title>マイページ</title>
</head>
<!-- header -->
<header>
  <?php require_once 'header.php'; ?>
</header>

<body>
  <div class='personal_infomation'>
    <h2>個人情報</h2>
    <?php
    if (!isset($_SESSION['user'])) {
      echo '個人情報を確認するにはログインしてください。';
    } else {  //正常処理 ?>
    <p>お名前：<?= $_SESSION['user']['name'] ?></p>
    <p>パスワード：<?= $_SESSION['user']['password'] ?></p>
    <p>年齢：<?= $_SESSION['user']['age'] ?></p>
		<p>ご住所：<?= $_SESSION['user']['street_address'] ?></p>
    <p>メールアドレス：<?= $_SESSION['user']['mail'] ?></p>
    <?php
    }
    ?>
  </div>
  <br>
  <div class='yoyakukanri'>
    <h2>予約管理</h2>
    <?php
    if (!isset($_SESSION['yoyaku'])) {
      echo '予約管理を確認するにはログインしてください。';
    } else {  //正常処理 ?>
    <p>お名前：<?= $_SESSION['yoyaku']['name'] ?></p>
    <p>日付：<?= $_SESSION['yoyaku']['date'] ?></p>
    <p>会社名：<?= $_SESSION['yoyaku']['company'] ?></p>
    <p>就職状況：<?= $_SESSION['syusyoku_status']['status'] ?></p>
    <?php
    }
    ?>
  </div>
</body>
<!-- footer -->
<footer>
<?php require_once 'footer.php'; ?>
</footer>

</html>