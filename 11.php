<?php
echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew";
$rst=$pdo->query($sql);

var_dump($rst->fetchAll());