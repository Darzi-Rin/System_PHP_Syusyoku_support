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
    require 'db_connect.php';
    if (!isset($_SESSION['user'])) {
      echo '個人情報を確認するにはログインしてください。';
    } else {  //正常処理
    ?>
      <p>お名前：<?= $_SESSION['user']['name'] ?></p>
      <p>パスワード：<?= $_SESSION['user']['password'] ?></p>
      <p>年齢：<?= $_SESSION['user']['age'] ?></p>
      <p>ご住所：<?= $_SESSION['user']['street_address'] ?></p>
      <p>メールアドレス：<?= $_SESSION['user']['mail'] ?></p>
    <?php
    }
    ?>
  </div>
  <hr>
  <br>
  <div class='yoyakukanri'>
    <h2>予約管理</h2>
    <?php
    require 'db_connect.php';
    if (!isset($_SESSION['user'])) {
      echo '予約情報を確認するにはログインしてください。';
    } else {  //正常処理
      $sql = "select * from yoyaku ";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <div id="datepicker">
        <div class="row-items">
          <?php
          foreach ($result as $row) {
            if ($row['name'] == $_SESSION['user']['name']) {
          ?>
              <div id="it-list">
                <div class="row-item">
                  <p><?= $row['name'] ?></p>
                  <p><?= $row['company'] ?></p>
                  <p class="row-date">日時：<?= $row['date'] ?></p>
                  <hr>
                </div>
              </div>
            <?php
            }
            ?>
        </div>
    <?php
          }
        }
    ?>
      </div>
  </div>
</body>
<!-- footer -->
<footer>
  <?php require_once 'footer.php'; ?>
</footer>

</html>
