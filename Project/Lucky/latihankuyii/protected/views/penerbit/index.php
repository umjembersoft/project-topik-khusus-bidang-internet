<?php

$this->breadcrumbs=array(
	'penerbit',
);

$this->menu=array(
	array('label'=>'Create Penerbit', 'url'=>array('create')),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<center>
<h1>Daftar Penerbit</h1>
<p></p>
</center>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
