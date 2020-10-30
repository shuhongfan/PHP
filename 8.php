<?php
echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew";
$rst=$pdo->query($sql);

//foreach ($rst as $item) {
//    var_dump($item);
//}

//遍历之后 后面不再执行fetch 取不到数据
$x=$rst->fetch();
echo $x["pwd"]."<br>";
echo $x['name']."<br>";
echo $x[2]."<br>";