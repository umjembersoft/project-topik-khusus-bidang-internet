<?php echo CHtml::beginForm();?>
<p>
<?php echo Chtml::label('Nama','nama');?><br>
<?php echo CHtml::textField("nama","");?>
</p>
<p>
<?php echo CHtml::label('Alamat','alamat');?><br>
<?php echo CHtml::textArea("Alamat","");?>
</p>

<p>
<?php echo CHtml::label('Kategori','kategori');?><br>
<?php echo CHtml::Label('Kategori',$select, 
array ('T-shirt'=>'T-shirt','Kemeja'=>'Kemeja','Longdress'=>'Longdress','Tas'=>'Tas'),
array ('empty'=> '--pilih kategori--'));?><br>
</p>

<p>
<?php
echo CHtml::radioButton('jk',TRUE, array(
'value'=>'Laki-laki',
'name'=>'btnname',
'uncheckValue'=>null
)),'Laki-laki';

echo CHtml::radioButton('jk',FALSE,array(
'value'=>'Perempuan',
'name'=>'btnname',
'uncheckValue'=>null
)),'Perempuan';
?>
</p>
<?php echo CHtml::submitButton('Submit');?>
<?php echo CHtml::endForm();?>