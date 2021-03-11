<div class="menu_bar">
<a href="top.php">トップに戻る</a>
<a href="mypage.php">マイページ</a>
<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['customer']))) {
?>
<a href="login.php">ログイン</a>
<?php
}
?>

<?php //ログイン前は表示されないように処理
if (isset($_SESSION['customer'])) {
?>
    <a href="logout.php">ログアウト</a>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['customer']))) {
?>
<a href="booking.php">会員登録</a>
<?php
}
?>
<hr>
</div>
<style>
    .menu_bar{
        background-color: white;
    }
</style>
