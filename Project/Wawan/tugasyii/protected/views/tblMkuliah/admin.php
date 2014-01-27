<?php
/* @var $this TblMkuliahController */
/* @var $model TblMkuliah */

$this->breadcrumbs=array(
	'Tbl Mkuliahs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblMkuliah', 'url'=>array('index')),
	array('label'=>'Create TblMkuliah', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tbl-mkuliah-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<center>
<h1>Manage Tabel Mata Kuliah</h1>
<p>=============================================================</p>
</center>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-mkuliah-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'matakuliah',
		'sks',
		'semester',
		'ruang',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
