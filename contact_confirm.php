<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'me@example.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前： {$post['name']}
メールアドレス： {$post['email']}
内容：
{$post['contact']}
EOT;
    // var_dump($body);
    // exit();
    //mb_send_mail($to, $subject, $body, "From: {$from}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: contact_thanks.html');
    exit();
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
    

        <form action="" method="POST">
            <div class="Form-Item">
                <p for="inputName" class="Form-Item-Label">お名前</p>
                <p class="display_item"><?php echo htmlspecialchars($post['name']); ?></p>
            </div>
            

            <div class="Form-Item">
                <p for="inputEmail"  class="Form-Item-Label">メールアドレス</p>
                <p class="display_item"><?php echo htmlspecialchars($post['email']); ?></p>
            </div>

            <div class="Form-Item">
                <p for="inputContent"  class="Form-Item-Label">お問い合わせ内容</p>
                <p class="display_item"><?php echo nl2br(htmlspecialchars($post['contact'])); ?></p>
            </div>
            
            <div>
            <a href="contact_index.php">戻る</a>
            <input type="submit" class="Form-Btn" value="送信する">
            <P><br><br><br><br></P>  <!--  送信ボタンがボトムメニューに隠れるため、行の高さ調整。後で改善する  -->
    
            </div>
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


        $(function () {
    $.FindContainer = function () {
        $('.tab-content>div').each(function findcontent() {
            var newindex = $('.activetab').index();
            var newheight = $('.activetab').height();
            $('.tab-content').animate({
                'height': newheight+20
            }, 100);
            var otherindex = $(this).index();
            var substractindex = otherindex - newindex;
            var currentwidth = $('.multipletab').width();
            var newpositions = substractindex * currentwidth;
            $(this).animate({
                'left': newpositions
            });
        });
    };
    $.FindId = function () {
        $('.tab-content>div').each(function () {
            if ($(this).attr('id') == $('.active').attr('id')) {
                $('.tab-content>div').removeClass('activetab');
                $(this).addClass('activetab');
            }
        });
    };
    $('.tab-buttons>span').first().addClass('active');
    $('.tab-content>div').each(function () {
        var activeid = $('.active').attr('id');
        if ($(this).attr('id') == activeid) {
            $(this).addClass('activetab');
        }
        var currentheight = $('.activetab').height();
        var currentwidth = $('.multipletab').width();
        var currentindex = $(this).index();
        var currentposition = currentindex * currentwidth;
        $(this).css({
            'left': currentposition,
                'width': currentwidth - 40,
                'padding': '10px 20px'
        });
        $(this).attr('data-position', currentposition);
        $('.tab-content').css('height', currentheight+20);
    });
    $('.tab-buttons>span').click(function () {

        $('.tab-buttons>span').removeClass('active');
        $(this).addClass('active');
        var currentid = $('.active').attr('id');
        $.FindId();
        $.FindContainer();
    });
    $('.next').click(function () {
        var activetabindex = $('.activetab').index() + 1;
        var containers = $('.tab-content>div').length;
        if (containers == activetabindex) {
            $('.tab-buttons>span').removeClass('active');
            $('.tab-buttons>span').first().addClass('active');
            var currentid = $('.active').attr('id');
            $.FindId();
            $.FindContainer();
        } else {
            var currentopen = $('.active').next();
            $('.active').removeClass('active');
            currentopen.addClass('active');
            $.FindId();
            $.FindContainer();
        }
    });
  $('.prev').click(function(){
    var activetabindex = $('.activetab').index();
        if (activetabindex == 0) {
            $('.tab-buttons>span').removeClass('active');
            $('.tab-buttons>span').last().addClass('active');
            var currentid = $('.active').attr('id');
            $.FindId();
            $.FindContainer();
        } else {
            var currentopen = $('.active').prev();
            $('.active').removeClass('active');
            currentopen.addClass('active');
            $.FindId();
            $.FindContainer();
        }
  });
});


</script>
</html>