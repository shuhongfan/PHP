<?php
//预处理 防止sql注入

echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew where name= :name and pwd= :pwd";
$stmt=$pdo->prepare($sql);

$name='aaa';
$pwd='111';
$stmt->bindParam(":name",$name,PDO::PARAM_STR);
$stmt->bindParam(":pwd",$pwd,PDO::PARAM_STR);
$rst=$stmt->execute();
$one=$stmt->fetchAll();
var_dump($one);