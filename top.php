<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>学生向け説明会予約サイト</title>
</head>
<body>
<header>ヘッダー(仮)</header>
<h1>学生向け説明会予約サイトになります</h1>

<img class="main_img" src="images/4191096_m.jpg" alt="top画">

<h2>説明会掲示</h2>
<form>
<div class="top-form-check">
    <input class="cate_check" type="radio" name="cate" value="" onclick="formSwitch()">
    <label class="cate_check_label">すべて</label>
</div>
<div class="top-form-check">
    <input class="cate_check" type="radio" name="cate" value="IT" onclick="formSwitch()">
    <label class="cate_check_label">IT・情報</label>
</div>
<div class="top-form-check">
    <input class="cate_check" type="radio" name="cate" value="etc" onclick="formSwitch()">
    <label class="cate_check_label">その他</label>
</div>
</form>

<ul>
<div id="itlist">
<li>富士ソフト</li>
<li>クエスト</li>
</div>
</ul>
<ul>
<div id="etclist">
<li>まだないんだ</li>
</div>
</ul>

<br>
<h2>カレンダー</h2>
<?php require 'calender.php';?>
<footer>フッター(仮)</footer>
</body>
<script src="js/code.js"></script>
</html>