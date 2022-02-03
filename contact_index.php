<?php
session_start();

if(isset($_SESSION['join']['user_name'])){
    echo "<P><br><br></P> ユーザー名: ".$_SESSION['join']['user_name'];
}else{
    header('Location: login.php');
    exit;
}

$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['contact'] === '') {
        $error['contact'] = 'blank';
    }

    if (count($error) === 0) {
        // エラーがないので確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: contact_confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>


<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/contact.css"> -->

<title>お問い合わせフォーム</title>
<link rel='stylesheet' href='css/style.css'>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.css' />   -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.js'></script> 



<div id="headerFloatingMenu">
<img class="back_btn" src="img/return.png"  alt="return"  onclick="history.back()">

<nav>
<ul id="navi">
<li><a href="interpreting_list.php" style="color:white">予約確認</a></li>
<li><a href="#" style="color:white">履歴一覧</a></li>
<li><a href="#"  style="color:white">お問い合わせ</a></li>
</ul>
</nav>
<!-- ボタン部分ここを後で追加するだけ-->
<div class="nav_btn" id="nav_btn">
<span class="hamburger_line hamburger_line1"></span>
<span class="hamburger_line hamburger_line2"></span>
<span class="hamburger_line hamburger_line3"></span>
</div>
<div class="nav_bg" id="nav_bg"></div>
<!-- /ボタン部分ここを後で追加するだけ-->
</div>


</head>


<body>
<main>
    
    <P><br></P>  <!--  送信ボタンがトップメニューに隠れるため、行の高さ調整。後で改善する  -->



    <!-- お問合せフォーム画面 -->
    <div class = "Form-Title">
    <h2>お問い合わせ</h2>
    </div>
    
    
    <form action="" method="POST" novalidate>
        <div class="Form">
        
            <div class="Form-Item">
                <p for="inputName" class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
            <input type="text" name="name" id="inputName" class="Form-Item-Input" value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                        <?php if ($error['name'] === 'blank'): ?>
                            <p class="error_msg">※お名前をご記入下さい</p>
                        <?php endif; ?>
             </div>
        
        
            <div class="Form-Item">
                <p for="inputEmail"  class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                <input type="email" name="email" id="inputEmail" class="Form-Item-Input" value="<?php echo htmlspecialchars($post['email']); ?>" required>
                <?php if ($error['email'] === 'blank'): ?>
                    <p class="error_msg">※メールアドレスをご記入下さい</p>
                <?php endif; ?>
                <?php if ($error['email'] === 'email'): ?>
                    <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                <?php endif; ?>
            </div>
            
            
            <div class="Form-Item">
                <p for="inputContent"  class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                <textarea name="contact" id="inputContent" rows="10" class="Form-Item-Input" required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                        <?php if ($error['contact'] === 'blank'): ?>
                        <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                        <?php endif; ?>
            </div>
        
        </div>

                <input type="submit" class="Form-Btn" value="確認画面へ">
                <P><br><br><br><br><br></P>  <!--  送信ボタンがボトムメニューに隠れるため、行の高さ調整。後で改善する  -->
    

    </form>
</main>

</body>

<footer>
<div id="footerFloatingMenu">
<a  class="a_button" href="main.php"><img src="img/home.png"></a>
<a  class="a_button" href="#"><img src="img/movie.png"></a>
<a  class="a_button" href="interpreting_menu.html"><img src="img/sign.png"></a>
<a  class="a_button" href="#"><img src="img/videochat.png"></a>
<a  class="a_button" href="userdata_menu.html"><img src="img/user.png"></a>
</div>

</footer>

<script>
// jQuery(function() {
//     var topBtn = jQuery('#footerFloatingMenu');
//     topBtn.hide();
//     jQuery(window).scroll(function () {
//         if (jQuery(this).scrollTop() > 200) { // 200pxで表示
//             topBtn.fadeIn();
//         } else {
//             topBtn.fadeOut();
//         }
//     });
// });


$(function() {
            /* SP menu */
            function toggleNav() {
                var body = document.body;
                var hamburger = document.getElementById('nav_btn');
                var blackBg = document.getElementById('nav_bg');
                hamburger.addEventListener('click', function() {
                    body.classList.toggle('nav_open'); //メニュークリックでnav-openというクラスがbodyに付与
                });
                blackBg.addEventListener('click', function() {
                    body.classList.remove('nav_open'); //もう一度クリックで解除
                });
            }
            toggleNav();
        });



</script>
</html>