<?php
session_start();


$board=`board_contact`;
$conn=mysqli_connect("localhost","guest","gamesoft","hotel");//데이터베이스 연결

$no = $_GET[no];
$id = $_GET[id];

// 조회수 업데이트
$query = "UPDATE `board_contact` SET contact_see=contact_see+1 WHERE contact_id=$_GET[id]";
$result=mysqli_query($conn,$query);

// 글 정보 가져오기
$query = "SELECT * FROM `board_contact` WHERE contact_id=$_GET[id]";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

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
<title>INITIAL Notice read</title>
<script src="../js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="css/read.css">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    </style>
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
						<img src="../icon/icon_contact1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>



        <?php
        if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
        ?>

      </li>
      <li class="menu">
        <a href="../signin/signin.php" onfocus="blur()">
          <img src="../icon/icon_login1.png" />
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
					<a href="" onfocus="blur()">
						<img src="../icon/icon_home2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../room/room.php" onfocus="blur()">
						<img src="../icon/icon_roominfo 2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="#" onfocus="blur()">
						<img src="../icon/icon_notice2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>
				<li class="menu">
					<a href="../signin/signin.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
			</ul>-->

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
                          echo "<li class=\"s_menu\"><a href=\"../mypage.php\">$name 님</a></li>";
                        }

                        ?>
							<li class="s_menu"><a href="../index.php">HOME</a></li>
				</ul>
			</div>
			<ul id="main" class="cf"> <!--상단 바 이동 링크-->
				<li class="logo odd"><img src="../images/mk_img.png" width="100" alt="" /></li>
				<li class="notice odd"><a href="../notice/notice.php">게시판</a></li>
				<li class="contact active"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd "><a href="../NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="../map/map.php">오시는길</a></li>
				<li class="room odd"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" class="cf">
			<section id="content" class="cf">
				<img src="images/room2.png" alt="" />
				<div>
          <?php

          $move_num=$row[contact_id];

          $down_num = mysqli_query($conn,"SELECT contact_id FROM `board_contact`WHERE contact_id < $row[contact_id] ORDER BY contact_id DESC LIMIT 1 ;");
          $down = mysqli_fetch_array($down_num) ;
          $down_ok = $down[contact_id] ;    //중간에 게시글이 삭제되어도 확인가능한 구조

          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `board_contact` WHERE contact_id < $row[contact_id] ;"))!=0)// 이전 글이 있을 경우
          {

            echo "<input type=\"button\" value=\"이전글\" onclick=\"location='read.php?id=$down_ok'\" /> ";

          }

          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `board_contact` WHERE contact_id < $row[contact_id] ;"))==0)// 이전 글이 없을 경우
          {

            echo "<input type=\"button\" value=\"마지막\" disabled='disabled'/> ";

          }

          $up_num = mysqli_query($conn,"SELECT contact_id FROM `board_contact`WHERE contact_id > $row[contact_id] ORDER BY contact_id LIMIT 1 ;");
          $up = mysqli_fetch_array($up_num) ;
          $up_ok = $up[contact_id] ;         //중간에 게시글이 삭제되어도 확인가능한 구조

          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `board_contact` WHERE contact_id > $row[contact_id] ;"))!=0)// 다음 글이 있을 경우
          {

            echo "<input type=\"button\" value=\"다음글\" onclick=\"location='read.php?id=$up_ok'\" /> ";

          }

          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `board_contact` WHERE contact_id > $row[contact_id] ;"))==0)// 다음 글이 없을 경우
          {

            echo "<input type=\"button\" value=\"마지막\" disabled='disabled'/> ";

          }

          ?>
				</div>
				<table class="readT">
					<thead>
						<tr>
							<th>날짜 : </th>
							<td> <?=$row[contact_wdate];?> </td>
							<th>문의사항 : </th>
							<td>
              <?
              if ($row[contact_select] == 0){
                echo "예약관련";
              }
              else if ($row[contact_select] == 1){
                echo "결제관련";
              }
              else if ($row[contact_select] == 2){
                echo "기타문의";
              }
              ?>
            </td>
							<th>제목 : </th>
							<td> <?=$row[contact_title];?> </td>
							<th>작성자 : </th>
							<td> <?=$row[contact_name];?> </td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="read">
                <?$nl2br_text = nl2br($row[contact_text]);?>
								<p><?=$nl2br_text?></p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" value="답글쓰기" onclick="location='reply.php'"/>
								<input type="button" value="글 목록" onclick="location='contact.php'"/>
							</td>
						</tr>
					</tbody>
				</table>
				<!--
				<div id="wr1">
					<div class="w1">
						<ul>
							<li><input type="text" class="t1" placeholder="제목을 입력하세요. " name="subject"/></li>
							<li><input type="button" value="답글등록"/></li>
						</ul>
					</div>
					<div class="read1">
						<ul>
							<li><p>답글 예시입니다.</p></th>
							<li>
								<input type="button" value="최신순"/>
								<input type="button" value="추천순"/>
							</li>
							<li><p>답글 예시입니다.</p></li>
						</ul>
					</div>-->
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
