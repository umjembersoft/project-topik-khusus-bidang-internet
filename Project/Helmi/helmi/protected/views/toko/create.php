<div class="toko">
<?php echo CHtml::beginForm(array('toko/create')); ?>

<div class="row">
	<?php echo CHtml::activeLabel($model,'id'); ?><br>
	<?php echo CHtml::activeTextField($model,"id",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'nama'); ?><br>
	<?php echo CHtml::activeTextField($model,"nama",""); ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'id_kategori'); ?><br>
<?php echo CHtml::activedropDownList(
   $model,
   'id_kategori',
   CHtml::listData(Kategori::model()->findAll(),
   'id_kategori','nm_kategori'),
   array('empty'=>'--pilih kategori--'));
 ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'harga'); ?><br>
	<?php echo CHtml::activeTextField($model,"harga",""); ?>
</div>

<div class="row buttons">
	<?php echo CHtml:: submitButton('Submit'); ?>
	<?php echo CHtml::endForm(); ?>
</div>

</div>