<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>TEST BLOG</title>
</head>
<body>
 <h1>ブログ一覧</h1>
 <?php
/*DBに接続*/
        $pdo = new PDO(
            'mysql:host=localhost:3306;dbname=blog;charser=utf8',
            'user',
            'password'
        );

        // データベースより取得したデータを表示
        $query="SELECT * FROM users";
        $res = $pdo->query($query);
        $usersdata = $res->fetchAll(PDO::FETCH_ASSOC);
        ?>
    
        <div class="Articles">
        <a href="indexA.php"></a>
        <p><?php echo $usersdata[0]['name']; ?></p>
        <p><?php echo $usersdata[0]['age']."歳"; ?></p>
        <p><?php echo $usersdata[0]['comment']; ?></p>
        <a href="article.php">Aさんの記事へ！</a>
        </div>

        <div class="Articles">
        <a href="indexB.php"></a>
        <p><?php echo $usersdata[1]['name']; ?></p>
        <p><?php echo $usersdata[1]['age']."歳"; ?></p>
        <p><?php echo $usersdata[1]['comment']; ?></p>
        <a href="article.php">Bさんの記事へ！</a>
        </div>
        
        
</body>
</html>