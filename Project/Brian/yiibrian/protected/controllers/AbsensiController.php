<?php

class AbsensiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','dataabsensi'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Dataabsensi;
		
		if($_POST)
		{
			 
			for($i=1;$i<=$_POST['jumlahloop'];$i++){
				//$model->attributes=$_POST['Dataabsensi'];
				
				//$model=Dataabsensi::model()->findByPk($_POST['idabsn'.$i]);
				$model=new Dataabsensi;
				$model->peserta_id=$_POST['idp'.$i];
				$model->kelas_id=$_POST['idkelas'];
				$model->pertemuanke=$_POST['pke'];
				$model->absensi=$_POST['absn'.$i];
			
				$model->save();
				/*
				$sql="UPDATE dataabsensi set pertemuanke='".$_POST['pke']."',absensi='".$_POST['absn'.$i]."' WHERE peserta_id='".$_POST['idp'.$i]."' AND kelas_id='".$_POST['idkelas']."'";
				$conncection=Yii::app()->db;
				$command=$conncection->createCommand($sql);
				$command->execute();*/
			}
			if(!$model->save()){
				Yii::app()->user->setFlash('error', "Data absensi tidak bisa disimpan karena pertemuan sudah habis!"); 
			}else{
				Yii::app()->user->setFlash('success', "Data absensi berhasil disimpan!"); 
			}
			
		}
		$criteria=new CDbCriteria(array(
			//order by
	  		'order'=>'id DESC',
	  		'condition'=>'kelas_id='.$id.''		 
		));
		
		//untuk find semua data dengan parameter $criteria	
		$peserta = Peserta::model()->findAll($criteria);
		
		
		$criteriapertemuan=new CDbCriteria(array(
			//order by
	  		'order'=>'pertemuanke DESC LIMIT 0,1',
	  		'condition'=>'kelas_id='.$id.'', 
	  			 
		));
		$pertemuan = Dataabsensi::model()->findAll($criteriapertemuan);
		 
		//namakelas
		$namakelas=Kelas::model()->findByPk($id);
		
		$this->render('create',array(
			'model'=>$model,
			'peserta'=>$peserta,
			'id'=>$id,
			'pertemuanke'=>$pertemuan,
			'namakelas'=>$namakelas,
			'jloop'=>count($peserta)
		));
	}

	public function actionDataabsensi($id){
		$criteria=new CDbCriteria(array(
			//order by
	  		'order'=>'id DESC',
	  		'condition'=>'kelas_id='.$id.''
		));
		
		$peserta=Peserta::model()->findAll($criteria);
		$kelas=Kelas::model()->findByAttributes(array('id'=>$id));
		$this->render('dataabsensi',array(
			'data'=>$peserta,
			'kelas'=>$kelas,
		));
	}
	
}