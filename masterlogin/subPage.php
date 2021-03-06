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
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/master.css">
<link rel="stylesheet" href="css/common.css">
<style type="text/css">@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);</style>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<title>INITIAL MasterLogin</title>

<!--<script src="../js/jquery-1.11.0.min.js">-->
<script type="text/javascript">
	$(document).on("click","#insertRv",function(){
		alert("예약 추가");
	});
	$(document).on("click","#updateRv",function(){
		alert("예약 변경");
	});
	$(document).on("click","#cancelRv",function(){
		alert("예약 취소");
	});
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
						<img src="../icon/icon_roominfo 2.png" />
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
					<a href="../map/map.php" target="_blank" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>
				<li class="menu">
					<a href="../signin/signin.php" onfocus="blur()">
						<img src="../icon/icon_login1.png" />
					</a>
				</li>
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
						<img src="../icon/icon_notice2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" target="_blank" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>
				<li class="menu">
					<a href="../signin/signin.php" onfocus="blur()">
						<img src="../icon/icon_map1.png" />
					</a>
				</li>
			</ul>

		</header>

		<nav id="nav">
			<div id="submenu">
				<ul class="cf">
							<li class="s_menu ac" style="display:inline"><a href="../signin/signin.php">LOGIN</a></li>
							<li class="s_menu"><a href="../signup/signup.php">SIGN UP</a></li>
							<li class="s_menu"><a href="../index.php">HOME</a></li>
				</ul>
			</div>
			<ul id="main" class="cf"> <!--상단 바 이동 링크-->
				<li class="logo odd"><img src="../images/mk_img.png" width="100" alt="" /></li>
				<li class="notice odd"><a href="../notice/notice.php">게시판</a></li>
				<li class="contact odd"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd "><a href="../NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="../map/map.php">오시는길</a></li>
				<li class="room odd"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
			</nav>
	</div>
	<div class="cntntsView">
		<div class="leftMenuDiv">
			<ul class="lftM">
				<li><a href="/masterlogin/master.php">예약 현황</a></li>
				<li class="on"><a href="/masterlogin/subPage.php">입실/퇴실 관리</a></li>
				<li><a href="#none">시설정보 등록</a></li>
				<li><a href="#none">공지사항 관리</a></li>
				<li><a href="#none">문의사항 관리</a></li>
			</ul>
		</div>
		<div class="cnttns">
			asdsadasdsad
		</div>
		<div class="btnDiv ac">
			<button type="button" class="btn btn_gry" id="insertRv">예약 추가</button>
			<button type="button" class="btn btn_gry" id="updateRv">예약 변경</button>
			<button type="button" class="btn btn_gry" id="cancelRv">예약 취소</button>
		</div>
			</section>

		</div><!-- id="contents" -->

		<a href="#top" id="pagetopBtn">
			<img src="../images/icn_pagetop1.jpg" alt="pagetop" width="40" height="60"/>
		</a>

		<footer id="footer">
			<div>
				<span class="logo_s"><img src="../images/mk_img.png" width="70" alt="" /></span>
				<p>팀이니셜 HOTEL 주소 : 경기도 고양시 덕양구 동헌로 305 <br />
					tel : 000-0000-0000</p>
			</div>
		</footer>
</body>
</html>
