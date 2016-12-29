<?php
/* Smarty version 3.1.30, created on 2016-12-23 18:10:31
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_recive.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585cf817e3b4d4_57594798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df3eec54bf40164b482af854ddd4e4ee936fd55' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_recive.html',
      1 => 1482487829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_585cf817e3b4d4_57594798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '29083585cf817e13234_80291236';
?>
<!--main-->
<div class="inmiddle">
   
	<?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  

    <div class="center-right">
        <div calass="cr-bind-phone" >
            <div class="re-title-area"><span class="re-title">收到礼物</span>
                <div class="recharge-search"><span class="research-condition">查询条件</span>
                    <select name="research-year" id="research-year">
                        <option>2016</option>
                    </select>
                    &nbsp;年&nbsp;
                    <select name="research-month" id="research-month">
                  
						<?php echo $_smarty_tpl->tpl_vars['monlist']->value;?>

                    </select>
                    &nbsp;月&nbsp;
                    <button class="re-search-button small-button">查询</button>
                </div>
                <div class="research-table">
                    <table id="conTable"    style="border-collapse:collapse;" border="1">
                        <tr  class="fir">
                            <th style="width: 152px;">赠送者</th>
                            <th style="width: 200px;">赠送时间</th>
                            <th style="width: 240px;">获得礼物</th>
                            <th style="width: 362px;">消费蚪币</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="nexts"> </div>
        </div>
    </div>
    </div>


    <?php echo '<script'; ?>
>
        seajs.use("ajax/recive");
    <?php echo '</script'; ?>
>
</div>


<!--main-->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html>





<?php }
}
