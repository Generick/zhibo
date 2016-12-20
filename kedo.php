<?php 
 /***url形式 kedo.php?c=控制器名&m=方法名      ***/

	header("Content-type: text/html; charset=utf-8");
	require_once ('libs/function/function.php');
	include("common/function/header.inc.php");
	include("common/function/level.func.php");
	include_once('common/function/login.func.php');
	
	//require_once ('common/conf/config_local.php');
 	$view=ORG('Smarty/', 'Smarty',$config['viewconfig']);
 	
 	 if ($_GET['c']==''){
 		C('index', 'index');
 	}else { 
	 	
 		$controller=isset($_GET['c'])?daddslashes($_GET['c']):'index';
 		$method=isset($_GET['m'])?daddslashes($_GET['m']):'index';
	 	C($controller, $method);
 	}
 ?>