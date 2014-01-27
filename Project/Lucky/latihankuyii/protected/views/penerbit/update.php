<?php

$this->breadcrumbs=array(
	'penerbit'=>array('index'),
	'Update',
	$model->IDPENERBIT=>array('view','id'=>$model->IDPENERBIT),
	
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Create Penerbit', 'url'=>array('create')), 
	array('label'=>'View Penerbit', 'url'=>array('view', 'id'=>$model->IDPENERBIT)),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>
<center>
<h1>Update Tabel Penerbit => <?php echo $model->IDPENERBIT; ?></h1>
<p>=============================================================</p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>