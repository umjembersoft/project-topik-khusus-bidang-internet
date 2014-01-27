<?php
class AritmatikaController extends Controller{

    const BILANGAN=1;
    const BILANGAN2=2;
	
    function actionIndex(){
	 	   echo self::BILANGAN+self::BILANGAN2;		
    }	
}
?>
