<?php
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDBUKU')); ?> : </b>
	<?php echo CHtml::link(CHtml::encode($data->IDBUKU), array('view', 'id'=>$data->IDBUKU)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUDULBUKU')); ?> : </b>
	<?php echo CHtml::encode($data->JUDULBUKU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENISBUKU')); ?> : </b>
	<?php echo CHtml::encode($data->JENISBUKU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GENRE')); ?> : </b>
	<?php echo CHtml::encode($data->GENRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUNTERBIT')); ?> : </b>
	<?php echo CHtml::encode($data->TAHUNTERBIT); ?>
	<br />
<p>**************************************************************************</p>


</div>