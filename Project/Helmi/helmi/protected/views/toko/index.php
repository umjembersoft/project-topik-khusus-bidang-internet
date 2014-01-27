<p><center><font color="#666666" face="Cooper Black" size="5">Form Barang di Toko Bhina Sejahtera</font></center></p>

<center>
<table style="border-collapse: collapse; border:solid 1px #CC33FF";" \ border="1">
	<tr style="border: 1px solid;">
		<th><font color="purple">ID</font></th>
		<th><font color="purple">Nama Barang</font></th>
		<th><font color="purple">Kategori</font></th>
		<th><font color="purple">Harga</font></th>
		<th><font color="purple">Aksi</font></th>
	</tr>
	<?php foreach ($data as $model):?>
	<tr>
		<td><?php echo $model->id;?> </td>
		<td><?php echo $model->nama;?> </td>
		<td><?php echo $model->kategori->nm_kategori;?></td>
		<td><?php echo $model->harga;?> </td>
		<td><?php echo CHtml::link(CHtml::encode("Edit"),
			array ('update', 'id'=>$model->id));?> ||
			<?php echo CHtml::link(CHtml::encode("Hapus"),
			array ('delete', 'id'=>$model->id));?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</center>

<center>
<p>
<?php echo CHtml::link('Add', array('create'))?>
</p>
</center>