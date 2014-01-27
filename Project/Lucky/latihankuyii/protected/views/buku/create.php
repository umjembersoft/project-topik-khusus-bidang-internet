<?php

$this->breadcrumbs=array(
	'buku'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Buku', 'url'=>array('index')),
	array('label'=>'Manage Buku', 'url'=>array('admin')),
);
?>

<center>
<h1>Create Tabel Buku</h1>
<p></p>
</center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>