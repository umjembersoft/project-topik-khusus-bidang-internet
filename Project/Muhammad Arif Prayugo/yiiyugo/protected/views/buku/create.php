<div class="form">
	<?php echo CHtml::beginForm(array('buku/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
		<?php echo CHtml::activeLabel($model,'judul'); ?> 
		<?php echo CHtml::activeTextField($model,"judul",""); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabel($model,'penulis'); ?> 
		<?php echo CHtml::activeTextField($model,"penulis",""); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	  <?php echo CHtml::endForm();?>
	</div>
</div>