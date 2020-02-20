<?php
$no= $_GET['no'] ?? '';
// DBに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=blog;charser=utf8',
    'user',
    'password'
);
if (isset($_GET['no'])) {
    // データベースよりnoに対応するデータを表示
    $query="SELECT * FROM post where no='$no'";
    $res = $pdo->query($query);
    $articledata = $res->fetch(PDO::FETCH_ASSOC);?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>記事を更新する</title>
    </head>
    <body>
        <h3>記事更新</h3>
        <form method="POST" action="http://localhost/lesson_collatech/blog/articleupdata.php">
        <div class="Articles_updata">
            <div>    
                <label for="no" name="no">＊記事番号:<?php echo $articledata['no']; ?></label><br>
                <input id="no" type="hidden" name="no" value="<?php echo $articledata['no']; ?>">
            </div>
            <div>
                <label for="title">＊記事のタイトル</label><br>
                <input id="title" type="text" name="title" value="<?php echo $articledata['title']; ?>">
            </div>
            <div>
                <label for="article">＊記事の内容</label><br>
                <textarea id="article" name="article" cols="50" rows="25">
                <?php echo $articledata['content']; ?>
                </textarea>
            </div>
            <input id="author" type="hidden" name="author" value="<?php echo $articledata['author']; ?>">
            <input type="submit" value="記事を更新">
        </div>
        </form> 
    </body>
    </html>
<?php } else {
    
    $title = $_POST['title']?? "";
    $article= $_POST['article']?? "";
    $no_article = $_POST['no'] ?? "";
    $author = $_POST['author'] ?? "";
// blogデータベースのpostテーブル上のデータを更新して登録し変数に代入
    $sql = "UPDATE post SET title='$title',content='$article' WHERE no=$no_article";
    $count = $pdo->exec($sql);
// 詳細ページへリダイレクト
    header("Location:http://localhost/lesson_collatech/blog/article.php?no=${no_article}");
    exit;

}
?>

