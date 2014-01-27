<?php

$this->breadcrumbs=array(
	'buku',
);

$this->menu=array(
	array('label'=>'Create buku', 'url'=>array('create')),
	array('label'=>'Manage buku', 'url'=>array('admin')),
);
?>
<center>
<h1>Daftar Buku</h1>
<p></p>
</center>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
