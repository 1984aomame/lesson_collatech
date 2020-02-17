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
// DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);
// 接続の確認
try {
    
    $pdo = new PDO(
        'mysql:host=localhost:3306;dbname=blog;charser=utf8',
        'user',
        'password'
    );
    echo "MySQLに接続が完了しました<br>";
    //エラー時に例外発生を設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // 例外を発生させる
} catch (PDOException $e) {
    echo'接続エラー :' . $e->getMessage();
}

// データベースより取得したデータを表示
$query="SELECT * FROM post";
$res = $pdo->query($query);
$data = $res->fetchAll(PDO::FETCH_ASSOC);
echo"<pre>";
print_r($data);
echo"<pre>";

foreach ($data as $key =>$value1) {
     foreach ($value1 as $key2 =>$value2) {
        echo $value2."\n";
        
    }
    
}
?>

<div class="Articles">
<h2>記事のタイトル</h2>
    <a href="article.php">記事１のタイトル</a>
</h2>
    <p>記事の内容（一部）</p>
</div>



<button type="submit" onclick="location.href='createform.php'">新しく記事を作成する</button>
    
</body>
</html>