<?php
/* Smarty version 3.1.30, created on 2016-12-23 19:07:19
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_phone.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585d05679c3682_85590833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddc74427564659794f9439171caf2837eea228e3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_phone.html',
      1 => 1482491232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_585d05679c3682_85590833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17105585d056798cf25_67169119';
?>
<!--main-->
<div class="inmiddle">
    <?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="center-right">
        <div calass="cr-bind-phone" >
            <div class="cr-title">绑定手机</div>
            <div class="cr-phone-main">
                <div class="bind-phone-area">
                   
							<?php if ($_smarty_tpl->tpl_vars['mobile']->value != '') {?>
                            <table>
                                <tr>
                                    <td class="bind-phone-aright">已绑定手机号码：</td><td><?php echo substr_replace($_smarty_tpl->tpl_vars['mobile']->value,'****',3,4);?>
</td>
                                </tr>
                            </table>
                        
						<?php } else { ?>
                            <table>
                                <tr >
                                    <td></td><td class="bind-text">为了你的账号安全,请尽快绑定手机</td>
                                </tr>
                                <tr>
                                    <td class="bind-phone-aright">手机号码：</td><td><input  type="text" max_length=11 id="phone"/><span class="phone_error">手机号码有误</span></td>
                                </tr>
                                <tr>
                                    <td  class="bind-phone-aright">验证码：</td><td><input  type="text" id="code"/> <button class="send">发送验证码<span></span></button><span class="resend-ms">35</span></td>
                                </tr>
                                <tr>
                                    <td></td><td><button id="bindPhone">绑定手机</button></td>
                                </tr>
                            </table>
							<?php }?>
                        

                </div>
                <div class="bind-phone-why">
                    <p><a href="#">我为什么要绑定手机号码</a></p>
                    <p><a href="#">绑定失败???</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!--main-->
<?php echo '<script'; ?>
>
    seajs.use("ajax/phone");
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
