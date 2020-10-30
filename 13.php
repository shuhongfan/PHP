<?php
//预处理 防止sql注入

echo "<pre/>";
$name="'or 1=1 #'";
$pwd="222";

$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");


$name=$pdo->quote($name);
$pwd=$pdo->quote($pwd);

$sql = "select * from usernew where name={$name} and pwd= {$pwd}";
//预处理 防止sql注入
$stmt=$pdo->prepare($sql);
$rst=$stmt->execute();

echo $sql."<br/>";

$one=$stmt->fetchAll();
var_dump($one);