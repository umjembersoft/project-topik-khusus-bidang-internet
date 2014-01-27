<div class="cerpen">
<?php echo CHtml::beginForm(array('cerpen/create')); ?>

<div class="row">
	<?php echo CHtml::activeLabel($model,'no'); ?><br>
	<?php echo CHtml::activeTextField($model,"no",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'judul cerpen'); ?><br>
	<?php echo CHtml::activeTextField($model,"judul cerpen",""); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabel($model,'nama pengarang'); ?><br>
	<?php echo CHtml::activeTextField($model,"nama pengarang",""); ?>
</div>

<div class="row buttons">
	<?php echo CHtml:: submitButton('Submit'); ?>
	<?php echo CHtml::endForm(); ?>
</div>

</div>