<?php
class LayoutController extends Controller{
	 
	public $layout="column1"; 
	const INDEX="index";
	

	public function actionIndex(){		
	
	
		$data = Layout::model()->findAll();
		
		$this->render('index',array('data'=>$data));	
		
	}
	}
	?>
