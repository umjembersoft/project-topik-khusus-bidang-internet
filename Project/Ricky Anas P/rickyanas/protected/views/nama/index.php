<center> 
  <p><b>Sistem Informasi Daftar Pembeli di Ricky COM</b></p>

</center>

<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	   
	      <th>ID Pembeli</th>
           <th>Nama Pembeli</th>
		   <th>Alamat</th>
	      <th>No HP</th>
		  <th>Merk Laptop</th>
		  <th>Harga</th>
		  <th>Tahun Produksi</th>
		  <th><u><b>Action</b></u></th>
       	
	</tr>
	
  <?php foreach ($data as $model):?>
   
  <tr>
      
       <td><?php echo $model-> idpembeli;?> </td>
       <td><?php echo $model->namapembeli;?> </td>
	   <td><?php echo $model->alamat;?></td>
	   <td><?php echo $model->nohp;?></td>
	   <td><?php echo $model->Merk_Laptop;?></td>
	   <td><?php echo $model->Harga;?></td>
	   <td><?php echo $model->Tahun_Produksi;?></td>
   
		<td>
		<?php echo CHtml::link(CHtml::encode("Delete"),array('delete', 'idpembeli'=>$model->idpembeli));?>
		<?php echo CHtml::link(CHtml::encode("Update"),array('update', 'idpembeli'=>$model->idpembeli));?>
		</td>

  </tr>
  
<?php endforeach;	?>
<ul>
  <li><a href="http://localhost/rickyanas/index.php?r=elektronik/create">Create Nama </a></li>
  </ul>
</table>
