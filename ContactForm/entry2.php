<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>プログラミング講座申し込み</title>
</head>
<body>
<form method="POST" action="http://localhost/lesson_collatech/ContactForm/confirm.php">
    ＊氏名<br>
    
    <input id= "name" type= "name"  name="name"><br>
    ＊電話番号<br>
    <input type= "tel" name= "tel" size="30"><br>
    ＊メールアドレス<br>
    <input type= "mail" name= "mail" size="30"><br>
    ＊都道府県<br>
    <select id="pref" type="pref" name="pref">
        <option value></option>
        <option value="">選択してください</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都" selected>東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
    </select>  
    <br>
    ＊年齢<br>
    <input type= "age" name= "age"><br>
    ＊備考欄<br>
    <textarea name= "message"  cols="50" rows="5" ></textarea>
     <br>
    <input type="checkbox" name="agree_flag" id="agree_flag" >
    <label for="agree_flag" class="form-check-label">
    <a href="http://localhost/lesson_collatech/ContactForm/policy.php" target="_blank">利用規約</a>に同意する
    </label><br>
    <br>
    <br>
    <input type="submit" id ="submit" value="確認" disabled/></input>
</form>
<script type="text/JavaScript">
    var target = document.getElementById("submit");
    target.disabled = true;
    var flag = document.getElementById("agree_flag");
    flag.addEventListener("click",function() { 
        if(flag.checked)[
            target.disabled = false
        ]
    },false)
</script>
</body>
</html>
