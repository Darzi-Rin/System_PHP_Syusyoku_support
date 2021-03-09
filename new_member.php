<!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='css/style_new_member.css'>
  <link rel='stylesheet' href='js/top.js'>
  <title>会員登録ページ</title>
</head>
<!-- header -->
<header>
  <nav>
    <ul class="color">
      <li><a class="items" href="top.php">トップページ</a></li>
      <li class="current"><a class="items" href="new_member.php">会員登録</a></li>
      <li><a class="items" href="mypage.php">マイページ</a></li>
      <li><a class="items" href="login.php">ログイン</a></li>
    </ul>
  </nav>
</header>

<body>
  <!-- メイン -->
  <div class='regist_form'>
    <h2>会員登録</h2>
    <p>名前<br><input type='text' name='name'></p>
    <p>年齢（半角数字）<br><input type='number' name='age'></p>
    <p>メールアドレス（半角英数字）<br><input type='email' name='mail'></p>
    <p>パスワード<br><input type='password' name='pass'></p>
    <p>住所<br><input type='text' name="street_address"></p>
    <p><a href='member_check_true.html'><input type='submit' value='登録'></a></p>
    <p><a href='member_check_false.html'><input type='submit' value='登録失敗ver'></a></p>
  </div>
</body>
<!-- footer -->
<footer>
  <ul class="footer-menu">
    <li id="pagetop"><a href="#" class="page-top">トップへ戻る ｜</a></li>
    <li><a href="new_member.php">会員登録 ｜</li>
    <li><a href="mypage.php">マイページ ｜</li>
    <li><a href="login.php">ログイン</li>
  </ul>
  <p>© sample_site</p>
</footer>

</html>