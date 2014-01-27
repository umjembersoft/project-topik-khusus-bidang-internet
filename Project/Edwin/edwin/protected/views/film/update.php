<?php
/* @var $this FilmController */
/* @var $model Film */

$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Film', 'url'=>array('index')),
	array('label'=>'Tambah Film', 'url'=>array('create')),
	array('label'=>'Lihat daftar Film', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Atur Film', 'url'=>array('admin')),
);
?>

<h1>Update Film <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>