<?php
$no= $_GET['no'] ?? '';
// DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);
// DBよりnoに対応するデータを表示
$query="SELECT * FROM post where no='$no'";
$res = $pdo->query($query);
$articledata = $res->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>記事内容</title>
</head>
</body>
<div class="Articles">
<h2><?php echo $articledata['title']; ?></h2> 
<hr>
<p><?php echo $articledata['content']; ?></p>
<br>
<a href="articleupdata.php?no=<?php echo $no;?>">記事を更新する</a>
</div>
<div class=under-element>
</body>
</html>