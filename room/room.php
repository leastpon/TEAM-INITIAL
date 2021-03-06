<?php
session_start();
$roomnum = $_GET['R'];

?>

﻿<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<!--문서모드 최신유지-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="apple-touch-icon-precomposed" href="../icon57.png">
<link rel="apple-touch-icon-precomposed" size="114x114" href="../icon114.png">
<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>INITIAL RoomInfo</title>
<script src="../js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="css/roomMain.css">
	<script>
	function open_in_frame(url) {
	$('#my_frame').attr('src', url);
	}
	</script>
</head>

<body>
	<div id="stage">

		<!--모바일 상단-->
		<header id="header" class="cf">
			<ul id="s_nav" class="cf">
				<li class="menu">
					<a href="../index.php" onfocus="blur()">
						<img src="../icon/icon_home2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../room/room.php" onfocus="blur()">
						<img src="../icon/icon_roominfo 1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../notice/notice.php" onfocus="blur()">
						<img src="../icon/icon_notice2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>



        <?php
        if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
        ?>

      </li>
      <li class="menu">
        <a href="../signin/signin.php" onfocus="blur()">
          <img src="../icon/icon_login2.png" />
        </a>
      </li>

        <?php
        }
        if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        ?>

      </li>
      <li class="menu">
        <a href="../mypage.php" onfocus="blur()">
          <img src="../icon/icon_mypage1.png" />
        </a>
      </li>

        <?php
        }
        ?>



			</ul>

		</header>

		<header id="header_fake" class="cf"><!--뒷받침해줌-->
			<ul id="s_nav_fake" class="cf">
				<li class="menu">
					<a href="../index.php" onfocus="blur()">
						<img src="../icon/icon_home2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../room/room.php" onfocus="blur()">
						<img src="../icon/icon_roominfo 2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../notice/notice.php" onfocus="blur()">
						<img src="../icon/icon_notice1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>



        <?php
        if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
        ?>

      </li>
      <li class="menu">
        <a href="../signin/signin.php" onfocus="blur()">
          <img src="../icon/icon_login2.png" />
        </a>
      </li>

        <?php
        }
        if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        ?>

      </li>
      <li class="menu">
        <a href="../mypage.php" onfocus="blur()">
          <img src="../icon/icon_mypage1.png" />
        </a>
      </li>

        <?php
        }
        ?>



		</header>

		<nav id="nav">
			<div id="submenu">
				<ul class="cf">

                        <?php


                        if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
                          echo "<li class=\"s_menu\" style=\"display:inline\"><a href=\"../signin/signin.php\">LOGIN</a></li>";
                          echo "<li class=\"s_menu\"><a href=\"../signup/signup.php\">SIGN UP</a></li>";
                        }

                        if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
                        $id = $_SESSION['id'];
                        $name = $_SESSION['name'];
                          echo "<li class=\"s_menu\"><a href=\"../index_logout.php\">Logout</a></li>";
                          echo "<li class=\"s_menu\"><a href=\"../mypage.php\">$name($id)</a></li>";
                        }

                        ?>
							<li class="s_menu"><a href="../index.php">HOME</a></li>
				</ul>
			</div>
			<ul id="main" class="cf"> <!--상단 바 이동 링크-->
				<li class="logo odd"><img src="../images/mk_img.png" width="100" alt="" /></li>
				<li class="notice odd"><a href="../notice/notice.php">게시판</a></li>
				<li class="contact odd"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd "><a href="../NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="../map/map.php">오시는길</a></li>
				<li class="room active"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" >
		<section id="content" class="cf">
			<div id="roomB">
				<div class="roomButton">
					<button type="button" onclick='open_in_frame("room01.php")' class="btn btn-outline-dark">room1</button>
					<button onclick='open_in_frame("room02.php")' class="btn btn-outline-dark">room2</button>
					<button onclick='open_in_frame("room03.php")' class="btn btn-outline-dark">room3</button>
					<button onclick='open_in_frame("room04.php")' class="btn btn-outline-dark">room4</button>
				</div>

        <?php if ($roomnum==1) {
          echo "<iframe id='my_frame' src=\"room01.php\" ></iframe>";
        } ?>
        <?php if ($roomnum==2) {
          echo "<iframe id='my_frame' src=\"room02.php\" ></iframe>";
        } ?>
        <?php if ($roomnum==3) {
          echo "<iframe id='my_frame' src=\"room03.php\" ></iframe>";
        } ?>
        <?php if ($roomnum==4) {
          echo "<iframe id='my_frame' src=\"room04.php\" ></iframe>";
        } ?>
        <?php if (!($roomnum>=1 && $roomnum<=4)) {
          echo "<iframe id='my_frame'></iframe>";
        } ?>


			</div>
		</section>
	</div>
	<a href="#top" id="pagetopBtn">
		<img src="../images/icn_pagetop1.jpg" alt="pagetop" width="40" height="60"/>
	</a>
	<footer class="footer">
		<div>
			<span class="logo_s"><img src="../images/mk_img.png" width="70" alt="" /></span>
			<p>팀이니셜 HOTEL 주소 : 경기도 고양시 덕양구 동헌로 305 <br />
				tel : 000-0000-0000</p>
		</div>
	</footer>
</body>
</html>
