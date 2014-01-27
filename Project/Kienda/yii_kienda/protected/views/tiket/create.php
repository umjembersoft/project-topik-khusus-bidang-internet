
<center> 
  <p><b>Form Input Jadwal Keberangkatan KA DAOP IX Jember</b></p>
  <p><b><=================================================></b></p>
</center>


<div class="wide form">


	<?php echo CHtml::beginForm(array('Tiket/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	

	<div class="row">
	
  <?php echo CHtml::activeLabel($model,'idkreta'); ?> 
  <?php echo CHtml::activeTextField($model,"idkreta","");?>	  
  </div>

	
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'nama'); ?> 
  <?php echo CHtml::activeTextField($model,"nama","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'tipe'); ?> 
  <?php echo CHtml::activeTextField($model,"tipe","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'kota_asal'); ?> 
  <?php echo CHtml::activeTextField($model,"kota_asal","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'kota_tujuan'); ?> 
  <?php echo CHtml::activeTextField($model,"kota_tujuan","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'jam_keberangkatan'); ?> 
  <?php echo CHtml::activeTextField($model,"jam_keberangkatan","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'jam_kedatangan'); ?> 
  <?php echo CHtml::activeTextField($model,"jam_kedatangan","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'harga_tiket'); ?> 
  <?php echo CHtml::activeTextField($model,"harga_tiket","");?>	  
</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Simpan'); ?>
	  
	</div>
	
	<!--
	<ul>
	<li><a href="http://localhost/yii_kienda/index.php?r=tugas">Daftar Jadwal KA </a> </li>
	</ul>
	-->
</div>
