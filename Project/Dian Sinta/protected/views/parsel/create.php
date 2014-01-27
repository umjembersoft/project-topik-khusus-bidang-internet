<?php
/* @var $this ParselController */
/* @var $model Parsel */

$this->breadcrumbs=array(
	'Parsels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Parsel', 'url'=>array('index')),
	array('label'=>'Manage Parsel', 'url'=>array('admin')),
);
?>

<h1>Create Parsel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>