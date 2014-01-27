<?php
/* @var $this FilmController */
/* @var $model Film */

$this->breadcrumbs=array(
	'Films'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Film', 'url'=>array('index')),
	array('label'=>'Atur Film', 'url'=>array('admin')),
);
?>

<h1>Create Film</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>