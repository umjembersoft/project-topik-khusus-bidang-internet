<?php

?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'IDBUKU'); ?>
		<?php echo $form->textField($model,'IDBUKU',array('size'=>20,'maxlength'=>20)); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUDULBUKU'); ?>
		<?php echo $form->textField($model,'JUDULBUKU',array('size'=>20,'maxlength'=>20)); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JENISBUKU'); ?>
		<?php echo $form->textField($model,'JENISBUKU',array('size'=>20,'maxlength'=>20)); ?>
	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GENRE'); ?>
		<?php echo $form->textField($model,'GENRE',array('size'=>20,'maxlength'=>20)); ?>
				
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAHUNTERBIT'); ?>
		<?php echo $form->textField($model,'TAHUNTERBIT',array('size'=>20,'maxlength'=>20)); ?>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->