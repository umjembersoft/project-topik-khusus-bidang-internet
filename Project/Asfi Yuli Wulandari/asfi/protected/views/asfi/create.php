
Form Input Data Hp
<div class="form">
	<?php echo CHtml::beginForm(array('Hp/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'Id'); ?> 
  <?php echo CHtml::activeTextField($model,"id","");?>	  
</div>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'Tipe'); ?> 
  <?php echo CHtml::activeTextField($model,"tipe","");?>	  
</div>
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'nama_pembeli'); ?> 
  <?php echo CHtml::activeTextField($model,"nama_pembeli","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'Merk'); ?> 
  <?php echo CHtml::activeTextField($model,"Merk","");?>	  
</div>


<div class="row">
  <?php echo CHtml::activeLabel($model,'alamat'); ?> 
  <?php echo CHtml::activeTextField($model,"alamat","");?>	  
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	  <?php echo CHtml::endForm();?>
	</div>
</div>
