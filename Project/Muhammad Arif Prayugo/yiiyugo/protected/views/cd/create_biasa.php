<div class="form">
	<?php echo CHtml::beginForm(array('Cd/create')); ?>
	<?php echo CHtml::errorSummary($model);?>
	
	<div class="row">
		<?php echo CHtml::activeLabel($model,'judul'); ?> 
		<?php echo CHtml::activeTextField($model,"judul",""); ?>
	  <?php echo CHtml::error($model, 'judul');?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabel($model,'pembuat'); ?> 
		<?php echo CHtml::activeTextField($model,"pembuat",""); ?>
	  <?php echo CHtml::error($model, 'pembuat');?>
	</div>
	
  <div class="row">
  <?php 
   echo CHtml::activeLabel($model,'id_kategori');
   echo CHtml::activeDropDownList(
      $model,
      'id_kategori',
      CHtml::listData(Kategori::model()->findAll(),//findall data
      'id_kategori','nama_kategori'),//tentukan data yang ditampilkan
      array('empty'=>'--pilih kategori--'));//set empty combobox   
  ?>
  <?php echo CHtml::error($model, 'id_kategori');?>
  </div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	  <?php echo CHtml::endForm();?>
	</div>
</div>
