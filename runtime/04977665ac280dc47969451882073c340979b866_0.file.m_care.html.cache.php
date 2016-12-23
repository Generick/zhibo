<?php
/* Smarty version 3.1.30, created on 2016-12-23 17:24:14
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_care.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585ced3e4dc9c1_46654630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04977665ac280dc47969451882073c340979b866' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_care.html',
      1 => 1482485052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_585ced3e4dc9c1_46654630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8064585ced3e4a60a9_76505830';
?>
<!--main-->
<div class="inmiddle">
<?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="center-right">

    <div class="cr-care" >
        <div class="cr-title">我的关注</div>
        <div class="cr-care-main">
            
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'arr', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
                <div class="care-li">
                    <div class="care-img"><a href="/<?php echo $_smarty_tpl->tpl_vars['arr']->value['roomNumber'];?>
.html"><img src="<?php echo @constant('_IMAGES_DOMAIN_');?>
/<?php echo $_smarty_tpl->tpl_vars['arr']->value['avatar'];?>
" alt="name"></a></div>
                    <div class="care-info">
                        <div class="care-title">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['roomNumber'];?>
" id="usernumber"/>
                            <span class="care-an-level sprite liverlevel-pic_liverlevel_<?php echo $_smarty_tpl->tpl_vars['arr']->value['starlevel'];?>
"></span><span class="care-an-name"><a href="/<?php echo $_smarty_tpl->tpl_vars['arr']->value['roomNumber'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['arr']->value['nickname'];?>
</a></span>
                        </div>
                        <div class="care-fans-num"><?php echo $_smarty_tpl->tpl_vars['arr']->value['followeds'];?>
粉丝</div><div class="canel-care"><a href='javascript:void(0)' onclick="seajs.use('ajax/cancelCare', function(test){ test.showBox();});">取消关注</a></div>
                        
						  <?php if ($_smarty_tpl->tpl_vars['arr']->value['online']) {?>
                                <div class="care-current-title">直播中</div>
                        
						 <?php } else { ?>
                             <div class="care-next-title">下次开播时间</div>
							 <?php }?>
                         
                        <div class="care-next-time">12月10日  13:00</div>
                    </div>
                </div>
            
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<!--            <div class="care-li">
                    <div class="care-img"><img src="http://r4.ykimg.com/05100000566A96CF67BC3D026E00F9D9"></div>
                    <div class="care-info">
                        <div class="care-title">
                            <span care="care-an-level">lv12</span><span calss="care-an-name">愤怒的龙木耳</span>
                        </div>
                        <div class="care-fans-num">222粉丝</div>
                        <div class="care-next-title">下次开播时间</div>
                        <div class="care-next-time">12月10日  13:00</div>
                    </div>

            </div>-->

        </div>
    </div>
</div>
    <div class="win-phone iscc" style="display: none;" >
        <div class="find-bump-title">温馨提示 <div class="find-bump-oxx"></div></div>
        <div class="issc-tips"> 取消了<span><?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
</span>的关注后,您在本播间的贡献值讲清零,请问您还要取消吗?</div>
        <div class="issc-button"><button class="small-button" id="sure-cc">确定</button><button  id="no-cc" class="small-button">取消</button></div>
    </div>

</div>
</div>


<!--main-->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
