<?php
/* Smarty version 3.1.30, created on 2016-12-26 15:51:10
  from "D:\xampp\htdocs\anchors\app\view\mall\mall.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860cbeec40b86_75414816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff4e09b645ffa65a6786aba28abd72100a0fd7c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\mall\\mall.html',
      1 => 1482489748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/footer.html' => 1,
  ),
),false)) {
function content_5860cbeec40b86_75414816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '45935860cbeebf2989_51492353';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
	<title>商城</title>
	<link data-fixed="true" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/mall/css/square.css?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/min/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/js/login.js" type="text/javascript" ><?php echo '</script'; ?>
>

</head>
<body style="padding-top:60px;">

<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--主体-->
	<div class="main-mall">
		<div class="mall-top">
			<div class="mall-top-title">
				<a href="#" class="mselect"> 守护</a>
			</div>
            <div class="mall-top-title">
            	<a href="kedo.php?c=mall&m=mall_prop" class=""> 道具</a>
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

 <?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
