<center>
<h1>Proses Update</h1>
<p>===========================================================</p>
</center>
<div class="form">
    <?php echo CHtml::beginForm(array('update','idpembeli'=>$model->idpembeli)); ?>
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
        <?php echo CHtml::submitButton('Update'); ?>
        <?php echo CHtml::endForm(); ?>
		
    </div>
</div>
