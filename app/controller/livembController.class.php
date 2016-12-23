<?php 
	class livembController{
		public function index(){
			global $view;
			//global $vsn;
			//$page_var['cdn']=_CDNDOMAIN_;
			
			//$roomnumber = (int)$_GET['roomnumber'];
			$roomnumber ='10005';
			function curl_post_data($url,$post){
				$options = array(
						CURLOPT_RETURNTRANSFER=>true,
						CURLOPT_HEADER=>false,
						CURLOPT_POST=>true,
						CURLOPT_POSTFIELDS=>$post,
				);
				$ch = curl_init($url);
				curl_setopt_array($ch,$options);
				$result = curl_exec($ch);
				curl_close($ch);
				return $result;
			}
			//$post = array('roomnumber'=>$roomnumber);
			//$interface = _INTERFACE_."/rest/homeAnchors/livePhone.mt?roomNumber=".$roomnumber;
			//$datas = curl_post_data($interface,$post);
			$datas = curl_post(_INTERFACE_."/rest/homeAnchors/livePhone.mt?roomNumber={$roomnumber}");
			$data = json_decode($datas,true);
			
			//echo (_INTERFACE_."/rest/homeAnchors/livePhone.mt?roomNumber={$roomnumber}");
			//print_r($data);
			$zhuboinfo = $data['data'];
			$roomUsers = $zhuboinfo['roomUsers'];
			$hotAnchors = $zhuboinfo['hotAnchors'];
			$hotNum = count($hotAnchors)<6?count($hotAnchors):6;
			$imgsize = '&w=330&h=181';
			//print_r($zhuboinfo);
			//echo $hotNum;
			$url = 'http://1b7a61-0.sh.1252349838.clb.myqcloud.com/rest/site/transcoding.mt?roomNumber='.$roomnumber;
			$udata = array('roomnumber'=>$roomnumber);
			$result = curl_post_data($url,$udata);
			
			// print_r($result);
			 $view->assign('zhuboinfo',$zhuboinfo);
			 $view->assign('hotAnchors',$hotAnchors);
			 $view->assign('hotNum',$hotNum);
			 $view->assign('imgsize',$imgsize);
			 $view->assign('rmb',$roomnumber);
			 
			$view->display('livemoblie.html');
		}
		
	}

?>