define(function(require, exports, module) {
	var swf = require("./anchor-swf");
	var Tools = require("./anchor-tools");
	var UserData = require("./anchor-user");
	module.exports = {
		CONST_MAXCOUNT : 3,//最大可领取次数
		CONST_GAPARRAY : [5 * 60, 15 * 60, 30 * 60],
		CONST_REACHMAX : "今日宝箱已经领取完毕",
		CONST_TIMELIMIT  : " 宝箱冷却中",
		CONST_LEFTTIME : "剩余{0}",
		CONST_COULDLINGQU : "点击领取",
		current_count : 0,
		timetick : 0,
		timetick_timeout : 0,
		
		init : function(){
			this.initView();
			this.initInteractions();
			this.test();
		},
		
		initView : function(){
			$("#treasureBox_div").hide();
			$("#treasureBox_reward_div").hide();
		},
		
		initInteractions : function(){
			var _this = this;
			$("#treasureBox_clickRect").click(function(e){
				_this.openTreasureBox();
			})
			
			$("#treasureBox_reward_confirm").click(function(e){
				_this.hideTreasureBox_reward();
			})
		},
		
		initTreasureBoxData : function(data){
			this.updateBoxShow();
		},
		
		updateBoxShow : function(){
			if(this.checkIfReachMax()){
				this.hideTreasureBox();
				return;
			}
			this.showTreasureBox();
		},
		
		showTreasureBox : function(){
			$("#treasureBox_div").hide();
		},
		
		hideTreasureBox : function(){
			$("#treasureBox_div").hide();
		},
		
		test : function(){
			$("#treasureBox_div").show();
			$("#treasureBox_reward_div").hide();
			this.startTimeTick();
		},
		
		startTimeTick : function(){
			if(this.checkIfReachMax()){
				return;
			}
			if(this.current_count >= this.CONST_GAPARRAY.length){
				return;
			}
			
			this.timetick = this.CONST_GAPARRAY[this.current_count];
			var _this = this;
			var timeTickFunc = function(){
				_this.timetick --;
				_this.updateBoxStateShow();
				if(_this.timetick <= 0)
				{
					_this.timetick = 0;
					_this.stopTimeTick();
					return;
				}
				this.timetick_timeout = setTimeout(timeTickFunc, 1000);
			}
			timeTickFunc();
		},
		
		stopTimeTick : function(){
			clearTimeout(this.timetick_timeout);
		},
		
		setBoxToReadyOpenState : function(){
			
		},
		
		setBoxToTimeTickState : function(){
			
		},
		
		updateBoxStateShow : function(){
			if(this.timetick > 0){
				$("#treasureBox_text").html(this.CONST_LEFTTIME.replace("{0}", this.convertToMS(this.timetick)));
			}
			else{
				$("#treasureBox_text").html(this.CONST_COULDLINGQU);
			}
		},
		
		convertToMS : function(val){
			var result = "";
			var minute = Math.floor(val / 60);
			var second = val % 60;
			if(minute >= 10){
				result += minute;
			}else{
				result += "0" + minute;
			}
			result += ":";
			if(second >= 10){
				result += second;
			}else{
				result += "0" + second;
			}
			return result;
		},
		
		openTreasureBox : function(){
			if (!UIF.handler.login) {
				UIF.handler.loging();
				return;
			}
			if(this.checkIfReachMax()){
				Tools.dialog(this.CONST_REACHMAX);
				return;
			}
			if(this.timetick > 0){
				Tools.dialog(this.CONST_TIMELIMIT);
				return;
			}
			var _this = this;
			
			var param = {count : this.current_count};
			UIF.handler.openTreasureBox(param, function(data){
				var result = jQuery.parseJSON(data);
				result.resultStatus;
				_this.updateRewardShow(result);
				_this.showTreasureBox_reward();
			});
		},
		
		updateRewardShow : function (data) {
			
		},
		
		checkIfReachMax : function(){
			if(this.current_count >= this.CONST_MAXCOUNT)
			{
				return true;
			}
			return false;
		},
		
		showTreasureBox_reward : function(){
			$("#treasureBox_reward_div").show();
			$("#shadow").show();
		},
		
		hideTreasureBox_reward : function(){
			$("#treasureBox_reward_div").hide();
			$("#shadow").hide();
		}
	}
});
