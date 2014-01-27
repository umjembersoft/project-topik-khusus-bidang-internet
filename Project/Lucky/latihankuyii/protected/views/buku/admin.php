<?php

$this->breadcrumbs=array(
	'buku'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Buku', 'url'=>array('index')),
	array('label'=>'Create Buku', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
	
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('buku-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<center>
<h1>Manage Tabel Buku</h1>
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
	'id'=>'buku-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IDBUKU',
		'JUDULBUKU',
		'JENISBUKU',
		'GENRE',
		'TAHUNTERBIT',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
