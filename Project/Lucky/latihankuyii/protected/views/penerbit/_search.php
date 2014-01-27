<?php

?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="row">
		<?php echo $form->labelEx($model,'IDPENERBIT'); ?>
		<?php echo $form->textField($model,'IDPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDCUSTOMER'); ?>
		<?php echo $form->textField($model,'IDCUSTOMER',array('size'=>20,'maxlength'=>20)); ?>
			</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA',array('size'=>11,'maxlength'=>11)); ?>
			</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'NAMAPENERBIT'); ?>
		<?php echo $form->textField($model,'NAMAPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMATPENERBIT'); ?>
		<?php echo $form->textField($model,'ALAMATPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGLLAHIRPENERBIT'); ?>
		<?php echo $form->textField($model,'TGLLAHIRPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
			</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'NOTLPPENERBIT'); ?>
		<?php echo $form->textField($model,'NOTLPPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
			</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->