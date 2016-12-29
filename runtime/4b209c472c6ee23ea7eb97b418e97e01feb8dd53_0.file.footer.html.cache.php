<?php
/* Smarty version 3.1.30, created on 2016-12-29 16:57:32
  from "E:\xampp\htdocs\kedo_tv\app\view\public\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5864cffc4036c2_32875873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b209c472c6ee23ea7eb97b418e97e01feb8dd53' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\public\\footer.html',
      1 => 1483001699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5864cffc4036c2_32875873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '121815864cffc3c2d17_50340336';
?>
<style type="text/css">
    /*底部*/
    .bs-docs-footer {
        padding-top: 2%;
        padding-bottom: 2%;
        margin-top: 4%;
        color: #9b9c9e;
        text-align: center;
        border-top: 1px solid #e5e5e5;
    }

    .bs-docs-footer .firBL{
        color: #999;
    }

    .bs-docs-footer .firBL:hover{
        color: #337ab7;
    }
    .bs-docs-footer img{
        float: none; 
    }
	.officialMailbox{
		color:#337ab7; 
	}
</style>

<div class="bs-docs-footer navbar-inverse" role="contentinfo">
    <div class="container">
        <p>
            <a href="javascript:;" class="firBL">关于蝌蚪 </a>|
            <a href="kedo.php?c=assist&m=serviceArgument" class="firBL" target="_blank">服务协议 </a>|
            <a href="kedo.php?c=assist&m=help" class="firBL"  target="_blank">客服帮助 </a>|
            <a href="javascript:;" class="firBL">关于我们 </a>|
            <a href="javascript:;" class="firBL">版权声明</a>
        </p>
        <p>
            <img class="lazy" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/orders/images/logo_foot.png"/>
            <span> -Copyright©2016 沪ICP备14054721号</span>
        </p>
        <p>蝌蚪客服电话：021-63156393 | 商务合作邮箱：
            <a class="officialMailbox" style="color:#337ab7" href="mailto:mt@mutiantech.com">kd@kedo.tv</a>
        </p>
    </div>
</div>
<?php }
}
