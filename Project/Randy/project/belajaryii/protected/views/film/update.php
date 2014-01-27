<div class="form">
<?php 
  echo CHtml::beginForm(array('update','id'=>$model->id)); 
?>	
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'judul'); ?> 
  <?php echo CHtml::activeTextField($model,"judul","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'genre'); ?> 
  <?php echo CHtml::activeTextField($model,"genre","");?>	  
</div>

<div class="row buttons">
  <?php echo CHtml::submitButton('Update'); ?>
  <?php echo CHtml::endForm();?>
</div>
