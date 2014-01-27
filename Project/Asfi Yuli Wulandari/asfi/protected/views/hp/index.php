<p><?php echo CHtml::link('Back', array('create'))?></p>
<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
	echo '<div class="flash-' . $key . '">' . $message . "</div>\n";	
}
?>

   <center>
<h2>
<marquee
bgcolor="white" width="100%" scrollamount="3" behavior="scroll"><font face ="Lucida Calligraphy">
^_^ DATA PEMBELIAN DI AYLANDA CELL ^_^</font></marquee>
</h2>
</center>
<table style="border-collapse: collapse; border:solid 1px #000;"\ border="1">
	<tr style="border: 1px solid;">
		<th>Id</th>
	      <th>Tipe Hp</th>
	      <th>Nama_Pembeli</th>
	      <th>Merk</th>
	      <th>Alamat</th>
	      <th>Kategori</th>
          <th>Aksi</th>
	</tr>
	
    <?php foreach ($data as $model):?> 
   
  <tr>
  	<td><?php echo $model->id ;?> </td>
      <td><?php echo $model->tipe ;?> </td>
       <td><?php echo $model->nama_pembeli;?> </td>
       <td><?php echo $model->Merk;?></td>
       <td><?php echo $model->alamat;?></td>
       <td><?php echo $model->kategori->nama_kategori;?></td>
       <td><?php echo chtml::link(CHtml::encode("Update"),array('update','id'=>$model->id));?>
       	<?php echo CHtml::link(CHtml::encode("Delete"),array('delete','id'=>$model->id));?>
       </td> 
  </tr>
<?php endforeach;	?>
</table>
