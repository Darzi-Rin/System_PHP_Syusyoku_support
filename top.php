<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_ogm.css">
    <link rel="styelsheet" href="css/style_home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>学生向け説明会予約サイト</title>
</head>
<header><?php require "header.php" ?></header>
<body>
<h1 class="title">IT業界に幅広く対応！【Syusyoku_support】</h1>
<div class="img">
<img class="main_img" src="images/4191096_m.jpg" alt="top画">
</div>
<?php require "category.php"; ?>
<h2 class="title">カレンダー</h2>
<p>今日の日付は青く塗られています。クリックすると、その日に何があるかを確認できます</p>
<?php require 'calender.php';?>
</body>
<footer><?php require "footer.php"?></footer>
<script src="js/code.js"></script>
<script src="js/top.js"></script>
</html>