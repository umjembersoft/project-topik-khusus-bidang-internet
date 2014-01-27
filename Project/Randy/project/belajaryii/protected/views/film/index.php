<center>
<p><?php echo CHtml::link('Tambah Film', array('create'))?></p>
<table style="border-collapse: collapse; border:solid 1px black; " border="1">
	<tr style="border: 1px solid black;">
			<th>ID</th>
	      <th>Judul</th>
	      <th>Genre</th>
	      <th>TanggalRelease</th> 
	      <th>Aksi</th>	
	</tr>
	<?php foreach ($data as $model):?>
	<tr>
		<td><?php echo $model->id;?></td>
       <td><?php echo $model->judul;?> </td>
       <td><?php echo $model->genre;?> </td>
       <td><?php echo $model->tanggal_release;?></td>
       <td><?php echo CHtml::link(CHtml::encode("Update"),array('update', 'id'=>$model->id));?> |
           <?php echo CHtml::link(CHtml::encode("Delete"),array('delete', 'id'=>$model->id));?>
    	 </td>
  </tr>
<?php endforeach;	?>
</table>
</center>
