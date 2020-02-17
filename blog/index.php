<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aさんの BLOG</title>
</head>
<body>
<h1>Aのブログ記事一覧</h1>
<?php
//  DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);

// データベースより取得したデータを表示
$query="SELECT * FROM post ORDER BY time DESC";
$res = $pdo->query($query);
$data = $res->fetchAll(PDO::FETCH_ASSOC);

/*echo "<pre>";
print_r($data);
echo "</pre>";
*/
?>

<!-- <div class="Articles"> -->
<?php
foreach ($data as $key =>$value1) {
     foreach ($value1 as $key2 =>$value2) {
        echo "<p>";
        echo $key2.PHP_EOL; 
        echo"<p>";
        
     }
}
?>






<div class="Articles">
<a href="article.php"><?php echo $data[0]['title']; ?></a>
    <p><?php echo $data[0]['content']; ?></p>
    <p><?php echo $data[0]['time']; ?></p>
</div>

<div class="Articles">
<a href="article.php"><?php echo $data[1]['title']; ?></a>
    <p><?php echo $data[1]['content']; ?></p>
    <p><?php echo $data[1]['time']; ?></p>
</div>


<div class="under-element">
<button type="submit" onclick="location.href='createform.php'">新しく記事を作成する</button>
</div>  
</body>
</html>