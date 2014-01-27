<center> 
  <p><b>Sistem Informasi Daftar Pembeli di Ricky COM</b></p>
  
</center>

<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	   
	      <th>idbarang</th>
           <th>namabarang</th>
		   <th>tahunproduksi</th>
	      <th>harga</th>
		  <th><u><b>Action</b></u></th>
       	
	</tr>
	
  <?php foreach ($data as $model):?>
   
  <tr>
      
       <td><?php echo $model-> idbarang;?> </td>
       <td><?php echo $model->namabarang;?> </td>
	   <td><?php echo $model->tahunproduksi;?></td>
	   <td><?php echo $model->harga;?></td>
   
		<td>
		<?php echo CHtml::link(CHtml::encode("Delete"),array('delete', 'idbarang'=>$model->idbarang));?>
		
		</td>

  </tr>
  
<?php endforeach;	?>
<ul>
  <li><a href="http://localhost/rickyanas/index.php?r=barang/create">Create Barang </a></li>
  </ul>
</table>
