<div class="form">
	<?php $form = $this->beginWidget(
    'CActiveForm',
     array(
        'id' => 'film-form',   
 	   )
   );
   echo $form->errorSummary($model);
?>

	<div class="row">
		<?php
		echo $form::labelEX($model, 'id');
		echo $form::textField($model,'id');
		?>
	</div>
	
	<div class="row">
		<?php 
		echo $form::labelEx($model,'judul'); 
		echo $form::textField($model,'judul'); 
		?>
	</div>

	<div class="row">
		<?php 
		echo $form::labelEx($model,'genre');
		echo $form::textField($model,'genre'); 
		?>
	</div>
	
	<div class="row">
 <?php 
   echo $form->labelEx($model, 'tanggal_release');
   $this->widget('zii.widgets.jui.CJuiDatePicker', 
   	array(
 	    'attribute'=>'tanggal_release',
	 	  'language' => 'en',
	 	  'model'=>$model,
	  	'options' => array(
	 	  'mode'=>'focus',
	 	  'dateFormat'=>'d MM, yy',
 	    'showAnim' => 'slideDown',
   	),
    'htmlOptions'=>array('size'=>30,'class'=>'date'),)
  );
  echo $form->error($model, 'tanggal_release');
 ?>
</div>

	
	<div class="row buttons">
		<?php
		 echo CHtml::submitButton($model->isNewRecord?'Create':'Update');
	  	$this->endWidget();
	  ?>
	</div>
</div>