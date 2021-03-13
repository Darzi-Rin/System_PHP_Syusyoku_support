<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>カレンダー詳細</title>
</head>
<style>
body{
    background: -webkit-repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);
    background: repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);
}
table{
    background-color: white;
}
</style>
<header class="sticky-top">
<?php require "menu_bar.php"; ?>
</header>
<body>
<?php $e = $_GET['date'];?>
<h2><?php print $e;?>日の予定</h2>
<?php 
require 'db_connect.php';
$sql = "select * from company_menu";
$stm = $pdo->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
    if($e === $row["date"]){
?>
    <label><img src="images/<?= $row['id'] ?>.png"></labe>
    <table class="table table-bordered">
    <tbody>
    <tr>
        <th>会社名</th>
        <td><?= $row["name"]?></td>
    </tr>
    <tr>
        <th>業務内容</th>
        <td><?= $row["company"]?></td>
    </tr>
    <tr>
        <th>企業説明</th>
        <td><?= $row["explan"]?></td>
    </tr>
    </tbody>
    </table>
    <hr>
    <style>
        p{
            display:none;
        }
    </style>
<?php
    }else{
?>
    <p>この日に該当する説明会はありません</p>
    <hr>
<?php
    }
}
?>
<button type="button" class="btn btn-outline-primary" onclick="location.href='./top.php'">戻る</button>
</body>
<footer></footer>
</html>
