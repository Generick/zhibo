<?php
/* Smarty version 3.1.30, created on 2016-12-26 14:19:41
  from "D:\xampp\htdocs\anchors\app\view\orders\orders.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860b67d059d82_87462773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f75fc694693799964d2d0a936cfd9796101d8bf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\orders\\orders.html',
      1 => 1482491208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/footer.html' => 1,
  ),
),false)) {
function content_5860b67d059d82_87462773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '231455860b67ce92786_88444753';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>广场-蝌蚪直播</title>
   
    <meta property="qc:admins" content="105415766763547646" />
    <meta name="description" content="超人气视频直播互动娱乐社区，在这里你可以展示自己的才艺，也可以跟众多优秀的美女主播在线互动聊天、视频交友" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/orders/css/anchor-level.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/orders/css/square.css" data-fixed="true"  rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/orders/css/icons.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/min/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/js/login.js" type="text/javascript" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function(){

            function SwapTab(name, title, content, Sub, cur) {
                $(name + ' ' + title).mouseover(function () {
                    $(this).addClass(cur).siblings().removeClass(cur);
                    $(content + " > " + Sub).eq($(name + ' ' + title).index(this)).show().siblings().hide();
                })
            }
            SwapTab("#orderTit", "li", "#orderBody", ".orderItem", "active");
        })
    <?php echo '</script'; ?>
>
</head>
<body style="padding-top:60px;">

<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main-order">
<div class="order-list">
<div class="order-box-outer charmList">
<div class="order-title">
    <div class="order-title-h1">主播魅力榜  <div class="order-title-bg"></div>  </div>
</div>
<ul id="orderTit">
    <li class="active">总榜</li>
    <li>月榜</li>
    <li>日榜</li>
</ul>

<div class="order-box-bg" id="orderBody">
    <div class="order-box-content">
        <div class="orderItem cur">
            <div class="order-box-top">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_star']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 2) {?>
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img">
                        <img class="rank_pho" src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
" alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="secondCrown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-second-level"><span></span></div>
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_star']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 1) {
break 1;
}?>
                <a href="javascript:;"   class="order-box-first">
                    <div class="order-first-img">
                        <img class="rank_pho" src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="crown"></span>
                        <span class="crown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec sprite liverlevel-pic_liverlevel_24"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-first-level"><span></span></div>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_star']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 3) {?>
                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img">
                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="thirdCrown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec sprite liverlevel-pic_liverlevel_22"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-third-level"><span></span></div>
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_star']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value > 3) {?>
                    <li>
                        <a href="javascript:;"  >
                            <span class="number"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.</span>
                            <span class="diamond sprite <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span>
                            <span class="order-second-name"><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </ul>
            </div>
        </div>
        <div class="orderItem">
            <div class="order-box-top">
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="secondCrown"></span></div>
                    <div class="order-second-name">梁胖胖跳脱衣舞</div>
                    <div class="order-second-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-first">
                    <div class="order-first-img"><img src="/skin/ym/images/fff1.png" />
                        <span class="crown"></span></div>
                    <div class="order-first-name">梁胖胖跳脱衣舞</div>
                    <div class="order-first-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="thirdCrown"></span></div>
                    <div class="order-third-name">梁胖胖跳脱衣舞</div>
                    <div class="order-third-level"><span></span></div>
                </a>
            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >
                    <li>
                        <a href="javascript:;">
                            <span class="number">4.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">5.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">6.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">7.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">8.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">9.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">10.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">11.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">12.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">13.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">14.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">15.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="orderItem">
            <div class="order-box-top">
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="secondCrown"></span></div>
                    <div class="order-second-name">梁胖胖跳脱衣舞</div>
                    <div class="order-second-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-first">
                    <div class="order-first-img"><img src="/skin/ym/images/fff1.png" />
                        <span class="crown"></span></div>
                    <div class="order-first-name">梁订单胖胖跳脱衣舞</div>
                    <div class="order-first-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="thirdCrown"></span></div>
                    <div class="order-third-name">梁胖胖跳脱衣舞</div>
                    <div class="order-third-level"><span></span></div>
                </a>
            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >
                    <li>
                        <a href="javascript:;">
                            <span class="number">4.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">5.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">6.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">7.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">8.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">9.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">10.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">11.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">12.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">13.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">14.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">15.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>

<div class="order-box-outer">
<div class="order-title"><div class="order-title-h1">爵位榜<div class="order-title-bg"></div></div></div>

<ul id="orderTit">
    <li class="active">总榜</li>
    <li>月榜</li>
    <li>日榜</li>
</ul>

<div class="order-box-bg" id="orderBody">
    <div class="order-box-content">
        <div class="orderItem cur">
            <div class="order-box-top">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_rich']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 2) {?>
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img">
                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="secondCrown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-second-level"><span></span></div>
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_rich']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 1) {
break 1;
}?>
                <a href="javascript:;"class="order-box-first">
                    <div class="order-first-img">
                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="crown"></span>
                        <span class="crown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-first-level"><span></span></div>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_rich']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 3) {?>
                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img">
                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="thirdCrown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-third-level"><span></span></div>
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_super_rich']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value > 3) {?>
                    <li>
                        <a href="javascript:;">
                            <span class="number"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.</span>
                            <span class="diamond sprite <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span>
                            <span class="order-second-name"><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </ul>
            </div>
        </div>
        <div class="orderItem">
            <div class="order-box-top">
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="secondCrown"></span></div>
                    <div class="order-second-name">梁胖胖跳脱衣舞</div>
                    <div class="order-second-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-first">
                    <div class="order-first-img"><img src="/skin/ym/images/fff1.png" />
                        <span class="crown"></span></div>
                    <div class="order-first-name">梁胖问问胖跳脱衣舞</div>
                    <div class="order-first-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="thirdCrown"></span></div>
                    <div class="order-third-name">梁胖胖跳脱衣舞</div>
                    <div class="order-third-level"><span></span></div>
                </a>
            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >
                    <li>
                        <a href="javascript:;">
                            <span class="number">4.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">5.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">6.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">7.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">8.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">9.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">10.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">11.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">12.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">13.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">14.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">15.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="orderItem">
            <div class="order-box-top">
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="secondCrown"></span></div>
                    <div class="order-second-name">梁胖胖跳脱衣舞</div>
                    <div class="order-second-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-first">
                    <div class="order-first-img"><img src="/skin/ym/images/fff1.png" />
                        <span class="crown"></span></div>
                    <div class="order-first-name">梁胖胖跳脱11衣舞</div>
                    <div class="order-first-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="thirdCrown"></span></div>
                    <div class="order-third-name">梁胖胖跳脱衣舞</div>
                    <div class="order-third-level"><span></span></div>
                </a>
            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >
                    <li>
                        <a href="javascript:;">
                            <span class="number">4.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">5.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">6.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">7.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">8.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">9.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">10.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">11.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">12.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">13.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">14.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">15.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>

<div class="order-box-outer">
<div class="order-title">
    <div class="order-title-h1">粉丝活跃榜  <div class="order-title-bg">   </div>  </div>
</div>

<ul id="orderTit">
    <li class="active">总榜</li>
    <li>月榜</li>
    <li>日榜</li>
</ul>

<div class="order-box-bg" id="orderBody">
    <div class="order-box-content">
        <div class="orderItem cur">
            <div class="order-box-top">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_fans_list']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 2) {?>
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img">

                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="secondCrown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-second-level"><span></span></div>
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_fans_list']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 1) {
break 1;
}?>
                <a href="javascript:;"class="order-box-first">
                    <div class="order-first-img">
                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="crown"></span>
                        <span class="crown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-first-level"><span></span></div>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_fans_list']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 3) {?>
                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img">
                        <img class="rank_pho"  src="<?php echo $_smarty_tpl->tpl_vars['show']->value['image'];?>
"  alt="<?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
"/>
                        <span class="thirdCrown"></span>
                    </div>
                    <div class="order-first-name"> <span class="sec <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</div>
                    <div class="order-third-level"><span></span></div>
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rank_fans_list']->value, 'show', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['show']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value > 3) {?>
                    <li>
                        <a href="javascript:;">
                            <span class="number"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.</span>
                            <span class="diamond sprite <?php echo $_smarty_tpl->tpl_vars['show']->value['levelImg'];?>
"></span>
                            <span class="order-second-name"><?php echo urldecode($_smarty_tpl->tpl_vars['show']->value['nickName']);?>
</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
　

                </ul>
            </div>
        </div>
        <div class="orderItem">
            <div class="order-box-top">
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="secondCrown"></span></div>
                    <div class="order-second-name">梁胖胖跳脱衣舞</div>
                    <div class="order-second-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-first">
                    <div class="order-first-img"><img src="/skin/ym/images/fff1.png" />
                        <span class="crown"></span></div>
                    <div class="order-first-name">梁胖胖跳脱衣舞</div>
                    <div class="order-first-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="thirdCrown"></span></div>
                    <div class="order-third-name">梁胖胖跳脱衣舞</div>
                    <div class="order-third-level"><span></span></div>
                </a>
            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >
                    <li>
                        <a href="javascript:;">
                            <span class="number">4.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">5.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">6.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">7.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">8.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">9.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">10.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">11.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">12.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">13.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">14.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">15.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="orderItem">
            <div class="order-box-top">
                <a href="javascript:;" class="order-box-second">
                    <div class="order-second-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="secondCrown"></span></div>
                    <div class="order-second-name">梁胖胖跳脱衣舞</div>
                    <div class="order-second-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-first">
                    <div class="order-first-img"><img src="/skin/ym/images/fff1.png" />
                        <span class="crown"></span></div>
                    <div class="order-first-name">梁胖胖跳脱衣舞</div>
                    <div class="order-first-level"><span></span></div>
                </a>

                <a href="javascript:;" class="order-box-third">
                    <div class="order-third-img"><img src="/skin/ym/images/fff3.png" />
                        <span class="thirdCrown"></span></div>
                    <div class="order-third-name">梁胖胖跳脱衣舞</div>
                    <div class="order-third-level"><span></span></div>
                </a>
            </div>
            <div class="clear"></div>
            <div class="order-box-bottom">
                <ul >
                    <li>
                        <a href="javascript:;">
                            <span class="number">4.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">5.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">6.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">7.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">8.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">9.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">10.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">11.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">12.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">13.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">14.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="number">15.</span>
                            <span class="order-second-name">坐看梁胖胖吃香</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>


</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
