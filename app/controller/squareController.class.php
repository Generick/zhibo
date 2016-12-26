<?php
/**
 *
 * 功能说明：广场控制器。
 *
 **/

	class squareController{
	
		//服务协议；
	    public function index(){
	    	global $view;
	    	global $vsn;
	    	
	    	$page_var['vsn']=$vsn;
	    	$page_var['cdn']=_CDNDOMAIN_;
	    	
	    	$user=checklogin();
	    	$page_var['user']=$user;
	    	
	    	foreach($page_var as $key=>$val){
	    		$view->assign($key,$val);
	    	}
	    	
	        $view->display('square.html');
	       
	    }
	}
?>	
	