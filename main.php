<?php
session_start();
if(isset($_SESSION['join']['user_name'])){
    echo "<P><br><br></P> ユーザー名: ".$_SESSION['join']['user_name'];
}else{
    header('Location: login.php');
    exit;
}
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
<img class="logo" src="img/signers_logo.png"  alt="logo">   <!-- src="{{ asset('img/signers_logo.png') }}" -->
<nav>
<ul id="navi">
<li><a href="interpreting_list.php" style="color:white">予約確認</a></li>
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
    
    <P><br></P>  <!--  送信ボタンがトップメニューに隠れるため、行の高さ調整。後で改善する  -->

   


<div class='multipletab'>
  
  <div class='tab-buttons'>
    
    <span  id='content1'>聴覚障害関連</span>
    <!-- <span   id='content4'>ニュース</span> -->
    <span   id='content2'>交通機関情報</span>
    <span   id='content3'>災害情報</span>
    <!--add more button right after it with same id attribute of that container. Make sure to use span tag.-->
  </div>
  <div class='tab-content'>
    
    <div id='content1'>


    <!-- <section id="1" class="gray-back">
    <div class = "Form-Title">
    <h1>NEWS</h1>
    </div> -->

    <div class="container center">
    <div class="row">
        <div class="col span-4">
            <a href="https://news.yahoo.co.jp/articles/53a5ccd7790c5df34b5a662e40a5d792f8b79ecb"><img class="news_photo" src="img/news01.jpg" alt="ニュース写真" ></a>
            <p class="news_title" >平和リレーソング完成　長崎県内外の高校生　手話と英語交え核禁条約解説</p>
            
        </div>
        <div class="col span-4">
            <a href="https://www.fnn.jp/articles/-/302374"><img  class="news_photo" src="img/news02.jpg" alt="ニュース写真"></a>
            <p class="news_title" >手話言語の理解と普及に役立てて…全日本ろうあ連盟に寄付</h2>
            </div>
        <div class="col span-4">
            <a href="https://mainichi.jp/articles/20220119/k00/00m/040/102000c"><img  class="news_photo" src="img/news03.jpg" alt="ニュース写真"></a>
            <p class="news_title" >鳥取市議会、本会議を字幕生中継へ　聴覚障害者向けに2月試行</h2>
        </div>
        </div>
        </div>
    <!-- </section> -->


    </div>
    <div id='content2'>
    		
        <!-- <section id="2"  class="gray-back"> -->
        <!-- <div class = "Form-Title">
        <h1>交通機関の情報</h1>
        </div> -->

        <div>
        <div class="row">
        JR北海道 列車運行情報…2022年1月27日05時30分現在
【線路支障による列車への影響について】
本日（１／２７）函館線　南小樽ー小樽間における、線路点検の影響により、函館線の一部列車に運休が発生しています。
※以下のエリアに影響があります。
札幌近郊
道央エリア

            <!-- <div class="col span-4">
                <img  class="news_photo" src="img/news01.jpg" alt="スタッフ">
                <h3>スタッフ</h3>
                <p>ここに説明文が入ります</p>
            </div>
            <div class="col span-4">
                <img  class="news_photo" src="img/staff.jpg" alt="スタッフ">
                <h3>スタッフ</h3>
                <p>ここに説明文が入ります</p>
            </div>
            <div class="col span-4">
                <img  class="news_photo" src="img/staff.jpg" alt="スタッフ">
                <h3>スタッフ</h3>
                <p>ここに説明文が入ります</p>
            </div> -->
            </div>
            </div>
        <!-- </section> -->

    </div>
    <div id='content3'> 直近の災害情報はありません </div>
    <!--add more container right after it with same id attribute of that button. Make sure to use div tag.-->
  </div>

  

  </div>
    <!-- <div id='content4'> -->
    		
        <!-- <section id="2"  class="gray-back"> -->
        <!-- <div class = "Form-Title">
        <h1>交通機関の情報</h1>
        </div> -->

        <!-- <div class="container center">
        <div class="row">
            <div class="col span-4">
                <img  class="news_photo" src="img/news01.jpg" alt="スタッフ">
                <h3>スタッフ</h3>
                <p>ここに説明文が入ります</p>
            </div>
            <div class="col span-4">
                <img  class="news_photo" src="img/staff.jpg" alt="スタッフ">
                <h3>スタッフ</h3>
                <p>ここに説明文が入ります</p>
            </div>
            <div class="col span-4">
                <img  class="news_photo" src="img/staff.jpg" alt="スタッフ">
                <h3>スタッフ</h3>
                <p>ここに説明文が入ります</p>
            </div>
            </div>
            </div> -->
        <!-- </section> -->

    <!-- </div> -->
  <div class='tab-nav'>
  <!-- <span class='next'></span> -->
    <!-- <span class='prev'></span> -->
  </div>
</div>



		
		
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
