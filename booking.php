<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <div id="datepicker">
            <tr>
                <th>開催日</th><th>時間</th><th>場所</th><th>備考（会場）</th><th>予約</th>
            </tr>
            <tr>
                <td>2022/03/09(月)</td>
                <td>10:00~13:00</td>
                <td>東京</td>
                <td>Webセミナー</td>
                <td><input type="radio" name="check" value=""></td>
            </tr>
            <tr>
                <td>2022/03/10(火)</td>
                <td>10:00~13:00</td>
                <td>東京</td>
                <td>Webセミナー</td>
                <td><input type="radio" name="check" value=""></td>
            </tr>
            <tr>
                <td>2022/03/11(水)</td>
                <td>10:00~13:00</td>
                <td>東京</td>
                <td>Webセミナー</td>
                <td><input type="radio" name="check" value=""></td>
            </tr>
            <tr>
                <td>2022/03/12(木)</td>
                <td>10:00~13:00</td>
                <td>東京</td>
                <td>Webセミナー</td>
                <td><input type="radio" name="check" value=""></td>
            </tr>
            <tr>
                <td>2022/03/13(金)</td>
                <td>10:00~13:00</td>
                <td>東京</td>
                <td>Webセミナー</td>
                <td><input type="radio" name="check" value=""></td>
            </tr>
            <tr>
                <td>2022/03/16(月)</td>
                <td>10:00~13:00</td>
                <td>東京</td>
                <td>Webセミナー</td>
                <td><input type="radio" name="check" value=""></td>
            </tr>
        </div>
    </table>
   
        
<section>
    <div class="customer">
        <h3>お客様情報</h3>
    </div>
    <form id="entry">
        <dl>
            <dt>お名前 <span class="must">※</span></dt>
            <dd><input type="text" name="name"></dd>
            <dt>メールアドレス <span class="must">※</span></dt>
            <dd><input type="text" name="mail"></dd>
            <dt>パスワード <span class="must">※</span></dt>
            <dd><input type="text" name="password"></dd>
            <dt>年齢 <span class="must">※</span></dt>
            <dd><input type="text" name="age"></dd>
        </dl>
        <p id="submit_button_cover">
            <input type="button" onclick="location.href='./booking_end.html'" value="予約する">
        </p>
    </form>
</section>
</body>
</html>