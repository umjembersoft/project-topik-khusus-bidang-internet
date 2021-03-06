<?php

$this->breadcrumbs=array(
	'penerbit'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Create Penerbit', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
	
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('penerbit-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<center>
<h1>Manage Tabel Penerbit</h1>
<p></p>
</center>
<p></p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penerbit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IDPENERBIT',
		'IDCUSTOMER',
		'HARGA',
		'NAMAPENERBIT',
		'ALAMATPENERBIT',
		'TGLLAHIRPENERBIT',
		'NOTLPPENERBIT',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
