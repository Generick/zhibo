<?php
/* Smarty version 3.1.30, created on 2016-12-23 17:54:46
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_recharge.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585cf466e71ae9_10774637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2203a86d443cda1e29b543f03048b271c8b2a712' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_recharge.html',
      1 => 1482486741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_585cf466e71ae9_10774637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21897585cf466e3e6a8_72091180';
?>
<!--main-->
<div class="inmiddle">
    
	
	<?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="center-right">
        <div calass="cr-bind-phone" >
            <div class="re-title-area"><span class="re-title">充值记录</span>
                <div class="recharge-search"><span class="research-condition">查询条件</span>
                    <select name="research-year" id="research-year">
                        <option>2016</option>
                    </select>
                    年
                    <select name="research-month" id="research-month">
                       
						<?php echo $_smarty_tpl->tpl_vars['monlist']->value;?>

                    </select>
                    月
                    <button class="re-search-button small-button">查询</button>
                </div>
                <div class="research-table">
                    <table id="conTable"  style="border-collapse:collapse;" border="1">
                        <tr  class="fir">
                            <th style="width: 152px;">流水号</th>
                            <th style="width: 200px;">交易时间</th>
                            <th style="width: 150px;">充值K豆</th>
                            <th style="">支付金额</th>
                            <th style="width: 120px;">支付方式</th>
                            <th style="width: 120px;">支付状态</th>
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
        seajs.use("ajax/recharge");
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
