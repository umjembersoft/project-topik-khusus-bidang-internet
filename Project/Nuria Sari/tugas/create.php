<p><?php echo CHtml::link('Lihat data', array('index'))?></p>
Form Input Data
<div class="form">
	<?php echo CHtml::beginForm(array('Tugas/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'nim'); ?> 
  <?php echo CHtml::activeTextField($model,"nim","");?>	  
</div>
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'nama'); ?> 
  <?php echo CHtml::activeTextField($model,"nama","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'judul'); ?> 
  <?php echo CHtml::activeTextField($model,"judul","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'status'); ?> 
  <?php echo CHtml::activeTextField($model,"status","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'pembimbing'); ?> 
  <?php echo CHtml::activeTextField($model,"pembimbing","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'penguji'); ?> 
  <?php echo CHtml::activeTextField($model,"penguji","");?>	  
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	  <?php echo CHtml::endForm();?>
	</div>
</div>