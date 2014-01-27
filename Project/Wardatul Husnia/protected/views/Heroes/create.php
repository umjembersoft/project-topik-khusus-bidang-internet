<div class="form">
<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'hero-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
	));?>
<p class="note">Fields with
<span class="required">*</span>are required.</p>
<?php echo $form->errorSummary($model);?>
<div class="row">
<?php echo $form->LabelEx($model,"name");?>
<?php echo $form->textField($model,"image",array("size"=>60, "maxlength"=>555));?>
<?php echo $form->error($model,"image");?>
</div>
<div class="row">
<?php echo $form->LabelEx($model,"image");?>
<?php echo $form->fileField($model,"image",array("size"=>60, "maxlength"=>555));?>
<?php echo $form->error($model,"image");?>
</div>
<div class="row buttons">
<?php echo CHtml::submitButton ($model->isNewRecord?
"Create":"save");?>

</div>
<?php $this->endWidget();?>
</div>
 
