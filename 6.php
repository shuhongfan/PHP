<?php
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "update usernew set pwd = 'peter' where id = 3";
$rst=$pdo->query($sql);
var_dump($rst);