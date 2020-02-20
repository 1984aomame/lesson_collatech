<?php
$id = $_GET['id'] ?? '';
//  DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);
//DBよりidに対応するデータを表示
$query="SELECT * FROM post WHERE author=$id ORDER BY TIME DESC";
$res = $pdo->query($query);
$user_article = $res->fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ブログ記事一覧</title>
</head>
<body>
<h1>ブログ記事一覧</h1>
<?php   // 記事内容をすべて表示
foreach ($user_article as $article) {?>
    <div class="Articles_index">
        <?php echo $article['no']."<br>";?>
        <hr>
        <?php echo $article['title']."<br>";?>
        <hr> 
        <?php $content = $article['content'];
            echo mb_strimwidth($content, 0, 150, '...', 'UTF-8')?>
        <hr>
        <p><?php echo $article['time'];?>
        <?php $no = $article['no']; ?>
        <a href="article.php?no=<?php echo $no;?>">記事へ</a></p>
    </div>
    <div class="under-element">
    <?php } ?>  
    <div class="under-element">

        <button type="submit" onclick="location.href='createform.php'">新しく記事を作成する</button>
    </div>
</body>
</html>