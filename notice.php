<?php 
	include_once("include/header.inc.php");
	$userId = $_POST['userId'];
	$retData = array();
	$retData['info'] = getNotice($userId);
	$retData['userId'] = $userId;
	echo json_encode($retData);

	function getNotice($userId){
		global $db;
		$userinfo = $db->GetRow("select * from bu_station_message where userId = {$userId}");
		return $userinfo;
	}
 ?>