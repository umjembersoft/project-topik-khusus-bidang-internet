<?php
class KuisController extends Controller{
	 
	public function actionIndex(){		
	
	
		$data = Kuis::model()->findAll();
		
		$this->render('index',array('data'=>$data));	

	}	
}
?>
