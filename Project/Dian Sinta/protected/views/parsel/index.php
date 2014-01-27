<?php
/* @var $this ParselController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parsels',
);

$this->menu=array(
	array('label'=>'Create Parsel', 'url'=>array('create')),
	array('label'=>'Manage Parsel', 'url'=>array('admin')),
);
?>

<h1>Parsels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
