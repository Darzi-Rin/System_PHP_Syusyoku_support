<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="datepicker"></div><br>
    時間を選択してください<br>
        <select name="time">
        <option value=""> 選択してください</option>
        <option value="">9:00～</option>
        <option value="">10:00～</option>
        <option value="">11:00～</option>
        <option value="">13:00～</option>
        <option value="">14:00～</option>
        <option value="">15:00～</option>
        <option value="">16:00～</option>
        <option value="">17:00～</option>
        </select><br><br><br>
        
<section>
    <form id="entry">
        <dl>
            <dt>お名前 <span class="must">※</span></dt>
            <dd><input type="text" name="name"></dd>
            <dt>メールアドレス <span class="must">※</span></dt>
            <dd><input type="text" name="email"></dd>
            <dt>TEL <span class="must">※</span></dt>
            <dd><input type="text" name="tel"></dd>
            <dt>パスワード <span class="must">※</span></dt>
            <dd><input type="text" name="password"></dd>
            <dt>性別 <span class="must"></span></dt>
            <dd><input type="radio" name="sex" value="" />男
                <input type="radio" name="sex" value="" />女
            </dd>
        </dl>
        <p id="submit_button_cover">
            <input type="submit" id="submit_button" value="予約する">
        </p>
    </form>
</section>
</body>
</html>