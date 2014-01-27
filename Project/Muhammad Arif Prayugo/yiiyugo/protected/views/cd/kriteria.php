<table style="border-collapse: collapse; border:solid 1px #000; " border="1" width="100%">
	<tr style="border: 1px solid;">
		<th>ID</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Kategori</th>  
	</tr>
	<?php foreach ($data as $model):?>
	<tr>
		<td><?php echo $model->id;?> </td>
    	<td><?php echo $model->judul;?> </td>
    	<td><?php echo $model->pembuat;?> </td>
    	<td><?php echo $model->kategori->nama_kategori;?></td>
    </tr>
<?php endforeach;?>
</table>
