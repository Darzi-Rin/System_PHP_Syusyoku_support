<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>カレンダー詳細</title>
</head>
<header class="sticky-top">
<?php require "menu_bar.php"; ?>
</header>
<body>
<?php $e = $_GET['date'];?>
<h2><?php print $e;?>日の予定</h2>
<?php 
require 'db_connect.php';
$sql = "select * from company_menu where id = :id";
$stm = $pdo->prepare($sql);
$stm->bindValue(':id',isset($_REQUEST['id']),PDO::PARAM_STR);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
    if($e === $row["date"]){
?>
    <p><img src="images/<?= $row['id'] ?>.png"></p>
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
