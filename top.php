<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>学生向け説明会予約サイト</title>
</head>
<header class="sticky-top">
<?php require "menu_bar.php"; ?>
</header>
<body>
<h1>学生向け説明会予約サイト</h1>

<img class="main_img" src="images/4191096_m.jpg" alt="top画">
<?php require "category.php"; ?>
<h2>カレンダー</h2>
<p>今日の日付は青く塗られています。クリックすると、その日に何があるかを確認できます</p>
<?php require 'calender.php';?>
</body>
<script src="js/code.js"></script>
</html>