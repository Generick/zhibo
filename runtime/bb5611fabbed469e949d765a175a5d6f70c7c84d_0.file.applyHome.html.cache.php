<?php
/* Smarty version 3.1.30, created on 2016-12-26 15:54:28
  from "D:\xampp\htdocs\anchors\app\view\assist\applyHome.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860ccb4084d07_56411882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5611fabbed469e949d765a175a5d6f70c7c84d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\assist\\applyHome.html',
      1 => 1482738862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/footer.html' => 1,
  ),
),false)) {
function content_5860ccb4084d07_56411882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '225935860ccb4059d81_13307185';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>申请签约工会</title>
	<link href="public/assist/css/applyOw.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/min/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/js/login.js" type="text/javascript" ><?php echo '</script'; ?>
>
</head>
<body class="owBg" style="padding-top:60px;">

<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- 主体 -->
	<div class="container applyHm">
		<div class="jumbotron">
		</div>
		<p class="text-center">
		  <a href="kedo.php?c=assist&m=applymain" type="button" class="btn-lg applyBtn">申请签约公会</a>
		</p>
		<div class="cen">
			<h3>签约要求及待遇：</h3>
			<p class="color99">1、首批入驻公会3个月内享有S级公会待遇，20%的公会提成以及优先获得首页资源位置</p>
			<p class="color99">2、入驻公会有稳定的艺术资源，签约后1个月内需要保证15名艺人通过审核并进驻平台。</p>
			<p class="color99">3、每月需要提供5个及以上艺人入驻平台</p>

			<h3 class="consultTit hidden">签约公会入驻咨询：</h3>
		</div>
		<p class="text-center hidden">
			<a href="kedo.php?c=assist&m=applymain" target="_blank" type="button" class="btn btn-default btn-lg opeQQ">申请签约公会</a>
		</p>

	</div>

<?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
