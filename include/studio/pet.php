
<!--宠物部分  开始-->
<div class="PetSwf">
    <div id="PetSwf"></div>
    <div id="petName" style="width:160;position:absolute;z-index:990;top:0;text-align:center;color:#ffffff;">龙儿</div>
    <div id="clickRect" style="width:160;height:160;position:absolute;z-index:991;top:0"></div>
</div>
<style>
	.PetSwf{
		position : absolute;
		width : 160px;
		height : 160px; 
		right : 134px;
		top : 666px;
		z-index : 889;
		cursor : pointer;
	}
	.pet-opt-ui{
		position : absolute;
		z-index : 991;
		top : 500px;
		left : 100px;
		width : 345px;
		height : 230px;
		background: url("/images/pet/board.png") no-repeat;
		font-family : "Microsoft YaHei";
		display : none;
	}
	.pet-opt-ui button{
		outline : 0;
		border : none;
		cursor : pointer;
	}
	.pet-opt-ui-title{
		position: absolute;
		left : 85px;
		top : 7px;
		width : 167px;
		height : 20px;
		line-height : 20px;
		text-align : center;
		color : #2f241d;
		font-weight : bold;
		font-size : 14px;
	}
	.pet-opt-ui-closeBtn{
		position: absolute;
		left : 313px;
		top : 15px;
		width : 21px;
		height : 14px;
		background: url("/images/pet/close.png") no-repeat;
	}
	.pet-opt-ui-changenameBtn{
		position: absolute;
		left : 137px;
		top : 62px;
		width : 15px;
		height : 14px;
		background: url("/images/pet/edit.png") no-repeat;
	}
	.pet-opt-ui-trainBtn{
		position: absolute;
		left : 254px;
		top : 84px;
		width : 46px;
		height : 31px;
		background: url("/images/pet/xunlian.png") no-repeat;
	}
	.pet-opt-ui-trainBtn-disable{
		position: absolute;
		left : 254px;
		top : 84px;
		width : 46px;
		height : 31px;
		background: url("/images/pet/xunlian_disable.png") no-repeat;
	}
	.pet-opt-ui-helpBtn{
		position: absolute;
		left : 186px;
		top : 92px;
		width : 15px;
		height : 15px;
		background: url("/images/pet/help.png") no-repeat;
	}
	.pet-opt-ui-changename-confirmBtn{
		position: absolute;
		left : 137px;
		top : 66px;
		width : 20px;
		height : 10px;
		background: url("/images/pet/save.png") no-repeat;
	}
	.pet-opt-ui-changename-cancelBtn{
		position: absolute;
		left : 166px;
		top : 66px;
		width : 20px;
		height : 10px;
		background: url("/images/pet/cancel.png") no-repeat;
	}
	.pet-opt-ui-hpTxt{
		position: absolute;
		left : 65px;
		top : 119px;
		width : 20px;
		height : 14px;
		font-size : 14px;
		font-weight : bold;
		color : #a21d1a;
	}
	.pet-opt-ui-powerTxt{
		position: absolute;
		left : 171px;
		top : 119px;
		width : 20px;
		height : 14px;
		font-size : 14px;		
		font-weight : bold;
		color : #a21d1a;
	}
	.pet-opt-ui-petNameInput{
		position: absolute;
		left : 23px;
		top : 56px;
		width : 100px;
		height : 13px;
		font-size : 12px;	
		text-align:center;			
		color : #dad1c8;
		background-color: transparent;
		border : none;
		outline : 0;
	}
	.pet-opt-ui-petlevelBar{
		position: absolute;
		left : 59px;
		top : 93px;
		width : 119px;
		height : 12px;
		background: url("/images/pet/jingyantiao.png") no-repeat;
	}
</style>
<div class = "pet-opt-ui">
	<span id = "pet-opt-ui-title" class = "pet-opt-ui-title">熊宝宝</span>
	<button id = "pet-opt-ui-closeBtn" class = "pet-opt-ui-closeBtn"></button>
	<input id = "pet-opt-ui-petNameInput" class = "pet-opt-ui-petNameInput" type="text" readOnly = "true" value="精通css的龙基基" />
	<button id = "pet-opt-ui-changenameBtn" class = "pet-opt-ui-changenameBtn"></button>
	<button id = "pet-opt-ui-changename-confirmBtn" class = "pet-opt-ui-changename-confirmBtn"/>
	<button id = "pet-opt-ui-changename-cancelBtn" class = "pet-opt-ui-changename-cancelBtn"/>
	<button id = "pet-opt-ui-helpBtn" class = "pet-opt-ui-helpBtn"></button>
	<button id = "pet-opt-ui-trainBtn" class = "pet-opt-ui-trainBtn"></button>
	<span id = "pet-opt-ui-hpTxt" class = "pet-opt-ui-hpTxt">9999999</span>
	<span id = "pet-opt-ui-powerTxt" class = "pet-opt-ui-powerTxt">99999999</span>
	<div id = "pet-opt-ui-petlevelBar" class = "pet-opt-ui-petlevelBar"></div>
</div>
<!--宠物部分  结束-->