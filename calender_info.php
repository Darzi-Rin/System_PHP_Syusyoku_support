<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>カレンダー詳細</title>
</head>
<body>
<?php $e = $_GET['date'];?>
<h2><?php print $e;?>日の予定</h2>
<?php 
require_once('db_conect.php');
$sql = "select * from company_menu where id = :id";
$stm = $pdo->prepare($sql);
$stm->bindValue(":id",$_REQUEST['id'],PDO::PARAM_STR);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
?>
<p>日時：<?= $row["date"] ?></p>
<p>社名：<?= $row["name"]?></p>
<p>企業説明：<?= $row["explan"]?></p>
<?php
 }
?>
<button type="button" class="btn btn-outline-primary" onclick="location.href='./top.php'">戻る</button>
</body>
</html>
