<?php
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "insert into usernew(`name`,`pwd`) values 
            ('guanyu','abcdef'),
            ('zhangfei','1111'),
            ('aaa','111'),
            ('bbb','222')
            ";
$rst=$pdo->query($sql);
var_dump($rst);