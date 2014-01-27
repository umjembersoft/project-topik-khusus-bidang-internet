<?php echo CHtml::beginForm() ; ?>
<p>
<?php echo CHtml::label('Id Card','id'); ?><br>
<?php echo CHtml::textField("id",""); ?>
</p>

<p>
	<?php echo CHtml::label('Harga Tiket','harga'); ?><br>
	<?php echo CHtml::textArea ("harga",""); ?>
</p>

<p>
	
	<?php echo 'judul : '.CHtml::dropDownList('Judul Film', '', array(
    '1' => '99 Cahaya Dilangit Eropa',
    '2' => 'Tenggelamnya Kapal Vanderwijck',
    '3' => '5CM',
));
echo '<br />';
echo CHtml::submitButton('submit');
echo CHtml::endForm();
?>