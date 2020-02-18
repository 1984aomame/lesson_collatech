<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aさんの BLOG</title>
</head>
<body>
<?
$id = $_GET['id'] ?? '';
var_dump($id);?>


<h1>ブログ記事一覧</h1>
<?php
//  DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);

// データベースより取得したデータを表示
// $query="SELECT * FROM post ORDER BY time DESC";
$query="SELECT * FROM post where author='Bさん'";
$res = $pdo->query($query);
$data = $res->fetchAll(PDO::FETCH_ASSOC);

// 記事内容をすべて表示
foreach ($data as $value1) {?>
    <div class="Articles_index">
    <?php echo $value1['no']."<br>";?>
    <hr>
   <?php echo $value1['title']."<br>";?>
    <hr> 
   <p><?php echo $value1['content']."<br>";?></p>
    <hr>
    <?php echo $value1['time']."<br>";?>
    <?php echo"<br>";?>
    <a href="article.php">記事へ</a>
    </div>
    <div class=under-element>

    
<?php } ?>



<div class="under-element">
<button type="submit" onclick="location.href='createform.php'">新しく記事を作成する</button>
</div>  
</body>
</html>