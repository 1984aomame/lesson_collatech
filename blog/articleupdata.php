<?php
// DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);

// データベースより取得したデータを表示
$query="SELECT * FROM post";
$res = $pdo->query($query);
$data = $res->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記事を更新する</title>
</head>
<body>
    <h3>記事更新中・・・</h3>
<?php
// データベースに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);
?>
<form method="POST" action="http://localhost/lesson_collatech/blog/createform.php">
<div>
    <label for="title">＊記事のタイトル</label><br>
    <input id="title" type="text" name="title" value="<?php echo $data[0]['title']; ?>">
</div>
<div>
    <label for="article">＊記事の内容</label><br>
    <textarea id="article" name="article" cols="50" rows="25">
    <?php echo $data[0]['content']; ?>
    </textarea>
</div>
<input type="submit" value="記事を投稿">
</form>  
</body>
</html>

<?php
$title = $_POST['title'];
$article= $_POST['article'];
// blogデータベースのpostテーブルにデータを登録し変数に代入
$stmt = $pdo-> prepare ("INSERT INTO post(title,content)VALUES (:title, :content)");
$params = array(':title' => $title, ':content' => $article);
$stmt -> execute($params); //SQL実行

?>


</body>
</html>