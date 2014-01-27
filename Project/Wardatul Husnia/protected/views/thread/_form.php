<?php
/* @var $this ThreadController */
/* @var $model Thread */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thread-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi'); ?>
		<?php echo $form->textArea($model,'isi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_id'); ?>
		<?php echo $form->textField($model,'kategori_id'); ?>
		<?php echo $form->error($model,'kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggalPost'); ?>
		<?php echo $form->textField($model,'tanggalPost'); ?>
		<?php echo $form->error($model,'tanggalPost'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<div class="row">
        <?php echo $model->getAttributeLabel('isi').' :'; ?>
        <?php $this-
>widget('application.extensions.cleditor.ECLEditor', array(
            'model'=>$model, 
            'attribute'=>'isi',
            'options'=>array( 
                'width'=>'700',
                'height'=>250,
                'useCSS'=>true,
            ),
            'value'=>$model->isi,));
        ?>
        <?php echo $form->error($model,'isi'); ?> 
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->