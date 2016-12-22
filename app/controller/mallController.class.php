<?php 
	class mallController{
		public function index(){
			global $view;
			$view->display('mall.html');
		}
		public function mall_prop(){
			
			$this->display();
		}
		public function mall_ride(){
			
			$this->display();
		}
		
	}

?>