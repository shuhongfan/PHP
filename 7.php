<?php
//pdo连接数据库
try {
    $pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
    $sql = "select * from usernew1";
    $rst=$pdo->exec($sql);
    echo $pdo->errorCode().'<br/>';
    if ($rst===false){
        if ($pdo->errorCode()=='42S02')
            echo "数据表不存在";
        echo $pdo->errorInfo()[2];
        if ($pdo->errorInfo()[1]=='1146')
            echo "数据表不存在";
    }
} catch (PDOException $e){
    var_dump($e->getMessage());
}