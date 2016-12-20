<?php
//控制器作用调用模型，调用视图，将模型生成的数据传给视图，让相关视图去显示；
	class indexController{
	public function index(){
		global $view;
		
			//$testModel=M('test');
			//$data=$testModel->get();
			//$view->assign('str',$data);
			$view->display('index.html');
		}
	}

?>