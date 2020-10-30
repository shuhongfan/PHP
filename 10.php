<?php
//query方法 返回PDOstatement类型对象
//数据遍历
//PDO::FETCH_ASSOC 关联数组
//PDO::FETCH_NUM 索引数组
//PDO::FETCH_BOTH

echo "<pre/>";
$pdo=new PDO("mysql:host=localhost;dbname=php","root","root");
$sql = "select * from usernew";
$rst=$pdo->query($sql);

while ($row=$rst->fetch(PDO::FETCH_BOTH)){
    foreach ($row as $item) {
        echo $item.'  ';
    }
    echo '<br/>';
}