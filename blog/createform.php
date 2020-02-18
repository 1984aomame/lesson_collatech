<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記事の新規作成</title>
</head>
<body>
<h2>記事の新規投稿</h2>
<form method="POST" action="http://localhost/lesson_collatech/blog/createform.php">

<div>
    <label for="title">＊投稿者</label><br>
    <select name='author'>
    <option value="Aさん">Aさん</option>
    <option value="Bさん">Bさん</option>
    </select>
</div>
<div>
    <label for="title">＊記事のタイトル</label><br>
    <input id="title" type="text" name="title" value="">
</div>
<div>   
    <label for="article">＊記事の内容</label><br>
    <textarea id="article" name="article" cols="50" rows="25">
    </textarea>
</div>
<input type="submit" value="記事を投稿">
</form>  
</body>
</html>


<?php
// データベースに接続
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

$title = $_POST['title'];
$article= $_POST['article'];
$author = $_POST['author'];

// blogデータベースのpostテーブルにデータを登録し変数に代入
$stmt = $pdo-> prepare ("INSERT INTO post(title,content,author)VALUES (:title, :content, :author)");
$params = array(':title' => $title, ':content' => $article, ':author'=>$author);
$stmt -> execute($params); //SQL実行

?>





