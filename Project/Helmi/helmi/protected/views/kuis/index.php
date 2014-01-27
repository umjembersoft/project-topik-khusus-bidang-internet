<center> 
  <p>Sistem Informasi Manajemen Keuangan</p>
  <p>-----------------------------------------------------------------------------</p>
</center>

<table style="border-collapse: separate; border:solid 2px #000; " border="2">
  <tr style="border: 2px solid;">
    <th>Nama</th>
    <th>Penghasilan</th>
    <th>Jabatan</th>
    <th>Instansi</th>
  </tr>
  <?php foreach ($data as $model):?>
  <tr>
    <td><?php echo $model->nama ;?> </td>
    <td><?php echo $model->penghasilan;?> </td>
    <td><?php echo $model->jabatan;?> </td>
    <td><?php echo $model->instansi;?></td>
  </tr>
  <?php endforeach;	?>
</table>
<p>&nbsp;</p>
<div>
<li>Jumlah penghasilan terbesar = </li>
</div>
