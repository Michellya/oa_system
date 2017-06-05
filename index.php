<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="keyword" content="">
<meta name="description" content="">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles/navi.css" />
<link rel="stylesheet" href="styles/styles.css">
<link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>
<?php include_once "oa_layer.php";?>
<div class="wrapper">
<!-- header -->
	<?php include_once "oa_head.php";?>
	<?php include_once "oa_navi.php";?>

	<div class="wrapper-container">
		<!-- sign -->
		<?php include_once "oa_signin.php";?>

		<div class="self-info depart-box">
			<div class="info-box wrap">
				<div class="wrap-title">橙里人信息</div>
				<div class="info">
					<img src="images/info-pic.jpg" class="info-pic" />
					<ul class="info-list list-box">
						<li class="li-g name">林志伟<span class="egl-name">Winnie</span></li>
						<li class="li-g">工号：119</li>
						<li class="li-g">职位：人力资源经理</li>
						<li class="li-g">星座：射手座</li>
						<li class="li-g">橙汁：330ml</li>
					</ul>
				</div>
				<a href="#" class="more-link">查看更多个人信息>></a>
			</div><!-- info -->
			<div class="reward-box wrap">
				<div class="wrap-title">勋章墙</div>
				<ul class="reward">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>	
			</div>
		</div><!--个人depart-box-->
		<div class="name-info depart-box">
			<div class="birth-box wrap">
				<div class="wrap-title">本月生日名单</div>
				<?php include "oa_table.php";?>
			</div>
			<div class="worktime-box wrap">
				<div class="wrap-title">本月工龄礼名单</div>
				<?php include "oa_table.php";?>
			</div>
		</div><!-- 名单depart-box -->
		<div class="broadcast-box wrap">
			<div class="wrap-title">橙市小广播</div>
			<?php include "oa_table.php";?>
		</div>
		<div class="separate-box">
			<div class="wrap">
				<div class="wrap-title">加班排行榜<span class="title-tips">（月度时长）</span></div>
				<?php include "oa_table.php";?>	
			</div>
			<div class="wrap">
				<div class="wrap-title">迟到排行榜<span class="title-tips">（年度次数）</span></div>
				<?php include "oa_table.php";?>	
			</div>
			<div class="wrap">
				<div class="wrap-title">全勤排行榜<span class="title-tips">（年度次数）</span></div>
				<?php include "oa_table.php";?>	
			</div>
		</div> 
	</div>
</div>

</body>
</html>