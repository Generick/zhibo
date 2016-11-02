define(function(require, exports, module) {
	var swf = require("./anchor-swf");
	module.exports = {
		petData : null,
		init : function() {
			this.initPetOptView();
			this.initPetInteractions();
		},
		showPetUI : function(initL, initT){
			$('.pet-opt-ui').css({
				'left' : initL + $(".PetSwf")[0].clientHeight * .5 + "px",
				'top' : initT + "px"
			});
			$(".pet-opt-ui").show();
		},
		hidePetUI : function() {
			$(".pet-opt-ui").hide();
		},
		showNameChange : function(){
			if(this.checkIfAnchor()){
				document.getElementById("pet-opt-ui-petNameInput").readOnly = false;
				$("#pet-opt-ui-changenameBtn").hide();
				$("#pet-opt-ui-changename-confirmBtn").show();
				$("#pet-opt-ui-changename-cancelBtn").show();
			}
		},
		hideNameChange : function(){
			document.getElementById("pet-opt-ui-petNameInput").readOnly = true;
			$("#pet-opt-ui-changenameBtn").show();
			$("#pet-opt-ui-changename-confirmBtn").hide();
			$("#pet-opt-ui-changename-cancelBtn").hide();
		},
		confirmNameChangeFunc : function(){
			
		},
		cancelNameChangeFunc : function(){
			this.hideNameChange();
		},
		showHelpFunc : function(){
			
		},
		hideHelpFunc : function(){
			
		},
		trainPetFunc : function(){
			setTimeout(300, function(){
		},
		changePetname : function($name){
			var petName = document.getElementById("pet-opt-ui-petNameInput").value;
			document.getElementById("petName").innerHTML = petName;
		},
		updatePetdata(){
			
		},
		//初始化宠物操作面板
		initPetOptView : function() {
			var _this = this;
			//宠物操作面板事件
			$(".pet-opt-ui button").click(function(event){
				var actionName = event.target.className;
				switch(actionName){
					case "pet-opt-ui-closeBtn"://关闭按钮
						_this.hidePetUI();
						break;
					case "pet-opt-ui-changenameBtn":
						_this.showNameChange();
						break;
					case "pet-opt-ui-changename-confirmBtn":
						_this.confirmNameChangeFunc();
						break;
					case "pet-opt-ui-changename-cancelBtn":
						_this.cancelNameChangeFunc();
						break;
					case "pet-opt-ui-helpBtn":
						_this.showHelpFunc();
						break;
					case "pet-opt-ui-trainBtn":
						_this.trainPetFunc();
						break;
				}
			});			
			//宠物改名
			$(".pet-opt-ui-petNameInput").focus(function(event){
				console.log("onfocus");
			});
			
			//宠物改名
			$(".pet-opt-ui-petNameInput").blur(function(event){
				console.log("onBlur");
			});
			//宠物改名按钮
			$("#pet-opt-ui-changenameBtn").hide();
			$("#pet-opt-ui-changename-confirmBtn").hide();
			$("#pet-opt-ui-changename-cancelBtn").hide();
			if(this.checkIfAnchor()){
				$("#pet-opt-ui-changenameBtn").show();
			}
		},
		
		//注册宠物点击、移动等事件
		initPetInteractions : function() {
			//宠物点击弹窗
			var _this = this;
			$(".PetSwf").click(function(e){
				if ($(this).hasClass('noclick')) {
					$(this).removeClass('noclick');
				}
				else {
					_this.showPetUI(e.pageX, e.pageY);
				}
			});
			
			//宠物拖动
			$(".PetSwf").draggable({containment:"parent",
				start:function(event,ui){
					$(this).addClass('noclick');
				},
				stop:function(event,ui){
					setTimeout(300, function(){
						if ($(this).hasClass('noclick')) {
							$(this).removeClass('noclick');
						}
					})
					
				}
			});	
		},
		//检测是否是主播
		checkIfAnchor : function(){
			if(UIF.handler.anchorId != UIF.handler.userId){
				return false;
			}
			return true;
		}
	}
});
