<center>
<h1>Input Data Mahasiswa</h1>
<p>===========================================================</p>
</center>
<div class="form">
	<?php echo CHtml::beginForm(array('Mahasiswa/create')); ?>
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
  <?php echo CHtml::activeLabel($model,'jurusan'); ?> 
  <?php echo CHtml::activeTextField($model,"jurusan","");?>	  
</div>


	<div class="row buttons">
		<?php 
			echo CHtml::submitButton('Submit'); 
			echo CHtml::endForm();
			echo '';
			echo CHtml::link('Lihat Data',array('index'));
		?>
	</div>
</div>