<?php
$arr2 = [
    ['a','b'],
    ['c','d']
];

var_export($arr2[1]);

$arr1= $arr2[1];
echo"<br>";
var_dump($arr1);
echo"<br>";
var_dump($arr1[1]);


  $array = ["りんご", "バナナ", "みかん", "イチゴ", "メロン"];
  foreach($array as $value) {
    echo"<pre>";
    var_dump($array);
    
    echo "</pre>";
  }
?>