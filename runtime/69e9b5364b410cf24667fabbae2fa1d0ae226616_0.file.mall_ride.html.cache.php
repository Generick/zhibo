<?php
/* Smarty version 3.1.30, created on 2016-12-26 14:20:03
  from "D:\xampp\htdocs\anchors\app\view\mall\mall_ride.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860b6930afc83_74746449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e9b5364b410cf24667fabbae2fa1d0ae226616' => 
    array (
      0 => 'D:\\xampp\\htdocs\\anchors\\app\\view\\mall\\mall_ride.html',
      1 => 1482489748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/footer.html' => 1,
  ),
),false)) {
function content_5860b6930afc83_74746449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '93935860b69307d003_15075654';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>商城</title>
	<link data-fixed="true" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/mall/css/square.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/public/min/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
/js/login.js" type="text/javascript" ><?php echo '</script'; ?>
>

</head>
<body style="padding-top:60px;">

<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--主体-->
	<div class="main-mall">
		<div class="mall-top">
			<div class="mall-top-title">
				<a href="kedo.php?c=mall" class=""> 守护</a>
			</div>
            <div class="mall-top-title">
            	<a href="kedo.php?c=mall&m=mall_prop" class=""> 道具</a>
            </div>
            <div class="mall-top-title">
            	<a href="#" class="mselect"> 座驾</a> 
            </div>
		</div>
		<div class="clear"></div>

		<!-- 道具-->
		<div class="mall-list">
			<pre></pre>
			<div class="mall-car-box">
				<div class="mall-car-top">蝌蚪骑士</div>
				<div class="mall-car-mid mcar100 clearFix">
					<img
						src="http://img.kedo.tv/4e3b51a49b2ab9ffaded9d525ca03890?p=0&amp;w=164&amp;h=204">
				</div>
				<div class="mall-car-bot clearFix">
					<span
						style="display:inline-block;margin-right: 12px;margin-left: 10px;">0</span><span>蝌蚪币</span>
				</div>
				<div class="mall-car-but clearFix">
				<a href="/pay.php">
					<button  onclick="javascript:buy_car('','蝌蚪骑士','0')">购买</button>
					</a>
				</div>
				<div class="mall-car-p">
					<span></span>
				</div>
			</div>
			<div class="mall-car-box">
				<div class="mall-car-top">青蛙骑士</div>
				<div class="mall-car-mid mcar100 clearFix">
					<img
						src="http://img.kedo.tv/992d9667913729472c1bc2e0d5d7df5d?p=0&amp;w=164&amp;h=204">
				</div>
				<div class="mall-car-bot clearFix">
					<span
						style="display:inline-block;margin-right: 12px;margin-left: 10px;">0</span><span>蝌蚪币</span>
				</div>
				<div class="mall-car-but clearFix">
				<a href="/pay.php">
					<button onclick="javascript:buy_car('','青蛙骑士','0')">购买</button>
					</a>
				</div>
				<div class="mall-car-p">
					<span></span>
				</div>
			</div>
			<div class="mall-car-box">
				<div class="mall-car-top">青蛙国王</div>
				<div class="mall-car-mid mcar100 clearFix">
					<img
						src="http://img.kedo.tv/ce16b40d15e649fb945253f79c8b9ea4?p=0&amp;w=164&amp;h=204">
				</div>
				<div class="mall-car-bot clearFix">
					<span
						style="display:inline-block;margin-right: 12px;margin-left: 10px;">0</span><span>蝌蚪币</span>
				</div>
				<div class="mall-car-but clearFix">
				<a href="/pay.php">
					<button onclick="javascript:buy_car('','青蛙国王','0')">购买</button>
					</a>
				</div>
				<div class="mall-car-p">
					<span></span>
				</div>
			</div>
			<div class="mall-car-box">
				<div class="mall-car-top">青铜守护</div>
				<div class="mall-car-mid mcar100 clearFix">
					<img
						src="http://img.kedo.tv/c5090ea391419bc128e90719325d62be?p=0&amp;w=164&amp;h=204">
				</div>
				<div class="mall-car-bot clearFix">
					<span
						style="display:inline-block;margin-right: 12px;margin-left: 10px;">0</span><span>蝌蚪币</span>
				</div>
				<div class="mall-car-but clearFix">
				<a href="/pay.php">
					<button onclick="javascript:buy_car('','青铜守护','0')">购买</button>
					</a>
				</div>
				<div class="mall-car-p">
					<span></span>
				</div>
			</div>
			<div class="mall-car-box">
				<div class="mall-car-top">白银守护</div>
				<div class="mall-car-mid mcar100 clearFix">
					<img
						src="http://img.kedo.tv/4dca91511800d2bd690ec6ae1b28a156?p=0&amp;w=164&amp;h=204">
				</div>
				<div class="mall-car-bot clearFix">
					<span
						style="display:inline-block;margin-right: 12px;margin-left: 10px;">0</span><span>蝌蚪币</span>
				</div>
				<div class="mall-car-but clearFix">
				<a href="/pay.php">
					<button onclick="javascript:buy_car('','白银守护','0')">购买</button>
					</a>
				</div>
				<div class="mall-car-p">
					<span></span>
				</div>
			</div>
			<div class="mall-car-box">
				<div class="mall-car-top">黄金守护</div>
				<div class="mall-car-mid mcar100 clearFix">
					<img
						src="http://img.kedo.tv/1497f33ec1602182291e91102a8f1126?p=0&amp;w=164&amp;h=204">
				</div>
				<div class="mall-car-bot clearFix">
					<span
						style="display:inline-block;margin-right: 12px;margin-left: 10px;">0</span><span>蝌蚪币</span>
				</div>
				<div class="mall-car-but clearFix">
				<a href="/pay.php">
					<button onclick="javascript:buy_car('','黄金守护','0')">购买</button>
					</a>
				</div>
				<div class="mall-car-p">
					<span></span>
				</div>
			</div>
		</div>

		<div class="car_tip">
			<h4>温馨提示：</h4>
			<p>购买座驾将享受与别人不同的进场方式，让你处处彰显尊贵，同是购买坐骑将有机会获得限免道具，机会多多，赶快购买吧！</p>
			<a href="kedo.php?c=mall" class="growLev">消费物品成长等级 &gt;&gt;</a>
		</div>


		<div class="mall-buy-car" style="display: none">
			<span class="clso"
				style="display: inline-block;background: url(/skin/ym/images/guanbi-hover.png) no-repeat;width: 17px;height: 17px;position: absolute;right: 10px;top:10px;cursor: pointer"></span>
			<div class="buy-car-left">
				<div class="buy-car-top">
					<img src="http://www.showself.com/img/shop/big/kenisaige_CCXR.png"
						alt="炮车">
				</div>
				<div class="buy-car-top-bot">座驾有效期为购买之日起30日内,连续购买多个有效期将叠加</div>
			</div>

			<div class="buy-car-right">
				<div class="mall-car-top buy-car-name">知名跑车(1个月)</div>
				<table>
					<tbody>
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
							<td><span class="yfmoney">100</span> 蝌蚪笔</td>
						</tr>
						<tr>
							<td>当前余额：</td>
							<td><span class="curmoney">1837</span> 蝌蚪笔</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="buy-car-but">
				<button onclick="buyok()">购买</button>
			</div>
		</div>
	</div>
	<!--div class="zhezhao"></-div-->

	

	<?php $_smarty_tpl->_subTemplateRender("file:../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<!-- 2 jQuery库 同时加载该库必须在加载bootstrap.min.js之前 -->

	<!-- 3 加载bootstrap的核心ＪＳ库 -->
	

</body>
</html><?php }
}
