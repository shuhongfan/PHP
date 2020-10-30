<?php
//预处理 防止sql注入

echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew where name=:xm and pwd= :mm";

$stmt=$pdo->prepare($sql);
$rst=$stmt->execute([':xm'=>'aaa',':mm'=>'111']);

echo $sql."<br/>";

$one=$stmt->fetchAll();
var_dump($one);