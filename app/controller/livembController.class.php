<?php 
	class livembController{
		public function index(){
			global $view;
			global $vsn;
			$page_var['cdn']=_CDNDOMAIN_;
			
			$roomnumber = (int)$_GET['roomnumber'];
			
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
			$post = array('roomnumber'=>$roomnumber);
			$interface = _INTERFACE_."/rest/homeAnchors/livePhone.mt?roomNumber=".$roomnumber;
			$datas = curl_post_data($interface,$post);
			$data = json_decode($datas,true);
			//print_r($data);
			$zhuboinfo = $data['data'];
			$roomUsers = $zhuboinfo['roomUsers'];
			//print_r($data['data']);
			//
			$url = 'http://1b7a61-0.sh.1252349838.clb.myqcloud.com/rest/site/transcoding.mt?roomNumber='.$roomnumber;
			$udata = array('roomnumber'=>$roomnumber);
			$result = curl_post_data($url,$udata);
			// var_dump($url);
			// var_dump($result);
			
			$view->display('livemoblie.html');
		}
		
	}

?>