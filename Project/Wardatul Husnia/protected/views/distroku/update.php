<?php
/* @var $this DistrokuController */
/* @var $model Distroku */

$this->breadcrumbs=array(
	'Distrokus'=>array('index'),
	$model->kode_barang=>array('view','id'=>$model->kode_barang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Distroku', 'url'=>array('index')),
	array('label'=>'Create Distroku', 'url'=>array('create')),
	array('label'=>'View Distroku', 'url'=>array('view', 'id'=>$model->kode_barang)),
	array('label'=>'Manage Distroku', 'url'=>array('admin')),
);
?>

<h1>Update Distroku <?php echo $model->kode_barang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>