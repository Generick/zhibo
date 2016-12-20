define(function(require, exports, module) {
	var cons = require("cons");
	var gift = require("./anchor-gift");
	var Tools = require("./anchor-tools");
	module.exports = {
		data : {},
		upgrade : function(data) {
			if (data.upgrade == 1) {
				self.location = "/html/120.html";
			}
		},
		meters : function(data) {
			this.data = data;
			this.init();
            this.menus();
            this.startMenu();
		},
        startMenu:function(){
            $(".guard-area").draggable({containment:"parent",stop:function(){
                var st = $(".guard-area").attr("style");
                UIF.setCookie("guard-area",st,60 * 24 * 60);
            }});
            $(".guard-area").resizable({alsoResize:".guard-main",minHeight:150,minWidth:208,stop:function(){
                var st = $(".guard-area").attr("style");
                UIF.setCookie("guard-area",st,60 * 24 * 60);
            }});

            $(".rank-area").draggable({containment:"parent",stop:function(){
                var st = $(".rank-area").attr("style");
                UIF.setCookie("rank-area",st,60 * 24 * 60);
            }});
            $(".rank-area").resizable({alsoResize:".rk-con1,.rk-con2,.rk-con3",minHeight:150,minWidth:208,stop:function(){
                var st = $(".rank-area").attr("style");
                UIF.setCookie("rank-area",st,60 * 24 * 60);
            }});

            $(".gift-record").draggable({containment:"parent", cancel:"#span",stop:function(){
                var st = $(".gift-record").attr("style");
                UIF.setCookie("gift-record",st,60 * 24 * 60);
            }});
            $(".gift-record").resizable({alsoResize:".gr-main",minHeight:150,minWidth:208,stop:function(){
                var st = $(".gift-record").attr("style");
                UIF.setCookie("gift-record",st,60 * 24 * 60);
            }});

            $(".visitant-record").draggable({containment:"parent", cancel:"#span",stop:function(){
                var st = $(".visitant-record").attr("style");
                UIF.setCookie("visitant-record",st,60 * 24 * 60);
            }});
            $(".visitant-record").resizable({alsoResize:".vr-main",minHeight:150,minWidth:208,stop:function(){
                var st = $(".visitant-record").attr("style");
                UIF.setCookie("visitant-record",st,60 * 24 * 60);
            }});
            $(".chat-area").draggable({containment:"parent",cancel:".hrr,input",stop:function(){
                var st = $(".chat-area").attr("style");
                UIF.setCookie("chat-area",st,60 * 24 * 60);
            }});
            $(".chat-area").resizable({alsoResize:".cr-body,#msgContent",minHeight:530,minWidth:340,stop:function(){
                var st = $(".chat-area").attr("style");
                UIF.setCookie("chat-area",st,60 * 24 * 60);
            }});
            $( ".chat-area" ).on( "resizestop", function( event, ui ) {
                $("#nano-pubChatList").nanoScroller();
                $("#nano-pubChatList").nanoScroller({ scroll: 'bottom' });
            } );
        },
        menus :function(){
            var base = this;
            var Map = require('map');
            var listMenus = new Map();
            listMenus.put("sw-guard","guard-area");
            listMenus.put("sw-chat","chat-area");
            listMenus.put("sw-record","gift-record");
            listMenus.put("sw-rank","rank-area");
            listMenus.put("sw-vip","visitant-record");

            for (var i = 0; i < listMenus.size(); i++) {
                var msg = listMenus.elements[i];
                if (msg != null) {
                    base.swc(msg.key,msg.value);
                    var ck = Tools.getCookie(msg.key + "-cook");
                    var ock = Tools.getCookie(msg.value);
                    if(ock != null){
                        $("."+msg.value).attr("style",ock);
                    }
                    if(ck != null && ck == 1){
                        $("#"+msg.key).removeClass(msg.key).addClass(msg.key + "-hover");
                        $('.'+msg.value).hide();
                    }else{
                       $('.'+msg.value).show();
                    }
                }
            }

        },
        swc:function(buttons,area){
            $(".switch-area").on("click", "#" + buttons + "", function () {
                if (!UIF.handler.login) {
                    UIF.handler.loging();
                    return;
                }
                Tools.setCookie(buttons + "-cook", 1, 60 * 24 * 60);
                $("." + area + "").toggle();
                if ($("." + area + "").is(":hidden")) {
                    $(this).addClass(buttons + "-hover").removeClass(buttons);
                } else {
                    Tools.setCookie(buttons + "-cook", 0, 60 * 24 * 60);
                    $(this).addClass(buttons).removeClass(buttons + "-hover");
                }
            })
        },
		init : function() {
			var base = this;
			$("#sendChatBtn").removeAttr("disabled");
			$("#msgContent").removeAttr("disabled");
			base.container = $(".nav-left .nl-login .main-title .infoBox");
			base.container2 = $(".newGifts .portraits");
			base.container.find(".kb").text(Tools.nreplace(base.data.coins));
			base.container.find(".mtname").text(decodeURI(base.data.nickname));
			base.container.find(".mt-inner").width(base.data.sppes + "%");
			base.container.find(".mtlevel").html('<span class="sprite consumelevel-pic_consumelevel_' + base.data.splev + '"></span>');
			if (base.data.actlev != null && base.data.actlev != "")
				base.container2.find(".circleLevel").addClass(base.data.actimg);
			if (UIF.radials != undefined && UIF.radials != null) {
				UIF.radials.value(Number(base.data.actpes));
			}
			if (base.data.packs != null && base.data.packs.length > 0) {
				base.data.packs = jQuery.parseJSON(base.data.packs);
				if (base.data.packs.gift != null && base.data.packs.gift.length > 0) {
					var $gift = base.data.packs.gift;
					for (var i = 0; i < $gift.length; i++) {
						if ($gift[i].num > 0) {
							$("#giftList28 ." + $gift[i].giftId).removeClass("hideli");
						}
						$("#giftList28 ." + $gift[i].giftId).attr("giftNum", $gift[i].num);
					}
				}
				if (base.data.packs != null && base.data.packs.isread != null &&  base.data.packs.isread == 1 && base.data.packs.gift.length > 0) {
					$(".giftHeader span:last").addClass('redot');
				}
				$("#giftList28 ." + base.data.packs.giftId).attr("giftNum", base.data.packs.num);
			}
            if(base.data.giftStar != null){
                var giftStar = base.data.giftStar;
                UIF.handler.isAdd=true;
                Tools.setCookie("fi_num",giftStar.star,86400);
                if($(".giftLists ul:first #gift"+giftStar.giftId+"").find(".first-nus").length >0){
                    $(".giftLists ul:first #gift"+giftStar.giftId+"").find(".first-nus").text(giftStar.star);
                }else{
                    $(".giftLists ul:first #gift"+giftStar.giftId+"").append('<span class="first-nus">' + giftStar.star + '</span>');
                }
                $(".giftLists ul:first #gift"+giftStar.giftId+"").addClass('fi');

            }
			$("#closing").hide();
			if (base.data.roles != null && base.data.roles.length > 0) {
				var $roles = jQuery.parseJSON(base.data.roles);
				if (Tools.arrayContains($roles, 100)) {
					$("#closing").show()
				}
				if (Tools.arrayContains($roles, 101)) {
					$("#sendChatBtn").attr("disabled", true);
					$("#msgContent").attr("disabled", true);
				}
			}
			if (base.data.isAnchor) {
                var set_html='<div class="setting" id="setting">设置</div>';
                $('.live-info').append(set_html);
				$(".self-care").hide();
			}
			if (base.data.isFollows) {
				$(".followout").show();
				$(".followme").hide();
			}
			if (base.data.levs != null && base.data.levs.length > 0) {
				UIF.handler.cache.remove(cons.USER_HEADIMAG);
				UIF.handler.cache.put(cons.USER_HEADIMAG, base.data.levs);
			}
			if (base.data.roles != null && base.data.roles.length > 0) {
				UIF.handler.cache.remove(cons.USER_HEADROLES);
				UIF.handler.cache.put(cons.USER_HEADROLES, base.data.roles);
			}
			var headInfo = UIF.handler.cache.get(cons.USER_HEADINFOS);
			var anchInfo = UIF.handler.cache.get(cons.ANCHOR_HEADINFOS);
			if (headInfo != null) {
				if (headInfo.actlev != null && base.data.actlev != null && base.data.actlev > headInfo.actlev) {
					gift.actGift({
						himage : base.data.himage,
						actlev : base.data.actlev
					});
				}
				if (headInfo.cohesion != null && base.data.cohesion != null && base.data.cohesion > headInfo.cohesion) {
					gift.cohGift({
						himage : base.data.himage,
						cohlevel : base.data.cohesion,
						anhimg : anchInfo.avatar
					});
				}
				if (headInfo.splev != null && base.data.splev != null && base.data.splev >= 6 && base.data.splev > headInfo.splev) {
					UIF.handler.upgrade({
						nickname : base.data.nickname,
						splev : base.data.splev,
						actions : "upgrade"
					}, function(data) {
					});
				}
			}
			UIF.handler.cache.remove(cons.USER_HEADINFOS);
			UIF.handler.cache.put(cons.USER_HEADINFOS, base.data);
		}
	}
});
