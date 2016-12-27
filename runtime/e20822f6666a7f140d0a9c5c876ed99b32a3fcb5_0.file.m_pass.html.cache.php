<?php
/* Smarty version 3.1.30, created on 2016-12-27 18:37:37
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_pass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586244717d6968_48682305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20822f6666a7f140d0a9c5c876ed99b32a3fcb5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_pass.html',
      1 => 1482835054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_586244717d6968_48682305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2583858624471776912_93775194';
?>
<!--main-->
<div class="inmiddle">
    <?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
        seajs.use("ajax/userpass");
    <?php echo '</script'; ?>
>
    <div class="center-right">
        <div calass="cr-mid-passwd">
            <div class="cr-title">修改密码</div>
            <div class="midfy-passwd-area">
                <table>
                    <tr>
                        <td class="bind-phone-aright">原密码： </td><td><input class="input-pass"  type="password" id="old-pass"/></td>
                    </tr>
                    <tr>
                        <td class="bind-phone-aright">新密码： </td><td><input  class="input-pass"   type="password" id="new-pass"/></td>
                    </tr>
                    <tr>
                        <td class="bind-phone-aright">确认密码： </td><td><input  class="input-pass"   type="password" id="re-pass"/></td>
                    </tr>
                    <tr>
                        <td></td><td><button id="save"  class="small-button">保存</button> <button id="cancel"  class="small-button">取消</button></td>
                    </tr>
                </table>
            </div>
            <div class="midfy-passwd-area-else">
                <div class="else-pass-title">其他方式修改</div>
                <div class="midify-else">
                    <div class="modify-by-">
                        <div class="mod-bleft"> <img src="/public/centeros/skin/ym/images/mpass-phone.png" /> </div>
                        <div class="mod-bright">
                            <div>通过手机修改</div>
                            <button class="ck-pass-phone">点击修改</button>
                        </div>
                    </div>
                    <div class="modify-by-" style="float:right;">
                        <div class="mod-bleft"> <img src="/public/centeros/skin/ym/images/mpass-email.png" style="margin-top:40px"/> </div>
                        <div class="mod-bright">
                            <div>通过邮箱修改</div>
                            <button class="ck-pass-phone">点击修改</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="win-phone" style="display: none">
        <div class="phone-find-passwd1" style="display: none">
            <div class="find-bump-title">手机找到回密码 <div class="find-bump-oxx"></div></div>
            <div class="find-main1">
                <div class="divv"><span class="fin-pro">手机号:</span> <span class="fin-current-phone divv2">18745465467</span><span class="fin-mb">更换手机</span></div>
                <div  class="divvv"><span class="fin-pro">验证码号:</span> <input type="text" value=""  class="divv2" maxlength="11" id="y-code"><button class="fin-mb-send small-button">发送验证码</button> <span class="fmbResend">重新发送  <i>39s</i></span></div>
                <div  class="divvvv"><button id="next-step" class="small-button">下一步</button></div>
            </div>
        </div>

        <div class="repass-next" style="display: none">
            <div class="find-bump-title">手机找到回密码 <div class="find-bump-oxx"></div></div>
            <div class="find-main2">
                <table >
                    <tr>
                        <td class="n-type">新密码：</td><td class="input-pass2"><input type="password" id="fin-new-pass"/></td><td colspan="2">34e2</td>
                    </tr>
                    <tr>
                        <td class="n-type">确认密码：</td><td class="input-pass2"><input type="password" id="fin-renew-pass"/></td>
                    </tr>
                    <tr ><td></td><td class="next-bt-area"><button class="small-button" id="nnext-step">下一步</button></td></tr>
                </table>
            </div>
        </div>
        <div class="repass-end" style="text-align: center;display: none">
            <div class="find-bump-title">手机找到回密码 <div class="find-bump-oxx"></div></div>
            <div class="">
                <div class="setting-gous">
                    <div class="fin-endding1">你的新登录设置成功!</div>
                    <div class="fin-endding2">今后将使用新密码登录蝌蚪账户,请牢记!</div>
                </div>
                <div class="setting-gous2">您可能需要:<a href="#">重新登录</a></div>
            </div>
        </div>
    </div></div>
    </div>


<!--main-->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
