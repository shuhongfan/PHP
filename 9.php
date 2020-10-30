<?php
echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew";
$rst=$pdo->query($sql);

foreach ($rst as $item) {
    var_dump($item);
    echo "<br/>";
}