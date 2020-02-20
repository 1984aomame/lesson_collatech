<?php
        /*DBに接続*/
        $pdo = new PDO(
            'mysql:host=localhost:3306;dbname=blog;charser=utf8',
            'user',
            'password'
        );
        // usersデータを表示
        $query="SELECT * FROM users";
        $res = $pdo->query($query);
        $usersdata = $res->fetchAll(PDO::FETCH_ASSOC);
?>

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
 <?php   foreach($usersdata as $user){?>
            <div class="Articles_index">
                <?php   echo $user['name']."<br>";?>
                <hr>
                <p>年齢：<?php echo $user['age'];?> 歳</p>
                <p>ひとこと：<?php echo $user['comment']; ?></P>
                <?php $id = $user['id'];
                      $name = $user['name'] ;?>
               <a href="index.php?id=<?php echo $id;?>"><?php echo $name."の記事へ"?></a>
            </div>
       <?php }?>
                

       


        
</body>
</html>