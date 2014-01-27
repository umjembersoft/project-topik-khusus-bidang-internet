<?php
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPENERBIT')); ?> : </b>
	<?php echo CHtml::link(CHtml::encode($data->IDPENERBIT), array('view', 'id'=>$data->IDPENERBIT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCUSTOMER')); ?> : </b>
	<?php echo CHtml::encode($data->IDCUSTOMER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA')); ?> : </b>
	<?php echo CHtml::encode($data->HARGA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAPENERBIT')); ?> : </b>
	<?php echo CHtml::encode($data->NAMAPENERBIT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATPENERBIT')); ?> : </b>
	<?php echo CHtml::encode($data->ALAMATPENERBIT); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLLAHIRPENERBIT')); ?> : </b>
	<?php echo CHtml::encode($data->TGLLAHIRPENERBIT); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('NOTLPPENERBIT')); ?> : </b>
	<?php echo CHtml::encode($data->NOTLPPENERBIT); ?>
	<br />
<p>**************************************************************************</p>


</div>