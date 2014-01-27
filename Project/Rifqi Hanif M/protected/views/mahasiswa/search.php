<table style="border-collapse: collapse; border:solid 1px #000; " border="1" width="100%">
	<tr style="border: 1px solid;">
		<th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
		 
	</tr>
	<?php foreach ($data as $model):?>
	<tr>
		<td><?php echo $model->nim;?> </td>
    	<td><?php echo $model->nama;?> </td>
    	<td><?php echo $model->jurusan;?> </td>
    	
    </tr>
<?php endforeach;?>
</table>