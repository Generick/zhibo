<?php
/* Smarty version 3.1.30, created on 2016-12-23 19:15:48
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585d0764e9df35_07675777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f714eecc88dbef1d2c292d9adb7948533d46fc2' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_index.html',
      1 => 1482491746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_585d0764e9df35_07675777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13612585d0764e4b4b9_53619269';
?>
<!--main-->
<div class="inmiddle">
   
<?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="center-right">
        <div class="mindex-title">我的首页</div>
        <div class="mindex-level-area">
            <div class="titleee"><span class="lev-inf">等级信息</span><span class="blank-btline"></span></div>
            <div class="info-middle active-level">
                <div class="c-mylevel">活跃等级</div>
                <div class="c-level-bar">
                    <div class="center-level activelevel sprite activelevel-pic_activelevel_<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"></div>
                    <div class="c-all-bars">
                        <div class="c-i-bar" style="width:<?php echo $_smarty_tpl->tpl_vars['nextActive']->value;?>
%"></div>
                    </div>
                    <div  class="center-level  activelevel sprite activelevel-pic_activelevel_<?php echo $_smarty_tpl->tpl_vars['active']->value+1;?>
"></div>
                </div>
                <div class="c-level-message" style="margin-left:30px; ">还差<?php echo $_smarty_tpl->tpl_vars['activeDiffer']->value;?>
经验升级 </div>
            </div>

            <div class="info-middle  mindex-level">
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
                <div class="c-level-message">消费<?php echo $_smarty_tpl->tpl_vars['differ']->value;?>
蚪币升级</div>
            </div>
        </div>

        <div class="mindex-else-title"> 我守护的</div>
        <div class="mycare-list">
            <?php if ($_smarty_tpl->tpl_vars['acceptData']->value['resultMessage'] != "error") {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['acceptData']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="mycare-box">
                        <div class="mycare-box-left">
                            <div class="careImg"><a href="/{$v['roomNumber']}"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['himage'];?>
"/></a></div>
                        </div>
                        <div class="mycare-box-right">
                            <div class="mybr1"><span class="mbysp1"><a href="/{$v['roomNumber']}"><?php echo urldecode($_smarty_tpl->tpl_vars['v']->value['name']);?>
</a></span> <span class="mbysp2">守护中..</span></div>
                            <div class="mybr2"><?php echo $_smarty_tpl->tpl_vars['v']->value['followeds'];?>
 粉丝</div>
                            <div class="mybr3">守护等级：<span class="color33"><?php echo $_smarty_tpl->tpl_vars['v']->value['grds'];?>
</span></div>
                            <div class="mybr4">剩余天数：<span class="colorcc"> <?php echo $_smarty_tpl->tpl_vars['v']->value['days'];?>
</span>天</div>
                            <a class="mindex-recharge-button" href="/pay.php">充值</a>
                        </div>
                    </div>
            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        </div>
        <div class="mindex-else-title"> 我的进场特效</div>
            <div class="mcar-list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'arr', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['arr']->value['id']) {?>
                    <div class="mcar-box" idd=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
 >
                    <?php } else { ?>
                    <div class="mcar-box">
                    <?php }?>
                        <div class="mcar-left">
                            <div class=""><img src="<?php echo @constant('_IMAGES_DOMAIN_');?>
/<?php echo $_smarty_tpl->tpl_vars['arr']->value['giftimage'];
echo $_smarty_tpl->tpl_vars['arr']->value['tss'];?>
"></div>
                        </div>
                        <div class="mcar-right">
                            <div class="mcar-right-1 clearFix"><span class="car-name"> <?php echo $_smarty_tpl->tpl_vars['arr']->value['giftname'];?>
</span><span class="xufei">续费</span></div>
                            <div class="mcar-right-2 clearFix">剩余天数：<span><?php echo $_smarty_tpl->tpl_vars['arr']->value['day'];?>
天</span></div>
                            <?php if ($_smarty_tpl->tpl_vars['arr']->value['id']) {?><div class="mcar-right-3 learFix" idd={$arr['id']} ><?php echo $_smarty_tpl->tpl_vars['arr']->value['use'];?>

                                <?php } else { ?>
                                <div class="mcar-right-3 learFix" ><?php echo $_smarty_tpl->tpl_vars['arr']->value['use'];?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
               
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        <div class="clear"></div>
        </div>

    </div>
</div>
    <!--main-->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<?php echo '<script'; ?>
>
    seajs.use("ajax/usecar");
<?php echo '</script'; ?>
>
    </body>
    </html><?php }
}
