<?php
/* @var $this ParselController */
/* @var $model Parsel */

$this->breadcrumbs=array(
	'Parsels'=>array('index'),
	$model->namabarang=>array('view','id'=>$model->namabarang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parsel', 'url'=>array('index')),
	array('label'=>'Create Parsel', 'url'=>array('create')),
	array('label'=>'View Parsel', 'url'=>array('view', 'id'=>$model->namabarang)),
	array('label'=>'Manage Parsel', 'url'=>array('admin')),
);
?>

<h1>Update Parsel <?php echo $model->namabarang; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>