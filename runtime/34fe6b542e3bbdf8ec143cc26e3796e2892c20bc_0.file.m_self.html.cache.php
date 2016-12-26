<?php
/* Smarty version 3.1.30, created on 2016-12-26 14:27:38
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_self.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860b85a4b4e07_99441383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34fe6b542e3bbdf8ec143cc26e3796e2892c20bc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_self.html',
      1 => 1482733635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_5860b85a4b4e07_99441383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '34515860b85a413704_28353941';
?>

<!--main-->
<div class="inmiddle">
	<?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 src="/public/centeros/js/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        seajs.use("ajax/userinfo");
        seajs.use("ajax/jqueryform");
    <?php echo '</script'; ?>
>

    <div class="center-right">
        <div class="cr-basics" style="">
            <div class="cr-title">基本资料</div>
            <table id="info-table">
                <tr  class="cr-hline">
                    <td class="n-type">昵称：</td> <td class="" colspan="3"><input type="text" name="aliasname" id="aliasname" style="padding-left: 5px;" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
"/></td>
                </tr>
                <tr class="cr-hline">
                    <td  class="n-type"> <span>性别：</span></td> <td colspan="3">
                        <input class="inputnoborder" type="radio" name="gender" value='0' id="female" <?php echo $_smarty_tpl->tpl_vars['femalechecked']->value;?>
 >&nbsp;<label for="female">女</label>&nbsp;&nbsp;&nbsp;<input type="radio" class="inputnoborder" name="gender" value='1' id="male" <?php echo $_smarty_tpl->tpl_vars['malechecked']->value;?>
 >&nbsp;<label for="male">男</label>
                    </td>
                </tr>
                <tr class="cr-hline">
                    <td class="n-type">所在地：</td>
                    <td> <select name="province" id="province"></select></td>
                    <td><select name="city"  id="city"></select></td>
                    <td> <input type="radio" name="issecret" id="" value="1">&nbsp;保密 <input type="radio" name="issecret" value="2" />&nbsp;公开</td>
                </tr>
                <?php echo '<script'; ?>
 language="javascript" src="/js/PCASClass.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 language="javascript" src="/skin/ym/js/birthday.js"><?php echo '</script'; ?>
>

                <?php echo '<script'; ?>
>new PCAS("province","city","<?php echo $_smarty_tpl->tpl_vars['province']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
");<?php echo '</script'; ?>
>
                <tr class="cr-hline">
                    <td class="n-type">生日：</td>
                    <td>  <select id="year"  name="year" rel="<?php echo intval($_smarty_tpl->tpl_vars['birthday_year']->value);?>
"></select>
                    <td> <select id="month" name="month" rel="<?php echo intval($_smarty_tpl->tpl_vars['birthday_month']->value);?>
"></select> </td>
                    <td> <select id="day" name="day" rel="<?php echo intval($_smarty_tpl->tpl_vars['birthday_day']->value);?>
"></select></td></td>
                </tr>
                <tr class="cr-hline">
                    <td  class="n-type"> <td colspan="3"><button id="submits">保存</button></td>
                </tr>
            </table>
        </div>
    </div>
    </div>
    <!--main-->
<?php echo '<script'; ?>
>
    function birthday_selected(year,month,day){
        var count=$("#year option").length;
        for(var i=0;i<count;i++){
            if($("#year").get(0).options[i].text == year)
            {
                $("#year").get(0).options[i].selected = true;
                break;
            }
        }
        var count=$("#month option").length;
        for(var i=0;i<count;i++){
            if($("#month").get(0).options[i].text == month)
            {
                $("#month").get(0).options[i].selected = true;
                break;
            }
        }
        var count=$("#day option").length;
        for(var i=0;i<count;i++){
            if($("#day").get(0).options[i].text == day) {
                $("#day").get(0).options[i].selected = true;
                break;
            }
        }
    }
    birthday_selected(<?php echo intval($_smarty_tpl->tpl_vars['birthday_year']->value);?>
,<?php echo intval($_smarty_tpl->tpl_vars['birthday_month']->value);?>
,<?php echo intval($_smarty_tpl->tpl_vars['birthday_day']->value);?>
);

    $(function() {
        $.ms_DatePicker({
            YearSelector: "#year",
            MonthSelector: "#month",
            DaySelector: "#day"
        });
    });
    <?php echo '</script'; ?>
></div>



<!--main-->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
