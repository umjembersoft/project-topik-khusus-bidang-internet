<div class="form">
<?php
echo CHtml::beginForm(array('update','id'=>$model->id));
?>

<div class="row">
  <?php echo CHtml::activeLabel($model,'Id'); ?> 
  <?php echo CHtml::activeTextField($model,"id","");?>	  
</div>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'Tipe'); ?> 
  <?php echo CHtml::activeTextField($model,"tipe","");?>	  
</div>
	
<div class="row">
  <?php echo CHtml::activeLabel($model,'NAMA_PEMBELI'); ?> 
  <?php echo CHtml::activeTextField($model,"nama_pembeli","");?>	  
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'MERK'); ?> 
  <?php echo CHtml::activeTextField($model,"Merk","");?>	  
</div>

<div class="row">
	<?php
	echo CHtml::activeLabel($model,'kategori_id');
	echo CHtml::activeDropDownList(
	$model,
	'id_kategori',
	CHtml::listData(kategori::model ()->findAll(),
	'id_kategori','nama_kategori'),
	array('empty'=>'--pilih kategori---'));
	?>
</div>

<div class="row">
  <?php echo CHtml::activeLabel($model,'ALAMAT'); ?> 
  <?php echo CHtml::activeTextField($model,"alamat","");?>	  
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Update'); ?>
	  <?php echo CHtml::endForm();?>
	</div>