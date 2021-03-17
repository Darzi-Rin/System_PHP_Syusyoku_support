<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style_home.css">
  <link rel="stylesheet" href="css/style_booking.css">
  <link rel="stylesheet" href="js/top.js">
  <title>予約</title>
</head>
<header>
  <?php require_once 'header.php'; ?>
</header>

<body>
  <section>
    <div class="customer">
      <?php
      require 'db_connect.php';
      if (!isset($_SESSION['user'])) {
        echo '';
      } else {  //正常処理
      ?>
        <h3>ログイン情報</h3>
        <p>お名前:<?= $_SESSION['user']['name'] ?></p>
        <p>パスワード:<?= $_SESSION['user']['password'] ?></p>
        <p>住所:<?= $_SESSION['user']['street_address'] ?></p>
        <p>メールアドレス:<?= $_SESSION['user']['mail'] ?></p>
        <p>年齢:<?= $_SESSION['user']['age'] ?></p>
        <hr>
      <?php
      }
      ?>
    </div>
  </section>
  <h2 class="title">説明会掲示</h2>
  <?php
  require 'db_connect.php';
  if (!isset($_SESSION['user'])) {
    echo '説明会情報を確認するにはログインしてください。';
  } else {  //正常処理
    $sql = "select * from demo_booking ";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  ?>
    <div id="datepicker">
      <div class="row-items">
        <?php
        foreach ($result as $row) {
          if ($row['id'] == 2) {
        ?>
            <div id="it-list">
              <div class="row-item">
                <?= $row['id'] ?>
                <?= $row['name'] ?>
                <p class="row-date">日時：<?= $row['date'] ?></p>
              </div>
            </div>


      </div>
      <form action="booking_end.php" method="post">
        <!-- <p>お名前:<?= $_SESSION['user']['name'] ?></p> -->
        <p>名前:<input type="text" name="name" value="<?= $_SESSION['user']['name'] ?>"></p>
        <p>日付:<input type="text" name="date" value="<?= $row['date'] ?>"></p>
        <p>会社名:<input type="text" name="company" value="<?= $row['name'] ?>"></p>
        <p><a href='booking_end.php'><input type='submit' value='予約する'></a></p>
      </form>
<?php
          }
        }
      }
?>
    </div>
</body>
<footer>
  <?php require_once 'footer.php'; ?>
</footer>

</html>
