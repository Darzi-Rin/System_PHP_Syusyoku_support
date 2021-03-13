    <?php 
    $user = 'syusyoku_support';
    $password = 'syusyokupass';
    $dbName = 'syusyoku_support';
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