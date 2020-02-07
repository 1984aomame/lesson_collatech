<?php
if (isset( $_POST['name'] ) ) {
    var_dump( $_POST['name'] );
} else {
    echo 'POSTデータ受け取り失敗';
}
// データベースに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=resavation;charset=utf8',
    'collatech',
    'password',
);
// ポストデータを変数に格納
$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$pref = $_POST['pref'];
$age = $_POST['age'];
$message = $_POST['message'];
// resavationデータベースのstudentテーブルにデータを登録し変数に代入
$stmt = $pdo-> prepare ("INSERT INTO student(name,mail,tel,pref,age,message)VALUES (:name, :mail, :tel, :pref, :age, :message)");
$params = array(':name' => $name, ':mail' => $mail, ':tel' => $tel, ':pref' => $pref, ':age' => $age, ':message' => $message);
$stmt -> execute($params); //SQL実行




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
