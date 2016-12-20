<?php
//控制器作用调用模型，调用视图，将模型生成的数据传给视图，让相关视图去显示；
	class mallController{
		public function index(){
			global $view;
			
			//$testModel=M('test');
			//$a=$testModel->get();
			//$view->assign('str',$data);
			
			$user=search_save_user(6988);
			print_r($user);
			//$a['a']=5;
			//$a['b']=$_GET['c'];
			$view->assign('a',$a);
			$view->display('mall.html');
		}
		
		public function mall_prop(){
			global $view;
			
			$view->display('mall_prop.html');
		}
		public function mall_ride(){
			global $view;
			
			$view->display('mall_ride.html');
		}
		
	}

?>