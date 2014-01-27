<?php
class kelasController extends Controller{
public $layout="column1";
	conts INDEX="index";
	
public function actionCreate()
	{
		$model=new Kelas;
		$model2=new Murid;

		if(isset($_POST['Kelas']))
		{
			$model->attributes=$_POST['Kelas'];
			if($model->save())
			{
				if(isset($_POST['nama']))
				{
					$total = count($_POST['nama']);
		    		for ($i = 0; $i <= $total; $i++)
		    		{
		    			if(isset($_POST['nama'][$i]))
		    			{
		     				$jiakakak = new Murid;
		     				$jiakakak->kelas=$model->id;
		        			$jiakakak->nama = $_POST['nama'][$i];
		        			$jiakakak->jk = $_POST['jk'][$i];
		         			$jiakakak->save();
		    			}	
					}
					$this->redirect(array('view','id'=>$model->id));
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'model2'=>$model2,
		));
	}
	public function actionView($id)
	{
		$kelas=Murid::model()->findByAttributes(array('kelas'=>$id));
                $haha=new CDbCriteria;
                $criteria=new CDbCriteria;
                $criteria->compare('kelas',$id);
 
                $murid=new CActiveDataProvider('Murid',
                     array('criteria'=>$criteria,)
                );
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'murid'=>$murid,
		));
	}
	}
	?>