<?php
//预处理 防止sql注入

echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew where name= ? and pwd= ?";

$name='aaa';
$pwd='111';
$stmt=$pdo->prepare($sql);
$rst=$stmt->execute([$name,$pwd]);

echo $sql."<br/>";

$one=$stmt->fetchAll();
var_dump($one);