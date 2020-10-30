<?php
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "delete from usernew where `id`=2";
$rst=$pdo->query($sql);
var_dump($rst);