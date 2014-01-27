<?php
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Penerbit-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom ini <span class="required">*</span> wajib di isi.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDPENERBIT'); ?>
		<?php echo $form->textField($model,'IDPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDPENERBIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDCUSTOMER'); ?>
		<?php echo $form->textField($model,'IDCUSTOMER',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDCUSTOMER'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'HARGA'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'NAMAPENERBIT'); ?>
		<?php echo $form->textField($model,'NAMAPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NAMAPENERBIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMATPENERBIT'); ?>
		<?php echo $form->textField($model,'ALAMATPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ALAMATPENERBIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGLLAHIRPENERBIT'); ?>
		<?php echo $form->textField($model,'TGLLAHIRPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'TGLLAHIRPENERBIT'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'NOTLPPENERBIT'); ?>
		<?php echo $form->textField($model,'NOTLPPENERBIT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NOTLPPENERBIT'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->