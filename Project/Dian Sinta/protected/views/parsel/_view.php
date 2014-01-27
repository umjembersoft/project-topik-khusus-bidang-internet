<?php
/* @var $this ParselController */
/* @var $data Parsel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('namabarang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->namabarang), array('view', 'id'=>$data->namabarang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ukuran')); ?>:</b>
	<?php echo CHtml::encode($data->ukuran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama_pesan')); ?>:</b>
	<?php echo CHtml::encode($data->lama_pesan); ?>
	<br />


</div>