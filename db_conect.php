<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB接続</title>
</head>
<body>
    <div>
    <?php 
    $user = 'testuser';
    $password = 'userpass';
    $dbname = 'test'
    $host = 'localhost:8889';
    $dsn = "mysql:host = {$host};dbname={$dbname};chearset=utf8";

    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print "データベース{$dbname}に接続しました。";
        $pdo = NULL;
    }catch(Exception $e){
        print "<span class='error'>エラーがありました。</span><br>";
        print $e->getMessage();
        exit();
    }
    ?>
    </div>
</body>
</html>