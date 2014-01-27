
<center> 
  <p><b>Form Input Data Nama Pembeli</b></p>
  <p><b><=================================================></b></p>
</center>

<div class="form">


	<?php echo CHtml::beginForm(array('Barang/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'idbarang'); ?> 
  <?php echo CHtml::activeTextField($model,"idbarang","");?>	  
</div>
	
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'namabarang'); ?> 
  <?php echo CHtml::activeTextField($model,"namabarang","");?>	  

  </div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'tahunproduksi'); ?> 
  <?php echo CHtml::activeTextField($model,"tahunproduksi","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'harga'); ?> 
  <?php echo CHtml::activeTextField($model,"harga","");?>	  
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Simpan'); ?>
	  
	</div>
	<ul>
	<li><a href="http://localhost/rickyanas/index.php?r=laptop">Daftar Nama Barang </a> </li>
	</ul>
	
</div>