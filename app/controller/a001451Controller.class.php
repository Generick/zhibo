<?php 
	class a001451Controller{
		
		public function index(){
			global $view;
			
			$get=$_GET;
			foreach ($get as $keys=>$vals){
				$page_var[$keys]=$vals;
			}
			
			$page_var['cdn']=_CDNDOMAIN_;
			
			foreach($page_var as $key=>$val){
				$view->assign($key,$val);
			}
			
			$view->display('001451.html');
		}
	}	
?>