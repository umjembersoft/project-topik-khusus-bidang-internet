<?php
/* @var $this TblMhsController */
/* @var $data TblMhs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?> : </b>
	<?php echo CHtml::link(CHtml::encode($data->nim), array('view', 'id'=>$data->nim)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?> : </b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?> : </b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?> : </b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?> : </b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />
<p>::::::::::::::::::::::::::::::::::::::::::::::::::::::</p>

</div>