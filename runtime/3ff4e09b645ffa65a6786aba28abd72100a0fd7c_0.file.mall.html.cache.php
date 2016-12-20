<?php
/* Smarty version 3.1.30, created on 2016-12-20 10:10:28
  from "D:\xampp\htdocs\anchors\app\view\mall\mall.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585893148647b0_06425846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff4e09b645ffa65a6786aba28abd72100a0fd7c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\mall\\mall.html',
      1 => 1481877763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/footer.html' => 1,
  ),
),false)) {
function content_585893148647b0_06425846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1676858589314829e35_30018096';
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

<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['a']->value;?>

<!--主体-->
	<div class="main-mall">
		<div class="mall-top">
			<div class="mall-top-title">
				<a href="#" class="mselect"> 守护</a>
			</div>
			<div class="mall-top-title">
				<a href="kedo.php?c=mall&m=mall_prop&v=isdhishd221332@5342115uiuiihj1yh"  class=""> 道具</a>
			</div>
			<div class="mall-top-title">
				<a href="kedo.php?c=mall&m=mall_ride" class=""> 座驾</a>
			</div>
		</div>
		<div class="clear"></div>

		<!-- 道具-->

		<div class="guard">
			<div class="wrapper">
				<div class="guardBg spriteGuard pic_shangcheng_banner"></div>
				<div class="privilege">
					<h4>守护特权说明</h4>
					<ul class="gd_list clearFix">
						<li class="fl bgBigLi firstBig">
							<div class="guard_tit_bg"></div>
							<div class="guardType">守护类型</div>
							<ul class="gd_detail">
								<li><span class="spriteGuard icon_huizhang"></span> <span>专属勋章</span>
								</li>
								<li><span class="spriteGuard icon_zuoyi"></span> <span>专属座位</span>
								</li>
								<li class="jinchang clearFix"><span
									class="bg spriteGuard cion_jinchang fl"></span> <span
									class="text fl">进场特效</span></li>
								<li><span class="spriteGuard icon_messages"></span> <span>聊天特权</span>
								</li>
								<li class="last"><span class="spriteGuard icon_tichu"></span>
									<span>房间特权</span></li>
							</ul>
						</li>

						<li class="fl bgBigLi">
							<div class="spriteGuard pic_shuoming_qingtong"></div>
							<div class="kinds">
								<h5>青铜级</h5>
								<p>LV1-LV5</p>
							</div>
							<ul class="gd_detail">
								<li class="firstDetail"><span
									class="spriteGuard pic_guardlevel_qingtong"></span> <span
									class="spriteGuard pic_shangcheng_qingtong"></span></li>
								<li>聊天框 <span class="blue">蓝色</span> 昵称
								</li>
								<li>防普通禁言、踢出房间</li>
							</ul>
						</li>

						<li class="fl bgBigLi">
							<div class="spriteGuard pic_shouhu_baiyin"></div>
							<div class="kinds">
								<h5>白银级</h5>
								<p>LV5-Lv10</p>
							</div>
							<ul class="gd_detail">
								<li class="firstDetail"><span
									class="spriteGuard pic_guardlevel_baiyin"></span> <span
									class="spriteGuard pic_shangcheng_baiyin"></span></li>
								<li>聊天框 <span class="violet">紫色</span> 昵称
								</li>
								<li>防普通禁言、踢出房间</li>
							</ul>
						</li>

						<li class="fl bgBigLi">
							<div class="spriteGuard pic_shuoming_huangjin"></div>
							<div class="kinds">
								<h5>黄金级</h5>
								<p>LV10-LV15</p>
							</div>
							<ul class="gd_detail">
								<li class="firstDetail"><span
									class="spriteGuard pic_guardlevel_huangjin"></span> <span
									class="spriteGuard pic_shangcheng_huangjin"></span></li>
								<li>聊天框 <span class="orange">橙色</span> 昵称
								</li>
								<li>防普通禁言、踢出房间</li>
							</ul>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="howUp">
			<div class="wrapper">
				<div class="spriteGuard pic_shangcheng_shengji"></div>
			</div>
		</div>

		<div class="detail_start">
			<div class="wrapper">
				<div class="spriteGuard pic_shangcheng_kaitong"></div>
			</div>
		</div>

	</div>


<!--底部-->
<?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
