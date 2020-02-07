<?php
// データベースに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=resavation;charset=utf8',
    'collatech',
    'password',
);

$stmt = $pdo-> prepare('select *from student where id =:id');
$stmt->bindValue(':id',$_POST['id']);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録完了</title>
</head>
<body>
<form action="confirm.php" method ="post">
    <h3>登録結果表示</h3>
</form>
</body>
</html>
