$(document).ready(function(){
	$('.header-notice').on('click',function(){
		window.location.href = "/centeros.php?ptype=notice";
	});
	notice();
});

function notice(){
	$.ajax({
		type:'post',
		url:'/notice.php',
		data:{'userId':userId},
		dataType:'json',
		success:function(data){
			//console.log(data);
			if (data.info.state == '' || data.info.state == null) {
				//console.log('有未读消息');
				$('.header-notice').css('background','url(/static_data/images_css/icon_xiaoxi-tishi.png) no-repeat');
				//var shine = setInterval("shanshuo()",500);
				
			}else{
				console.log("no unread news");
			}
		}
	});
}
//var flag = 0;
function shanshuo(){
	if (!flag) {
		$('.header-notice').css('background','url()');
		flag =1;
	}else{
		$('.header-notice').css('background','url(/static_data/images_css/icon_xiaoxi-tishi.png) no-repeat');
		flag =0;
	}
}