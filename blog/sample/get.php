<?php

$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>名前：<?php echo $name; ?></p>
    <p>年齢：<?php echo $age; ?></p>
</body>
</html>