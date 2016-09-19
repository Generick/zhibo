<?php

include("include/header.inc.php");
include($app_path."include/level.func.php");
require('include/smarty/Smarty.class.php');
include_once('include/login.func.php');

//魅力总表
$datas = curl_post(_INTERFACE_."/rest/homeAnchors/ranking.mt","");
$acceptData=json_decode($datas, true);
$page_var['rank_super_star']=$acceptData[data];
//爵位榜总榜
$datas = curl_post(_INTERFACE_."/rest/homeAnchors/theTitle.mt","");
$acceptData=json_decode($datas, true);
$page_var['rank_super_rich']=$acceptData[data];
//获取活跃榜总榜
$datas = curl_post(_INTERFACE_."/rest/homeAnchors/active.mt","");
$acceptData=json_decode($datas, true);
$page_var['rank_fans_list']=$acceptData[data];
$user=checklogin();
$page_var['user']=$user;
//smarty初始化
$smarty = new Smarty;
$smarty->caching = false;
$smarty->template_dir = "./templates";
$smarty->compile_dir = "./templates_c";

$page_var['current_page']="order";

$page_var['cdn_domain']=_CDNDOMAIN_;
foreach($page_var as $key=>$val){
    $smarty->assign($key,$val);
}

$smarty->registerPlugin("function","toColor","toColor");
$smarty->registerPlugin("function","toTime","toTime");
$smarty->display("orders.html");

include("include/footer.inc.php");
?>

