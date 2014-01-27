<center> 
  <p><b>Sistem Informasi Akademik Sederhana</b></p>
  <p><b>O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O+O</b></p>
</center>

<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	   
	      <th>Nama</th>
           <th>Alamat</th>
		   <th>MataKuliah</th>
	      <th>SKS</th>
		  <th>Semester</th>
		  <th>Ruang</th>
       	
	</tr>
	
  <?php foreach ($data as $model):?>
   
  <tr>
      
       <td><?php echo $model-> nama;?> </td>
       <td><?php echo $model->alamat;?> </td>
	   <td><?php echo $model->matakuliah;?></td>
      <td><?php echo $model->sks;?></td>
	  <td><?php echo $model->semester;?></td>
	  <td><?php echo $model->ruang;?></td>
        
       
  </tr>
<?php endforeach;	?>

</table>
