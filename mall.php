<?php
include("include/header.inc.php");
include($app_path."include/level.func.php");

$user = checklogin();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商城</title>
    <?php
    $current_page="mall";
    include_once('templates/html_header_ym.html');
    ?>
    <script>
        $.ajaxSetup({
            cache: false
        });
        var Live={
            user_role:1
        }
    </script>

</head>
<body style="padding-top:60px;">
<?php
    include_once('tpl_header.php');
    $type=$_GET[type];
    $roomnumber = ($_GET["roomnumber"])?((int)$_GET["roomnumber"]):0;

?>
<script>

    function buy_car(id,name,money){
        if(Live.user_role==1){
            login.show();
            return;
        }
        $(".zhezhao").show();
        $(".mall-buy-car").show();
        carid=id;
        $(".buy-car-name").html(name);
        $(".yfmoney").html(money);
        $("#showWinLinkcar").click();
    }


    function buyok(){
        //发出购买请求
        $.post("/ajax/buy_car.php",{'id':carid,'roomnumber':<?php echo $roomnumber?>},function(r){
            if(r=="-1"){
                $("#shownomoneyLink").click();//
                alert("余额不足!");
                $(".zhezhao").hide();
                $(".mall-buy-car").hide();
            }
            else if(r=="-2"){
                login.show();
                alert("未登录!");
                $(".zhezhao").hide();
                $(".mall-buy-car").hide();
            }
            else{
               /* $.fancybox.close();
                $("#showSuccessLinkcar").click();*/
                alert("购买成功!");
                $(".zhezhao").hide();
                $(".mall-buy-car").hide();
            }
        });
        return true;
    }
    $(function(){
       /* $(".mall-car-but button").click(function(){
            $(".zhezhao").show();
            $(".mall-buy-car").show();
        })*/
        $(".clso").click(function(){
            $(".zhezhao").hide();
            $(".mall-buy-car").hide();
        })
    })
</script>
    <div class="main-mall">
        <div class="mall-top">
            <div class="mall-top-title"> 
            	<a href="mall.php?type=guard" class="<?php if($type=="guard" or $type==""){ echo "mselect";}?>"> 守护</a>
            </div>
            <div class="mall-top-title">
            	<a href="mall.php?type=props" class="<?php if($type=="props"){ echo "mselect";}?>"> 道具</a>
            </div>
            <div class="mall-top-title">
            	<a href="mall.php?type=car" class="<?php if($type=="car"){ echo "mselect";}?>"> 座驾</a> 
            </div>
        </div>
        <div class="clear"></div>

        <!-- 道具-->
        <?php

            if($type == "props"){
                    /*道具*/
        ?>
        <div class="mall-list">

            <div class="mall-box">
                <div class="mall-box-top">
                    <div class="mall-gift-img"><img src="http://static.youku.com/ddshow/img/shopping/big/global-horn_1.png"/></div>
                    <div class="mall-gift-con">
                        <div class="mall-gift-tit">全站喇叭</div>
                        <div class="mall-gift-mid">男爵以上才可以购买</div>
                        <div class="mall-gift-price"><span>5789</span><span>蝌蚪币</span><a href="/pay.php"  target="_blank" class="click">购买</a></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="mall-box-bot">
                    <div class="bot_tit">全站喇叭</div>
                    <div class="">1、公爵以上可用特殊礼物</div>
                    <div class="">2、使用后可获得发言橙色炫光效果</div>
                </div>
            </div>

        </div>
        
        <div class="prop_tip">
        	<h5>道具说明</h5>
            <p>公爵以上每月获赠免费道具一个，每一种道具对应相等级别，等级不同，购买的道具也不相同，道具可以赠送给主播或者普通用户，主播获得道具将可以兑换成现金普通用户收到道具后可以转赠给主播</p>
        </div>

        <?php
         }elseif($type == "car") {
                /*座驾*/
                ?>
                <div class="mall-list">
                   <?php

                       $datas = curl_post(_CDNDOMAIN_."/rest/homeAnchors/shopCar.mt","");
                       $acceptData=json_decode($datas, true);
                       $car_list=$acceptData[data];
                        echo "<pre>";
                       // print_r($car_list);
                        echo "</pre>";
                        foreach($car_list as $k=>$v){
                            echo '<div class="mall-car-box">
<div class="mall-car-top"> '.$v['giftname'].'</div>
<div class="mall-car-mid mcar100 clearFix"><img src="'.$v['giftimage'].'&w=164&h=204"/> </div>
<div class="mall-car-bot clearFix"><span style="display:inline-block;margin-right: 12px;margin-left: 10px;">'.$v['giftprice'].'</span><span>蝌蚪币</span></div>
<div class="mall-car-but clearFix"><button onclick="javascript:buy_car(\''.$v['giftid'].'\',\''.$v['giftname'].'\',\''.$v['giftprice'].'\')">购买</button></div>
<div class="mall-car-p"><span></span></div>
 </div>';
                        }

                      //  while($arr=$rs->FetchRow()){
                            //echo '<div class="mall-car-box"> <div class="mall-car-top"> '.$arr['giftname'].'</div><div class="mall-car-mid" style="background:url(/static_data/car/smallimages/'.$arr['giftimage'].') no-repeat center center;"></div><div class="mall-car-bot"><span style="display:inline-block;margin-right: 12px;margin-left: 10px;">'.$arr['giftprice'].'</span><span>'.$page_var['money_name'].'</span></div><div class="mall-car-but"><button onclick="javascript:buy_car(\''.$arr['giftid'].'\',\''.$arr['giftname'].'\',\''.$arr['giftprice'].'\')">购买</button></div> <div class="mall-car-p"><span>公爵以上才可以购买</span></div> </div>';
                       // }

                   ?>

                </div>
                
                <div class="car_tip">
                	<h4>温馨提示：</h4>
                    <p>购买座驾将享受与别人不同的进场方式，让你处处彰显尊贵，同是购买坐骑将有机会获得限免道具，机会多多，赶快购买吧！</p>
                    <a href="javascript:;" class="growLev">消费物品成长等级 >></a>
                </div>


                <div class="mall-buy-car" style="display: none">
                    <span class="clso" style="display: inline-block;background: url(/skin/ym/images/guanbi-hover.png) no-repeat;width: 17px;height: 17px;position: absolute;right: 10px;top:10px;cursor: pointer"></span>
                    <div class="buy-car-left">
                        <div class="buy-car-top"><img src="http://www.showself.com/img/shop/big/kenisaige_CCXR.png"  alt="炮车"/></div>
                        <div class="buy-car-top-bot">座驾有效期为购买之日起30日内,连续购买多个有效期将叠加</div>
                    </div>

                    <div class="buy-car-right">
                        <div class="mall-car-top buy-car-name">知名跑车(1个月)</div>
                        <table>
                            <tr>
                                <td>购买数量：</td>
                                <td><select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>应付全额：</td>
                                <td><span class="yfmoney">100</span>   蝌蚪笔</td>
                            </tr>
                            <tr>
                                <td>当前余额：</td>
                                <td><span class="curmoney">1837</span>   蝌蚪笔</td>
                            </tr>
                        </table>
                    </div>
                    <div class="buy-car-but">
                        <button onclick="buyok()">购买</button>
                    </div>
                </div>
            <?php
            }else if($type == "" or $type == "guard"){
                /*守护*/
               ?>

                <div class="guard">
			<div class="wrapper">
            	<div class="guardBg spriteGuard pic_shangcheng_banner"></div>
				<div class="privilege">
					<h4>守护特权说明</h4>
					<ul class="gd_list clearFix">
						<li class="fl bgBigLi firstBig">
							<div class="guard_tit_bg"></div>
                            <div class="guardType">守护类型</div>
							<ul class="gd_detail">
								<li>
                                	<span class="spriteGuard icon_huizhang"></span>
                                    <span>专属勋章</span>
                                </li>
                                <li>
                                	<span class="spriteGuard icon_zuoyi"></span>
                                    <span>专属座位</span>
                                </li>
                                <li class="jinchang clearFix">
                                	<span class="bg spriteGuard cion_jinchang fl"></span>
                                    <span class="text fl">进场特效</span>
                                </li>
                                <li>
                                	<span class="spriteGuard icon_messages"></span>
                                    <span>聊天特权</span>	
                                </li>
                                <li class="last">
                                	<span class="spriteGuard icon_tichu"></span>
                                    <span>房间特权</span>	
                                </li>
							</ul>
						</li>

						<li class="fl bgBigLi">
							<div class="spriteGuard pic_shuoming_qingtong"></div>
                            <div class="kinds">
                            	<h5>青铜级</h5>
                                <p>LV1-LV5</p>
                            </div>
							<ul class="gd_detail">
								<li class="firstDetail">
                                	<span class="spriteGuard pic_guardlevel_qingtong"></span>
                                    <span class="spriteGuard pic_shangcheng_qingtong"></span>
                                </li>
                                <li>聊天框 <span class="blue">蓝色</span> 昵称</li>
                                <li>防普通禁言、踢出房间</li>
							</ul>
						</li>

						<li class="fl bgBigLi">
							<div class="spriteGuard pic_shouhu_baiyin"></div>
                            <div class="kinds">
                            	<h5>白银级</h5>
                                <p>LV5-Lv10</p>
                            </div>
							<ul class="gd_detail">
								<li class="firstDetail">
                                	<span class="spriteGuard pic_guardlevel_baiyin"></span>
                                    <span class="spriteGuard pic_shangcheng_baiyin"></span>
                                </li>
                                <li>聊天框 <span class="violet">紫色</span> 昵称</li>
                                <li>防普通禁言、踢出房间</li>
							</ul>
						</li>

						<li class="fl bgBigLi">
							<div class="spriteGuard pic_shuoming_huangjin"></div>
                            <div class="kinds">
                            	<h5>黄金级</h5>
                                <p>LV10-LV15</p>
                            </div>
							<ul class="gd_detail">
								<li class="firstDetail">
                                	<span class="spriteGuard pic_guardlevel_huangjin"></span>
                                    <span class="spriteGuard pic_shangcheng_huangjin"></span>
                                </li>
                                <li>聊天框 <span class="orange">橙色</span> 昵称</li>
                                <li>防普通禁言、踢出房间</li>
							</ul>
						</li>
					</ul>
				</div>

			</div>
		</div>

                <div class="howUp">
                    <div class="wrapper">
                        <div class="spriteGuard pic_shangcheng_shengji"></div>
                    </div>
                </div>
        
                <div class="detail_start">
                    <div class="wrapper">
                        <div class="spriteGuard pic_shangcheng_kaitong"></div>
                    </div>
                </div>
                


            <?php
            }?>
    </div>
<div class="zhezhao"></div>

<?php include('tpl_footer.php'); ?>
</body>
</html>
<?php include("include/footer.inc.php");?>
