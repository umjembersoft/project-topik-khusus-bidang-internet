<?php
/* @var $this TblMkuliahController */
/* @var $model TblMkuliah */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-mkuliah-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom ini <span class="required">*</span> wajib di isi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matakuliah'); ?>
		<?php echo $form->textField($model,'matakuliah',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'matakuliah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks'); ?>
		<?php echo $form->textField($model,'sks'); ?>
		<?php echo $form->error($model,'sks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semester'); ?>
		<?php echo $form->textField($model,'semester'); ?>
		<?php echo $form->error($model,'semester'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruang'); ?>
		<?php echo $form->textField($model,'ruang',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ruang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->