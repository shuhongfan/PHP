<?php
//预处理 防止sql注入

echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew";
$stmt=$pdo->prepare($sql);
$rst=$stmt->execute();

var_dump($stmt);
var_dump($rst);