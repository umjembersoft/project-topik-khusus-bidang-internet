<?php
/* @var $this DistrokuController */
/* @var $model Distroku */

$this->breadcrumbs=array(
	'Distrokus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Distroku', 'url'=>array('index')),
	array('label'=>'Manage Distroku', 'url'=>array('admin')),
);
?>

<h1>Create Distroku</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<div class="form">
<?php echo CHtml::beginForm(array('pemesanan/create'));?>
<?php echo CHtml::errorSummary($model);?>
<div class="row">

</div>
