<?php
//---- 오늘 날짜
$thisyear = date('Y'); // 4자리 연도
$thismonth = date('n'); // 0을 포함하지 않는 월
$today = date('j'); // 0을 포함하지 않는 일
//$roomnum = ;

//------ $year, $month 값이 없으면 현재 날짜
$year = isset($_GET['year']) ? $_GET['year'] : $thisyear;
$month = isset($_GET['month']) ? $_GET['month'] : $thismonth;
$day = isset($_GET['day']) ? $_GET['day'] : $today;

$prev_month = $month - 1;
$next_month = $month + 1;
$prev_year = $next_year = $year;
if ($month == 1) {
    $prev_month = 12;
    $prev_year = $year - 1;
} else if ($month == 12) {
    $next_month = 1;
    $next_year = $year + 1;
}
$preyear = $year - 1;
$nextyear = $year + 1;

$predate = date("Y-m-d", mktime(0, 0, 0, $month - 1, 1, $year));
$nextdate = date("Y-m-d", mktime(0, 0, 0, $month + 1, 1, $year));

// 1. 총일수 구하기
$max_day = date('t', mktime(0, 0, 0, $month, 1, $year)); // 해당월의 마지막 날짜
//echo '총요일수'.$max_day.'<br />';

// 2. 시작요일 구하기
$start_week = date("w", mktime(0, 0, 0, $month, 1, $year)); // 일요일 0, 토요일 6

// 3. 총 몇 주인지 구하기
$total_week = ceil(($max_day + $start_week) / 7);

// 4. 마지막 요일 구하기
$last_week = date('w', mktime(0, 0, 0, $month, $max_day, $year));
?>


﻿<!DOCTYPE HTML>
<html lang="ko-KR">
<head>
	<meta charset="UTF-8">
	<title>풀빌라1</title>
    <link rel="stylesheet" href="css/reservation.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
				$(document).ready(function () {
						$("a").each(function () {
								$(this).click(function () {
										$(this).addClass("Select");
										$(this).siblings().removeClass("Select");
									});
						});
				});
	</script>
</head>
<body>
<br />
<div id="reservation">
	<h2>room1 예약</h2>
	<div id="Day">
		<div class="month">
			<ul>

				<?php if( $prev_year <= $thisyear && $prev_month < $thismonth ){ ?>
				<li class="prev"><input type="button" value="&#10094;" disabled='disabled' ></li>
			<?php } ?>

			<?php if( $prev_year >= $thisyear && $prev_month >= $thismonth ){ ?>
				<li class="prev"><input type="button" onclick="<?php echo "location.href='reservation.php?year=$prev_year&month=$prev_month&day=1';" ?>" value="&#10094;"></li>
			<?php } ?>

			<?php if( $prev_year > $thisyear && $prev_month < $thismonth ){ ?>
				<li class="prev"><input type="button" onclick="<?php echo "location.href='reservation.php?year=$prev_year&month=$prev_month&day=1';" ?>" value="&#10094;"></li>
			<?php } ?>

				<li class="next"><input type="button" onclick="<?php echo "location.href='reservation.php?year=$next_year&month=$next_month&day=1';" ?>" value="&#10095;"></li>
				<li>
					<?=$month?>월<br><!-- 월 -->
					<span class="year"><?=$year?></span><!-- 년 -->
				</li>
			</ul>
		</div>
		<div class="calender">
			<div class="weekdays">
				<ul>
					<li class="Mo">일</li>
					<li>월</li>
					<li>화</li>
					<li>수</li>
					<li>목</li>
					<li>금</li>
					<li>토</li>
				</ul>
			</div>
			<div class="days">
				<ul>

					<?php
					    // 5. 화면에 표시할 화면의 초기값을 1로 설정
					    $day=1;

					    // 6. 총 주 수에 맞춰서 세로줄 만들기
					    for($i=1; $i <= $total_week; $i++){
					?>

					<?php
					    // 7. 총 가로칸 만들기
					    for ($j = 0; $j < 7; $j++) {
					        // 8. 첫번째 주이고 시작요일보다 $j가 작거나 마지막주이고 $j가 마지막 요일보다 크면 표시하지 않음


									if ($j == 0){
										echo "<li class=\"Mo\"><a>";
									} else {
										echo "<li><a>";
									}

									if ((($i == 1 && $j < $start_week) || ($i == $total_week && $j > $last_week))) {
										echo "&nbsp;&nbsp;&nbsp;&nbsp;";
									}




					        if (!(($i == 1 && $j < $start_week) || ($i == $total_week && $j > $last_week))) {

					            if ($j == 0) {
					                // 9. $j가 0이면 일요일
					            } else if ($j == 6) {
					                // 10. $j가 0이면 토요일
					            } else {
					                // 11. 그외는 평일
					            }

					            // 12. 오늘 날짜
											if ($year == $thisyear && $month == $thismonth && $day == date("j")) {
					                if ($day > 0 && $day < 10){
														echo "&nbsp;$day&nbsp;";
													} else {
														echo "$day";
													}


					            } else {
											// 13. 이 외 날짜 출력
													if ($day > 0 && $day < 10){
														echo "&nbsp;$day&nbsp;";
													} else {
														echo "$day";
													}
					            }
					            // 14. 날짜 증가
					            $day++;
					        }

									echo "</a></li>";

					    }
					?>

					<?php } ?>

				</ul>
			</div>
		</div>
	</div>
	<div id="Pay">
		<div class="">

		</div>
		<div class="">

		</div>
	</div>
</div>
</body>
</html>
