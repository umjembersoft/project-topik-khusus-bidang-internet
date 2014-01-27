<?php
/* @var $this KelasController */
/* @var $data Kelas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namakelas')); ?>:</b>
	<?php echo CHtml::encode($data->namakelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jambelajar')); ?>:</b>
	<?php echo CHtml::encode($data->jambelajar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlahpertemuan')); ?>:</b>
	<?php echo CHtml::encode($data->jumlahpertemuan); ?>
	<br />


</div>