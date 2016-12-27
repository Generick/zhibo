<?php 
	class a001451Controller{
		
		public function index(){
			global $view;
			
			$adus=$_GET['adus'];
			$view->assign('adus',$adus);
			
			$page_var['cdn']=_CDNDOMAIN_;
			foreach($page_var as $key=>$val){
				$view->assign($key,$val);
			}
			
			$view->display('001451.html');
		}
	}	
?>