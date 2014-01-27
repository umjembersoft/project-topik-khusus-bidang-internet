<?php
/* @var $this FilmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Films',
);

$this->menu=array(
	array('label'=>'Tambah Film', 'url'=>array('create')),
	array('label'=>'Atur Film', 'url'=>array('admin')),
);
?>

<h1>Films</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
