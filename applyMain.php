<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>申请签约工会</title>
<link href="css/kedo/style.css" rel="stylesheet">
<link href="css/kedo/homeBg.css" rel="stylesheet">
<link href="css/kedo/applyOw.css" rel="stylesheet">
</head>

<body style="padding-top:60px; ">
<?php
include("include/header.inc.php");
$user = checklogin();
include_once('tpl_header.php');
?>
	<div class="container applyM">
		<div class="owCon">
		<h3>申请工会</h3>
		<div class="appDetail">
			<h3 class="color99 tit">创建工会流程（线下）</h3>
			<div class="clearfix callCustom">
				<a href="#" class="pull-right">联系客服</a>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
					<a href="#" class="thumbnail">
						<img class="lineL" src="images/kedo/pic_shijianzhu.png" alt="">
						
					</a>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
					<div href="#" class="thumbnail">
						<div class="mainR mainR01">	
							<p>1、准备10个艺人视频资料(说明所属工会名称及3分钟内才艺展示)</p>
							<p>2、提供公司营业执照及法人身份证照片</p>
							<p>3、提供会长身份证照片，电话及联系QQ或微信</p>
							<p>4、工作是设备，直播间照片</p>
							<p class="clearfix download">
								<button class="btn btn-default">下载样板</button>
							</p>
						</div>

						<div class="mainR mainR02">	
							<p>对需要提供的资料进行打包，发送至蝌蚪平台指定的审核邮箱</p>
							<p>kdgonghui@kedo.tv</p>
							<p>入驻联系QQ：</p>
							<p class="qqnum">534764940</p>
							<p class="clearfix opeQQB">
								<button class="btn-lg opeQQ"></button>
							</p>
						</div>
						<div class="mainR mainR03">	
							<p>等待1~3个工作日审核</p>
							<p>审核结果会以邮件形式通知结果</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>
<?php include('tpl_footer.php'); ?>
</body>
</html>
