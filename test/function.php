<?php
function multiplyArray(array $array):float
{
    $num = 1;
    foreach ($array as $value) {
        $num *= $value;
        var_dump($value);
    }
    return $num;
}

$list =[5,4,3,6,2,7];
$result = multiplyArray($list , false);
echo("配列の計算結果：".$result."<br>");
