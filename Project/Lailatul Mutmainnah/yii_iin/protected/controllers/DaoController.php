<?php
class DaoController extends Controller{
	function actionCreate(){
		
		$judul="TEST JUDUL DAO1";
		$penulis="TEST PENULIS DAO1";
		// an SQL with two placeholders ":username" and ":email"
		$sql="INSERT INTO buku (judul, penulis) VALUES(:judul,:penulis)";
		$connection=Yii::app()->db;
		$command=$connection->createCommand($sql);
		
		// replace the placeholder ":username" with the actual username value
		$command->bindParam(":judul",$judul,PDO::PARAM_STR);
		
		// replace the placeholder ":email" with the actual email value
		$command->bindParam(":penulis",$penulis,PDO::PARAM_STR);
		$command->execute();
		
		// insert another row with a new set of parameters
		//$command->bindParam(":judul",$username2,PDO::PARAM_STR);
		//$command->bindParam(":penulis",$email2,PDO::PARAM_STR);
		//$command->execute();
	}
	
	function actionIndex(){
		$sql="SELECT * FROM buku";
		$conncection=Yii::app()->db;
		$command=$conncection->createCommand($sql);
		$results=$command->queryAll();
		foreach($results as $data):
			echo $data[judul]."<br>";
		endforeach;
	}
	
	function actionUpdate(){
		$sql="UPDATE buku set judul='TEST UPDATE DAO' WHERE id='3'";
		$conncection=Yii::app()->db;
		$command=$conncection->createCommand($sql);
		$command->execute();
	}
	
	function actionDelete(){
		$sql="DELETE FROM buku WHERE id='3'";
		$conncection=Yii::app()->db;
		$command=$conncection->createCommand($sql);
		$command->execute();
	}
}
