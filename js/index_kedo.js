// JavaScript Document
//create on 2016-10-26 19.40
$(document).ready(function(){
	function SwapTab(name, title, content, Sub, cur) {
		$(name + ' ' + title).mouseover(function () {
			$(this).addClass(cur).siblings().removeClass(cur);
			$(content + " > " + Sub).eq($(name + ' ' + title).index(this)).show().siblings().hide();
		})
	}

	SwapTab(".captitle", "a", ".cons", ".foLi", "active");
	SwapTab("#orderTit", "li", "#orderBody", ".orderItem", "active");
	
	var Tools = {};
	Tools.getDate = function (params, callback) {
		$.ajax({
			type: "POST",
			url: params.url,
			data: params.data,
			dataType: "json",
			timeout: 120000,
			success: function (data, textStatus, jqXHR) {
				callback(data, textStatus, jqXHR);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				//alert(params.url+" error code:"+textStatus);
	
	
			}
		});
	};
	//post请求
	Tools.getJson = function (params, callback) {
		$.ajax({
			type: "GET",
			url: params.url,
			data: params.data,
			dataType: "json",
			timeout: 120000,
			statusCode: {
				404: function() {
					// return false;
	
	
				},
				200: function(){
					// alert("请求成功");
	
				}
			},
			success: function (data, textStatus, jqXHR) {
				callback(data, textStatus, jqXHR);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				//alert(params.url+" error code:"+jqXHR.status);
	
	
			}
		});
	};
	Tools.stringFormat = function () {
		if (arguments.length == 0)
			return this;
		var $ = arguments[0];
		if ($ != null && $ != "") {
			for (var i = 1; i < arguments.length; i++) {
				var vas = new RegExp("\\{" + (i - 1) + "\\}", "gm");
				if (arguments[i] != null) {
					$ = $.replace(vas, arguments[i]);
				}
			}
		}
		return $;
	};
	Tools.sliceObject=function(o,s,n){
			if(o==null || o==undefined || o==""){
				return false;
			}
		   var newo={};
			for(var i=s;i< n;i++){
				newo['']=o[i];
			}
			return newo;
	}
	//关注
	
	
	$(function () {
		var Mycare = {};
		Mycare.listlen=0;
		Mycare.loop=0;
		canBottomNum=0;
		Mycare.li = '<li class="clearFix"><a href="/{0}">\
					<img class="fl" src="{1}" alt="{2}">\
					<span class="diamond fl sprite liverlevel-pic_liverlevel_{3}"></span>\
					<span class="name fl">{4}</a></span>\
					{5}\
					</li>';
		Mycare.lii =
			'<div class="row foLi"><a href="/{0}">\
				<img class="pull-left img-circle" src="{1}" alt="{2}">\
				<div class="pull-left">\
					<p class="name">{3}</p>\
				{4}\
			</div>\
			<div class="pull-left spriteLev liverlevel-pic_liverlevel_{5}"></div>\
			</a></div>';
	
	
		Mycare.init=function(){
			htm ="";
			Tools.getDate({
				url: '/rest/homeAnchors/followList.mt',
				data: {userId:currentUserId}
			}, function (data) {
				if (data != null) {
					$x=data.data;
					var  $listObj = $.extend(true,$x,data.data);
					$num=$listObj.length;
					$.each($listObj, function() {
						var _self = $(this)[0];
						if(_self.tj!=undefined && _self.Abc!=undefined =="11"){_self.nickname += "c"};
						if (_self.online == true) {
							htm += Tools.stringFormat(Mycare.lii,_self.roomNumber,_self.imagePrivate, _self.nickName, _self.nickName, "<p><span>"+Math.ceil(_self.onlineTime/600000)+"</span>分钟前开播</p>",_self.totalpoint);
						}else{
							htm += Tools.stringFormat(Mycare.lii,_self.roomNumber,_self.imagePrivate, _self.nickName, _self.nickName,'<p class="ynLiv">未开播</p>',_self.totalpoint);
						}
					})
					$(".follow .caption .boxx").html(htm);
	
					Mycare.listlen=$num*1;
					if(Mycare.listlen>5){
						canBottomNum = Math.floor((Mycare.listlen-1)/5);
						Mycare.addEvent();
						$(".follow .titD .xii").removeClass('glyphicon-menu-down-hover').addClass('glyphicon-menu-down');
					}
				}
			});
		};
	
		var canTop=false;
		var canBottom=false;
		// alert(Math.ceil(12/5));
	
	
		Mycare.addEvent=function(){
			var li_len=67;
			scrollerTop=0;
			scrollNum=0;
			function changeClose(name1){
				switch (name1){ //glyphicon-menu-up  glyphicon-menu-down
	
					case 'glyphicon-menu-down':
						$(".titD .xii").removeClass('glyphicon-menu-down').addClass('glyphicon-menu-down-hover');
						break;
					case 'glyphicon-menu-up':
						$(".titD .shh").removeClass('glyphicon-menu-up').addClass('glyphicon-menu-up-hover');
						break;
					case 'glyphicon-menu-up-hover':
						$(".titD .shh").removeClass('glyphicon-menu-up-hover').addClass('glyphicon-menu-up');
						break;
					case 'glyphicon-menu-down-hover':
						$(".titD .xii").removeClass('glyphicon-menu-down-hover').addClass('glyphicon-menu-down');
						break;
				}
			}
			function setScrollRange(range){
				scrollerTop = range;
			}
	
			$('.titD').on('click','.glyphicon-menu-down',function(){
				if(canBottomNum>0){
					$('.follow .caption .boxx').animate({top:scrollerTop -li_len * 5}, 300);
					canBottomNum --;
					scrollNum ++;
					setScrollRange(-scrollNum*290);
					if(canBottomNum <=0){
						changeClose('glyphicon-menu-down');
					}
					changeClose('glyphicon-menu-up-hover');
				}
			});
			$('.titD').on('click','.glyphicon-menu-up',function(){
				$('.follow .caption .boxx').animate({top:scrollerTop + li_len * 5}, 300);
				scrollNum--;
				canBottomNum++;
				setScrollRange(-scrollNum*290);
				if(scrollNum<=0){
					changeClose('glyphicon-menu-up');
				}
				changeClose('glyphicon-menu-down-hover');
			});
	
		}
		Mycare.init();
	
		Tools.getDate({
			url: '/rest/homeAnchors/ipView.mt',
			data: {userId:currentUserId}
		}, function (data) {
		});
	
	})
	
	$(function(){
	
		var ulList={
			"dayList":"/files/giftWeels.json", //主播周塝
	
			"weekList":"/files/giftMonth.json", //主播月
	
			"monthList":"/files/giftYear.json", //主播年榜
	
	
			"th_week":"/files/localTyrantDay.json",//土豪周
	
			"th_month":"/files/localTyrantMonth.json",//土豪月
	
			"th_year":"/files/localTyrantYear.json",//土豪年
	
	
			"hy_week":"/files/fansActive.json",//活跃周
	
			"hy_month":"/files/fansActive.json",//活跃月
	
			"hy_year":"/files/fansActive.json",//活跃年
	
	
			"anc_banner":"/files/banners.json",//banner
	
			"anc_hot":"/files/anchors.json",  //"/ajax/getLiveAnchors.php"+"?anc_type=hot"
	
			"anc_game":"/files/gameAnchors.json",//精彩推荐
	
			"anc_new":"/files/newAnchors.json" //"/ajax/getLiveAnchors.php"+"?anc_type=new"
	
		}
		var ht_rank='<li class="clearFix">\
				<span class="icon_shuzi_{0} sprite_top fl"></span>\
					<img class="rank_pho img-circle" src="{1}" alt="{2}">\
						{3}\
					<span class="diamond fl sprite liverlevel-pic_liverlevel_{4}"></span>\
					<a href="{5}"><span class="name fl">{6}</span> </a>\
				</li>';
		var ht_rans='<div class="row foLi"><a href="{0}">\
						<img class="pull-left img-circle" src="{1}" alt="{2}"/>\
					<div class="pull-left">\
						<p class="name">{3}</p>\
					</div>\
					<div class="pull-left spriteLev liverlevel-pic_liverlevel_{4}"></div>\
					</a></div>';
		function parse_to_board(listid,url,type){
			Tools.getJson({
				url: url,
				data: ""
			}, function (data) {
				if(data == "" || data ==undefined){
					return 0;
				}
				data=JSON.parse(data);
	
				if (data.data != null && data.data.length > 0) {
					var s_ht3;
					var roomnumber="javascript:;";
					$.each(data.data, function(k, v) {
						if(type == "anchor"){
							roomnumber = v.roomNumber;
						}
						if(k==0){
							s_ht3 = Tools.stringFormat(ht_rans,roomnumber,v.avatar, v.nickname, v.nickname,v.totalpoint);
						}else{
							s_ht3 = Tools.stringFormat(ht_rans,roomnumber,v.avatar, v.nickname, v.nickname,v.totalpoint);
						}
						$("#"+listid+"").append(s_ht3);
						if(k==7){return false;}
					})
				}
			});
		}
	
		parse_to_board("dayList",ulList.dayList,"anchor");
		parse_to_board("weekList",ulList.weekList,"anchor");
		parse_to_board("monthList",ulList.monthList,"anchor");
	
		parse_to_board("th_week",ulList.th_week);
		parse_to_board("th_month",ulList.th_month);
		parse_to_board("th_year",ulList.th_year);
	
		parse_to_board("hy_week",ulList.hy_week);
		parse_to_board("hy_month",ulList.hy_month);
		parse_to_board("hy_year",ulList.hy_year);
	
		var compiliter={
			bightml:
				'<a href="{0}" class="thumbnail firHot">\
				<img src="{1}?w=240&h=360" alt="{2}"/>\
				{3}\
					<div class="firT thumbnail clearfix">\
						<div class="pull-left sprite_l pic_liverlevel_L_{4}"></div>\
						<p class="text-center">人数：<span>{5}</span></p>\
						 </div>\
					<div class="firB ellipsis">\
						<p class="colorPin f16">{6}</p>\
						<p class="clearfix f12">\
							<span class="glyphicon glyphicon-user"></span>\
							<span>{7}</span>\
							<span class="glyphicon glyphicon-map-marker"></span>\
							<span>{8}</span>\
						</p>\
					</div>\
					<div class="shadow thumbnail"></div>\
					<div class="playBtn"></div></a>',
			bightmlNew:
				'<a href="{0}" class="thumbnail firHot">\
				<img src="{1}?w=240&h=360" alt="{2}"/>\
					<div class="firB ellipsis">\
						<p class="colorPin f16">{3}</p>\
						<p class="clearfix f12">\
							<span class="glyphicon glyphicon-eye-open"></span>\
							<span>{4}</span>\
							<span class="glyphicon glyphicon-fire"></span>\
							<span>{5}</span>\
						</p>\
					</div>\
					<div class="shadow thumbnail"></div>\
					<div class="playBtn"></div></a>',
	
			lithtml:
				'<div class="{0}">\
						<a href="{1}" class="hotItem thumbnail">\
						<img src="{2}?w=110&h=165" alt="{3}"/>\
                        <div class="sprite_s pic_liverlevel_S_{4}"></div>\
                        {5}\
							<div class="hotT thumbnail">\
								<p class="text-center">人数：<span>{6}</span></p>\
							</div>\
							<div class="hotB">\
								<div class="colorPin f14 ellipsis">{7}</div>\
								<p class="f12">\
									<span>{8}</span>\
								</p>\
							</div>\
							<div class="playBtn"></div>\
						</a>\
						</div>',
			lithtmlNew:
				'<div class="{0}">\
						<a href="{1}" class="hotItem thumbnail">\
							<img src="{2}?w=110&h=165" alt="{3}"/>\
							<div class="hotB">\
								<div class="colorPin f14 ellipsis">{4}</div>\
								<p class="f12 ellipsis">\
									<span class="glyphicon glyphicon-eye-open"></span>\
									<span>{5}</span>\
								</p>\
							</div>\
						</a>\
				</div>',
	
			sonh:
				'<a href="#" class="hotItem thumbnail">\
				<img src="images/girl02.png" alt="">\
				<span class="glyphicon glyphicon-stats"></span>\
				<div class="hotT thumbnail">\
				<div class=""></div>\
				<p class="text-center">人数：<span>268</span></p>\
				</div>\
					<div class="hotB">\
						<span class="colorPin f14">小蜜桃sasa</span>\
						<p class="f12">\
							<span>30</span>\
							<span>分钟之前</span>\
						</p>\
					</div>\
					<div class="playBtn"></div>\
				</a>',
			gameHtml:
				' <div class="col-lg-3 col-sm-3 col-xs-4">\
					<a href="{0}" class="thumbnail">\
					<div class="recommImg thumbnail">\
						<img src="{1}?w=234&h=127" alt="{2}"/>\
						<div class="thumb-bar"></div>\
						<div class="shadow"></div>\
						<div class="playBtn"></div>\
					</div>\
					<div class="recommB">\
						<div class="clearfix">\
							<span class="color33 pull-left ellipsis">{3}</span>\
							<div class="color99 pull-right">\
								<span class="glyphicon glyphicon-eye-open"></span>\
								<span>{4}</span>\
							</div>\
						</div>\
						<p class="color99 ellipsis f12">{5}</p>\
					</div></a>\
					</div>\
			',
           
			toboard:function($level){
				var bk="white";
				if($level<5){
					bk="white";
				}else if($level>5 && $level <11){
					bk="blue";
				}else if($level>10 && $level <16){
					bk="size";
				}else if($level>15 && $level <21){
					bk="yellow";
				}else if($level>20 && $level <26){
					bk="orange";
				}else if($level>25 && $level <31){
					bk="black";
				}
				return bk;
			},
			totime:function(tm){
				if(!tm){
					return "未开播";
				}
				return Math.ceil(tm/60000)+"分钟前开播";
			},
			tolive:function(s,b){
				if(s == null){
					return '';
				}
				if(s !="0" || s != 0 ){
					if(b ==1){
						return '<span class="glyphicon glyphicon-stats"></span>';
					}
					else{
						return '<span class="iszb"></span>';
					}
				}else{
					return '';
				}
			}
		};
	
		compiliter.parseAnchors = function(url,type){
			Tools.getJson({
				url: ulList.anc_hot,
				data: ""
			}, function (data) {
				if(data == "" || data ==undefined){
					return 0;
				}
				try{
					var datas=JSON.parse(data);
					//alert(datas);
				}catch(e){
					var datas="";
					return false;
				}
				var $h="hotList";
				if (datas != null && datas.length > 0) {
						try{
							var row1=datas.slice(0,13);
							var row2=datas.slice(5,15);
							var row3=datas.slice(15,21);
							var row4=datas.slice(17,25);
						}
						catch(e){
							alert(e);
						}
						
						
						var s_big,s_sml;
						var bwrap = $('<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6"></div>');
						var swrap = $('<div class="col-lg-9 col-md-8 col-sm-8 col-xs-6"></div>');
						var srow = $('<div class="row"></div>');
						$.each(row1, function(k, v) {
							if(v.image =="" || v.image == null ){
								v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
							}
							if(k==0){
								s_big = Tools.stringFormat(compiliter.bightml,v.roomNumber,v.image,v.nickName,compiliter.tolive(v.online,1),v.totalpoint, v.numbers,v.nickName,compiliter.totime(v.onlineTime), v.city);
								bwrap.append(s_big);
							}else if(k>0 && k<=4){
								s_sml = Tools.stringFormat(compiliter.lithtml,"col-lg-2 col-md-3 col-sm-4 col-xs-6",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}else if(k>4 && k <=6){
								s_sml = Tools.stringFormat(compiliter.lithtml,"col-lg-2 col-md-3 col-sm-4 hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}else if(k>6 && k <=8){
								s_sml = Tools.stringFormat(compiliter.lithtml,"col-lg-2 col-md-3 hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}else if(k>8 && k <=12){
								s_sml = Tools.stringFormat(compiliter.lithtml,"col-lg-2 hidden-md hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}
							srow.append(s_sml);
	
						})
						swrap.append(srow);
						$("#"+$h+" .hrow1").append(bwrap);
						$("#"+$h+" .hrow1").append(swrap);
	
	
						var s2wrap="";
						$.each(row2, function(k, v) {
							if(v.image =="" || v.image == null ){
								v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
							}

							if(k<=1){
								s2wrap +=Tools.stringFormat(compiliter.lithtml,"hidden-lg hidden-md hidden-sm col-xs-3",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}else if(k>1 && k <=3){
								s2wrap +=Tools.stringFormat(compiliter.lithtml,"hidden-lg hidden-md col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}else if(k>3 && k <=7){
								s2wrap +=Tools.stringFormat(compiliter.lithtml,"hidden-lg col-md-2 col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}else{
	
								s2wrap +=Tools.stringFormat(compiliter.lithtml,"hidden-lg col-md-2 col-sm-3 hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime));
							}
						})
	
						$("#"+$h+" .hrow2").append(s2wrap);
	
	
						var s3wrap ="";
						var s3img =
							'<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">\
								<a href="#" class="thumbnail">\
									<img src="/images/kedo/hotImg.png" alt="">\
								</a>\
							</div>';
	
						$.each(row3, function(k, v) {
							if(v.image =="" || v.image == null ){
								v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
							}
							if(k<=1){
								s3wrap += Tools.stringFormat(compiliter.lithtml,"col-lg-2 col-md-3 col-sm-4 col-xs-6",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else if(k == 2){
								s3wrap += Tools.stringFormat(compiliter.lithtml,"col-lg-2 col-md-3 col-sm-4 hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else if(k==3){
								s3wrap += Tools.stringFormat(compiliter.lithtml,"col-lg-2 col-md-3 hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else{
								s3wrap += Tools.stringFormat(compiliter.lithtml,"col-lg-2 hidden-md hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}
						})
						var s3html = $('<div class="col-lg-9 col-md-8 col-sm-8 col-xs-6"></div>');
						s3html.append($('<div class="row"></div>').append(s3wrap));
						$("#"+$h+" .hrow3").append(s3img);
						$("#"+$h+" .hrow3").append(s3html);
						
	
						var s4wrap="";
						$.each(row4, function (k,v) {
							if(v.image =="" || v.image == null ){
								v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
							}
							if(k==0){
								s4wrap += Tools.stringFormat(compiliter.lithtml,"hidden-lg hidden-md hidden-sm col-xs-3",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else if(k == 1){
								s4wrap += Tools.stringFormat(compiliter.lithtml,"hidden-lg hidden-md col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else if(k>1 || k<=3){
								s4wrap += Tools.stringFormat(compiliter.lithtml,"hidden-lg col-md-2 col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else if(k==4){
								s4wrap += Tools.stringFormat(compiliter.lithtml,"hidden-lg col-md-2 col-sm-3 hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}else{
								s4wrap += Tools.stringFormat(compiliter.lithtml,"hidden-lg col-md-2 hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.totalpoint,compiliter.tolive(v.online,1),v.numbers,v.nickName,compiliter.totime(v.onlineTime))
							}
						});
						$("#"+$h+" .hrow4").append(s4wrap);     
				}
				
			});
		}
	
	   
		compiliter.parseNewAnchors = function(url,type){
			Tools.getJson({
				url: ulList.anc_new,
				data: ""
			}, function (data) {
				if(data == "" || data ==undefined){
					return 0;
				}
	
				try{
					var dealData=JSON.parse(data);
				}catch(e){
					var datas="";
					return false;
				}
	
	
				var $new="newList";
				if (dealData != null && dealData.length > 0) {
					
	
					var row1=dealData.slice(0,13);
					var row2=dealData.slice(5,15);
					var row3=dealData.slice(15,21);
					var row4=dealData.slice(17,25);
					var rowAdd=dealData.slice(25,27);
	
					var s_big,s_sml;
					var bwrap = $('<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6"></div>');
					var swrap = $('<div class="col-lg-9 col-md-8 col-sm-8 col-xs-6"></div>');
					var srow = $('<div class="row"></div>');
					$.each(row1, function(k, v) {
						if(v.image =="" || v.image == null ){
							v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
						}
						if(k==0){
							s_big = Tools.stringFormat(compiliter.bightmlNew,v.roomNumber,v.image,v.nickName, v.nickName,v.numbers,compiliter.totime(v.onlineTime));
							bwrap.append(s_big);
						}else if(k>0 && k<=4){
							s_sml = Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 col-md-3 col-sm-4 col-xs-6",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}else if(k>4 && k <=6){
							s_sml = Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 col-md-3 col-sm-4 hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}else if(k>6 && k <=8){
							s_sml = Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 col-md-3 hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}else if(k>8 && k <=12){
							s_sml = Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 hidden-md hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}
						srow.append(s_sml);
					})
					swrap.append(srow);
					$("#"+$new+" .hrow1").append(bwrap);
					$("#"+$new+" .hrow1").append(swrap);
	
					var s2wrap="";
					$.each(row2, function(k, v) {
						if(v.image =="" || v.image == null ){
							v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
						}
	
						if(k<=1){
							s2wrap +=Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg hidden-md hidden-sm col-xs-3",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}else if(k>1 && k <=3){
							s2wrap +=Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg hidden-md col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}else if(k>3 && k <=7){
							s2wrap +=Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg col-md-2 col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}else if(k>7 && k <=9){
							s2wrap +=Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg col-md-2 col-sm-3 hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers);
						}
					})
	
					$("#"+$new+" .hrow2").append(s2wrap);
	
					var s3wrap ="";
					var s3img ="";
					$.each(rowAdd,function(k,v){
						if(v.image =="" || v.image == null ){
							v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
						}
						if(k==0){
							s3img += Tools.stringFormat(compiliter.lithtmlNew,"col-lg-6 col-md-3 col-sm-4 col-xs-6",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else if(k==1){
							s3img += Tools.stringFormat(compiliter.lithtmlNew,"col-lg-6 col-md-3 col-sm-4 col-xs-6",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}
					})
	
					$.each(row3, function(k, v) {
						if(v.image =="" || v.image == null ){
							v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
						}
						
						if(k<=1){
							s3wrap += Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 col-md-3 col-sm-4 col-xs-6",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else if(k == 2){
							s3wrap += Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 col-md-3 col-sm-4 hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else if(k==3){
							s3wrap += Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 col-md-3 hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else{
							s3wrap += Tools.stringFormat(compiliter.lithtmlNew,"col-lg-2 hidden-md hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}
					})
					var s3html = $('<div class="col-lg-9 hidden-md hidden-sm col-xs-6"></div>');
					var s3htmlAdd = $('<div class="col-lg-3 hidden-md hidden-sm col-xs-6"></div>');
					s3htmlAdd.append(s3img);
					s3html.append($('<div class="row"></div>').append(s3wrap));
					$("#"+$new+" .hrow3").append(s3htmlAdd);
					$("#"+$new+" .hrow3").append(s3html);
						
					var s4wrap="";
					$.each(row4, function (k,v) {
						if(v.image =="" || v.image == null ){
							v.image ="http://images.181show.com/c32caba0b2bb669870247e21125c6d16";
						}
						if(k==0){
							s4wrap += Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg hidden-md hidden-sm col-xs-3",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else if(k == 1){
							s4wrap += Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg hidden-md col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else if(k>1 || k<=3){
							s4wrap += Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg col-md-2 col-sm-3 col-xs-3",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else if(k==4){
							s4wrap += Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg col-md-2 col-sm-3 hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}else{
							s4wrap += Tools.stringFormat(compiliter.lithtmlNew,"hidden-lg col-md-2 hidden-sm hidden-xs",v.roomNumber,v.image, v.nickName,v.nickName,v.numbers)
						}
					});
					$("#"+$new+" .hrow4").append(s4wrap);
					}
				   
			});
		}
	
		compiliter.parseAnchors(ulList.anc_hot,"hot");
		compiliter.parseNewAnchors(ulList.anc_new,"new");
		compiliter.parseGame=function(){
			Tools.getJson({
				url: ulList.anc_game,
				data: ""
			}, function (data) {
				if(data == "" || data ==undefined){
					return 0;
				}
				try
				{
					datas=JSON.parse(data);
				}
				catch (e)
				{
					datas="";
					return false;
				}
				var li="";
				if (datas != null && datas.length > 0) {
					$.each(datas, function(k, v) {
						li += Tools.stringFormat(compiliter.gameHtml,v.roomNumber,v.image, v.nickName, v.nickName,v.numbers,"","");
					})
					$("#gameAnchors").append(li);
				}
			});
		}();
		compiliter.parseBanner=function(){
			Tools.getJson({
				url: ulList.anc_banner,
				data: ""
			}, function (data) {
				if(data == "" || data ==undefined){
					return 0;
				}
				datas=JSON.parse(data.json);
				var item="";
				var lo="";
	            
				if (datas != null && datas.length > 0) {
					$.each(datas, function(k, v) {
						if(v.url !=''){
                            item+='<div class="item"><a href="'+v.url+'"><img data-src="holder.js/1128x320/auto/#777:#777" alt="900x500" src="'+v.image+'" data-holder-rendered="true"/></a></div>';
						}else{
                            item+='<div class="item"><a href="'+v.url+'"><img data-src="holder.js/1128x320/auto/#777:#777" alt="900x500" src="'+v.image+'" data-holder-rendered="true"/></a></div>';
                            //item+='<div class="item"><img data-src="holder.js/1128x320/auto/#777:#777" alt="900x500" src="'++v.image'" data-holder-rendered="true"/></div>';
						}
						if(k==0){
                            lo='<li data-target="#carousel-example-captions" data-slide-to="'+k+'" class="active"></li>';
						}else{
                            lo+='<li data-target="#carousel-example-captions" data-slide-to="'+k+'" class=""></li>';
						}
					})
					$(".carousel-inner").append(item);
					$(".carousel-indicators").append(lo);
				}
			});
		}();
	
	
	})

	//c3转化成js
	var $changeWid=$("#carousel-example-captions");
	var $doneWid=$("#carousel-example-captions .thumb-bar")
	$changeWid.hover(function(){
		$doneWid.css("width","100%");
	},function(){
		$doneWid.css("width","0");
	});
	

})