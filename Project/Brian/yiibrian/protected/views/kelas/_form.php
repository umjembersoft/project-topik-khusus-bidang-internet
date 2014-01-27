<?php
/* @var $this KelasController */
/* @var $model Kelas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kelas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namakelas'); ?>
		<?php echo $form->textField($model,'namakelas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'namakelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jambelajar'); ?>
		<?php echo $form->textField($model,'jambelajar',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'jambelajar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlahpertemuan'); ?>
		<?php echo $form->textField($model,'jumlahpertemuan'); ?>
		<?php echo $form->error($model,'jumlahpertemuan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->