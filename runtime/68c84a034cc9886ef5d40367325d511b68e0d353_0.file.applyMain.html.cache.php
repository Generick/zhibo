<?php
/* Smarty version 3.1.30, created on 2016-12-26 15:55:37
  from "D:\xampp\htdocs\anchors\app\view\assist\applyMain.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860ccf9ac5d04_15147642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c84a034cc9886ef5d40367325d511b68e0d353' => 
    array (
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\assist\\applyMain.html',
      1 => 1482738919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/footer.html' => 1,
  ),
),false)) {
function content_5860ccf9ac5d04_15147642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '72495860ccf9a87500_09308222';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>申请签约公会</title>
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
<body  style="padding-top:60px;">

<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- 主体 -->
	<div class="container applyM">
		<div class="owCon">
		<h3>申请公会</h3>
		<div class="appDetail">
			<h3 class="color99 tit">创建公会流程（线下）</h3>
			<div class="clearfix callCustom">
				<a href="kedo.php?c=assist&m=help" class="pull-right">联系客服</a>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
					<a href="#" class="thumbnail">
						<img class="lineL" src="public/assist/img/pic_shijianzhu.png" alt="">
						
					</a>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
					<div href="#" class="thumbnail">
						<div class="mainR mainR01">	
							<p>1、准备10个艺人视频资料(说明所属公会名称及3分钟内才艺展示)</p>
							<p>2、提供公司营业执照及法人身份证照片</p>
							<p>3、提供会长身份证照片，电话及联系QQ或微信</p>
							<p>4、工作是设备，直播间照片</p>
							<p class="clearfix download hidden">
								<button class="btn btn-default">下载样板</button>
							</p>
						</div>

						<div class="mainR mainR02">	
							<p>对需要提供的资料进行打包，发送至蝌蚪平台指定的审核邮箱</p>
							<p>kdgonghui@kedo.tv</p>
							<p>入驻联系QQ：534764940</p>
							<p class="clearfix opeQQB hidden">
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

<?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
