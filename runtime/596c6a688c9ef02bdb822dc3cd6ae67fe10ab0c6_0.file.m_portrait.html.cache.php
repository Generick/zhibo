<?php
/* Smarty version 3.1.30, created on 2016-12-26 14:32:15
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\m_portrait.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860b96f0a9e64_67946055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '596c6a688c9ef02bdb822dc3cd6ae67fe10ab0c6' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\m_portrait.html',
      1 => 1482733914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:center-info.html' => 1,
    'file:menu_left.html' => 1,
  ),
),false)) {
function content_5860b96f0a9e64_67946055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '104345860b96f0514e9_32136260';
?>
<!--main-->
<div class="inmiddle">
	<?php $_smarty_tpl->_subTemplateRender("file:center-info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="center-right">

        <div class="cr_portrait">
            <div class="cr-title">修改头像</div>
            <div class="modify-protrait">
                <div style="padding-top: 50px;padding-left: 50px;">
                    <p id="swfContainer">
                        本组件需要安装Flash Player后才可使用，请从<a href="http://www.adobe.com/go/getflashplayer">这里</a>下载安装。
                    </p>
                    <button type="button" id="upload" style="display:none;margin-top:8px;"></button>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="/public/centeros/js/swfobject.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/centeros/js/fullAvatarEditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function avatarUploadComplete(){
            $("#personavatar").attr("src","/apis/avatar.php?uid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
&_t="+new Date().getTime());
            window.location.reload();
        }
        $(function(){
            swfobject.addDomLoadEvent(function () {
                var swf = new fullAvatarEditor("/public/centeros/js/fullAvatarEditor/fullAvatarEditor.swf", "/public/centeros/js/fullAvatarEditor/expressInstall.swf", "swfContainer", {
                        id : 'uploadavatarbtn',
                        upload_url : '/fullAvatarEditor/upload.php',	//上传接口
                        method : 'post',	//传递到上传接口中的查询参数的提交方式。更改该值时，请注意更改上传接口中的查询参数的接收方式
                        src_upload : 0,		//是否上传原图片的选项，有以下值：0-不上传；1-上传；2-显示复选框由用户选择
                        avatar_box_border_width : 1,
                        avatar_sizes : '120*120',
                        isShowUploadResultIcon:true,
                        avatar_sizes_desc : '120*120像素'
                    }, function (msg) {
                        switch(msg.code)
                        {
                            case 1 : break;//页面成功加载了组件！
                            case 2 : //已成功加载图片到编辑面板。
                                document.getElementById("upload").style.display = "inline";
                                break;
                            case 3 :
                                if(msg.type == 0)
                                {
                                    alert("摄像头已准备就绪且用户已允许使用。");
                                }
                                else if(msg.type == 1)
                                {
                                    alert("摄像头已准备就绪但用户未允许使用！");
                                }
                                else
                                {
                                    alert("摄像头被占用！");
                                }
                                break;
                            case 5 :
                                console.log(msg.content.avatarUrls[0]);
                                avatarUploadComplete();
                                break;
                        }
                    }
                );
                document.getElementById("upload").onclick=function(){
                    swf.call("upload");
                };
            });
        });
    <?php echo '</script'; ?>
></div>
    </div>


<!--main-->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
