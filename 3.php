<?php
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "CREATE TABLE usernew (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    pwd VARCHAR(30) NOT NULL
    )";

$rst=$pdo->exec($sql);
var_dump($rst);