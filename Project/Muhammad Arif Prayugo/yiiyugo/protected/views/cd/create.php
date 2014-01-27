<div class="form">
	 
<?php $form = $this->beginWidget(
    'CActiveForm',
     array(
        'id' => 'Cd-form',
        'enableClientValidation'=>TRUE,      
 	   )
   );
   echo $form->errorSummary($model);
?>
<div class="row">
 <?php
   echo $form->labelEx($model, 'judul');
   echo $form->textField($model, 'judul');
   echo $form->error($model, 'judul');
 ?>
</div>

<div class="row">
 <?php 
   echo $form->labelEx($model, 'pembuat');
   echo $form->textField($model, 'pembuat');
   echo $form->error($model, 'pembuat');
?>
</div>

<div class="row">
 <?php 
   echo $form->labelEx($model,'id_kategori');
   echo $form->dropDownList(
   $model,
   'id_kategori',
   CHtml::listData(Kategori::model()->findAll(),
   'id_kategori','nama_kategori'),array('empty'=>'--pilih kategori--'));
   echo $form->error($model,'id_kategori');
 ?>
</div>

<div class="row">
 <?php 
   echo $form->labelEx($model, 'tanggal_terbit');
   $this->widget('zii.widgets.jui.CJuiDatePicker', 
   	array(
 	    'attribute'=>'tanggal_terbit',
	 	  'language' => 'en',
	 	  'model'=>$model,
	  	'options' => array(
	 	  'mode'=>'focus',
	 	  'dateFormat'=>'d MM, yy',
 	    'showAnim' => 'slideDown',
   	),
    'htmlOptions'=>array('size'=>30,'class'=>'date'),)
  );
  echo $form->error($model, 'tanggal_terbit');
 ?>
</div>

<div class="row buttons">
 <?php 
   echo CHtml::submitButton($model->isNewRecord ? 'Create' :'Update'); 
   $this->endWidget();
 ?>
</div>
