<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{
		
	}
	
	public function actionNim(){
		$model = new nim ;
		$this->render('LuckyAnugerahPratamaView', array(
			'model'=>$model
		));	
	}

	
}