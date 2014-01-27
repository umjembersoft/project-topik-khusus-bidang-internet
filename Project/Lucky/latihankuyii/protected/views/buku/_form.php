<?php
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Buku-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom ini <span class="required">*</span> wajib di isi.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDBUKU'); ?>
		<?php echo $form->textField($model,'IDBUKU',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDBUKU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUDULBUKU'); ?>
		<?php echo $form->textField($model,'JUDULBUKU',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'JUDULBUKU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JENISBUKU'); ?>
		<?php echo $form->textField($model,'JENISBUKU',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'JENISBUKU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GENRE'); ?>
		<?php echo $form->textField($model,'GENRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'GENRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAHUNTERBIT'); ?>
		<?php echo $form->textField($model,'TAHUNTERBIT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'TAHUNTERBIT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->