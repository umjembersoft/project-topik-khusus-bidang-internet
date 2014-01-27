<div class ="form">
<?php 
	echo CHtml::beginForm (array('update','idkreta'=>$model->idkreta))
?>

<div class="row">
	<?php echo CHtml::activeLabel($model,'nama'); ?>
	<?php echo CHtml::activeTextField($model,"nama",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'tipe'); ?>
	<?php echo CHtml::activeTextField($model,"tipe",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'kota_asal'); ?>
	<?php echo CHtml::activeTextField($model,"kota_asal",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'kota_tujuan'); ?>
	<?php echo CHtml::activeTextField($model,"kota_tujuan",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'jam_keberangkatan'); ?>
	<?php echo CHtml::activeTextField($model,"jam_keberangkatan",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'jam_kedatangan'); ?>
	<?php echo CHtml::activeTextField($model,"jam_kedatangan",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'harga_tiket'); ?>
	<?php echo CHtml::activeTextField($model,"harga_tiket",""); ?>
</div>

<div class="row buttons">
	<?php echo CHtml::submitButton('update'); ?>
	<?php echo CHtml::endForm(); ?>
</div>