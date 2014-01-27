<center>
    <center>
<h2><b>
<marquee
bgcolor="white" width="100%" scrollamount="3" behavior="scroll"><font face ="Chiller" color="blue">
^_^ SILAHKAN INPUTKAN DATA ANDA ^_^</font></marquee></b>
</h2>
</center>
<center>
<?php
    echo CHtml::image("images/harga.jpg","images",array("width"=>250));
    ?>
</center>
<div class="form">
	<?php echo CHtml::beginForm(array('Hp/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'Id'); ?> 
  <?php echo CHtml::activeTextField($model,"id","");?>	  
</div>
	
	<div class="row">
  <?php echo CHtml::activeLabel($model,'TIPE_HP'); ?> 
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
	echo CHtml::activeLabel($model,'KATEGORI');
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
		<?php echo CHtml::submitButton('Submit'); ?>
	  <?php echo CHtml::endForm();?>
	</div>
</div>
</center>
 <center>
<li><a href="http://localhost/asfi/index.php?r=hp/index">LIHAT DATA</a> </li>
</center>