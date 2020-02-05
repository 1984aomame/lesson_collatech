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
<?php
if (isset($_POST["name"], $_POST["tel"], $_POST["mail"], $_POST["pref"], $_POST["age"], $_POST["message"])) {
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $pref = $_POST["pref"];
    $age = $_POST["age"];
    $message = $_POST["message"];
}
// データベースに接続
$pdo = new PDO(
    'mysql:host=localhost:3306;dbname=resavation;charset=utf8',
    'collatech',
    'password',
    array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET CHARACTER SET'utf8'")
);
// データベースに繋がっているかどうか確認
if ($pdo) {
    // DBに繋がっている
} else {
    echo"データベースに繋がっていません";
}

$regist = $pdo->prepare("INSERT INTO student(name, tel, mail, pref, age, message) VALUES(:name, :tel, :mail, :pref, :age, :message)");

$regist -> bindParam (':name', $name);
$regist -> bindParam (':tel', $tel);
$regist -> bindParam (':mail', $mail);
$regist -> bindParam (':pref', $pref);
$regist -> bindParam (':age', $age);
$regist -> bindParam (':message', $message);

$regist->execute();

if ($regist) {
    echo "登録完了です";
} else {
    echo "登録エラーです";
}






?>