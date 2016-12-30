<?php
/* Smarty version 3.1.30, created on 2016-12-30 11:24:36
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\center-info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5865d374c69f13_50143082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dada97918e19fbf263f1e8e89718807ad324a2cd' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\center-info.html',
      1 => 1483068260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5865d374c69f13_50143082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '220405865d374bc6fc0_33062801';
echo '<script'; ?>
 src="/public/centeros/js/sea.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    seajs.config({
        base: "/public/centeros/js/",
        alias: {
            // "jquery": "jquery/jquery/1.10.1/jquery.js"
        }
    });
    seajs.use("ajax/username");
<?php echo '</script'; ?>
>
<div class="zhezhao"></div>
	<?php if ($_smarty_tpl->tpl_vars['roomNumber']->value) {?>
    <div class="duikdou" >
        <div class="dui-header">兑换K豆</div>
        <div class="dui-mian dui-first" style="display: none">
            <div class="dui-input"><input type="text" name="duiv" id="duiv" class="duiv" placeholder="请输入100的整数"/></div>
            <div class="dui-control">
                <button class="dui-queren">确认</button>
                <button class="dui-cancel">退出</button>
            </div>
        </div>
        <div class="dui-mian dui-next" >
            <div class="dui-cert-text">确定兑换k豆</div>
            <div class="dui-cert-notice">温馨提示星豆不可兑换k豆</div>
            <div class="dui-control">
                <button class="dui-queren">确认</button>
                <button class="dui-cancel">退出</button>
            </div>
        </div>

        <div class="dui-mian dui-end dui-cg"  style="display: none">
            <div class="dui-icon ic-success"></div>
            <div class="dui-suc">兑换成功</div>
            <div class="dui-message">

            </div>
            <div class="dui-control">
                <button class="dui-cancel">退出</button>
            </div>
        </div>
        <div class="dui-mian dui-end dui-gg"  style="display: none">
            <div class="dui-icon ic-success"></div>
            <div class="dui-suc">兑换失败</div>
            <div class="dui-message">

            </div>
            <div class="dui-control">
                <button class="dui-cancel">退出</button>
            </div>
        </div>
    </div>
	<?php }?>

<div class="center-info">
    <div class="info-left">
        <div class="c-photo">
            <img src="<?php echo @constant('_IMAGES_DOMAIN_');?>
/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
"  id="personavatar" alt="<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
"/>
        </div>

        <div class="a-myname">
            <div class="m-name">
                <span class="center-name"><?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
</span><span class="center-edit"></span>
            </div>
            <div class="uid">ID:<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
</div>
        </div>
        <div class="c-myname" style="display: none">
            <div><input type="input" id="nickname" value="<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
" maxlength="16"/></div>
            <button id="sure" class="small-button"
                    onclick="seajs.use('ajax/username', function(test){ test.check(); });">确定
            </button>
            <button id="cancel" class="small-button">取消</button>
        </div>
    </div>
    <div class="info-middle">
        <div class="c-mylevel">我的爵位</div>
        <div class="c-level-bar">
            <div class="center-level sprite consumelevel-pic_consumelevel_<?php echo $_smarty_tpl->tpl_vars['spender']->value;?>
"></div>
            <div class="c-all-bars">
                <div class="c-i-bar" style="width:<?php echo $_smarty_tpl->tpl_vars['nextSpender']->value;?>
%"></div>
            </div>
            <div class="center-level sprite consumelevel-pic_consumelevel_<?php echo $_smarty_tpl->tpl_vars['spender']->value+1;?>
"></div>
        </div>
        <div class="c-level-message">还差<?php echo $_smarty_tpl->tpl_vars['differ']->value;?>
经验升级</div>
    </div>
    <div class="c-right">
        <div class="c-myfund">我的资产</div>
        <div class="c-funds">
            <div class="c-funds-kd">K 豆 :</div>
            <div class="c-funds-jb"> <?php echo intval($_smarty_tpl->tpl_vars['coins']->value);?>
</div>
            <div class="c-funds-cz"><a href="/kedo.php?c=pay" style="color: #fff;">充值</a></div>
        </div>
        <div class="c-funds">
            
				<?php if ($_smarty_tpl->tpl_vars['roomNumber']->value) {?>
                <div class="c-funds-xd">星 豆 ：<span style="color: #E74152"><?php echo $_smarty_tpl->tpl_vars['xcoins']->value;?>
</span> </div>
                <div class="c-funds-dh"><a href="javascript:;" class="lbutton">兑换K豆</a></div>
				<?php }?>

        
        </div>
    </div>
</div>
<?php }
}
