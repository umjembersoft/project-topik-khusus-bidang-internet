Form Input Data tiket kreta api
<div class="form">
	<?php echo CHtml::beginForm(array('Tiket/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'tipe'); ?> 
  <?php echo CHtml::activeTextField($model,"tipe","");?>	  
</div>
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'nama'); ?> 
  <?php echo CHtml::activeTextField($model,"nama","");?>	  
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	  <?php echo CHtml::endForm();?>
	</div>
</div>