<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="css/style_home.css">
</head>
<header>
    <?php require 'header.php'; ?>
</header>
<body>
    <form action="login_output.php" method="post">
        名前　　　<input type="text" name="name"><br>
        パスワード<input type="password" name="password"><br>
        <input type="submit" value="ログイン">
    </form>
</body>

</html>
