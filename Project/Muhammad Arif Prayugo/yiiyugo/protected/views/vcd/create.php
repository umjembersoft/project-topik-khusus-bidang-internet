
<center> 
  <p><b>Form Input Data VCD</b></p>
  <p><b><============================></b></p>
</center>


<div class="wide form">


	<?php echo CHtml::beginForm(array('VCD/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	

	<div class="row">
	
  <?php echo CHtml::activeLabel($model,'idfilm'); ?> 
  <?php echo CHtml::activeTextField($model,"idfilm","");?>	  
  </div>

	
	
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
		<?php echo CHtml::submitButton('Simpan'); ?>
	  
	</div>
	<ul>
	<li><a href="http://localhost/yiiyugo/index.php?r=film">Daftar Kaset VCD </a> </li>
	</ul>
	
</div>
