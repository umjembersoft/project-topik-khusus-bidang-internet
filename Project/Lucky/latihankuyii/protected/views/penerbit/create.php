<?php

$this->breadcrumbs=array(
	'penerbit'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<center>
<h1>Create Tabel Penerbit</h1>
<p></p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>