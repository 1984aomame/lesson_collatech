<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bさんの BLOG</title>
</head>
<body>
<h1>Bのブログ記事一覧</h1>
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


<?php
foreach ($data as $key =>$value1) {?>
    <div class="Articles">
    <a href="article.php">
   <?php echo $value1['title']."<br>";?></a>
    <hr> 
    <?php echo $value1['content']."<br>";?>
    <hr>
    <?php echo $value1['time']."<br>";?>
    <?php echo"<br>";?>
    </div>
    <div class=under-element>

    
<?php } ?>



<div class="under-element">
<button type="submit" onclick="location.href='createform.php'">新しく記事を作成する</button>
</div>  
</body>
</html>