<center> 
  <p><b>Sistem Informasi Jadwal Keberangkatan KA DAOP IX Jember</b></p>
  <p><b><=================================================></b></p>
</center>

<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	   
	      <th>ID Kereta</th>
           <th>Nama Kereta</th>
		   <th>Tipe</th>
		   <th>Kota Asal</th>
		   <th>Kota Tujuan</th>
		   <th>Jam Keberangkatan</th>
		   <th>Jam Kedatangan</th>
		   <th>Harga Tiket</th>
		   <th>Hapus</th>
		   <th>Edit</th>
	      
       	
	</tr>
	
  <?php foreach ($data as $model):?>
   
  <tr>
      
       <td><?php echo $model-> idkreta;?> </td>
       <td><?php echo $model->nama;?> </td>
	   <td><?php echo $model->tipe;?></td>
	   <td><?php echo $model->kota_asal;?></td>
	   <td><?php echo $model->kota_tujuan;?></td>
	   <td><?php echo $model->jam_keberangkatan;?></td>
	   <td><?php echo $model->jam_kedatangan;?></td>
	   <td><?php echo $model->harga_tiket;?></td>
      
        <td>
		<?php echo CHtml::link(CHtml::encode("Hapus"),array('delete', 'idkreta'=>$model->idkreta));?>
		</td>
		<td>
		<?php echo CHtml::link(CHtml::encode("Edit"),array('update', 'idkreta'=>$model->idkreta));?>
		</td>
       
  </tr>
  
<?php endforeach;	?>
<!--
<ul>
  <li><a href="http://localhost/yii_kienda/index.php?r=tiket/create">Create KA </a></li>
  </ul>
-->
  </table>
  
 <b>
 
 <?php
 
 mysql_connect("localhost","root","");
 
 mysql_select_db("tiket");
 
 $query = mysql_query("SELECT * FROM kreta WHERE kota_tujuan='Surabaya' ");
 
 $jumlah = mysql_num_rows($query);
 
 echo "Kereta Dengan Tujuan Surabaya Ada : $jumlah Kereta";
 
 ?>