<?php
/* Smarty version 3.1.30, created on 2016-12-16 14:30:57
  from "D:\xampp\htdocs\xin\app\view\mall\mall_prop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58538a21e5fb08_65549198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b9581c7ffefe9deaadc10f1f0e017caa5ff887' => 
    array (
      0 => 'D:\\xampp\\htdocs\\xin\\app\\view\\mall\\mall_prop.html',
      1 => 1481696829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58538a21e5fb08_65549198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1766258538a21e5bc87_58674433';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>商城</title>
<link href="__PUBLIC__/css/anchor-level.css" rel="stylesheet">
<link data-fixed="true" href="__PUBLIC__/css/square.css" rel="stylesheet">
<link href="__PUBLIC__/center/css/index.css" rel="stylesheet" type="text/css">

	<include file="Public/head" />

<!--主体-->
	<div class="main-mall">
		<div class="mall-top">
			<div class="mall-top-title">
				<a href=" " class=""> 守护</a>
			</div>
			<div class="mall-top-title">
				<a href=" " class="mselect"> 道具</a>
			</div>
			<div class="mall-top-title">
				<a href=" " class=""> 座驾</a>
			</div>
		</div>
		<div class="clear"></div>

		<!-- 道具-->
		<div class="mall-list">

			<div class="mall-box">
				<div class="mall-box-top">
					<div class="mall-gift-img">
						<img
							src="http://static.youku.com/ddshow/img/shopping/big/global-horn_1.png">
					</div>
					<div class="mall-gift-con">
						<div class="mall-gift-tit">全站喇叭</div>
						<div class="mall-gift-mid">男爵以上才可以购买</div>
						<div class="mall-gift-price">
							<span>5789</span><span>蝌蚪币</span><a href=" "
								target="_blank" class="click">购买</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="mall-box-bot">
					<div class="bot_tit">全站喇叭</div>
					<div class="">1、公爵以上可用特殊礼物</div>
					<div class="">2、使用后可获得发言橙色炫光效果</div>
				</div>
			</div>

		</div>

		<div class="prop_tip">
			<h5>道具说明</h5>
			<p>公爵以上每月获赠免费道具一个，每一种道具对应相等级别，等级不同，购买的道具也不相同，道具可以赠送给主播或者普通用户，主播获得道具将可以兑换成现金普通用户收到道具后可以转赠给主播</p>
		</div>

	</div>

	<!-- login -->
	


	<include file="Public/footer" />

	<!-- 2 jQuery库 同时加载该库必须在加载bootstrap.min.js之前 -->

	<!-- 3 加载bootstrap的核心ＪＳ库 -->
	<?php echo '<script'; ?>
 src="__PUBLIC__/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="__PUBLIC__/js/boot.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="__PUBLIC__/js/index.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
