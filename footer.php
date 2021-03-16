<!-- <<<<<<< HEAD -->
<!-- <footer> -->
<hr>
<ul class="footer-menu">
    <li id="pagetop"><a href="top.php" class="page-top">トップへ戻る </a>｜</li>
    <li><a href="new_member.php">会員登録 </a>｜</li>
    <li><a href="mypage.php">マイページ </a>｜</li>
    <?php //ログイン後は表示されないように処理
    if (!(isset($_SESSION['user']))) {
    ?>
        <li><a href="login.php">ログイン</a></li>
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
<!-- =======

>>>>>>> c447cd812568895e39fb89ec00b0edc85c610d57 -->
