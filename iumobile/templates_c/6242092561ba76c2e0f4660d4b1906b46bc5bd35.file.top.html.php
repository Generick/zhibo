<?php /* Smarty version Smarty-3.1.12, created on 2015-08-31 14:04:44
         compiled from ".\templates\top.html" */ ?>
<?php /*%%SmartyHeaderCode:2079055543a58373624-37369548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6242092561ba76c2e0f4660d4b1906b46bc5bd35' => 
    array (
      0 => '.\\templates\\top.html',
      1 => 1440743136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079055543a58373624-37369548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55543a5851df32_52827930',
  'variables' => 
  array (
    'site_name' => 0,
    'cdn_domain' => 0,
    'money_name' => 0,
    'money_name2' => 0,
    'site_skin' => 0,
    'IS_SINGLE_MONEY' => 0,
    'user' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543a5851df32_52827930')) {function content_55543a5851df32_52827930($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>排行榜 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 触屏版</title>
<link rel="stylesheet" href="css/bootstrap.min.css?20141127b">
<link rel="stylesheet" href="css/font-awesome.min.css?20141127b">
<link rel="stylesheet" href="css/ectouch.css?20141127b">
<link rel="stylesheet" href="css/user.css?20141127b">
<link rel="stylesheet" href="css/photoswipe.css?20141127b">
<link rel="stylesheet" href="/css/level.css?20141127b">
<link rel="stylesheet" href="/css/gift.css?20141127b">
<link rel="stylesheet" href="js/jquerymobile/jquery.mobile-1.4.5.min.css?20141127b">
<script src="js/jquerymobile/jquery.min.js?20141127b"></script>
<script src="js/jquerymobile/jquery.mobile-1.4.5.min.js?20141127b"></script>
<script src="js/top.js?20141127b"></script>
<script src="js/StageWebViewBridge.php?20141127b"></script>
<script>
var cdn_domain="<?php echo $_smarty_tpl->tpl_vars['cdn_domain']->value;?>
";
var money_name="<?php echo $_smarty_tpl->tpl_vars['money_name']->value;?>
";
var money_name2="<?php echo $_smarty_tpl->tpl_vars['money_name2']->value;?>
";
var site_skin="<?php echo $_smarty_tpl->tpl_vars['site_skin']->value;?>
";
var IS_SINGLE_MONEY="<?php echo $_smarty_tpl->tpl_vars['IS_SINGLE_MONEY']->value;?>
";
var currentUserNumber="<?php echo $_smarty_tpl->tpl_vars['user']->value['usernumber'];?>
";
var thisPage="top";
var clanid="0";
$(function(){
	var  hashs = window.location.toString().split('#');
	if(hashs[1]=="clandetail"){
		clanid = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
		thisPage='clandetail';top_clandetail(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)
	}else if(hashs[1]=="mingxing"){
		thisPage='mingxing';top_mingxing()
	}else if(hashs[1]=="fuhao"){
		thisPage='mingxing';top_mingxing()
	}else if(hashs[1]=="renqi"){
		thisPage='renqi';top_renqi()
	}else if(hashs[1]=="gif"){
		thisPage='gif';top_gift()
	}
});
</script>
</head>
<body class="ucenter">
<div class="con" data-role="page" id="ss">
<section class="top-tab ect-margin-tb ect-margin-bottom0 ucenter_nav" style="margin-top:0;">
  <div class="tab-content">
    <div class="active ect-pro-list">
			<a class="nav_a" href="#mingxing" onClick="thisPage='mingxing';top_mingxing()" data-transition="slide"><p class="ect-margin-tb ect-padding-tb"><img src="images/ico_mingxing.png" width="28" height="28"/>明星榜</p></a>
			<hr/>
            <a class="nav_a" href="#fuhao" onClick="thisPage='fuhao';top_fuhao()" data-transition="slide"><p class="ect-margin-tb ect-padding-tb"><img src="images/ico_fuhao.png" width="28" height="28"/>富豪榜</p></a>
			<hr/>
            <a class="nav_a" href="#renqi" onClick="thisPage='renqi';top_renqi()" data-transition="slide"><p class="ect-margin-tb ect-padding-tb"><img src="images/ico_renqi.png" width="28" height="28"/>人气榜</p></a>
			<hr/>
            <a class="nav_a" href="#gif" onClick="thisPage='gif';top_gift()" data-transition="slide"><p class="ect-margin-tb ect-padding-tb"><img src="images/ico_gift.png" width="28" height="28"/>礼物榜</p></a>
			<hr/>
            
    </div>
  </div>
</section>
</div>
<div class="con" data-role="page" id="gif" >
<section class="container-fluid top-nav">
  <ul class="row ect-row-nav text-center buy_vip_tab tab_nav">
    <li class="col-sm-6 col-xs-6 on" rel="datalist_gift_0"><p class="text-center">本周</p></li>
    <li class="col-sm-6 col-xs-6" rel="datalist_gift_1"><p class="text-center">上周</p></li>
  </ul>
</section>
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list"> 
		<ul id="datalist_gift_0" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_gift_1" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
    </div>
  </div>
</section>
</div>
<div class="con" data-role="page" id="mingxing" >
<section class="container-fluid top-nav">
  <ul class="row ect-row-nav text-center buy_vip_tab tab_nav">
    <li class="col-sm-3 col-xs-3 on" rel="datalist_mingxing_day"><p class="text-center">日榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_mingxing_week"><p class="text-center">周榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_mingxing_month"><p class="text-center">月榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_mingxing_all"><p class="text-center">超级</p></li>
  </ul>
</section>
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list"> 
		<ul id="datalist_mingxing_day" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_mingxing_week" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_mingxing_month" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_mingxing_all" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
    </div>
  </div>
</section>
</div>

<div class="con" data-role="page" id="fuhao" >
<section class="container-fluid top-nav">
  <ul class="row ect-row-nav text-center buy_vip_tab tab_nav">
    <li class="col-sm-3 col-xs-3 on" rel="datalist_fuhao_day"><p class="text-center">日榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_fuhao_week"><p class="text-center">周榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_fuhao_month"><p class="text-center">月榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_fuhao_all"><p class="text-center">超级</p></li>
  </ul>
</section>
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list"> 
		<ul id="datalist_fuhao_day" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_fuhao_week" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_fuhao_month" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_fuhao_all" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
    </div>
  </div>
</section>
</div>

<div class="con" data-role="page" id="renqi" >
<section class="container-fluid top-nav">
  <ul class="row ect-row-nav text-center buy_vip_tab tab_nav">
    <li class="col-sm-3 col-xs-3 on" rel="datalist_renqi_day" class="tab"><p class="text-center">日榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_renqi_week" class="tab"><p class="text-center">周榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_renqi_month" class="tab"><p class="text-center">月榜</p></li>
    <li class="col-sm-3 col-xs-3" rel="datalist_renqi_all" class="tab"><p class="text-center">超级</p></li>
  </ul>
</section>
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list"> 
		<ul id="datalist_renqi_day" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_renqi_week" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_renqi_month" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
		<ul id="datalist_renqi_all" style="display:none;" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
    </div>
  </div>
</section>
</div>

</body>
</html><?php }} ?>