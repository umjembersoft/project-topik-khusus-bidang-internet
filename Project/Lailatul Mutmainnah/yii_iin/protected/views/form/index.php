<?php echo CHtml::beginForm(); ?>
<p>
<?php echo CHtml::label('Nama','nama'); ?><br>
<?php echo CHtml::textField("nama",""); ?>
</p>

<p>
<?php echo CHtml::label('Alamat','alamat'); ?><br>
<?php echo CHtml::textArea("alamat",""); ?>
</p>

<p>
	<?php echo CHtml::label('Kota','kota'); ?><br>
	<?php echo CHtml::dropDownList('kota', $select, 
     array('Jakarta' => 'Jakarta','Palembang' => 'Palembang', 'Yogyakarta' => 'Yogyakarta'),
     array('empty' => '--pilih kota--'));?><br>
</p>

<p>
<?php
	echo CHtml::radioButton('jk', TRUE, array(
    	'value'=>'Laki-Laki',
    	'name'=>'btnname',
    	'uncheckValue'=>null
	)),'Laki-Laki '; 
	
	echo CHtml::radioButton('jk', FALSE, array(
    	'value'=>'Perempuan',
    	'name'=>'btnname',
    	'uncheckValue'=>null
	)),'Perempuan'; 
?>
</p> 

<p>
	<?php echo CHtml::label('Hobby','hobby');?><br>
	<?php 
		echo CHtml::CheckBox('hobby',TRUE, array (
             'value'=>'olahraga',
        )),'Olahraga';
	?>	
	&nbsp;&nbsp;
	<?php 
		echo CHtml::CheckBox('hobby',FALSE, array (
             'value'=>'cosplay',
        )),'Cosplay';
	?>
	&nbsp;&nbsp;
    <?php 
    	echo CHtml::CheckBox('hobby',FALSE, array (
             'value'=>'crafting',
        )),'Crafting';
	?>
</p>
                                        
<?php echo CHtml::submitButton('Submit'); ?>
                                        
<?php echo CHtml::endForm(); ?>
