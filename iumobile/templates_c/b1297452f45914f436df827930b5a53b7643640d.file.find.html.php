<?php /* Smarty version Smarty-3.1.12, created on 2015-08-06 14:12:06
         compiled from ".\templates\find.html" */ ?>
<?php /*%%SmartyHeaderCode:2157255c2d8d1e08f20-05989514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1297452f45914f436df827930b5a53b7643640d' => 
    array (
      0 => '.\\templates\\find.html',
      1 => 1438841512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2157255c2d8d1e08f20-05989514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55c2d8d1eeb857_30422013',
  'variables' => 
  array (
    'site_name' => 0,
    'cdn_domain' => 0,
    'money_name' => 0,
    'money_name2' => 0,
    'site_skin' => 0,
    'IS_SINGLE_MONEY' => 0,
    'user' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2d8d1eeb857_30422013')) {function content_55c2d8d1eeb857_30422013($_smarty_tpl) {?><!DOCTYPE html>
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
<script src="js/find.js?20141127b"></script>
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
	if(hashs[1]=="clan"){
		thisPage = "clan";top_clan()
	}
});
</script>
</head>
<body class="ucenter">
<div class="con" data-role="page" id="ss">
<section class="top-tab ect-margin-tb ect-margin-bottom0 ucenter_nav" style="margin-top:0;">
  <div class="tab-content">
    <div class="active ect-pro-list">
            <a class="nav_a" href="#clan" onClick="thisPage='clan';top_clan()" data-transition="slide"><p class="ect-margin-tb ect-padding-tb"><img src="images/ico_clan.png" width="28" height="28"/>家族</p></a>
			<hr/>
			<a class="nav_a" href="javascript:window.location.href='zhuanpan.php#1';"><p class="ect-margin-tb ect-padding-tb"><img src="images/ico_gift.png" width="28" height="28"/>首充抽奖</p></a>
            
    </div>
  </div>
</section>
</div>
<div class="con" data-role="page" id="clan">
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content" style="margin-top:0;"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list"> 
		<ul id="datalist_clan_clan" class="clan_data" class="tab"><li class='text-center'>数据正在加载中...</li></ul>
    </div>
  </div>
</section>
</div>
<div class="con" data-role="page" id="clandetail">
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content" style="margin-top:0;"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list">
		<div id="datalist_clan_clandetail_info">
<table><tr><td valign="top" rowspan="4" colspan="1"><img src="/apis/avatar.php?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
&_t=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
">
</td><td valign="top"><em class="clanmedal famhuizhj"></em>
</td></tr><tr><td valign="top"><span class="nickname">族长:</span>
</td></tr><tr><td valign="top"><span class="craate">创建于:</span>
</td></tr><tr><td valign="top"><div class="inclan"><a href='javascript:applyjoin()' class="tbbuybtn_red buybtn ui-link">加入</a></div>
</td></tr></table>
<p class="announce"></p>
		</div>
    </div>
  </div>
</section>
<section class="container-fluid top-nav" style="position: relative;">
  <ul class="row ect-row-nav text-center buy_vip_tab tab_nav">
    <li class="col-sm-6 col-xs-6 on" rel="datalist_clan_clandetail_member"><p class="text-center">成员(<span class="user_num">0</span>)</p></li>
    <li class="col-sm-6 col-xs-6" rel="datalist_clan_clandetail_show"><p class="text-center">主播(<span class="show_num">0</span>)</p></li>
  </ul>
</section>
<section class="top-tab ect-margin-tb ect-margin-bottom0 top_content2" style="margin-top:0"> 
  <div class="tab-content">
    <div class="ect-pro-list pinglun-list tab_list clandetail_data">
		<div id="datalist_clan_clandetail_member" class="tab top_content">
		<ul class="title"><li>族长</li></ul>
		<ul id="datalist_clan_clandetail_member_zz"><li class='text-center'>数据正在加载中...</li></ul>
		<ul class="title"><li>副族长</li></ul>
		<ul id="datalist_clan_clandetail_member_fzz"><li class='text-center'>数据正在加载中...</li></ul>
		<ul class="title"><li>成员</li></ul>
		<ul id="datalist_clan_clandetail_member_cy"><li class='text-center'>数据正在加载中...</li></ul>
		</div>
		<ul id="datalist_clan_clandetail_show" style="display:none;" class="tab clan_show"><li class='text-center'>数据正在加载中...</li></ul>
		<div style="clear:both"></div>
    </div>
  </div>
</section>
</div>
</body>
</html><?php }} ?>