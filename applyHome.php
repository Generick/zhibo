<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>申请签约工会</title>
<link href="css/kedo/style.css" rel="stylesheet">
<link href="css/kedo/homeBg.css" rel="stylesheet">
<link href="css/kedo/applyOw.css" rel="stylesheet">
</head>

<body class="owBg" style="padding-top:60px; ">
<?php
include("include/header.inc.php");
$user = checklogin();
include_once('tpl_header.php');
?>
	<div class="container applyHm">
		<div class="jumbotron">
		</div>
		<p class="text-center">
		  <a href="/applyMain.php" type="button" class="btn-lg applyBtn">申请签约工会</a>
		</p>
		<p class="text-center">
		  <a href="/applyMain.php">创建玩家工会</a>
		</p>
		<div class="cen">
			<h3>签约要求及待遇：</h3>
			<p class="color99">1、首批入驻工会3个月内享有S级工会待遇，20%的工会提成以及优先获得首页资源位置</p>
			<p class="color99">2、入驻工会有稳定的艺术资源，签约后1个月内需要保证15名艺人通过审核并进驻平台。</p>
			<p class="color99">3、每月需要提供5个及以上艺人入驻平台</p>

			<h3 class="consultTit">签约工会入驻咨询：</h3>
		</div>
		<p class="text-center">
			<a href="/applyMain.php" target="_blank" type="button" class="btn btn-default btn-lg opeQQ">申请签约工会</a>
		</p>

	</div>
<?php include('tpl_footer.php'); ?>
</body>
</html>
