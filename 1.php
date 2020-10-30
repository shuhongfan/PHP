<?php
//pdo连接数据库
try {
    $dsn="mysql:host=localhost;dbname=la54-edu";
    $user="root";
    $pwd="root";
    $pdo=new PDO($dsn,$user,$pwd);
    var_dump($pdo);
} catch (PDOException $e){
    var_dump($e->getMessage());
}