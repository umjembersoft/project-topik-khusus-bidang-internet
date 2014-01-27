<p><center>Form Cerita pendek</center></p>

<center>
<table style="border-collapse: collapse; border:solid 1px #CC33FF";" \ border="1">
	<tr style="border: 1px solid;">
		<th>No</th>
		<th>Judul Cerpen</th>
		<th>Nama Pengarang</th>
		<th>Aksi</th>
	</tr>
	<?php foreach ($data as $model):?>
	<tr>
		<td><?php echo $model->no;?> </td>
		<td><?php echo $model->judul cerpen;?> </td>
		<td><?php echo $model->nama pengarang;?> </td>
		<td><?php echo CHtml::link(CHtml::encode("Edit"),
			array ('update', 'no'=>$model->no));?> ||
			<?php echo CHtml::link(CHtml::encode("Hapus"),
			array ('delete', 'no'=>$model->id));?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</center>

<p>
<?php echo CHtml::link('Add', array('create'))?>
</p>