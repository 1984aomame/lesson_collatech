<?php


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="get.php?name=test&age=25">リンク</a>
    <form action="get.php" method="get">
        <p><input type="text" name="name" value=""></p>
        <p><input type="text" name="age" value=""></p>
        <button type="submit">送信</button>
    </form>
</body>

</html>