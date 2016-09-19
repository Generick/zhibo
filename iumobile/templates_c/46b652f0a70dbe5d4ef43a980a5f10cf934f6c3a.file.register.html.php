<?php /* Smarty version Smarty-3.1.12, created on 2015-08-06 15:05:55
         compiled from ".\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:19524555ec5625c2d40-85877769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b652f0a70dbe5d4ef43a980a5f10cf934f6c3a' => 
    array (
      0 => '.\\templates\\register.html',
      1 => 1438844751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19524555ec5625c2d40-85877769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_555ec56265f162_66349912',
  'variables' => 
  array (
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ec56265f162_66349912')) {function content_555ec56265f162_66349912($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>注册 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 触屏版</title>
<link rel="stylesheet" href="css/user.css?20150806">
<script src="js/jquerymobile/jquery.min.js?20150806"></script>
<script src="js/StageWebViewBridge.php?20150806"></script>
<style>
.ui-link-a,.ui-link{
font-weight: 700;
}
.user-tab {
  background: #fff none repeat scroll 0 0;
  border-bottom: 1px solid #e3e3e3;
}
</style>
<script>
function reg_req(){
	if($("#username_reg").val()==''){
		StageWebViewBridge.call('fnCalledFromJS', null, "reg_username");
	}
	else if($("#nickname").val()==''){
		StageWebViewBridge.call('fnCalledFromJS', null, "reg_nickname");
	}
	else if($("#password").val()==''){
		StageWebViewBridge.call('fnCalledFromJS', null, "password");
	}
	else if($("#conf_passsword").val()==''){
		StageWebViewBridge.call('fnCalledFromJS', null, "reg_password");
	}
	else{
		$.post('/register.php?action=reg&from=client',{ email:$("#username_reg").val(), nickname:$("#nickname").val(), password:$("#password").val(),'repassword':$("#conf_passsword").val()},function(obj2){
			if(obj2.r!="yes"){
				if(obj2.field=="password"){
					StageWebViewBridge.call('fnCalledFromJS', null, "reg_passworderr");
				}else if(obj2.field=="repassword"){
					StageWebViewBridge.call('fnCalledFromJS', null, "conf_passsworderr");
				}else if(obj2.field=="nickname"){
					if(obj2.r.indexOf('昵称长度')!=-1){
						StageWebViewBridge.call('fnCalledFromJS', null, "reg_nicknamelen");
					}else if(obj2.r.indexOf('昵称已经存在')!=-1){
						StageWebViewBridge.call('fnCalledFromJS', null, "reg_nicknameexist");
					}else if(obj2.r.indexOf('昵称中含有不被允许的文字')!=-1){
						StageWebViewBridge.call('fnCalledFromJS', null, "reg_nicknamenoallow");
					}
				}else if(obj2.field=="email"){
					if(obj2.r.indexOf('帐号长度')!=-1){
						StageWebViewBridge.call('fnCalledFromJS', null, "reg_usernamelen");
					}else if(obj2.r.indexOf('帐号不能全为数字')!=-1){
						StageWebViewBridge.call('fnCalledFromJS', null, "reg_usernameis_numeric");
					}else if(obj2.r.indexOf('帐号已经存在')!=-1){
						StageWebViewBridge.call('fnCalledFromJS', null, "reg_usernameexist");
					}
				}
			}else{
				StageWebViewBridge.call('fnCalledFromJS', null, obj2.field);
			}
		},"json");
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
	<input type="text" class="loinginput" id="username_reg" value="" data-role="none" x-webkit-speech="" placeholder="帐号"/>
	<input type="text" class="loinginput" id="nickname" value="" data-role="none" x-webkit-speech="" placeholder="昵称"/>
	<input type="password" class="loinginput" id="password" value="" data-role="none" x-webkit-speech="" placeholder="密码"/>
	<input type="password" class="loinginput" id="conf_passsword" value="" data-role="none" x-webkit-speech="" placeholder="确认密码"/>
	<div class="login_button"><a href="javascript:reg_req();" class="ui-link">注册</a></div>
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