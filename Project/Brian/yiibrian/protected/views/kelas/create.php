<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h1>Create Kelas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>