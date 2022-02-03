<?php
session_start();
// echo "ようこそ".$_SESSION['join']['user_name']."さん";
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>会員登録完了</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
    <div class="content">
        <h1>会員登録が完了しました。</h1>
        <p>下のボタンよりログインページに移動してください。</p>
        <br><br>
        <a href="main.php"><button class="btn">ログインページに移動する</button></a>
    </div>
</body>
</html>