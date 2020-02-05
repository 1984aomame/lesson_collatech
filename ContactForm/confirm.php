<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>プログラミング講座申込み確認</title>
</head>
<body>
<h2>プログラム体験申込確認</h2>
<form method="POST" action ="http://localhost/lesson_collatech/ContactForm/register.php">
    <table>
    <tr>
     <td>氏名</td> 
     <td><?php echo $_POST["name"]; ?>  
    <input id="name" type="hidden"  name="name" value=>
     </td>
    </tr>
    <tr>
     <td>電話番号</td> 
     <td><?php echo $_POST["tel"]; ?>
    
     </td>  
    </tr>
    <tr>
     <td>メールアドレス</td>
     <td><?php echo $_POST["mail"]; ?> 
     
     </td>  
    </tr>
    <tr>
     <td>都道府県</td>
     <td><?php echo $_POST["pref"]; ?> 
     
     </td>   
    </tr>
    <tr>
     <td>年齢</td>
     <td><?php echo $_POST["age"]; ?>
    
     </td>    
    </tr>
    <tr>
     <td>備考欄</td> 
     <td><?php echo $_POST["message"]; ?>
     </td>   
    </tr>
    </table>
 <input type="submit" value="登録" />
</input>
</form>
</body>
</html>
<?php
/*
＊氏名
＊電話番号
＊メールアドレス
＊都道府県
＊年齢
＊備考欄
＊利用規約に同意する


*/
