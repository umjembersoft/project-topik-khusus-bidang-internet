<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kelas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namaKelas'); ?>
		<?php echo $form->textField($model,'namaKelas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'namaKelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waliKelas'); ?>
		<?php echo $form->textField($model,'waliKelas',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'waliKelas'); ?>
	</div>

	<div class="row">
	    <?php $this->widget('application.extensions.appendo.JAppendo',array(
        	'id' => 'repeateEnum',        
        	'model' => $model2,
        	'viewName' => 'jiakak',
        	'labelDel' => 'Remove Row',
       		// 'cssFile' => 'css/jquery.appendo2.css'
    	)); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
<?php $this->endWidget(); ?>
</div>