<div class="form">
<?php 
  echo CHtml::beginForm(array('update','idfilm'=>$model->idfilm)); 
?>	
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'judul_film'); ?> 
  <?php echo CHtml::activeTextField($model,"judul_film","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'genre'); ?> 
  <?php echo CHtml::activeTextField($model,"genre","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'jumlah'); ?> 
  <?php echo CHtml::activeTextField($model,"jumlah","");?>	  
</div>

<div class="row buttons">
  <?php echo CHtml::submitButton('Update'); ?>
  <?php echo CHtml::endForm();?>
</div>
