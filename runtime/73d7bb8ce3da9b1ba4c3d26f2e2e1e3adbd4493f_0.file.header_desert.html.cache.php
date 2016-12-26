<?php
/* Smarty version 3.1.30, created on 2016-12-26 14:22:35
  from "E:\xampp\htdocs\kedo_tv\app\view\centeros\header_desert.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860b72b5b0d27_33937542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73d7bb8ce3da9b1ba4c3d26f2e2e1e3adbd4493f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\kedo_tv\\app\\view\\centeros\\header_desert.html',
      1 => 1482733352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5860b72b5b0d27_33937542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '260705860b72b5783a5_20097379';
?>
<!--<link data-fixed="true" href="/templates/index.css" rel="stylesheet">-->
<link data-fixed="true" href="/public/centeros/css/bootstrap.min.css" rel="stylesheet">
<link data-fixed="true" href="/public/centeros/css/common.css" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="/public/centeros/js/notice.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var cdn_domain="<?php echo $_smarty_tpl->tpl_vars['cdn_domain']->value;?>
";
    var img_domain="<?php echo $_smarty_tpl->tpl_vars['images_domain']->value;?>
";
    var inf_domain="<?php echo $_smarty_tpl->tpl_vars['inf_domain']->value;?>
";
    var site_skin="<?php echo $_smarty_tpl->tpl_vars['site_skin']->value;?>
";
    var currentUserId="<?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
";
    var userId = "<?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
";
    var flag = 0;
    var shine;
    function clearB(){
        shine = clearInterval(shine);
    }
<?php echo '</script'; ?>
>

<!--导航-->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo_head" href="/kedo.php"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav hdNavL">
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'index') {?>active<?php }?>"><a href="/kedo.php">首页</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'square') {?>active<?php }?>"><a href="/square.php">广场</a> </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'mall') {?>active<?php }?>"><a href="/mall.php">商城</a> </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'order') {?>active<?php }?>"><a href="kedo.php?c=orders">排行榜</a> </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <!--<div class="form-group">
                   <input type="text" class="form-control" placeholder="搜索">
                   <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                </div>-->
                <div class="input-group search">
                    <input type="text" class="form-control searchN" placeholder="输入房间号/频道号/ID">
                  <span class="input-group-btn">
                    <button class="btn btn-default searchBtn" type="button"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
                </div>

            </form>
            <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
            <ul class="nav navbar-nav navbar-right  hidden-sm hdNavR reg_log">
                <?php if ($_smarty_tpl->tpl_vars['index_page']->value == '') {?>
                    <li><a href="javascript:;" class="log">登录</a></li>
                    <li class="hidden-xs"><a href="javascript:;">|</a></li>
                    <li class="hidden-lg hidden-md hidden-sm show-xs line"><a href=""></a></li>
                    <li class=""><a href="javascript:;" class="reg">注册<span class="sr-only">(current)</span></a></li>
                <?php }?>
            </ul>
            <?php } else { ?>
            <ul class="nav navbar-nav navbar-right hidden-sm hdNavR">

                <li><a href="/centeros.php"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a></li>
                <li><a class= "header-notice" style=" "></a></li>
                <li class="hidden-xs"><a href="">|</a></li>
                <li class="hidden-lg hidden-md hidden-sm show-xs line"><a href="javascript:;"></a></li>
                <?php if ($_smarty_tpl->tpl_vars['index_page']->value == '') {?>
                <li class=""><a href="/login.php?action=logout&amp;type=html">退出</a></li>
                <?php }?>
                
                    <style>
                        .header-notice{margin-top: 20px;}
                        .header-notice,.img-notice{display:inline-block;width:24px;height: 18px;  background: url("/images/kedo/header_notice.png") no-repeat;cursor: pointer}
                        .header-notice:hover{background: url("/images/kedo/header_notice_hover.png") no-repeat;}
                        .notice-list{display:none;position: absolute;overflow: hidden;
                            font-size: 12px;
                            background-color: #fff;
                            padding: 10px;
                            border-left: 2px solid #E74161;
                            margin-top: 56px;
                            right: 265px;
                            border-right: 2px solid #E74161;
                            border-bottom: 2px solid #E74161;
                            width: 280px;
                            border-bottom-left-radius: 8px;
                            border-bottom-right-radius: 8px;
                        }
                        .img-notice{height: 14px;}
                        .notice-list ul li{height:36px;line-height: 36px; }
                        .notice-list ul li a{color: #666}
                        .notice-list ul li span{display: inline-block}

                    </style>
                
            </ul>
                <div class="notice-list">
                    <ul>
                        <li><span class="img-notice"></span><a href="/centeros.php?ptype=notice">用户开播通知</a> <span>10-21 19:36 </span></li>
                        <li><span class="img-notice"></span><a href="/centeros.php?ptype=notice">用户开播通知</a>  <span>10-21 19:36 </span></li>
                        <li><span class="img-notice"></span><a href="/centeros.php?ptype=notice">用户开播通知</a> <span>10-21 19:36 </span></li>
                        <li><span class="img-notice"></span><a href="/centeros.php?ptype=notice">用户开播通知</a>  <span>10-21 19:36 </span></li>
                    </ul>
                </div>
            <?php }?>
        </div><!--/.nav-collapse -->
    </div>
</div>


<?php }
}
