<?php 
require("./dbconnect.php");
session_start();


if (!empty($_POST)) {
    /* 入力情報の不備を検知 */
    if ($_POST['user_email'] === "") {
        $error['user_email'] = "blank";
    }
    if ($_POST['user_password'] === "") {
        $error['user_password'] = "blank";
    }
    
    /* メールアドレスの重複を検知 */
    if (!isset($error)) {
        $user = $db->prepare('SELECT COUNT(*) as cnt FROM users WHERE user_email=?');
        $user->execute(array(
            $_POST['user_email']
        ));
        $record = $user->fetch();
        if ($record['cnt'] > 0) {
            $error['user_email'] = 'duplicate';
        }
    }
 
    /* エラーがなければ次のページへ */
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
        header('Location: check.php');   // check.phpへ移動
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>ユーザー登録</title>
    <!-- <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
    <div class="content">
        <form action="" method="POST">
            <h1>ユーザー登録</h1>
            <p>当サービスをご利用するために、次のフォームに必要事項をご記入ください。</p>
            <br>
 
            <div class="control">
                <label for="user_name">氏名<span class="required">必須</span></label>
                <input id="user_name" type="text" name="user_name" >
                <?php if (!empty($error["user_name"]) && $error['user_name'] === 'blank'): ?>
                    <p class="error">氏名を入力してください</p>
                    <?php endif ?>    
            </div> 
 
            <div class="control">
                <label for="user_email">メールアドレス<span class="required">必須</span></label>
                <input id="user_email" type="email" name="user_email" >
                <?php if (!empty($error["user_email"]) && $error['user_email'] === 'blank'): ?>
                    <p class="error">メールアドレスを入力してください</p>
                <?php elseif (!empty($error["user_email"]) && $error['user_email'] === 'duplicate'): ?>
                    <p class="error">このメールアドレスはすでに登録済みです</p>
                <?php endif ?>
            </div>
 
            <div class="control">
                <label for="user_password">パスワード<span class="required">必須</span></label>
                <input id="user_password" type="password" name="user_password">
                <?php if (!empty($error["user_password"]) && $error['user_password'] === 'blank'): ?>
                    <p class="error">パスワードを入力してください</p>
                <?php endif ?>
            </div>
 
            <div class="control">
                <button type="submit" class="btn">確認する</button>
            </div>
        </form>
    </div>
</body>
</html>