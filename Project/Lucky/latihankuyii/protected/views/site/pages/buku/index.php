<p><?php echo CHtml::link('Tambah Buku', array('create'))?></p>
<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	      <th>Judul</th>
	      <th>Penulis</th>
	      <th>ID</th>
	      <!--<th>Kategori</th>--> 
	      <th>Aksi</th>	
	</tr>
	<?php foreach ($data as $model):?>
	<tr>
       <td><?php echo $model->judul;?> </td>
       <td><?php echo $model ->penulis;?> </td>
       <td><?php echo $model->id;?></td>
       <!--<td><?php //echo $model->kategori->nama_kategori;?></td>-->
       <td><?php echo CHtml::link(CHtml::encode("Update"),array('update', 'id'=>$model->id));?> |
           <?php echo CHtml::link(CHtml::encode("Delete"),array('delete', 'id'=>$model->id));?>
    	 </td>
  </tr>
<?php endforeach;	?>
</table>
