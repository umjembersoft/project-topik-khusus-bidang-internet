<div class="form">
	<?php echo CHtml::beginForm(array('buku/create')); ?> //untuk membuka form beserta actionnya
	<?php echo CHtml::errorSummary($model);?> 
	
	<div class="row">
		//untuk membuat element Label dan input text untuk field Judul
		<?php echo CHtml::activeLabel($model,'judul'); ?> 
		<?php echo CHtml::activeTextField($model,"judul",""); ?>
	  <?php echo CHtml::error($model, 'judul');?>
	</div>

	<div class="row">
		//untuk membuat element Label dan input text untuk field Penulis
		<?php echo CHtml::activeLabel($model,'penulis'); ?> 
		<?php echo CHtml::activeTextField($model,"penulis",""); ?>
	  <?php echo CHtml::error($model, 'penulis');?>
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
		<?php echo CHtml::submitButton('Submit'); ?> //untuk membuat tombol Submit
	  <?php echo CHtml::endForm();?> //untuk menutup Form
	</div>
</div>
