<?php
/* Smarty version 3.1.30, created on 2016-12-30 15:56:08
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\menu_left.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586613185d80c1_33060071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52fcd8e7f37eda9bcd483cb6c782bcc5204734f7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\menu_left.html',
      1 => 1483084552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586613185d80c1_33060071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '30680586613184d12e4_67973962';
?>
<style type="text/css">
    .noticedot{
        display:block;
        background:#f00;
        border-radius:50%;
        width:8px;
        height:8px;
        top:12px;
        right:0px;
        position:absolute;
    }
</style>
<div class="clearFix">
<div class="center-left">

    <div class="pi">
		<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "index") {?>
		<div class="cl-div  cl-focus">
            <a href="/kedo.php?c=centeros"><div class="cl-index cl-title color33">我的首页</div></a>
        </div>
		<?php } else { ?>
		<div class="cl-div ">
            <a href="/kedo.php?c=centeros"><div class="cl-index cl-title color33">我的首页</div></a>
        </div>
		<?php }?>        
    </div>
    <div class="pi">
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "recharge" || $_smarty_tpl->tpl_vars['current_page']->value == "record" || $_smarty_tpl->tpl_vars['current_page']->value == "receive") {?>
        <div class="cl-div  hasnenu cl-focus" >
            <div class="cl-trade cl-title color33">交易中心</div>
            <div class="arrow-down"></div>
        </div>
		<?php } else { ?>
		<div class="cl-div  hasnenu" >
            <div class="cl-trade cl-title color33">交易中心</div>
            <div class="arrow-down"></div>
        </div>
		<?php }?>
        <div class="cl-set-info" style="display: none;">
            <ul>
			<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "recharge") {?>
                <li class="li-hover" ><a class="color33" href="/kedo.php?c=centeros&m=recharge">充值记录</a></li>
				<?php } else { ?>
				<li><a class="color33" href="/kedo.php?c=centeros&m=recharge">充值记录</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "record") {?>
                <li class="li-hover"><a class="color33" href="/kedo.php?c=centeros&m=record">交易记录</a></li>
				<?php } else { ?>
				<li><a class="color33" href="/kedo.php?c=centeros&m=record">交易记录</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "receive") {?>
                <li  class="li-hover"><a class="color33" href="/kedo.php?c=centeros&m=receive">收到礼物</a></li>
				<?php } else { ?>
				<li><a class="color33" href="/kedo.php?c=centeros&m=receive">收到礼物</a></li>
				<?php }?>
            </ul>
        </div>
    </div>
    <div class="pi">
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "care") {?>
        <div class="cl-div  cl-focus" >
            <a href="/kedo.php?c=centeros&m=history"><div class="cl-care cl-title color33">我的关注</div></a>
        </div>
		<?php } else { ?>
		<div class="cl-div">
            <a href="/kedo.php?c=centeros&m=history"><div class="cl-care cl-title color33">我的关注</div></a>
        </div>
		<?php }?>
    </div>
    <div class="pi">
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "notice") {?>
        <div class="cl-div cl-focus">
            <a href="/kedo.php?c=centeros&m=notice"><div class="cl-notice cl-title color33">消息中心
			<?php if ($_smarty_tpl->tpl_vars['stateNum']->value > 0) {?>
			<i class='noticedot'></i>
			<?php }?>
			</div></a>
        </div>
		<?php } else { ?>
		<div class="cl-div">
            <a href="/kedo.php?c=centeros&m=notice"><div class="cl-notice cl-title color33">消息中心
			<?php if ($_smarty_tpl->tpl_vars['stateNum']->value > 0) {?>
			<i class='noticedot'></i>
			<?php }?>
			</div></a>
        </div>
		<?php }?>
    </div>
   <!-- <div class="pi">
        <div class="cl-div <?php echo '/*%%SmartyNocache:30680586613184d12e4_67973962%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:30680586613184d12e4_67973962%%*/';?>
/*if($current_page=="treasure"){ echo "cl-focus";}*/<?php echo '/*%%SmartyNocache:30680586613184d12e4_67973962%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:30680586613184d12e4_67973962%%*/';?>
">
            <a href="/centeros.php?ptype=treasure"><div class="cl-treasure cl-title">我的财富</div></a>
        </div>
    </div>-->

    <div  class="pi">
	<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "mportrait" || $_smarty_tpl->tpl_vars['current_page']->value == "info" || $_smarty_tpl->tpl_vars['current_page']->value == "mpass" || $_smarty_tpl->tpl_vars['current_page']->value == "mphone") {?>
        <div class="cl-div hasnenu cl-focus">
		<?php } else { ?><div class="cl-div hasnenu">
		<?php }?>
            <div class="cl-setting cl-title color33">我的设置</div>
			<?php if ($_smarty_tpl->tpl_vars['current_page']->value != "history") {?>
            <div class="arrow-down"></div>
			<?php } else { ?><div class="arrow-up"></div>
			<?php }?>
        </div>
		<?php if ($_smarty_tpl->tpl_vars['current_page']->value != "history") {?>
        <div class="cl-set-info hiddens" >
		<?php } else { ?>
		<div class="cl-set-info" >
		<?php }?>
            <ul>
			<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "info") {?>
                <li class="li-hover" >
				<?php } else { ?><li>
				<?php }?><a class="color33" href="/kedo.php?c=centeros&m=info">基本资料</a></li>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "mportrait") {?>
                <li class="li-hover">
				<?php } else { ?><li>
				<?php }?><a class="color33" href="/kedo.php?c=centeros&m=mportrait">修改头像</a></li>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "mpass") {?>
                <li class="li-hover">
				<?php } else { ?><li>
				<?php }?><a class="color33" href="/kedo.php?c=centeros&m=mpass">修改密码</a></li>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value == "mphone") {?>
                <li class="li-hover">
				<?php } else { ?><li>
				<?php }?><a class="color33" href="/kedo.php?c=centeros&m=mphone">绑定手机</a></li>
            </ul>
        </div>
    </div>

</div><?php }
}
