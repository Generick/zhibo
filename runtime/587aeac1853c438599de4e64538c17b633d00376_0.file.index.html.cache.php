<?php
<<<<<<< HEAD:runtime/0be756358647f43c61fbbe0d3e65785e62448089_0.file.index.html.cache.php
/* Smarty version 3.1.30, created on 2016-12-20 17:36:11
  from "D:\xampp\htdocs\anchors\app\view\index\index.html" */
=======
/* Smarty version 3.1.30, created on 2016-12-20 16:29:51
  from "D:\xampp\htdocs\home\app\view\index\index.html" */
>>>>>>> daisy:runtime/587aeac1853c438599de4e64538c17b633d00376_0.file.index.html.cache.php

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD:runtime/0be756358647f43c61fbbe0d3e65785e62448089_0.file.index.html.cache.php
  'unifunc' => 'content_5858fb8bca97a6_80537771',
=======
  'unifunc' => 'content_5858ebff1de979_75187165',
>>>>>>> daisy:runtime/587aeac1853c438599de4e64538c17b633d00376_0.file.index.html.cache.php
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '587aeac1853c438599de4e64538c17b633d00376' => 
    array (
<<<<<<< HEAD:runtime/0be756358647f43c61fbbe0d3e65785e62448089_0.file.index.html.cache.php
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\index\\index.html',
      1 => 1482225969,
=======
      0 => 'D:\\xampp\\htdocs\\home\\app\\view\\index\\index.html',
      1 => 1482222588,
>>>>>>> daisy:runtime/587aeac1853c438599de4e64538c17b633d00376_0.file.index.html.cache.php
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/footer.html' => 1,
  ),
),false)) {
<<<<<<< HEAD:runtime/0be756358647f43c61fbbe0d3e65785e62448089_0.file.index.html.cache.php
function content_5858fb8bca97a6_80537771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '176435858fb8bc40025_33647856';
=======
function content_5858ebff1de979_75187165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '88745858ebff184bd9_29079387';
>>>>>>> daisy:runtime/587aeac1853c438599de4e64538c17b633d00376_0.file.index.html.cache.php
?>
 <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--create 2016-11-11 15.40-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>蝌蚪直播-最好玩的直播平台</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="public/index/css/bootstrap.min.css" rel="stylesheet">	
    <link href="public/index/css/style.css?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
" rel="stylesheet">
    <link href="public/index/css/homeBg.css?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
" rel="stylesheet">
    <link href="public/index/css/anchorLevel.css?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
" rel="stylesheet">
    <!-- 2 jQuery库 同时加载该库必须在加载bootstrap.min.js之前 -->
    <?php echo '<script'; ?>
 src="public/jquery-1.12.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/jquery.lazyload.min.js"><?php echo '</script'; ?>
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
        var sid="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
";
    <?php echo '</script'; ?>
>
</head>
<body style="padding-top:60px;">
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
            <a class="navbar-brand logo_head" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav hdNavL">
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'index') {?>active<?php }?>"><a href="#">首页</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'square') {?>active<?php }?>"><a href="../anchors/square.php">广场</a> </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'mall') {?>active<?php }?>"><a href="kedo.php?c=mall">商城</a> </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'order') {?>active<?php }?>"><a href='kedo.php?c=orders'>排行榜</a> </li>
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
                <li><a href="javascript:;" class="log">登录</a></li>
                <li class="hidden-xs"><a href="javascript:;">|</a></li>
                <li class="hidden-lg hidden-md hidden-sm show-xs line"><a href=""></a></li>
                <li class=""><a href="javascript:;" class="reg">注册<span class="sr-only">(current)</span></a></li>
            </ul>
            <?php } else { ?>
            <ul class="nav navbar-nav navbar-right hidden-sm hdNavR">
                <li><a href="/centeros.php"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a></li>
                <li class="hidden-xs"><a href="">|</a></li>
                <li class="hidden-lg hidden-md hidden-sm show-xs line"><a href="javascript:;"></a></li>
                <li class=""><a href="/login.php?action=logout&amp;type=html">退出<span class="sr-only">(current)</span></a></li>
            </ul>

            <?php }?>
        </div><!--/.nav-collapse -->
    </div>
</div>
    
    <!--主体-->
    <div class="container main">
        <div class="row">
            <div class="col-lg-9 col-sm-9 col-xs-12 mainLeft" role="main">
                <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
            <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        </ol>
        			<div class="carousel-inner" role="listbox">
        </div>
					<a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
                        <span class="icon-prev glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
					<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
                        <span class="icon-next glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="thumb-bar"></div>
    			</div>
            
            	<!--游戏-->
                <div id="games"></div>
                
                
                
                
                <!--娱乐直播-->
                <div class="hotCon" id="hotList">
                    <div class="page-header clearfix hpGameTit">
                    	<!--左标题-->
                        <h4 class="pull-left">
                            <span class="glyphicon icon-yule"></span>
                            <span class="color99">娱乐直播</span>
                        </h4>
                        <h4 class="pull-right recommR">
                            <a href="javascript:;"><small class="color33">更多</small></a>
                        </h4>
            
                    </div>
            
                    <div class="row hotLiCon">
                    </div>
            
                </div>
                
                <!--游戏专区-->
                <div class="GamesCon" id="gameAnchors">
                    <div class="page-header clearfix hpGameTit">
                        <h4 class="pull-left">
                            <span class="glyphicon icon-yin"></span>
                            <span class="color99">游戏专区</span>
                        </h4>
                        <h4 class="pull-right recommR">
                            <a href="javascript:;"><small class="color33">更多</small></a>
                        </h4>
            
                    </div>
            		<div class="row gameCon padd1">
                        <!--<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        	<img src="public/index/images/gameI.jpg"/>
                            <div class="color99 f18 text-center gameN">英雄联盟</div>
                        </div>-->
                        
                        
                    </div>
                    
            
                </div>
            
            
            </div>
            <div class="col-lg-3 col-sm-3 hidden-xs pull-right mainRight" role="complementary">
            <!--登录注册-->
            <div class="thumbnail regLog text-center">
                <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
        
                <div class="caption beforLog">
                    <p class="row">
                        <button type="button" id="btn_login" class="btn_login loginBtn btn btn-warning login_im" data-loading-text="Loading..." autocomplete="off" onclick="login()">立即登录</button>
                    </p>
                    <p class="row">
                        <a type="button" href="javascript:;" class="btn_login regBtn btn btn-default register" data-loading-text="Loading..." autocomplete="off">一键注册</a>
                    </p>
                    <p class="text-center color99 f12 pasTip">忘记密码 点击 <b><a href="javascript:;" class="colorBlue">这里找回</a></b></p>
                    <hr/>
                    <p class="text-center quickLog">快捷登录</p>
                    <p class="row">
                        <button type="button" onclick="javascript:login.qqlogin()" class="btn_login btn btn-info qqLog" data-loading-text="Loading..." autocomplete="off">QQ账号登录</button>
                    </p>
                    <p class="row">
                        <button type="button" onclick="javascript:login.wxlogin()" class="btn_login btn btn-success weChatLog" data-loading-text="Loading..." autocomplete="off">微信账号登录</button>
                    </p>
                </div>
        
                <?php } else { ?>
                <div class="caption AfterLog">
                    <div class="row">
                        <div class="pull-left imgR img-circle colorPin">
                           <a href="/centeros.php"> <img class="img-circle lazy"  src="<?php echo $_smarty_tpl->tpl_vars['images_domain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" style="width: 52px;height: 52px;" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
" /></a>
                        </div>
                        <div class="pull-left">
                            <div class="name"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</div>
                            <div class="money">
                                <span class="glyphicon glyphicon-bold img-circle"></span>
                                <span class="moneyNum"><?php echo $_smarty_tpl->tpl_vars['user']->value['coins'];?>
</span>
                            </div>
        
                            <a class="charge btn btn-warning" href="/pay.php">充值</a>
                        </div>
                    </div>
        
                    <!--<div class="progress row">
                        <div class="progress-bar bgPin" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span class="sr-only">40% 完成</span>
                        </div>
                    </div>-->
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                             style="width: <?php echo $_smarty_tpl->tpl_vars['user']->value['nextSpender'];?>
%;">
                            <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['user']->value['nextSpender'];?>
% 完成（危险）</span>
                        </div>
                    </div>
                    <div>还差<?php echo $_smarty_tpl->tpl_vars['user']->value['differ'];?>
经验值升级到下一级</div>
        
        
                    <p class="row showOw clearfix">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['roomNumber']) {?>
                        <a title="我要开播" class="btn btn-md btn-default colorBlue pull-left show" href="/<?php echo $_smarty_tpl->tpl_vars['user']->value['roomNumber'];?>
">开播</a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['socType'] == 1) {?>
                        <a  target="_blank" href="javascript:;" ahref = "<?php echo $_smarty_tpl->tpl_vars['coreweb']->value;?>
?userId=<?php echo $_smarty_tpl->tpl_vars['user']->value['userId'];?>
&token=<?php echo $_smarty_tpl->tpl_vars['gf_token']->value;?>
" class="oww btn btn-md btn-default colorBlue pull-right">OW</a>
                        <?php }?>
                    </p>
        
        
                    <!--<div class="clearfix">
                        <span class="pull-left">获得成就</span>
                    </div>
                    <hr/>
                    <div class="clearfix achieve">
                        <span class="achieve1 pull-left"></span>
                        <span class="achieve2 pull-left"></span>
                        <span class="achieve3 pull-left"></span>
                        <span class="achieve4 pull-left"></span>
                        <a href="" class="pull-right">更多</a>
                    </div>
        -->
                </div>
                <?php }?>
            </div>
        
            <!--我的关注-->
            <div class="thumbnail follow text-left">
                <div class="caption">
                    <div class="row foTit">
                        <h4 class="pull-left titH">我的关注</h4>
                        <div class="pull-right titD">
                            <a href="javascript:;" class="glyphicon shh glyphicon-menu-up-hover"></a>
                            <a href="javascript:;" class="glyphicon xii glyphicon-menu-down-hover"></a><!---->
                        </div>
                    </div>
                    <div class="followList">
                        <div class="boxx">
                            <div class="row foLi">
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
            <!--申请入驻-->
            <a href="javascript:;" class="thumbnail apply">
                <img class="lazy" src="public/index/images/banner_zhaoping.png"/>
            </a>
        
            <!--主播排行榜-->
            <div class="thumbnail text-left rank">
                <div class="caption">
                    <div class="row foTit">
                        <h4 class="pull-left titH hidden-sm">主播排行榜</h4>
                        <h4 class="pull-left titH visible-sm-block">主播榜</h4>
                        <div class="pull-right captitle titD">
                            <a href="javascript:;" class="colorPin active">周</a>
                            <a href="javascript:;" class="colorPin">月</a>
                            <a href="javascript:;" class="colorPin">年</a>
                        </div>
                    </div>
        
                    <div class="cons">
                        <div class="row foLi"   id="dayList">
        
                        </div>
                        <div class="row foLi"   id="weekList" style="display: none">
        
                        </div>
                        <div class="row foLi"   id="monthList" style="display: none">
        
                        </div>
                    </div>
                </div>
            </div>
        
            <!--土豪榜-->
            <div class="thumbnail rich text-left">
                <div class="caption">
                    <div class="row foTit">
                        <h4 class="pull-left titH">土豪榜</h4>
                        <div class="pull-right captitle titD">
                            <a href="javascript:;" class="colorPin active">周</a>
                            <a href="javascript:;" class="colorPin">月</a>
                            <a href="javascript:;" class="colorPin">年</a>
                        </div>
                    </div>
                    <div class="cons">
                        <div class="row foLi" id="th_week">
        
                        </div>
                        <div class="row foLi"  id="th_month"  style="display: none">
        
                        </div>
                        <div class="row foLi"  id="th_year" style="display: none">
        
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
            <!--粉丝活跃榜-->
            <div class="fans thumbnail text-left">
                <div class="caption">
                    <div class="row foTit">
                        <h4 class="pull-left titH hidden-sm">粉丝活跃榜</h4>
                        <h4 class="pull-left titH visible-sm-block">粉丝榜</h4>
                        <div class="pull-right titD captitle">
                            <a href="javascript:;" class="colorPin active">周</a>
                            <a href="javascript:;" class="colorPin">月</a>
                            <a href="javascript:;" class="colorPin">年</a>
                        </div>
                    </div>
        
                    <div class="cons">
                        <div class="row foLi" id="hy_week">
        
                        </div>
                        <div class="row foLi"  id="hy_month"  style="display: none">
        
                        </div>
                        <div class="row foLi"  id="hy_year" style="display: none">
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <!--底部-->
    <?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--<div class="bs-docs-footer navbar-inverse" role="contentinfo">
        <div class="container">
            <p>
                <a href="javascript:;" class="firBL">关于蝌蚪 </a>|
                <a href="/serviceArgument.php" class="firBL" target="_blank">服务协议 </a>|
                <a href="/help.php" class="firBL" target="_blank">客服帮助 </a>|
                <a href="javascript:;" class="firBL">关于我们 </a>|
                <a href="javascript:;" class="firBL">版权声明</a>
            </p>
            <p>
                <img class="lazy" src="./././public/index/images/logo_foot.png"/>
                <span> -Copyright©2016 沪ICP备14054721号</span>
            </p>
            <p>蝌蚪客服电话：021-63156389 | 商务合作邮箱：
                <a class="officialMailbox" href="mailto:mt@mutiantech.com">kd@kedo.tv</a>
            </p>
        </div>
    </div>-->
    
    <!-- 3 加载bootstrap的核心ＪＳ库 -->
    <?php echo '<script'; ?>
 src="public/index/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="public/index/js/boot.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/index/js/json2.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="public/index/js/index_desert.js?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="public/angular.min.js?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/index/js/index_desert.js?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
<<<<<<< HEAD:runtime/0be756358647f43c61fbbe0d3e65785e62448089_0.file.index.html.cache.php
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/js/login.js?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
=======
 src="public/login/js/login.js?vsn=<?php echo $_smarty_tpl->tpl_vars['vsn']->value;?>
>>>>>>> daisy:runtime/587aeac1853c438599de4e64538c17b633d00376_0.file.index.html.cache.php
"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
        var url = "/rest/checkToken/checkOW.mt";
        var data ={
            sessionId:sid,
            userId:currentUserId
        }
        $(".oww").click(function(){
            var _this =$(this);
            $.ajax({
                type: "POST",
                url: url,
                data: data,
                dataType: "json",
                timeout: 120000,
                success: function (data, textStatus, jqXHR) {
                    location.href=$('.oww').attr("ahref");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //alert(params.url+" error code:"+textStatus);
    
                }
            });
        })
    
    
    <?php echo '</script'; ?>
>
    
</body>
</html>
<?php }
}
