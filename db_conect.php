    <?php 
    $user = 'testuser';
    $password = 'userpass';
    $dbName = 'test';
    $host = 'localhost:8889';
    $dsn = "mysql:host = {$host};dbname={$dbName};chearset=utf8";

    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        print "<span class='error'>エラーがありました。</span><br>";
        print $e->getMessage();
        exit();
    }
    ?>