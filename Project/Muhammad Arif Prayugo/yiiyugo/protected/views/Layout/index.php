<center> 
  <p><b>Sistem Informasi Penginputan Data Kaset VCD</b></p>
  <p><b><=================================================></b></p>
</center>

<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	   
	      <th>ID Film</th>
           <th>Judul Film</th>
		   <th>Genre</th>
		   <th>Jumlah</th>
		   <th>Aksi</th>
	      
       	
	</tr>
	
  <?php foreach ($data as $model):?>
   
  <tr>
      
       <td><?php echo $model-> idfilm;?> </td>
       <td><?php echo $model->judul_film;?> </td>
	   <td><?php echo $model->genre;?></td>
	   <td><?php echo $model->jumlah;?></td>
	   
      
        <td>
		<?php echo CHtml::link(CHtml::encode("Delete"),array('delete', 'idfilm'=>$model->idfilm));?>
		<?php echo CHtml::link(CHtml::encode("Update"),array('update', 'idfilm'=>$model->idfilm));?>
		</td>
       
  </tr>
  
<?php endforeach;	?>
<ul>
  <li><a href="http://localhost/yiiyugo/index.php?r=vcd/create">Create VCD </a></li>
  </ul>
</table>
