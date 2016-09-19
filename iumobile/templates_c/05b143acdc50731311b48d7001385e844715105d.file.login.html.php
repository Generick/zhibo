<?php /* Smarty version Smarty-3.1.12, created on 2015-08-06 15:14:51
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:10697555ec194cf3e93-07407771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1438844682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10697555ec194cf3e93-07407771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_555ec194efb794_67533586',
  'variables' => 
  array (
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ec194efb794_67533586')) {function content_555ec194efb794_67533586($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>登录 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 触屏版</title>
<link rel="stylesheet" href="css/user.css?20150806">
<script src="js/jquerymobile/jquery.min.js?20150806"></script>
<script src="js/StageWebViewBridge.php?20150806"></script>
<style>
.ui-link-a,.ui-link{
font-weight: 700;
}
</style>
<script>
function login_req(){
	if($("#tcuser").val()==''){
		StageWebViewBridge.call('fnCalledFromJS', null, "nouser");
	}
	else if($("#tcpass").val()==''){
		StageWebViewBridge.call('fnCalledFromJS', null, "nopass");
	}
	else{
		$.post('/login.php?from=client',{ username:$("#tcuser").val(),'password':$("#tcpass").val()},function(r){
			if(r=='0'){
				StageWebViewBridge.call('fnCalledFromJS', null, "fail");
			}
			else{
				StageWebViewBridge.call('fnCalledFromJS', null, r);
			}
		});
	}
}
function login_qqlogin(){
	window.location.href='/opensns/qq/index.php?from=mobile';
}
function login_sinalogin(){
	window.location.href='/opensns/sina/index.php?from=mobile';
}
</script>
</head>
<body class="ucenter" >
<div class="con" data-role="page" id="login">
<section class="user-tab ect-margin-tb ect-margin-bottom0">
  <div class="tab-content">
    <div class="active ect-pro-list">
	<input type="text" class="loinginput" id="tcuser" value="" data-role="none" x-webkit-speech="" placeholder="帐号/靓号"/>
	<input type="password" class="loinginput" id="tcpass" value="" data-role="none" x-webkit-speech="" placeholder="密码"/>
	<div class="login_button"><a href="javascript:login_req();" class="ui-link">登录</a></div>
	<div class="login_button"><a href="javascript:window.location.href='register.php'" class="ui-link" style="background:#ccc;">注册</a></div>
	<p class="three_login_txt">直接用第三方合作帐号登录</p>
	<div class="three_login" style="margin-top:35px">
		<div id="login1" class="login1" onclick="login_qqlogin()"><a data-ajax="false" href="/opensns/qq/index.php?from=mobile" class="ui-link-a">QQ登录</a></div>
		<div id="login2" class="login2" onclick="login_sinalogin()"><a data-ajax="false" href="/opensns/sina/index.php?from=mobile" class="ui-link-a">微博登录</a></div>
		<div style="clear:both"></div>
	</div>
    </div>
  </div>
</section>
</div>

</body>
</html><?php }} ?>