<?php /* Smarty version Smarty-3.1.12, created on 2015-08-06 14:15:39
         compiled from ".\templates\zhuanpan.html" */ ?>
<?php /*%%SmartyHeaderCode:493855c2d8d3cd4c83-37925936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dbabf87225deb9097a6c1d74d86104ae9b2f3bb' => 
    array (
      0 => '.\\templates\\zhuanpan.html',
      1 => 1438841725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '493855c2d8d3cd4c83-37925936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55c2d8d3d84929_95602516',
  'variables' => 
  array (
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2d8d3d84929_95602516')) {function content_55c2d8d3d84929_95602516($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>转盘抽奖区 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 触屏版</title>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640,height=1053,user-scalable=no">
<style>
body{
	background:#782f88;
}
.rotary {
  background: url("images/zhuanpan_bg.png?20150414") repeat #d71f2e;
  height: 866px;
  margin: 0 auto;
  position: absolute;
  width: 640px;
  top:0;
  left:0;
}
.rotaryArrow {
  background-image: url("images/zhuanpan_arrow.png");
  cursor: pointer;
  height: 160px;
  left: 240px;
  position: absolute;
  top: 360px;
  width: 160px;
  -webkit-appearance:none;
}
</style>
</head>
<body>
<div class="rotary">
	<div class="rotaryArrow" id="rotaryArrow" onClick="getAward()" style="-webkit-tap-highlight-color: rgba(0,0,0,0);"></div>
</div>
<script src="/js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.rotate.min.js"></script>
<script src="js/StageWebViewBridge.php?20141127b"></script>
<script>
var $rotaryArrow = $('#rotaryArrow');
var rotateFunc = function(awards,angle,text){  //awards:奖项，angle:奖项对应的角度
	$rotaryArrow.stopRotate();
	$rotaryArrow.rotate({
		angle: 0,
		duration: 5000,
		animateTo: angle + 1440,  //angle是图片上各奖项对应的角度，1440是让指针固定旋转4圈
		callback: function(){
			StageWebViewBridge.call('fnCalledFromJS', null, ('alert'+text));
		}
	});
};

var key_content = "";
function getAward(){
	$.post("/first_order.php?type=go&token=",function(response){
		if(response.code == "200"){
			rotateFunc(response.key,goRotary(response.key),response.msg);
        }else{
            StageWebViewBridge.call('fnCalledFromJS', null, ('alert'+response.msg));
        }
	}, "json");
}
/*
rotateFunc(1,87,'恭喜您获得了 <em>1</em> 元代金券');
rotateFunc(1,247.5,2);
rotateFunc(2,292.5,aaa);
rotateFunc(3,337.5,aaa);
rotateFunc(4,22.5,aaa);
rotateFunc(5,67.5,aaa);
rotateFunc(6,112.5,aaa);
rotateFunc(7,157.5,aaa);
rotateFunc(8,202.5,aaa);
*/
function goRotary(k){
	switch(k){
		case 1:
			return 247.5;
			break;
		case 2:
			return 292.5;
			break;
		case 3:
			return 337.5;
			break;
		case 4:
			return 22.5;
			break;
		case 5:
			return 67.5;
			break;
		case 6:
			return 112.5;
			break;
		case 7:
			return 157.5;
			break;
		case 8:
			return 202.5;
			break;
   }
}
function fnCalledFromAs3( data )
{
	if(data=="getPage"){
		var url = window.location.toString();
		var id = url.split('#')[1];
		return id;
	}
}
</script>
</body>
</html>
<?php }} ?>