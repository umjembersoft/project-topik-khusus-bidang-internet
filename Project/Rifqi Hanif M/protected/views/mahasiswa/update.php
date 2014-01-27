<center>
<h1>Proses Update Mahasiswa</h1>
<p>===========================================================</p>
</center>
<div class="form">
    <?php echo CHtml::beginForm(array('update','nim'=>$model->nim)); ?>
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
        <?php echo CHtml::submitButton('Update'); ?>
        <?php echo CHtml::endForm(); ?>
		
    </div>
</div>
