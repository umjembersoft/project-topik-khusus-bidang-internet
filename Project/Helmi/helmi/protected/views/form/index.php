<?php echo CHtml::beginForm() ; ?>
<p>
<?php echo CHtml::label('Nama','nama'); ?><br>
<?php echo CHtml::textField("nama",""); ?>
</p>

<p>
	<?php echo CHtml::label('Alamat','alamat'); ?><br>
	<?php echo CHtml::textArea ("alamat",""); ?>
</p>

<p>
	<?php echo CHtml::label('Kota','kota'); ?><br>
	<?php echo CHtml::dropDownList('kota',
	array('Jakarta' => 'Jakarta','Surabaya' => 'Surabaya',
	'Semarang' => 'Semarang'),
	array('empty' => '--silahkan pilih salah satu--'));?><br>
</p>

<p>
<?php echo CHtml::radioButton('jk', TRUE, array(
	'value'=>'Laki-laki',
	'name'=>'btnname',
	'uncheckValue'=>null
	)),'Laki-laki';
	
	echo CHtml::radioButton('jk', FALSE, array(
	'value'=>'Perempuan',
	'name'=>'btnname',
	'uncheckValue'=>null
	)),'Perempuan';
?>
</p>

<p>
	<?php echo CHtml::label('Hobby', 'hobby');?><br>
	<?php
			echo CHtml::CheckBox('hobby', TRUE, array (
			'value'=>'olahraga',
		)),'Olahraga';
		?>
		&nbsp;&nbsp;
	<?php
			echo CHtml::CheckBox('hobby', FALSE, array (
			'value'=>'menyanyi',
		)),'Menyanyi';
		?>
		&nbsp;&nbsp;
	<?php
			echo CHtml::CheckBox('hobby', FALSE, array (
			'value'=>'hunting',
		)),'Hunting';
		?>
	</p>	
<?php echo CHtml:: submitButton('submit'); ?>

<?php echo CHtml::endForm();  ?>