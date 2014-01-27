<div class="form">
<?php 
  echo CHtml::beginForm(array('update','idfilm'=>$model->id)); 
?>	
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'judul'); ?> 
  <?php echo CHtml::activeTextField($model,"judul","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'pembuat'); ?> 
  <?php echo CHtml::activeTextField($model,"pembuat","");?>	  
</div>

<div class="row buttons">
  <?php echo CHtml::submitButton('Update'); ?>
  <?php echo CHtml::endForm();?>
</div>
