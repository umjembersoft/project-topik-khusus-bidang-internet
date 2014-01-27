
<center> 
  <p><b>Form Input Data Nama Pembeli</b></p>
  <p><b><_______________________________________________></b></p>
</center>

<div class="form">


	<?php echo CHtml::beginForm(array('Elektronik/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'idpembeli'); ?> 
  <?php echo CHtml::activeTextField($model,"idpembeli","");?>	  
</div>
	
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'namapembeli'); ?> 
  <?php echo CHtml::activeTextField($model,"namapembeli","");?>	  

  </div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'alamat'); ?> 
  <?php echo CHtml::activeTextField($model,"alamat","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'nohp'); ?> 
  <?php echo CHtml::activeTextField($model,"nohp","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'Merk_Laptop'); ?> 
  <?php echo CHtml::activeTextField($model,"Merk_Laptop","");?>	  
  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'Harga'); ?> 
  <?php echo CHtml::activeTextField($model,"Harga","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'Tahun_Produksi'); ?> 
  <?php echo CHtml::activeTextField($model,"Tahun_Produksi","");?>	  
</div>




	<div class="row buttons">
		<?php echo CHtml::submitButton('Simpan'); ?>
	  
	</div>
	<ul>
	<li><a href="http://localhost/rickyanas/index.php?r=nama">Daftar Nama Pembeli </a> </li>
	</ul>
	
</div>