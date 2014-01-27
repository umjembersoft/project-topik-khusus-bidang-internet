<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peserta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kelas_id'); ?>
		<?php echo $form->dropDownList($model,'kelas_id', 
		      CHtml::listData(Kelas::model()->findAll(), 'id', 'namakelas' , 'jambelajar'), array('empty'=>'--kelas--')); ?>
		<?php echo $form->error($model,'kelas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namapeserta'); ?>
		<?php echo $form->textField($model,'namapeserta',array('size'=>60,'maxlength'=>555)); ?>
		<?php echo $form->error($model,'namapeserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jeniskelamin'); ?>
		<?php echo $form->dropDownList($model,'jeniskelamin',
			  array('L'=>'Laki-Laki','P'=>'Perempuan'),array('empty'=>'--jenis kelamin--')); ?>
		<?php echo $form->error($model,'jeniskelamin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->