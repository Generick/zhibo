<?php 
/**
* 
*/
class centerosAPIController{
	public $db;
	public $page_var;
	public $user;

	function get_recharge(){
		//
	}

	function get_record(){
		if (!$this->user) {
			$data = array();
			$data['resultStatus'] = 100;
			$data['data'] = "no login!";
			echo json_encode($data);
			exit();
		}
		$tpe = $_REQUEST['t'];
		if ($tpe == 0) {//chongzhi 0
			$_url = _INTERFACE_."/rest/usersGiftDetails/topUp.mt";
		}else if($tpe == 1){//jiaoyi 1
			$_url = _INTERFACE_."/rest/usersGiftDetails/trading.mt";
		}else{//shoudao liwu 2
			$_url = _INTERFACE_."/rest/usersGiftDetails/giving.mt";
		}
		$year = $_POST['y']?$_POST['y']:date("Y");
		$month = $_POST['m']?$_POST['m']:date("m");
		$t = $year."-".$month."-01";
		$t1 = $year."-".($month+1)."-01";
		$c_time = strtotime($t);
		$n_time = strtotime($t1);
		$page = $_POST['p']?$_POST['p']:1;

		$limit = 10;
		$statrParam = array(
			'between'=>0,
			'end'=>0,
			'year'=>$year,
			'monte'=>$month,
			'userId'=>$this->user['userId']
			);

		$dataAll = $this->curlGet($_url,$statrParam);
		$pageDataAll = json_decode($dataAll);
		$count = count($pageDataAll->data);
		$pageNum = ceil($count / $limit);
		$pagelinks = breakLen("/",$page,$pageNum,$limit);

		if ($count<$limit) {
			$dataObj = $dataAll;
		}else{
			$dataObj = $this->curlGet($_url,array(
				'between'=>($page-1)*$limit,
				'end'=>10,
				'year'=>$year,
				'monte'=>$month,
				'userId'=>$this->user['userId']
				));
		}
		$dataObject = json_decode($dataObj);
		$dataObject->pagelinks = $pagelinks;
		echo json_encode($dataObject);
		exit();
	}

	function testsms(){
		$phoneNumber = '18255001881';
		$datas = curl_post(_CDNDOMAIN_."/rest/personCenter/sendMessage.mt","number=$phoneNumber");
		echo json_encode($datas,true);
		echo $datas."0000";
	}

	function get_recive(){
		//
	}

	function editName(){
		$user = checklogin();
		$nickname = $_REQUEST['nickname'];
	    $r=check_nickname($nickname);
	    if($r!="yes"){
	        echo json_encode(array("resultStatus"=>100,"errorMessage"=>$r));
	        exit();
	    }else{
	    	//echo  json_encode(array("resultStatus"=>100,"errorMessage"=>"hhhh","info"=>$nickname,"r"=>$r));
	    	//exit();
	        //$snic=$nickname;
	        $nickname = urlencode($nickname);
	        $this->db->Execute("update bu_user set nickname='{$nickname}' where userId='{$user['userId']}'");

	        $userinfo=search_save_user($user['userId']);
	        set_login_info($userinfo);
	        echo json_encode(array("resultStatus"=>200,"errorMessage"=>"用户名Ok"));
	        exit();
	    }
	}

	function base(){
		$user = checklogin();
		if ($_POST['year']!="" && $_POST['month']!="" && $_POST['day']!="") {
			$birthday = (int)$_POST['year']."-".(int)$_POST['month']."-".(int)$_POST['day'];
		}else{
			$birthday = "0000-00-00";
		}

		$gender = $_POST['gender']?$_POST['gender']:0;
		$province = $_POST['province']?$_POST['province']:null;
		$city = $_POST['city']?$_POST['city']:null;
		$nickname = urlencode($_POST['aliasname']);
		if (check_nickname($nickname) != "yes") {
			header('Content-Type:application/json; charset=utf-8');
			echo json_encode(array("resultStatus"=>100,"errorMessage"=>"昵称非法"));
			exit();
		}

		$sql = "update bu_user set nickname = '{$nickname}',birthday = '{$birthday}',gender = '{$gender}',province = '{$province}',city = '{$city}' where userId = {$user['userId']}";
		//$sql = "select * from bu_user where userId = {$user['userId']}";
		//echo json_encode(array('info'=>$sql));exit;
		$res=$this->db->Execute($sql);
	     if($res){
	         header('Content-Type:application/json; charset=utf-8');
	         echo json_encode(array("resultStatus"=>200,"errorMessage"=>"修改成功","post"=>"update bu_user set nickname='{$nickname}', birthday='$birthday',gender=$gender,province='{$province}',city='{$city}' where userId='{$user['userId']}'"));
	         $userinfo=search_save_user($user['userId']);
	         set_login_info($userinfo);
	         exit();
	     }else{
	         header('Content-Type:application/json; charset=utf-8');
	         echo json_encode(array("resultStatus"=>100,"errorMessage"=>"信息修改失败"));
	         exit();
	     }
	}

	function changePass(){
		$user = checklogin();
		if (trim($_POST['current_password']) == '' || trim($_POST['new_password']) == '' || trim($_POST['new_repassword']) == '') {
			echo json_encode(array("resultStatus"=>100,"errorMessage"=>"请填写当前密码和新密码"));
			exit();
		}

		$cpwd = $this->db->GetOne("select password from bu_user where userId = {$user['userId']}");
		//echo json_encode(array('info'=>$cpwd));exit;
		if ($cpwd != password_deal($_POST['current_password'])) {
			echo json_encode(array("resultStatus"=>100,"errorMessage"=>"您输入的密码不正确"));
			exit();
		}

		if (strlen($_POST['new_password']) < 6 || strlen($_POST['new_password']) > 30) {
			echo json_encode(array("resultStatus"=>100,"errorMessage"=>"密码长度为6-30"));
			exit();
		}

		if ($_POST['new_password'] != $_POST['new_repassword']) {
			echo json_encode(array('resultStatus'=>100,"errorMessage"=>"您输入的两次密码不一致"));
			exit();
		}
		$npwd = password_deal($_POST['new_password']);
		$this->db->Execute("update bu_user set password = '{$npwd}' where userId = {$user['userId']}");
		echo json_encode(array("resultStatus"=>200,"errorMessage"=>"密码修改成功"));
		exit();
	}

	function sendSMS(){
		//session_start();
		$user = checklogin();
		if (!$user) {
			echo 'error';
			exit();
		}
		$userId = $user['userId'];
		$ajax_data = array();
		if($_POST['number']==''){
            $ajax_data["resultMessage"]="require number with no!";
            echo json_encode($ajax_data);
            exit();
        }
        $phoneNumber=$_POST['number'];
        //$sendData = array("number"=>$phoneNumber);
        $datas = curl_post(_CDNDOMAIN_."/rest/personCenter/sendMessage.mt","number=$phoneNumber");
        //$datas = curl_post(_CDNDOMAIN_."/rest/personCenter/sendMessage.mt",$sendData);
        $acceptData=json_decode($datas, true);
        if($acceptData!=null and $acceptData["data"] !=''){
            $send_phone_info['time']=$_SERVER['REQUEST_TIME'];
            $send_phone_info['phone']=$phoneNumber;
            $send_phone_info['code']=$acceptData["data"];
            $_SESSION["phone_array"]=$send_phone_info;

            $ajax_data["resultMessage"]="success";
            $ajax_data["resultCode"]="200";
            $ajax_data["ts"]=$_SESSION["phone_array"];
        }else{
            $ajax_data["resultMessage"]="send message error!";
            $ajax_data["resultCode"]="100";
        }
        echo json_encode($ajax_data);
        exit();
	}

	function bindPhone(){
		$user = checklogin();
		$userId = $user['userId'];

		$code=$_POST['code'];

        //没有短信信息
        if(!empty($_SESSION["phone_array"]) and count($_SESSION["phone_array"]) >0){
            $phone_infos=$_SESSION["phone_array"];
        }else{
            $ajax_data["resultMessage"]="no send message!";
            $ajax_data["resultCode"]="100";
            $ajax_data["ts"]=$_SESSION;
            echo json_encode($ajax_data);
            exit();
        }
        //验证码错误
        if($code!=$phone_infos['code']){
            $ajax_data["resultMessage"]="code error!";
            $ajax_data["resultCode"]="100";
            $ajax_data["ts"]=$_SESSION["phone_array"];
            echo json_encode($ajax_data);
            exit();
        }
        $bind_phone=$phone_infos['phone'];
        global $db;
        $sql="update bu_user set mobile =$bind_phone where userId=$userId";
        if($this->db->Execute($sql)){
            $ajax_data["resultMessage"]="success";
            $ajax_data["resultCode"]="200";
        }else{
            $ajax_data["resultMessage"]="update phone error!";
            $ajax_data["resultCode"]="100";
            $ajax_data["ts"]=$_SESSION["phone_array"];

        }

        echo json_encode($ajax_data);
        exit();
	}


	function __construct(){
		session_start();
		global $db;
		global $page_var;
		$this->page_var = $page_var;
		$this->db = $db;
		$user = checklogin();
		$this->user = $user;
	}

	function __destruct(){
		$this->db->close();
	}

	function curlGet($get_url,$get_param){
	    $oCurl = curl_init();
	    if(stripos($get_url,"https://")!==FALSE){
	        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
	        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
	    }
	    $aGet = array();
	    foreach($get_param as $key=>$val){
	        $aGet[] = $key."=".urlencode($val);
	    }
	    curl_setopt($oCurl, CURLOPT_URL, $get_url."?".join("&",$aGet));
	    curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($oCurl, CURLOPT_TIMEOUT, 1);
	    $sContent = curl_exec($oCurl);
	    $aStatus = curl_getinfo($oCurl);
	    curl_close($oCurl);

	    if(intval($aStatus["http_code"])==200){
	        return $sContent;
	    }else{
	        return FALSE;
	    }
	}
}
 ?>