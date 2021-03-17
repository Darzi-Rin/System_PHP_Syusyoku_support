<?php session_start(); ?>

<?php
//customerのセッションの破棄
unset($_SESSION['user']);
unset($_SESSION['yoyaku']);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ログアウト画面</title>
	<link rel="stylesheet" href="css/style_home.css">
</head>
<header>
    <?php require 'header.php';?>
</header>
<body>
	<?php
		echo 'ログアウトしました。';
	?>
</body>

</html>