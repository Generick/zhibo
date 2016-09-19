<?php /* Smarty version Smarty-3.1.12, created on 2015-08-28 13:09:00
         compiled from ".\templates\uccenter_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:11958550b6faab793d4-98619048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea71d731014a7e021dcaf0542791d8a92e7294c7' => 
    array (
      0 => '.\\templates\\uccenter_edit.html',
      1 => 1437124956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11958550b6faab793d4-98619048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_550b6fab1c8da9_66776504',
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
    'birthday_year' => 0,
    'birthday_month' => 0,
    'birthday_day' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b6fab1c8da9_66776504')) {function content_550b6fab1c8da9_66776504($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>个人中心 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 触屏版</title>
<link rel="stylesheet" href="css/bootstrap.min.css?20150523">
<link rel="stylesheet" href="css/font-awesome.min.css?20150523">
<link rel="stylesheet" href="css/ectouch.css?20150523">
<link rel="stylesheet" href="css/user.css?20150523">
<link rel="stylesheet" href="css/photoswipe.css?20150523">
<link rel="stylesheet" href="/css/level.css?20150523">
<link rel="stylesheet" href="js/jquerymobile/jquery.mobile-1.4.5.min.css?20150523">
<script src="js/jquerymobile/jquery.min.js?20150523"></script>
<script src="js/jquerymobile/jquery.mobile-1.4.5.min.js?20150523"></script>
<script src="js/ucenter_edit.js?20150523"></script>
<script src="js/StageWebViewBridge.php?20150523"></script>
<script src="/js/PCASClass.js?20150523"></script>
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
var thisPage="ucenter_edit";
var userid='<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
';
</script>
</head>
<body class="ucenter">
<div class="con" data-role="page" id="edit">
<section class="user-tab ect-margin-tb ect-margin-bottom0 ucenter_edit ucenter_nav">
  <div class="tab-content">
    <div class="active ect-pro-list edit" id="ucenter_edit">
		<a href="javascript:;" onClick="thisPage='avatar_page';ShowInfo('avatar_page',this);" class="avatar">头像
		<span class="rig"><img id="avatarimg" src="/apis/avatar.php?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
&_t=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"/></span>
		</a><hr/>
		<a href="#nickname_page" onClick="thisPage='nickname_page';" class="avatar" data-transition="slide">昵称
		<span class="rig" id="show_nickname"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</span>
		</a><hr/>
		<a href="javascript:;" onClick="thisPage='gender_page';ShowInfo('gender_page',this);">性别
		<span class="rig" id="show_gender"><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="0"){?><?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
女<?php ob_start();?><?php }else{ ?><?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
男<?php ob_start();?><?php }?><?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
</span>
		</a><hr/>
		<a href="javascript:;" onClick="thisPage='city_page';ShowInfo('city_page',this);">城市
		<span class="rig" id="show_city"><?php echo $_smarty_tpl->tpl_vars['user']->value['province'];?>
,<?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
</span>
		</a><hr/>
		<a href="javascript:;" onClick="thisPage='birthday_page';ShowInfo('birthday_page',this);">出生日期
		<span class="rig" id="show_birthday"><?php echo $_smarty_tpl->tpl_vars['user']->value['birthday'];?>
</span>
		</a><hr/>
    </div>
  </div>
</section>
</div>
<div class="con" data-role="page" id="nickname_page">
<section class=""> 
  <div class="tab-content">
	<div class="info_input1" style="display:block;"><input data-role='none' type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
" id="editnickname" class="input_style"/></div>
	<div class="pay_txt">好昵称可以让主播更容易住你</div>
	<div class="gouwu_button"><a href="javascript:editNickName()">保存</a></div>
  </div>
</section>
</div>
<div style="display:none;" class="toggleBox ShowInfo" id="avatar_page">
	<a href="javascript:;" class="show_title">选择照片</a><span class="show_title_close"></span><hr/>
	<a href="javascript:StageWebViewBridge.call('fnCalledFromJS', null, 'avatargraph');">拍照</a><hr/>
	<a href="javascript:StageWebViewBridge.call('fnCalledFromJS', null, 'avatarselect');">从相册选择</a>
	<div class="clear"></div>
</div>
<div style="display:none;" class="toggleBox ShowInfo" id="gender_page">
	<a href="javascript:;" class="show_title">性别</a><span class="show_title_close"></span><hr/>
	<a href="javascript:edit_gender(1,'男');">男</a><hr/>
	<a href="javascript:edit_gender(0,'女');">女</a>
	<div class="clear"></div>
</div>
<div style="display:none;" class="toggleBox ShowInfo" id="city_page">
	<a href="javascript:;" class="show_title">城市</a><span class="show_title_close"></span><hr/>
	<div class="text-center padding2"><select name="province" id="province"></select><select name="city" id="city"></select></div>
<hr/>
<div class="btn2"><a href="javascript:edit_city()">确定</a></div>
	<div class="clear"></div>
</div>
<div style="display:none;" class="toggleBox ShowInfo" id="birthday_page">
	<a href="javascript:;" class="show_title">出生日期</a><span class="show_title_close"></span><hr/>
	<div class="text-center padding2">
	<select name="year" id="year">
	<option value="">年</option>
<optgroup label="00后">
	<option>2000</option>
	<option>2001</option>
	<option>2002</option>
	<option>2003</option>
	<option>2004</option>
	<option>2005</option>
	<option>2006</option>
	<option>2007</option>
	<option>2008</option>
	<option>2009</option>
</optgroup>
<optgroup label="90后">
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>
	<option>1998</option>
	<option>1999</option>
</optgroup>
<optgroup label="80后">
	<option>1980</option>
	<option>1981</option>
	<option>1982</option>
	<option>1983</option>
	<option>1984</option>
	<option>1985</option>
	<option>1986</option>
	<option>1987</option>
	<option>1988</option>
	<option>1989</option>
</optgroup>
<optgroup label="70后">
	<option>1970</option>
	<option>1971</option>
	<option>1972</option>
	<option>1973</option>
	<option>1974</option>
	<option>1975</option>
	<option>1976</option>
	<option>1977</option>
	<option>1978</option>
	<option>1979</option>
</optgroup>
<optgroup label="60后">
	<option>1965</option>
	<option>1966</option>
	<option>1967</option>
	<option>1968</option>
	<option>1969</option>
</optgroup>

</select>
<select name="month" id="month">
	<option value="">月</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
</select>
<select name="day" id="day">
	<option value="">日</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
	<option>31</option>
</select></div>
<hr/>
<div class="btn2"><a href="javascript:edit_birthday()">确定</a></div>
	<div class="clear"></div>
</div>
<a href="javascript:;" onClick="thisPage='alert_page';ShowInfo('alert_page',this);" id="linkalert_page" style="display:none;"></a>
<div style="display:none;" class="toggleBox ShowInfo" id="alert_page">
	<a href="javascript:;" class="show_title">提示</a><span class="show_title_close"></span><hr/>
	<div class="text-center padding2" id="alert_page_content"></div>
<hr/>
<div class="btn2"><a href="javascript:closeShow()">确定</a></div>
	<div class="clear"></div>
</div>
<div style="display:none;" class="ShowInfo" id="info_alert">
	<a href="javascript:;" class="show_title"></a>
</div>
<div id="tinymask" style="height: 100%; opacity: 0.5; display: none; width: 100%;"></div>
<div id="tinymasknoclick" class="bgmask" style="height: 100%; opacity: 0.5; display: none; width: 100%;"></div>
<script>
birthday_selected(<?php echo $_smarty_tpl->tpl_vars['birthday_year']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['birthday_month']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['birthday_day']->value;?>
);
new PCAS("province","city","<?php echo $_smarty_tpl->tpl_vars['user']->value['province'];?>
","<?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
");
</script>
</body>
</html><?php }} ?>