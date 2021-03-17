<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_home.css">
    <link rel="stylesheet" href="css/style_booking_end.css">
    <link rel="stylesheet" href="js/top.js">
    <title>予約完了</title>
</head>
<header>
    <?php require_once 'header.php'; ?>
</header>

<body>

    <body>
        <!-- メイン -->
        <?php
        //MySQLデータベースに接続する
        require 'db_connect.php';
        //SQL文を作成
        $sql = "INSERT INTO yoyaku VALUES(null , :name , :date , :company)";
        //プリペアードステートメントを作成
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $stm->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
        $stm->bindValue(':company', $_POST['company'], PDO::PARAM_STR);
        //SQLを実行
        $stm->execute();
        echo "お客様情報を登録しました。"
        ?>
        <p><a href="top.php"><button type="button">TOPに戻る</button></a></p>
    </body>
    <footer>
        <?php require_once 'footer.php'; ?>
    </footer>

</html>
