<p><?php echo CHtml::link('Tambah Data', array('create'))?></p>
sistem informasi monitoring tugas akhir
<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	      <th>Nim</th>
	      <th>nama</th>
           <th>Judul TA</th>
	      <th>Status TA</th>
            <th>Pembimbing</th>
              <th>Penguji</th>
	      <th>Aksi</th>	
	</tr>
	
    <?php foreach ($data as $model):?>
   
  <tr>
      <td><?php echo $model->nim ;?> </td>
       <td><?php echo $model-> nama;?> </td>
       <td><?php echo $model->judul;?> </td>
       <td><?php echo $model->status;?></td>
        <td><?php echo $model->pembimbing;?></td>
         <td><?php echo $model->penguji;?></td>
       <td><?php echo CHtml::link(CHtml::encode("E"),array('update', 'nim'=>$model->nim));?> |
      
           <?php echo CHtml::link(CHtml::encode("X"),array('delete', 'nim'=>$model->nim));?>
    </td>
  </tr>
<?php endforeach;	?>

</table>
