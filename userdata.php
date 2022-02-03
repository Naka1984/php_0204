<?php
$user_name = $_POST['user_name'];
$sex = $_POST['sex'];
$calendar = $_POST['calendar'];   // 表示されない
$pref = $_POST['pref'];
$user_address = $_POST['user_address'];
$fax_number = $_POST['fax_number'];
$email = $_POST['email'];

$active = $_POST['on'];

?>


<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Signers</title>
<link rel='stylesheet' href='css/style.css'>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.css' />  
<script src='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.js'></script> 



<div id="headerFloatingMenu">
<img class="back_btn"  src="img/return.png"  onclick="history.back()" alt="return">
<nav>
<ul id="navi">
<li><a href="http://localhost:8888/signers/interpreting_list.php" style="color:white">予約確認</a></li>
<li><a href="#" style="color:white">履歴一覧</a></li>
<li><a href="contact_index.php"  style="color:white">お問い合わせ</a></li>
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

<P><br><br><br></P>  <!--  送信ボタンがトップメニューに隠れるため、行の高さ調整。後で改善する  -->


<div class = "Form-Title">
<h2>ユーザー情報</h2> 
</div>
<p></br>
<!-- <p class = "p_head"><span class="font_bold">あなた自身の情報を</span>登録してください。</br> 
<p class = "p_head">手話通訳派遣の手続きで必要となる情報です。<br>
<p class = "p_head">あとで修正も可能です。</p>
 -->

<table>
<tr><th class="t_top" width="120">氏名</th><td class="t_top"><?php echo $user_name; ?></td></tr>
<tr><th>性別</th><td><?php echo $sex; ?></td></tr>
<tr><th>生年月日</th><td><?php echo $calendar; ?></td></tr>
<tr><th>都道府県</th><td><?php echo $pref; ?></td></tr>
<tr><th>住所</th><td><?php echo $user_address; ?></td></tr>
<tr><th>FAX番号</th><td><?php echo $fax_number; ?></td></tr>
<tr><th>メールアドレス</th><td><?php echo $email; ?></td></tr>
</table>


<P><br><br><br><br></P>  <!--  送信ボタンがボトムメニューに隠れるため、行の高さ調整。後で改善する  -->

    </main>





    </body>
    <footer>

    <div id="footerFloatingMenu">
        <a  class="a_button" href="main.php"><img src="img/home.png"></a>
        <a  class="a_button" href="#"><img src="img/movie.png"></a>
        <a  class="a_button" href="http://localhost:8888/signers/interpreting_menu.html"><img src="img/sign.png"></a>
        <a  class="a_button" href="#"><img src="img/videochat.png"></a>
        <a  class="a_button" href="http://localhost:8888/signers/userdata_menu.html"><img src="img/user.png"></a>
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


