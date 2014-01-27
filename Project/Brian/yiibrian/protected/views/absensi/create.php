<style>
table{
	border-collapse: collapse;	 
}
th{
	border:solid 1px;
}
td{
	border:solid 1px;
}
</style>
<?php echo CHtml::beginForm(array('create','id'=>$id)); ?>

<?php 
if($pertemuanke!=NULL){
	foreach($pertemuanke as $ke):
		$pke=$ke->pertemuanke+1;
	endforeach;
}else{
	$pke=1;	
}
?>
Pertemuan ke : <input type="text" readonly="readonly" name="pke" size="50"
value="<?php echo $pke<=$namakelas->jumlahpertemuan ? $pke : "Pertemuan Sudah Habis";?>" />

<font color="red">
	<?php echo CHtml::error($model,'pertemuanke'); ?>
</font>
<p>&nbsp;</p>
<input type="hidden" name="jumlahloop" value="<?php echo $jloop;?>" />
<input type="hidden" name="idkelas" value="<?php echo $id;?>" />
<p>
	Nama Kelas : <b><?php echo $namakelas->namakelas;?></b>
</p>
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>";
    }
?>
<p><?php echo CHtml::link("Lihat Data Absensi",array("dataabsensi","id"=>$id));?></p>
<table>
	<tr>
		<th colspan="2" style="text-align: center">Absensi</th>
		<th style="width: 2px;" rowspan="2">IDP</th>
		<th rowspan="2">Nama</th>
	</tr>
	<tr>
		<td style="width: 2px; text-align: center">H</td>
		<td style="width: 2px; text-align: center">A</td>		
	</tr>
	<?php $i=1;foreach($peserta as $data):?>
		
	<tr>
		<td>
			<input type="hidden" name="idp<?php echo $i;?>" value="<?php echo $data->id;?>" />
			<input type="radio" value="*" name="absn<?php echo $i;?>" />
		</td>
		<td><input type="radio" checked="checked" value="!" name="absn<?php echo $i;?>" /></td>
		<td style="text-align: center"><?php echo $data->id;?></td>
		<td><?php echo $data->namapeserta;?></td>
		
	</tr>
	<?php $i++;endforeach;?>
	<tr>
		<th colspan="3">Keterangan</th>
		<td>H = Hadir  <br>  A = Tidak Hadir</td>
	</tr>
</table>
<?php echo CHtml::submitButton('Create'); ?>
<?php echo CHtml::endForm();?>