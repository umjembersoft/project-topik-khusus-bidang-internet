<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password2'); ?>
		<?php echo $form->passwordField($model,'password2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'avatar'); ?>
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
 

	<?php if (extension loaded ('gd'))?>
	<div class="row">
	<?php echo CHtml::activeLabelEx ($model, 'verifyCode');?>
	
	<div>
	<?php $this->widget('CCaptcha'); ?><br/>
    <?php echo CHtml::activeTextField($model,'verifyCode'); ?>
    </div>
	
    <div class="hint">Ketik tulisan yang ada pada gambar .
    <br/>Tulisan tidak case sensitive</div> 
    </div>
    <?php endif; ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->