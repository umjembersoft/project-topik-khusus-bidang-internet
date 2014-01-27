<?php
/* @var $this DistrokuController */
/* @var $model Distroku */

$this->breadcrumbs=array(
	'Distrokus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Distroku', 'url'=>array('index')),
	array('label'=>'Create Distroku', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#distroku-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Distroku (FREAKER'S)</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'distroku-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_barang',
		'nama_barang',
		'stok',
		'harga',
		'kondisi',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
