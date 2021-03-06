<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>serviCenter-蝌蚪直播</title>
<link rel="stylesheet" type="text/css" href="html/help/css/style.css"/>
<link href="<?php echo $page_var['cdn_domain']?>/static_data/images_css/icons.css?v=<?php echo $vsn;?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="html/help/css/allDegree.css">
<script src="html/help/js/jquery-1.12.2.min.js"></script>
<script src="html/help/js/help.js"></script>
</head>

<body>
<?php
include("include/header.inc.php");
$user = checklogin();
include_once('tpl_header.php');
?>
<div class="help">
	<h4 class="tit">帮助</h4>
	<div class="serContent clearFix">
		<ul class="serviLeft fl">
			<li class="active">
				<a href="javascript:;">客服中心</a>
			</li>
			<li>
				<a href="javascript:;">爵位等级</a>
			</li>
			<li>
				<a href="javascript:;">活跃度等级</a>
			</li>
			<li>
				<a href="javascript:;">亲密度等级</a>
			</li>
			<li>
				<a href="javascript:;">主播等级</a>
			</li>
			<li>
				<a href="javascript:;">主播如何开播</a>
			</li>
			<li>
				<a href="javascript:;">蝌蚪秀场艺人管理条例</a>
			</li>
		</ul>

		<ul class="seRight fl">
			<li class="serCenter cur">
				<h4>客服中心</h4>
				<h5>在线客服</h5>
				<div class="qqInfo clearFix">
					<span class="qqBg fl"></span>
					<span class="fl qqNu">官方客服QQ：9999999999</span>
				</div>
				<p class="tip">提供问题咨询，意见反馈，投诉处理，工会入驻，主播签约等相关服务</p>
				<h5>工作时间</h5>
				<p>周一至周五：9：00-0:00</p>
				<p>周六至周日：9：00-0:00</p>
				<ul class="contaInfo">
					<li class="clearFix">
						<span class="contaBg fl"></span>
						<span class="fl">蝌蚪官方群：7987987978</span>
					</li>
					<li class="clearFix">
						<span class="emailBg fl"></span>
						<span class="fl">客服邮箱：kf@kedou.tv</span>
					</li>
					<li class="clearFix">
						<span class="wechatBg fl"></span>
						<span class="fl">微信公众号：wechat</span>
					</li>
					<li class="clearFix">
						<span class="coopBg fl"></span>
						<span class="fl">商务合作：business@kedou.tv</span>
					</li>
				</ul>
			</li>

			<!--爵位等级-->
			<li class="titRank">
				<h4>爵位等级</h4>
				<p class="tip">爵位等级由消费的蝌蚪币数量决定，1蝌蚪币=1点爵位经验值</p>
				<p class="rulTip">爵位规则说明：</p>
				<table class="tbTit">
					<tbody>
						<tr>  
                			<th width="58">爵位等级</th>  
                			<th width="98">爵位身份标识</th>
                			<th width="98">升级经验</th>  
                			<th width="116">爵位身份点亮消费</th>
                			<th width="118">入场特效</th>  
                			<th width="98">直播发言间隔</th> 
                            <th width="198">其他特权</th>                
           				</tr>    
						<tr>
							<td>1</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_1"></span>
                            </td>
							<td>1,000</td>
							<td>10</td>
							<td>无</td>
							<td>5s</td>
                            <td rowspan="5">无</td> 
						</tr>
						<tr>
							<td>2</td>
                            <td>
                            	<span class="sprite consumelevel-pic_consumelevel_2"></span>
                            </td>
							<td>5,000</td>
							<td>50</td>
							<td>无</td>
							<td>5s</td>
						</tr>
                        <tr>
							<td>3</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_3"></span>
                            </td>
							<td>10,000</td>
							<td>100</td>
							<td>无</td>
							<td>5s</td>
						</tr>
                        <tr>
							<td>4</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_4"></span>
                            </td>
							<td>20,000</td>
							<td>200</td>
							<td>无</td>
							<td>5s</td>
						</tr>
                        <tr>
							<td>5</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_5"></span>
                            </td>
							<td>40,000</td>
							<td>400</td>
							<td>无</td>
							<td>5s</td>
						</tr>
                        <tr>
							<td>6</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_6"></span>
                            </td>
							<td>70,000</td>
							<td>700</td>
							<td>初级进场特效</td>
							<td>3s</td>
                            <td class="tAlign" rowspan="5">
                            	<p>1.私聊主播特权</p>
                                <p>2.优先进入房间</p>
                            </td> 
						</tr>
                        <tr>
							<td>7</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_7"></span>
                            </td>
							<td>120,000</td>
							<td>1,200</td>
							<td>初级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>8</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_8"></span>
                            </td>
							<td>200,000</td>
							<td>2,000</td>
							<td>初级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>9</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_9"></span>
                            </td>
							<td>350,000</td>
							<td>3,500</td>
							<td>初级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>10</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_10"></span>
                            </td>
							<td>550,000</td>
							<td>5,500</td>
							<td>初级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>11</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_11"></span>
                            </td>
							<td>900,000</td>
							<td>9,000</td>
							<td>初级进场特效</td>
							<td>3s</td>
                            <td class="tAlign" rowspan="5">
                            	<p>1.初级进场特效</p>
                                <p>2.优先进入房间</p>
                                <p class="cPink">3.每日免费七次直播间免费喊话</p>
                            </td> 
						</tr>
                        <tr>
							<td>12</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_12"></span>
                            </td>
							<td>1,400,000</td>
							<td>14,000</td>
							<td>初级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>13</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_13"></span>
                            </td>
							<td>2,150,000</td>
							<td>21,500</td>
							<td>初级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>14</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_14"></span>
                            </td>
							<td>2,900,000</td>
							<td>29,000</td>
							<td>初级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>15</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_15"></span>
                            </td>
							<td>3,850,000</td>
							<td>38,500</td>
							<td>初级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>16</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_16"></span>
                            </td>
							<td>5,100,000</td>
							<td>51,000</td>
							<td>中级进场特效</td>
							<td>3s</td>
                            <td class="tAlign" rowspan="5">
                            	<p>1.初级进场特效</p>
                                <p>2.优先进入房间</p>
                                <p class="cPink">3.每日免费七次直播间免费喊话</p>
                                <p class="cPink">4.LV1禁言特权</p>
                            </td> 
						</tr>
                        <tr>
							<td>17</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_17"></span>
                            </td>
							<td>6,800,000</td>
							<td>68,000</td>
							<td>中级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>18</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_18"></span>
                            </td>
							<td>9,000,000</td>
							<td>90,000</td>
							<td>中级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>19</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_19"></span>
                            </td>
							<td>11,800,000</td>
							<td>118,000</td>
							<td>中级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>20</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_20"></span>
                            </td>
							<td>15,000,000</td>
							<td>150,000</td>
							<td>中级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>21</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_21"></span>
                            </td>
							<td>19,000,000</td>
							<td>190,000</td>
							<td>高级进场特效</td>
							<td>3s</td>
                            <td class="tAlign" rowspan="5">
                            	<p>1.初级进场特效</p>
                                <p>2.优先进入房间</p>
                                <p class="cPink">3.每日免费七次直播间免费喊话</p>
                                <p class="cPink">4.LV1禁言特权</p>
								<p class="cPink">5.房间LV5踢人特权</p>
                            </td> 
						</tr>
                        <tr>
							<td>22</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_22"></span>
                            </td>
							<td>24,000,000</td>
							<td>240,000</td>
							<td>高级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>23</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_23"></span>
                            </td>
							<td>30,000,000</td>
							<td>300,000</td>
							<td>高级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>24</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_24"></span>
                            </td>
							<td>38,000,000</td>
							<td>380,000</td>
							<td>高级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>25</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_25"></span>
                            </td>
							<td>48,000,000</td>
							<td>480,000</td>
							<td>高级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>26</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_26"></span>
                            </td>
							<td>60,000,000</td>
							<td>600,000</td>
							<td>高级进场特效</td>
							<td>3s</td>
                            <td rowspan="5"></td> 
						</tr>
                        <tr>
							<td>27</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_27"></span>
                            </td>
							<td>75,000,000</td>
							<td>750,000</td>
							<td>高级进场特效</td>
							<td>3s</td>
						</tr>
                        <tr>
							<td>28</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_28"></span>
                            </td>
							<td>95,000,000</td>
							<td>950,000</td>
							<td>高级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>29</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_29"></span>
                            </td>
							<td>120,000,000</td>
							<td>1,200,000</td>
							<td>高级进场特效</td>
							<td>3s</td> 
						</tr>
                        <tr>
							<td>30</td>
							<td>
                            	<span class="sprite consumelevel-pic_consumelevel_30"></span>
                            </td>
							<td>150,000,000</td>
							<td>1,500,000</td>
							<td>高级进场特效</td>
							<td>3s</td>
						</tr>
					</tbody>
				</table>
                <p class="bTip">1、爵位身份点亮消费指获得爵位之日起30天内需要消费的蝌蚪币，未达到一定消费时爵位身份标识将会熄灭变成灰色。当后续消费达到点亮所需额度时，爵位身份会重新点亮。</p>
                <p class="bTip">2、爵位身份标识熄灭时无法升级爵位。</p>

				
			</li>
            
            <!--活跃等级-->
            <li class="actDegree">
				<h4>活跃度等级</h4>
				<p class="tip">活跃度是由观看直播的时间决定，赠送免费礼物也会获取一定活跃度经验值</p>
                <p class="tip">活跃度计算方式：每看10分钟直播积累1点活跃度经验值。每日上限36点经验值</p>
				<p class="rulTip">活跃度经验表：</p>
				<table class="tbTit">
					<tbody>
						<tr>  
                			<th width="58">活跃等级</th>  
                            <th width="198">活跃图标</th>     
                			<th width="334">升级经验</th>
           				</tr>    
						<tr>
							<td>1</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_1"></span>
                            </td>
							<td>0</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_2"></span>
                            </td>
							<td>40</td>
						</tr>
                        <tr>
							<td>3</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_3"></span>
                            </td>
							<td>85</td>
						</tr>
                        <tr>
							<td>4</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_4"></span>
                            </td>
							<td>148</td>
						</tr>
                        <tr>
							<td>5</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_5"></span>
                            </td>
							<td>245</td>
						</tr>
                        <tr>
							<td>6</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_6"></span>
                            </td>
							<td>385</td>
						</tr>
                        <tr>
							<td>7</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_7"></span>
                            </td>
							<td>576</td>
						</tr>
                        <tr>
							<td>8</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_8"></span>
                            </td>
                            <td>825</td> 
						</tr>
                        <tr>
							<td>9</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_9"></span>
                            </td>
							<td>1,140</td>
						</tr>
                        <tr>
							<td>10</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_10"></span>
                            </td>
							<td>1,528</td>
						</tr>
                        <tr>
							<td>11</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_11"></span>
                            </td>
							<td>1,998</td>
						</tr>
                        <tr>
							<td>12</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_12"></span>
                            </td>
							<td>2,557</td>
						</tr>
                        <tr>
							<td>13</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_13"></span>
                            </td>
							<td>3,213</td>
						</tr>
                        <tr>
							<td>14</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_14"></span>
                            </td>
							<td>3,974</td>
						</tr>
                        <tr>
							<td>15</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_15"></span>
                            </td>
							<td>4,847</td>
						</tr>
                        <tr>
							<td>16</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_16"></span>
                            </td>
							<td>5,841</td>
						</tr>
                        <tr>
							<td>17</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_17"></span>
                            </td>
							<td>6,963</td>
						</tr>
                        <tr>
							<td>18</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_18"></span>
                            </td>
							<td>8,221</td>
						</tr>
                        <tr>
							<td>19</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_19"></span>
                            </td>
                            <td>9,622</td> 
						</tr>
                        <tr>
							<td>20</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_20"></span>
                            </td>
                            <td>11,174</td> 
						</tr>
                        <tr>
							<td>21</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_21"></span>
                            </td>
							<td>12,886</td>
						</tr>
                        <tr>
							<td>22</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_22"></span>
                            </td>
                            <td>14,764</td> 
						</tr>
                        <tr>
							<td>23</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_23"></span>
                            </td>
                            <td>16,817</td> 
						</tr>
                        <tr>
							<td>24</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_24"></span>
                            </td>
                            <td>19,052</td> 
						</tr>
                        <tr>
							<td>25</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_25"></span>
                            </td>
							<td>21,477</td>
						</tr>
                        <tr>
							<td>26</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_26"></span>
                            </td>
							<td>24,100</td>
						</tr>
                        <tr>
							<td>27</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_27"></span>
                            </td>
                            <td>26,929</td> 
						</tr>
                        <tr>
							<td>28</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_28"></span>
                            </td>
							<td>29,971</td>
						</tr>
                        <tr>
							<td>29</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_29"></span>
                            </td>
                            <td>33,235</td> 
						</tr>
                        <tr>
							<td>30</td>
							<td>
                            	<span class="spriteAllDegre pic_activelevel_30"></span>
                            </td>
                            <td>36,727</td> 
						</tr>
					</tbody>
				</table>
                <p class="bTip">1、爵位身份点亮消费指获得爵位之日起30天内需要消费的蝌蚪币，未达到一定消费时爵位身份标识将会熄灭变成灰色。当后续消费达到点亮所需额度时，爵位身份会重新点亮。</p>
                <p class="bTip">2、爵位身份标识熄灭时无法升级爵位。</p>

				
			</li>
            
            <!--亲密度等级-->
            <li class="intimDegree">
				<h4>亲密度等级</h4>
				<div class="tip">
                	<p>亲密度等级是衡量粉丝和主播之间互动的等级，观看主播直播、赠送主播礼物都获得与主播的亲密度经验值。</p>
                	<p>亲密度经验值计算方式：赠送1蝌蚪币的礼物可获得一点亲密度，看主播直播每15分钟可获得50点亲密度值。</p>
                </div>
				<p class="tbTip">亲密度经验表：</p>
				<table class="tbTit">
					<tbody>
						<tr>  
                			<th width="74">亲密度等级</th>  
                            <th width="198">亲密度图标</th>     
                			<th width="334">升级经验</th>
           				</tr>    
						<tr>
							<td>1</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_1"></span>
                            </td>
							<td>100</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_2"></span>
                            </td>
							<td>1000</td>
						</tr>
                        <tr>
							<td>3</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_3"></span>
                            </td>
							<td>2880</td>
						</tr>
                        <tr>
							<td>4</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_4"></span>
                            </td>
							<td>4821</td>
						</tr>
                        <tr>
							<td>5</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_5"></span>
                            </td>
							<td>6841</td>
						</tr>
                        <tr>
							<td>6</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_6"></span>
                            </td>
							<td>8958</td>
						</tr>
                        <tr>
							<td>7</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_7"></span>
                            </td>
							<td>11189</td>
						</tr>
                        <tr>
							<td>8</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_8"></span>
                            </td>
                            <td>13551</td> 
						</tr>
                        <tr>
							<td>9</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_9"></span>
                            </td>
							<td>16063</td>
						</tr>
                        <tr>
							<td>10</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_10"></span>
                            </td>
							<td>21612</td>
						</tr>
                        <tr>
							<td>11</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_11"></span>
                            </td>
							<td>27716</td>
						</tr>
                        <tr>
							<td>12</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_12"></span>
                            </td>
							<td>34429</td>
						</tr>
                        <tr>
							<td>13</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_13"></span>
                            </td>
							<td>41809</td>
						</tr>
                        <tr>
							<td>14</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_14"></span>
                            </td>
							<td>49918</td>
						</tr>
                        <tr>
							<td>15</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_15"></span>
                            </td>
							<td>58822</td>
						</tr>
                        <tr>
							<td>16</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_16"></span>
                            </td>
							<td>68592</td>
						</tr>
                        <tr>
							<td>17</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_17"></span>
                            </td>
							<td>79303</td>
						</tr>
                        <tr>
							<td>18</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_18"></span>
                            </td>
							<td>91035</td>
						</tr>
                        <tr>
							<td>19</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_19"></span>
                            </td>
                            <td>103874</td> 
						</tr>
                        <tr>
							<td>20</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_20"></span>
                            </td>
                            <td>126636</td> 
						</tr>
                        <tr>
							<td>21</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_21"></span>
                            </td>
							<td>152793</td>
						</tr>
                        <tr>
							<td>22</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_22"></span>
                            </td>
                            <td>182815</td> 
						</tr>
                        <tr>
							<td>23</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_23"></span>
                            </td>
                            <td>217235</td> 
						</tr>
                        <tr>
							<td>24</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_24"></span>
                            </td>
                            <td>256657</td> 
						</tr>
                        <tr>
							<td>25</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_25"></span>
                            </td>
							<td>301766</td>
						</tr>
                        <tr>
							<td>26</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_26"></span>
                            </td>
							<td>353337</td>
						</tr>
                        <tr>
							<td>27</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_27"></span>
                            </td>
                            <td>412250</td> 
						</tr>
                        <tr>
							<td>28</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_28"></span>
                            </td>
							<td>479501</td>
						</tr>
                        <tr>
							<td>29</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_29"></span>
                            </td>
                            <td>556219</td> 
						</tr>
                        <tr>
							<td>30</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_30"></span>
                            </td>
                            <td>682565</td> 
						</tr>
                        <tr>
							<td>31</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_31"></span>
                            </td>
							<td>834716</td>
						</tr>
                        <tr>
							<td>32</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_32"></span>
                            </td>
                            <td>1017850</td> 
						</tr>
                        <tr>
							<td>33</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_33"></span>
                            </td>
                            <td>1238182</td> 
						</tr>
                        <tr>
							<td>34</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_34"></span>
                            </td>
                            <td>1503169</td> 
						</tr>
                        <tr>
							<td>35</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_35"></span>
                            </td>
							<td>1821759</td>
						</tr>
                        <tr>
							<td>36</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_36"></span>
                            </td>
							<td>2204690</td>
						</tr>
                        <tr>
							<td>37</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_37
             "></span>
                            </td>
                            <td>2664848</td> 
						</tr>
                        <tr>
							<td>38</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_38"></span>
                            </td>
							<td>3217696</td>
						</tr>
                        <tr>
							<td>39</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_39"></span>
                            </td>
                            <td>3881790</td> 
						</tr>
                        <tr>
							<td>40</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_40"></span>
                            </td>
                            <td>4939982</td> 
						</tr>
                        <tr>
							<td>41</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_41"></span>
                            </td>
							<td>6281070</td>
						</tr>
                        <tr>
							<td>42</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_42"></span>
                            </td>
                            <td>7980510</td> 
						</tr>
                        <tr>
							<td>43</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_43"></span>
                            </td>
                            <td>10133881</td> 
						</tr>
                        <tr>
							<td>44</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_44"></span>
                            </td>
                            <td>12862248</td> 
						</tr>
                        <tr>
							<td>45</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_45"></span>
                            </td>
							<td>16318961</td>
						</tr>
                        <tr>
							<td>46</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_46    "></span>
                            </td>
							<td>20698263</td>
						</tr>
                        <tr>
							<td>47</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_47"></span>
                            </td>
                            <td>26246195</td> 
						</tr>
                        <tr>
							<td>48</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_48"></span>
                            </td>
							<td>33274410</td>
						</tr>
                        <tr>
							<td>49</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_49"></span>
                            </td>
                            <td>42177667</td> 
						</tr>
                        <tr>
							<td>50</td>
							<td>
                            	<span class="spriteAllDegre pic_relationlevel_50"></span>
                            </td>
                            <td>56269640</td> 
						</tr>
					</tbody>
				</table>
                <p class="bTip">1、爵位身份点亮消费指获得爵位之日起30天内需要消费的蝌蚪币，未达到一定消费时爵位身份标识将会熄灭变成灰色。当后续消费达到点亮所需额度时，爵位身份会重新点亮。</p>
                <p class="bTip">2、爵位身份标识熄灭时无法升级爵位。</p>

				
			</li>
            
            <!--主播等级-->
            <li class="intimDegree">
				<h4>主播等级</h4>
				<div class="tip">
                	<p>主播等级由主播积累的收到礼物总价值决定，主播在每次收到礼物时都可获得主播等级经验值，积累经验值以获得主播等级。</p>
                	<p>主播每收到价值1蚪币的礼物获得1点经验值</p>
                </div>
				<p class="tbTip">主播等级经验表：</p>
				<table class="tbTit">
					<tbody>
						<tr>  
                			<th width="74">主播等级</th>  
                            <th width="180">主播图标</th>     
                			<th width="334">升级经验</th>
           				</tr>    
						<tr>
							<td>1</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_1"></span>
                            </td>
							<td>0</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_2"></span>
                            </td>
							<td>5,000</td>
						</tr>
                        <tr>
							<td>3</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_3"></span>
                            </td>
							<td>13,000</td>
						</tr>
                        <tr>
							<td>4</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_4"></span>
                            </td>
							<td>36,000</td>
						</tr>
                        <tr>
							<td>5</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_5"></span>
                            </td>
							<td>84,000</td>
						</tr>
                        <tr>
							<td>6</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_6"></span>
                            </td>
							<td>200,000</td>
						</tr>
                        <tr>
							<td>7</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_7"></span>
                            </td>
							<td>400,000</td>
						</tr>
                        <tr>
							<td>8</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_8"></span>
                            </td>
                            <td>600,000</td> 
						</tr>
                        <tr>
							<td>9</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_9"></span>
                            </td>
							<td>1,000,000</td>
						</tr>
                        <tr>
							<td>10</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_10"></span>
                            </td>
							<td>2,000,000</td>
						</tr>
                        <tr>
							<td>11</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_11"></span>
                            </td>
							<td>3,000,000 
</td>
						</tr>
                        <tr>
							<td>12</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_12"></span>
                            </td>
							<td>4,000,000</td>
						</tr>
                        <tr>
							<td>13</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_13"></span>
                            </td>
							<td>5,000,000</td>
						</tr>
                        <tr>
							<td>14</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_14"></span>
                            </td>
							<td>8,000,000</td>
						</tr>
                        <tr>
							<td>15</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_15"></span>
                            </td>
							<td>11,000,000</td>
						</tr>
                        <tr>
							<td>16</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_16"></span>
                            </td>
							<td>15,000,000</td>
						</tr>
                        <tr>
							<td>17</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_17"></span>
                            </td>
							<td>21,000,000</td>
						</tr>
                        <tr>
							<td>18</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_18"></span>
                            </td>
							<td>29,000,000</td>
						</tr>
                        <tr>
							<td>19</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_19"></span>
                            </td>
                            <td>39,000,000</td> 
						</tr>
                        <tr>
							<td>20</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_20"></span>
                            </td>
                            <td>54,000,000</td> 
						</tr>
                        <tr>
							<td>21</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_21"></span>
                            </td>
							<td>71,000,000</td>
						</tr>
                        <tr>
							<td>22</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_22"></span>
                            </td>
                            <td>95,000,000</td> 
						</tr>
                        <tr>
							<td>23</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_23"></span>
                            </td>
                            <td>130,000,000</td> 
						</tr>
                        <tr>
							<td>24</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_24"></span>
                            </td>
                            <td>170,000,000</td> 
						</tr>
                        <tr>
							<td>25</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_25"></span>
                            </td>
							<td>220,000,000</td>
						</tr>
                        <tr>
							<td>26</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_26"></span>
                            </td>
							<td>290,000,000</td>
						</tr>
                        <tr>
							<td>27</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_27"></span>
                            </td>
                            <td>380,000,000</td> 
						</tr>
                        <tr>
							<td>28</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_28"></span>
                            </td>
							<td>500,000,000</td>
						</tr>
                        <tr>
							<td>29</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_29"></span>
                            </td>
                            <td>660,000,000</td> 
						</tr>
                        <tr>
							<td>30</td>
							<td>
                            	<span class="spriteAllDegre pic_liverlevel_30"></span>
                            </td>
                            <td>860,000,000</td> 
						</tr>
                        
					</tbody>
				</table>
                <p class="bTip">1、爵位身份点亮消费指获得爵位之日起30天内需要消费的蝌蚪币，未达到一定消费时爵位身份标识将会熄灭变成灰色。当后续消费达到点亮所需额度时，爵位身份会重新点亮。</p>
                <p class="bTip">2、爵位身份标识熄灭时无法升级爵位。</p>

				
			</li>
            
            <li class="howShow">
            	<h4>主播如何开播</h4>
                <p>1.签约主播的直播</p>
                <p>STEP1：登录您的蝌蚪账号</p>
                <img class="regLogin" src="html/help/img/pic_bangzhu_denglu.png"/>
                <p>STEP2：在首页点击"直播"</p>
                <img class="ckLive" src="html/help/img/pic_bangzhu_geren.png"/>
                <p>STEP3：进入我的房间开始</p>
                <img class="entStart" src="html/help/img/pic_bangzhu_shezhi.png"/>
                <p class="c9">请点击窗口中的允许按钮来开启摄像头</p>
                <img class="opCame" src="html/help/img/pic_bangzhu_tiaojie.png"/>
                <p class="c9">预览窗口，实时调节自己的播放位置</p>
                <img class="preLo" src="html/help/img/pic_bangzhu_fanhui.png"/>
                <p class="c9">设置完成，赶紧来秀自己吧</p>
                <img class="preLo" src="html/help/img/pic_bangzhu_kaibo.png"/>
            </li>
            
            
            <li class="maRegular">
				<h4>蝌蚪秀场管理条例</h4>
                <div>
                    <h2>一、概述 </h2>
                    <p>为了维护蝌蚪秀场的基本秩序，给蝌蚪秀场用户营造更健康快乐的环境，响应构建和谐社会的号召，制订本条例，适用于所有蝌蚪秀场房间。 </p>
                    <h2>二、视频直播间违规定义 </h2>
                    <p>蝌蚪秀场主播违规行为分为严重违规和一般违规、轻微违规，视严重程度不同，处罚方式不同。蝌蚪秀场主播必须遵守以下规定，否则将受到处罚。处罚方式包括但不限于下播、封禁直播间、永久封停。处罚后，如主播未改正违规行为将视为再次违规。 <br>
                    <strong>A</strong><strong>类：严重违规行为</strong> <br>
                    严重违规行为是指涉政、涉黄、违规等严重扰乱蝌蚪秀场直播平台秩序的行为。在视频直播中违反以下规定，构成严重违规，包括但不限于：<a name="_GoBack"></a> <br>
                    1、严禁发表反党反政府的言论，或做出侮辱诋毁党和国家的行为，及危害社会秩序、公众道德的，如： <br>
                    （1）违反宪法确定的基本原则的； <br>
                    （2）危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的； <br>
                    （3）损害国家荣誉和利益的； <br>
                    （4）煽动民族仇恨、民族歧视、破坏民族团结的； <br>
                    （5）破坏国家宗教政策，宣扬邪教和封建迷信的； <br>
                    （6）散布谣言，扰乱社会秩序，破坏社会稳定的； <br>
                    （7）散布暴力、恐怖或者教唆犯罪的； <br>
                    （8）煽动非法集会、结社、游行、示威、聚众扰乱社会秩序的； <br>
                    （9）谈论敏感话题，传播负面情绪，例如对灾难或案件表达幸灾乐祸之情，有违人道主义和道德底线的表演。 <br>
                    2、严禁进行具有性挑逗性质的表演或行为，如表演脱衣舞等。 <br>
                    3、严禁通过各种方式展示具有性特征的身体敏感部位。如展示女性胸部、男女性臀部、男女大腿内侧及生殖器官等。 <br>
                    4、严禁传播毒品。如展示毒品样品、表演及传播毒品吸食或注射方式、讲解毒品制作过程等。 <br>
                    5、严禁同一主播拥有一个以上直播间。 <br>
                    6、严禁与他人进行互相性挑逗形式的表演或行为。如相互抚摸敏感部位、进行能让人产生性幻想的动作、在床上以任何抚摸形式进行表演等。 <br>
                    7、严禁展示枪支管制刀具、进行高危表演。如晃动管制刀具、枪支、高仿真枪支、表演具有高度危险性的节目等。 <br>
                    8、严禁表演危害他人人身安全的节目。如：殴打他人、以刀具威胁他人等。 <br>
                    9、严禁宣传传销机构、哄骗用户加入传销组织、或本人组织传销。 <br>
                    10、严禁表演危害自身安全的节目，如自杀、自残。 <br>
                    11、严禁进行其他类涉政、涉黄、违法、侵权、或威胁生命健康的表演。 <br>
                    12、除以上条款外，严重扰乱平台秩序造成恶劣影响的，参照A类违规从严处理。 <br>
                    <strong>B</strong><strong>类：一般违规行为</strong> <br>
                    一般违规行为是指除严重违规行为外，影响程度较轻的扰乱蝌蚪秀场直播平台秩序的违规行为。在视频直播中违反以下规定，构成一般违规，包括但不限于： <br>
                    1、内容规定： <br>
                    （1）严禁组织以骚扰、戏弄为目的的网络电话； <br>
                    （2）严禁穿着过于暴露进行舞蹈，严禁表演高危舞种，严禁表演低俗诱惑性舞蹈； <br>
                    （3）严禁在床上进行各种形式的表演； <br>
                    （4）严禁直播带有色情、性暗示的游戏、录像、图片、绘画、设计类教学。 <br>
                    （5）严禁其他低俗表演； <br>
                    2、动作规定： <br>
                    （1）严禁模仿各种低俗、色情动作、声音或带有诱惑性、挑逗性表演的行为； <br>
                    （2）严禁将镜头刻意聚焦于性敏感部位，或进行带有性暗示的抚摸、拉扯动作，或使用道具引起观众对性敏感部位的注意； <br>
                    （3）严禁使用性用品作为表演道具。 <br>
                    3、裸露规定： <br>
                    （1）严禁男性赤裸上身，女性刻意露出乳沟（以最多可以露出主播胸的1/3为标准）； <br>
                    （2）严禁刻意露出胸罩、底裤。 <br>
                    4、着装、妆容规定： <br>
                    （1）严禁穿透视装或过于透明的着装、情趣内衣、内衣外穿； <br>
                    （2）严禁穿着内衣、三点式露脐泳装、肉色紧身衣； <br>
                    （3）严禁穿着短于大腿1/3长度的下装； <br>
                    （4）严禁穿着带有中华人民共和国（包含港澳台）国家机关人员、军队的工作制服进行直播。包括警服、军服、工商制服、检察院制服、法院制服、城管制服、路政制服等。 <br>
                    5、言论规定： <br>
                    （1）严禁刻意模仿各种带有性挑逗的声音； <br>
                    （2）严禁演唱、播放带有色情、性暗示的音乐； <br>
                    （3）严禁刻意发表低俗涉黄言论，引导场内低俗互动； <br>
                    （4）严禁以文字、语音、图片等任何形式宣传其他语音、视频平台。 <br>
                    6、严禁在蝌蚪秀场平台直播期间同时在其他直播平台直播。 <br>
                    7、严禁在直播间内对其他主播进行人身攻击。如恶意辱骂、诽谤、诋毁其他主播，及通过其他不道德的方式攻击其他主播。 <br>
                    8、严禁直播间非主播本人使用。 <br>
                    9、严禁敷衍直播。判断标准包括但不限于： <br>
                    （1）直播内容； <br>
                    （2）直播效果（含妆容、背景和设备）； <br>
                    （3）挂机； <br>
                    （4）挂录像； <br>
                    （5）五分钟内无互动内容。 <br>
                    10、严禁进行其他类型违反蝌蚪秀场相关秩序规范的表演。 <br>
                    <strong>C</strong><strong>类：轻微违规行为</strong> <br>
                    轻微违规行为是指除严重违规行为和一般违规行为外，影响程度轻微的扰乱蝌蚪秀场直播平台秩序的违规行为。 <br>
                    在视频直播中违反以下规定，将构成轻微违规，包括但不限于： <br>
                    （1）严禁在直播期间播放无版权视频，包括但不限于各类电影、MV、其他网站原创视频节目。 <br>
                    （2）严禁主播持续爆粗口、谩骂。 <br>
                    （3）严禁妆容低俗、不雅。 <br>
                    （4）严禁直播中抽烟、喝酒，严禁酒后直播表现耍酒疯、酣睡等醉态。 <br>
                    （5）严禁主播在直播间内挂非官方指定安排的字幕条，如其他直播平台水印、QQ、微信号、淘宝链接及带有明显暗示的字符等。 </p>
                    <h2>三、艺人违规处罚说明 </h2>
                    <p>3.1若主播出现违规行为，一经认定，视情节严重程度进行如下处罚，包括但不限于： <br>
                    A类违规处罚：永久冻结账号，并停止与签约艺人及其所属公会的合作协议。并扣除当月全部收入。 <br>
                    B、C类违规类处罚：警告、封号、取消推荐资源 <br>
                    3.2违规处罚细则 <br>
                    3.2.1 主播违规次数与对应处罚关系如下表：（违规次数累加，次月清零） </p>
                    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="bottom"><br>
            A类违规（严重涉党涉政、涉嫌黄赌毒等内容） </td>
          <td valign="bottom"><p>永久停封艺人号码 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>B类违规1次 </p></td>
          <td valign="bottom"><p>封号3天 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>B类违规2次 </p></td>
          <td valign="bottom"><p>封号7天并取消15天艺人推荐资源 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>B类违规（情节严重者含2次以上B类违规） </p></td>
          <td valign="bottom"><p>封号15天并取消30天艺人推荐资源 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>C类违规1次 </p></td>
          <td valign="bottom"><p>警告 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>C类违规2次 </p></td>
          <td valign="bottom"><p>封号1天 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>C类违规3次 </p></td>
          <td valign="bottom"><p>封号3天并取消15天艺人认证资格 </p></td>
        </tr>
      </table>
                    <p>3.2.2 主播违规次数与房间被处罚关系如下表： <br>
        注：违规次数累加、违规次数累加，次月清零 </p>
                    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="bottom"><br>
            A类违规1次 </td>
          <td valign="bottom"><p>警告OW,取消该公会所有推荐资源7天 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>A类违规2次以上（包括2次） </p></td>
          <td valign="bottom"><p>关闭房间，终止合作 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>B类违规1次 </p></td>
          <td valign="bottom"><p>警告OW </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>B类违规2次（包括A类违规） </p></td>
          <td valign="bottom"><p>取消房间艺人推荐资源7天 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>B类违规3次以上（包括A类违规） </p></td>
          <td valign="bottom"><p>取消房间艺人推荐资源15天， </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>C类违规3次（包含A类B类违规） </p></td>
          <td valign="bottom"><p>警告OW </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>C类违规5次（包含A类B类违规） </p></td>
          <td valign="bottom"><p>取消房间艺人推荐资源7天 </p></td>
        </tr>
        <tr>
          <td valign="bottom"><p>C类违规6次以上（包含A类B类违规） </p></td>
          <td valign="bottom"><p>取消房间艺人推荐资源15天， </p></td>
        </tr>
      </table>
                    <p>3.2.3违规用户处理：视情节轻重可处理为a.警告、b.踢出频道、c.封全站、d.永久封号 </p>
                    <h2>四、备注 </h2>
                    <p>4.1 本管理条例由蝌蚪秀场运营团队颁布，最终解释权归蝌蚪秀场运营团队所有，蝌蚪秀场运营团队有权对本条例进行修改。 <br>
                    4.2 本条例自发布之日起生效 </p>
                 </div>
            </li>      
		</ul>
		
	</div>
</div>
<?php include('tpl_footer.php'); ?>
</body>
</html>
