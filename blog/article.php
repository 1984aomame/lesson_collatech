<?php

// DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);




// データベースより取得したデータを表示
$query="SELECT * FROM post ORDER BY time DESC";
$res = $pdo->query($query);
$data = $res->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Aの記事内容</title>
</head>
</body>
<?php foreach ($data as $key=> $value1) {
   /*echo"<pre>";
   var_dump($value1);
    echo"</pre>";*/
    echo $value1["no"]."<br>";

}?>
<div class="Articles_index">
<h2><?php echo $data[0]['no']; ?></h2>
<h2><?php echo $data[0]['title']; ?></h2> 
<hr>
<p><?php echo $data[0]['content']; ?></p>
</div>
<div class=under-element>
<button type="submit" onclick="location.href='articleupdata.php'">記事を更新する</button>

</body>
</html>