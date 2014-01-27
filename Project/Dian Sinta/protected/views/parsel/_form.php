<?php
/* @var $this ParselController */
/* @var $model Parsel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parsel-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namabarang'); ?>
		<?php echo $form->textField($model,'namabarang',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'namabarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ukuran'); ?>
		<?php echo $form->textField($model,'ukuran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ukuran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lama_pesan'); ?>
		<?php echo $form->textField($model,'lama_pesan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lama_pesan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->