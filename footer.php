<!-- <footer> -->
<hr>
<ul class="footer-menu">
    <li id="pagetop"><a href="#" class="page-top">トップへ戻る ｜</a></li>
    <li><a href="new_member.php">会員登録 ｜</li>
    <li><a href="mypage.php">マイページ ｜</li>
    <?php //ログイン後は表示されないように処理
    if (!(isset($_SESSION['user']))) {
    ?>
        <li><a href="login.php">ログイン</li>
    <?php
    }
    ?>
    <?php //ログイン前は表示されないように処理
    if (isset($_SESSION['user'])) {
    ?>
        <li><a href="logout.php">ログアウト</a></li>
    <?php
    }
    ?>
</ul>
<p>© sample_site</p>
<!-- </footer> -->