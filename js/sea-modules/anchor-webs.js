define(function(require, exports, module) {
	require('jquery');
	require('socket');
	var Map = require('map');
	var cons = require("cons");
	var lvs = require("./anchor-live");
	var Tools = require('./anchor-tools');
	var wcall = require('./anchor-call');
	var gift = require("./anchor-gift");
	var guards = require("./anchor-guard");
	var hall = require("./anchor-hall");
	var chat = require("./anchor-chat");
	var login = require("./anchor-login");
	var task = require("./anchor-task");
	var anchor = require("./anchor-anchor");
	var song = require("./anchor-songs");
	var setting = require("./anchor-setting");
	var swf = require("./anchor-swf");
	var list = require("./anchor-list");
	var face = require("./anchor-face");
	var backLoad = require("./anchor-backLoad");
	var pet = require("./anchor-pet");
	var treasureBox = require("./anchor-treasureBox");
	var Webs = function(url) {
		this.flash = null;
		this.token = null;
		this.userId = null;
		this.login = false;
		this.weblg = false;
		this.effect = true;
		this.QQGame = false;
		this.anchorId = null;
		this.intervals = null;
		this.sendTsg = "ALL";
		this.sendUserId = null;
		this.map = new Map();
		this.cache = new Map();
		this.queue = new Map();
		this.events = new Map();
		this.modules = new Map();
		this.userList = new Map();
		this.roomNumber = null;
		this.newSendGiftID = "";
		this.url = url || "";
		this.isIE = !!window.ActiveXObject;
		this.ie6 = this.isIE && !window.XMLHttpRequest;
		this.ie7 = this.isIE && !this.ie6 && !this.ie8;
		this.ie8 = this.isIE && !!document.documentMode;
	}
	
	Webs.prototype = {
		init : function(data) {
			var base = this;
			base.addModules("lvs", lvs);
			base.addModules("pet", pet);
			base.addModules("swf", swf);
			base.addModules("song", song);
			base.addModules("face", face);
			base.addModules("list", list);
			base.addModules("hall", hall);
			base.addModules("chat", chat);
			base.addModules("gift", gift);
			base.addModules("login", login);
			base.addModules("guards", guards);
			base.addModules("anchor", anchor);
			base.addModules("setting", setting);
			base.addModules("backLoad", backLoad);
			base.addModules("treasureBox", treasureBox);
			base.cache.put("userInfo", false);
			base.cache.put("anchorInfo", false);
			base.roomNumber = data.roomNumber;
			for (var i = 0; i < base.modules.size(); i++) {
				var msg = base.modules.element(i);
				if (msg != null) {
					var call = msg.value;
					if (call != null && typeof call.init === "function") {
						call.init({
							webs : base,
							params : base.params,
							data : data
						});
					}
				}
			}
			window.onkeydown = function(event) {
				var keyCode;
				if (!event)
					event = window.event;
				if (document.all) {
					keyCode = event.keyCode;
				} else {
					keyCode = event.which;
				}
				if (keyCode == 116) {
					var resTime = Tools.getCookie(cons.LOCAL_TIMEREFRESH);
					if (resTime != null) {
						var btim = new Date().getTime();
						if (btim - resTime < (30 * 1000)) {
							event.keyCode = 0;
							event.returnValue = false;
						} else {
							resTime = new Date().getTime();
						}
					}
					Tools.setCookie(cons.LOCAL_TIMEREFRESH, resTime, 24 * 60 * 60);
				}
			};
			window.onbeforeunload = function() {
				if (base.userId == base.anchorId && base.sock != null) {
					var url = "/rest/site/begins.mt";
					var params = Tools.stringFormat("action=endShow&roomNumber={0}", base.roomNumber);
					$.ajax({
						url : url,
						type : "POST",
						data : params,
						cache : false,
						dataType : "json",
						async : false
					}).done(function(data) {
					});
				}
			}
		},
		agents : function() {
			return this.QQGame;
		},
		addModules : function(key, callModules) {
			this.modules.put(key, callModules);
		},
		loading : function(userId, token, room) {
			lvs.mo();
			var base = this;
			base.token = token;
			base.userId = userId;
			base.roomNumber = room;
			var url = "/rest/checkToken/checkTokenRoles.mt";
			var params = Tools.stringFormat("token={0}&userId={1}&roomNumber={2}", base.token, base.userId, base.roomNumber);
			$.ajax({
				type : "POST",
				url : url,
				data : params,
				cache : false,
				dataType : "json",
				async : false
			}).done(function(data) {
				var anb = false;
				var online = false;
				var anchors = false;
				var roomNumber = base.roomNumber;
				if (data.data != null && data.data.length > 0) {
					data.data.forEach(function(e) {
						if (e != null && e != "null") {
							switch (e.msgid) {
							case "ANCHORS_HANDINFO":
								anb = true;
								var args = jQuery.parseJSON(e.args);
								if (args.online)
									online = true;
								base.anchorId = args.userId;
								roomNumber = args.roomNumber;
								break;
							case "FLASH_CONFIG":
								var args = jQuery.parseJSON(e.args);
								base.flash = args.flash;
								base.weblg = args.weblog;
								base.params = args.roomparams;
								break;
							case "USERS_HANDINFO":
								var args = jQuery.parseJSON(e.args);
								if (args.isAnchor)
									anchors = true;
								break;
							default:
								break;
							}
						}
					});
				}
				if (anb) {
					if (base.userId != null && base.userId > 0)
						base.login = true;
					base.doit({
						roomNumber : roomNumber,
						anchors : anchors,
						online : online,
						messag : data.resultMessage,
						status : data.resultStatus
					});
					if (data.data != null && data.data.length > 0) {
						data.data.forEach(function(e) {
							if (e != null && e != "null") {
								var call = base.events.get(e.msgid);
								if (call != null) {
									call(e.args);
								}
							}
						});
					}
				}
			});
		},
		doit : function(data) {
			var base = this;
			base.init(data);
			if (data.status == 200) {
				base.addEventListeners();
				base.connect();
				base.sendWelcome();
				base.resconnect();
				for (var i = 0; i < base.modules.size(); i++) {
					var msg = base.modules.element(i);
					if (msg != null) {
						var call = msg.value;
						if (call != null && typeof call.socketAfter === "function") {
							call.socketAfter({
								webs : base,
								params : base.params,
								data : data
							});
						}
					}
				}
			}
		},
		weblog : function(msg) {
			if (eval(this.weblg)) {
				console.log(msg);
			}
		},
		restDoit : function() {
			this.connect();
			this.sendWelcome();
		},
		standby : function(data) {
		},
		close : function(data) {
			swf.close(data);
		},
		petPlayAction : function(data) {
			swf.petPlayAction(data);
		},
		loging : function() {
			login.showLoing();
		},
		liveClose : function(data) {
			self.location = "/html/100.html";
		},
		ntsRoom : function() {
			var base = this;
			var url = "/rest/site/nts.mt";
			var params = Tools.stringFormat("roomNumber={0}", base.roomNumber);
			$.ajax({
				url : url,
				type : "POST",
				data : params,
				cache : false,
				dataType : "json",
				async : false
			}).done(function(data) {
				if (data.resultStatus == 200 && data.data.roomNumber != null) {
					self.location = Tools.stringFormat("/{0}", data.data.roomNumber);
				}
			});
		},
		connect : function() {
			var base = this;
			var sbool = UIF.handler.cache.get(cons.USER_SOCKETIO);
			if (!sbool) {
				base.sock = io.connect(base.url + "/" + base.roomNumber);
				base.sock.on("connect", function(data) {
					if (data != null)
						console.log(data);
					if (base.queue.size() > 0) {
						var msgid = new Array();
						for (var i = 0; i < base.queue.size(); i++) {
							var msg = base.queue.element(0);
							msgid.push(msg.key);
							base.sock.emit("msg", msg.value);
						}
						for (var i = 0; i < msgid.length; i++) {
							var id = msgid[i];
							base.queue.remove(id);
						}
					}
				});
				base.sock.on("msg", function(data) {
					var length = data.args.length;
					if (data.length == length) {
						var call = base.map.get(data.msgid);
						if (call != null) {
							base.map.remove(data.msgid);
							call(data.args);
						}
						var call = base.events.get(data.msgid);
						if (call != null) {
							call(data.args);
						}
					}
				});
				UIF.handler.cache.put(cons.USER_SOCKETIO, true);
			}
		},
		agentSocket : function(msg) {
			var base = this;
			var url = "/rest/checkToken/nsocket.mt";
			var params = msg;
			$.ajax({
				url : url,
				type : "POST",
				data : params,
				cache : false,
				dataType : "json",
				async : false
			}).done(function(data) {
				if (data.resultStatus == 200) {
					base.weblog("agent socket message success!");
				}
			});
		},
		resconnect : function() {
			var base = this;
			if (base.userId == base.anchorId) {
				var interval = setInterval(function() {
					base.socketio();
				}, 1000 * 60 * 2);
			}
		},
		disconnect : function() {
			var base = this;
			if (base.sock != null)
				base.sock.disconnect();
			base.sock = null;
		},
		addEventListeners : function() {
			this.events.put("ANCHORS_STATUS", wcall.status);// 主播状态
			this.events.put("ANCHORS_CENSOR", wcall.censor);
			this.events.put("ANCHORS_NOTICE", wcall.anchorsNotice);
			this.events.put("ANCHORS_HANDINFO", wcall.anchorsHeadInfo);
			this.events.put("ANCHORS_LOCALNOTICE", wcall.anchorsLocalNotice);
			this.events.put("GUARD_LIST", wcall.guardList);
			this.events.put("MANUAL_NOTICE", wcall.comMsg);// 系统消息
			this.events.put("TASK_RESULTS", wcall.taskResults);// 任务完成通知
			this.events.put("USERS_HANDINFO", wcall.userInfo);// 用户信息
			this.events.put("USERS_VISITORS", wcall.userVisitors);// 游客进入
			this.events.put("USERS_SENDGIFTS", wcall.sendGifts);// 赠送礼物
			this.events.put("USERS_SENDUSERS", wcall.sendUsers);// 赠送礼物
			this.events.put("USERS_ROOMBANNED", wcall.roomBanned);// 禁止发言
			this.events.put("USERS_ROOMKICKOUT", wcall.roomKickOut);// 踢出房间
			this.events.put("USERS_ENTERSCARS", wcall.userEntersCars);// 进场特效
			this.events.put("USERS_SPEUPGRADES", wcall.upgrades);// 爵位升级
			this.events.put("CHATP2P_MESSAGE", wcall.chatP2PMessage);// 用户私聊内容
			this.events.put("CHATMSG_MESSAGE", wcall.chatMSGMessage);// 公共聊天内容
			this.events.put("CHATPRV_MESSAGE", wcall.chatPRVMessage);// 主播私聊内容
			this.events.put("CHATFLY_MESSAGE", wcall.chatFLYMessage);// 直播间飞屏内容
			this.events.put("CHATAFF_MESSAGE", wcall.chatAFFMessage);// 全站公告内容
			this.events.put("ANCHOR_PK", wcall.anchorPK);
			this.events.put("ANCHORS_AUTOPET", wcall.initPetData);// 主播pk
			this.events.put("ANCHORS_PET", wcall.updatePetData);// pet数据
			this.events.put("ANCHORS_PET_TELLBIRTH", wcall.petBirth);// 宠物出生
			this.events.put("GUARDS_MESSAGE", wcall.guardsMessage);// 守护通知
			this.events.put("ROOM_RUNWAY", wcall.Runway);// 全站跑道
		},
		sendMsg : function(msg, call, tags) {
			var base = this;
			if (msg == null)
				msg = {};
			msg["token"] = base.token;
			msg["userId"] = base.userId;
			msg["roomNumber"] = base.roomNumber;
			var $msg = {
				events : "msg",
				tags : tags,
				msgid : Tools.uuid(),
				args : encodeURI(JSON.stringify(msg))
			}
			base.map.put($msg.msgid, call);
			if (base.agents()) {
				if (base.sock.id != null)
					$msg.suid = base.sock.id;
				$msg.nsp = base.roomNumber;
				base.agentSocket($msg);
			} else {
				if (base.sock != null && base.sock.emit != null) {
					base.sock.emit("msg", $msg);
				} else {
					base.queue.put($msg.msgid, $msg);
				}
			}
		},
		sendWelcome : function(msg, call) {
			this.sendMsg(msg, call, "welcome");
		},
		sendTaskInit : function(msg, call) {
			this.sendMsg(msg, call, "taskinit");
		},
		sendTasking : function(msg, call) {
			/** 进行时任务 */
			this.sendMsg(msg, call, "tasking");
		},
		follow : function(msg, call) {
			/** 添加取消关注 */
			this.sendMsg(msg, call, "follow");
		},
        countingStar : function(msg, call) {
            /** 上推自动增加礼物 */
            this.sendMsg(msg, call, "countStar");
        },
		anchorInfo : function(msg, call) {
			/** 更新主播信息 */
			this.sendMsg(msg, call, "anchorInfo");
		},
		userInfo : function(msg, call) {
			/** 用户信息 */
			this.sendMsg(msg, call, "userInfo");
		},
		sendTaskGroups : function(msg, call) {
			/** 读取任务组 */
			this.sendMsg(msg, call, "taskGroups");
		},
		taskDetails : function(msg, call) {
			/** 读取任务详细 */
			msg["flag"] = "dosev";
			this.sendMsg(msg, call, "tasking");
		},
		signin : function(msg, call) {
			/** 每日签到任务 */
			msg["flag"] = "claim";
			this.sendMsg(msg, call, "tasking");
		},
		claimeLookLive : function(msg, call) {
			/** 直播任务奖励 */
			msg["flag"] = "claim";
			this.sendMsg(msg, call, "tasking");
		},
		deduction : function(msg, call) {
			/** 送礼扣费 */
			this.sendMsg(msg, call, "deduction");
		},
		saveSongs : function(msg, call) {
			/** 存储点歌列表 */
			this.sendMsg(msg, call, "songsList");
		},
		delSongs : function(msg, call) {
			/** 删除点歌列表歌曲 */
			this.sendMsg(msg, call, "delSongs");
		},
		songsListDetails : function(msg, call) {
			this.sendMsg(msg, call, "songsDetails");
		},
		userOnline : function(msg, call) {
			/** 房间内在线用户 */
			this.sendMsg(msg, call, "userOnline");
		},
		sendGuard : function(msg, call) {
			/** 房间守护列表 */
			this.sendMsg(msg, call, "guard");
		},
		sendAddGuard : function(msg, call) {
			/** 添加房间守护 */
			this.sendMsg(msg, call, "addGuard");
		},
		sendChatP2P : function(msg, call) {
			/** 用户私聊 */
			this.sendMsg(msg, call, "chatp2p");
		},
		sendChatALL : function(msg, call) {
			/** 发送聊天内容 */
			this.sendMsg(msg, call, "chatmsg");
		},
		sendChatFLY : function(msg, call) {
			/** 发送直播间飞屏 */
			this.sendMsg(msg, call, "chatfly");
		},
		sendChatGLO : function(msg, call) {
			/** 发送全站公告 */
			this.sendMsg(msg, call, "chataff");
		},
		sendChatPRV : function(msg, call) {
			/** 发送对谁聊天 */
			this.sendMsg(msg, call, "chatprv");
		},
		weekNotice : function(msg, call) {
			/** 获取周榜 */
			this.sendMsg(msg, call, "weekNotice");
		},
		cohesion : function(msg, call) {
			/** 获取亲密榜 */
			this.sendMsg(msg, call, "cohesion");
		},
		sendNotice : function(msg, call) {
			/** 主播设置公告 */
			this.sendMsg(msg, call, "notice");
		},
		getNotice : function(msg, call) {
			/** 主播设置公告时 先获取公告 */
			this.sendMsg(msg, call, "editNotice");
		},
		getRoomMan : function(msg, call) {
			/** 主播设置管理 先获取管理列表 */
			this.sendMsg(msg, call, "roomMan");
		},
		getUser : function(msg, call) {
			/** 主播设置管理 先查找管理列表 */
			this.sendMsg(msg, call, "editUser");
		},
		roomManagers : function(msg, call) {
			/** 主播添加管理 */
			this.sendMsg(msg, call, "addRoomMan");
		},
		chooseSong : function(msg, call) {
			/** 用户点歌 */
			this.sendMsg(msg, call, "chooseSong");
		},
		blacks : function(msg, call) {
			/** 权限业务 */
			this.sendMsg(msg, call, "blacks");
		},
		upgrade : function(msg, call) {
			/** 爵位升级 */
			this.sendMsg(msg, call, "upgrades");
		},
		sendUserGift : function(msg, call) {
			/** 增送用户礼物 */
			this.sendMsg(msg, call, "sendUserGift");
		},
		censor : function(msg, call) {
			/** 查封直播间 */
			this.sendMsg(msg, call, "censor");
		},
		sendPetInit : function(msg, call) {
			/** 初始化宠物信息 */
			this.sendMsg(msg, call, "anchorsAutoPet");
		},
		changePetName : function(msg, call) {
			/** 修改宠物名字 */
			this.sendMsg(msg, call, "anchorsPetChangeName");
		},
		sendTreasureBoxInit : function(msg, call) {
			/** 初始化宝箱信息 */
			this.sendMsg(msg, call, "chestBoxGet");
		},
		openTreasureBox : function(msg, call) {
			/** 领取宝箱 */
			this.sendMsg(msg, call, "openChestBox");
		},
		socketio : function(msg, call) {
			this.sendMsg(msg, call, "socketio");
		}
	}
	module.exports = Webs;
});
define("map", [], function(require, exports, module) {
	var Map = function() {
		this.elements = new Array();
	}
	Map.prototype = {
		size : function() {
			return this.elements.length;
		},
		isEmpty : function() {
			return (this.elements.length < 1);
		},
		clear : function() {
			this.elements = new Array();
		},
		put : function($key, $value) {
			if (this.containsKey($key)) {
				this.remove($key);
			}
			this.elements.push({
				key : $key,
				value : $value
			});
		},
		remove : function($key) {
			try {
				for (var i = 0; this.elements.length; i++) {
					if (this.elements[i].key == $key) {
						this.elements.splice(i, 1);
						return true;
					}
				}
			} catch (e) {
				return false;
			}
			return false;
		},
		get : function($key) {
			try {
				for (var i = 0; this.elements.length; i++) {
					if (this.elements[i].key == $key) {
						return this.elements[i].value;
					}
				}
			} catch (e) {
				return null;
			}
		},
		element : function(index) {
			if (index < 0 || index >= this.elements.length) {
				return null;
			}
			return this.elements[index];
		},
		containsKey : function($key) {
			try {
				for (i = 0; i < this.elements.length; i++) {
					if (this.elements[i].key == $key) {
						return true;
					}
				}
			} catch (e) {
				return false;
			}
			return false;
		},
		containsValue : function($value) {
			try {
				for (i = 0; i < this.elements.length; i++) {
					if (this.elements[i].value == $value) {
						return true;
					}
				}
			} catch (e) {
				return false;
			}
			return false;
		},
		values : function() {
			var arr = new Array();
			for (i = 0; i < this.elements.length; i++) {
				arr.push(this.elements[i].value);
			}
			return arr;
		},
		keys : function() {
			var arr = new Array();
			for (i = 0; i < this.elements.length; i++) {
				arr.push(this.elements[i].key);
			}
			return arr;
		}
	}
	module.exports = Map;
});

define("cons", [], function(require, exports, module) {
	module.exports = {
		USER_SOCKETIO : "user_socketio",
		USER_HEADIMAG : "user_headimag",
		USER_HEADROLES : "user_headroles",
		USER_HEADINFOS : "user_headinfos",
		USER_SENDDANMU : "user_sendDanmu",
		USER_SENDNICE : "user_sendNice",
		GIFT_ENTERCARS : "gift_enterCars",
		GIFT_TRANSTIME : "gift_transTime",
		GIFT_TIMENUMBERS : "gift_timeNumbers",
		GIFT_TIMEUUIDS : "gift_timeuuids",
		GIFT_TIMEGIFTIDS : "gift_timeGiftIds",
		ANCHOR_HEADINFOS : "anchor_headinfos",
		GIFT_TIMEGNUMBERS : "gift_timeGNumbers",
		LOCAL_TIMEREFRESH : "loacl_timeRefresh",
		LOCAL_TIMESENDMSG : "loacl_timeSendMsg",
		LOCAL_TIMENICES : "loacl_timeNices"
	}
});
