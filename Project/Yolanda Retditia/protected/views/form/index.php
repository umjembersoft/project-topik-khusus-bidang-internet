<?php echo CHtml::beginForm() ; ?>
<p>
<?php echo CHtml::label('angka 1',''); ?><br>
<?php echo CHtml::textField("angka1",""); ?>
</p>

<p>
<?php echo CHtml::label('angka 2',''); ?><br>
<?php echo CHtml::textField("angka2",""); ?>
</p>
<p>
<?php echo hasil?><br>
</p>

<p>
	
	<?php echo 'operator : '.CHtml::dropDownList('operator', '', array(
    '1' => 'bagi',
    '2' => 'kali',
    '3' => 'tambah',
	 '4' => 'kurang',
	  
));

echo '<br />';

echo CHtml::submitButton('submit');

echo CHtml::endForm();


echo $hasil;
?>