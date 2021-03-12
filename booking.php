<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_home.css">
    <link rel="stylesheet" href="css/style_booking.css">
    <link rel="stylesheet" href="js/top.js">
    <title>Document</title>
</head>
<header>
    <?php require_once 'header.php'; ?>
</header>
<body>
    <div id="datepicker">
        <form action="booking_end.php" method="post">
	        <table>
	            <tr><th><label for="name">お名前:</label></th>
	                <td><input type="text" name="name" value="" ></td>
	            </tr>
		        <tr><th><label for="date">日時:</label></th>
		            <td><input type="date" name="date" value="" ></td>
		        </tr>
		        <tr><th><label for="company">会社名:</label></th>
		            <td><input type="text" name="company" value="" ></td>
		        </tr>
	        </table>
        </form>
    </div>   
<section>
    <div class="customer">
        <h3>個人情報</h3>
        <p>お名前:<?= $_SESSION['user']['name'] ?></p>
        <p>パスワード:<?= $_SESSION['user']['password'] ?></p>
        <p>住所:<?= $_SEESION['user']['street_addrees'] ?></p>
        <p>メールアドレス:<?= $_SESSION['user']['mail'] ?></p>
        <p>年齢:<?= $_SESSION['user']['age'] ?></p>
    </div>
        <p id="submit_button_cover">
            <input type="button" onclick="location.href='./booking_end.php'" value="予約する">
        </p>
</section>
</body>
<footer>
    <? require_once 'footer.php'; ?>
</footer>
</html>