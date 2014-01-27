<center>
<h1>Daftar Mahasiswa</h1>
<p>===========================================================</p>
</center>
<?php
    echo CHtml::link('TAMBAH MAHASISWA', array('create'));
    echo '';
?>


<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>";
    }
?>	




<div style="float: right;">
		 	<?php $this->widget('CLinkPager', array(
   'pages' => $pages,
))?></div><br><br>

<table style="border-collapse: collapse; border: solid 1px #000; " border="1">
<tr sytle="border:1px solid">
        <th>NIM</th>
        <th>Nama</th>
		<th>Jurusan</th>
        <th>Aksi</th>
    </tr>
<?php foreach ($data as $model): ?>
<tr>
        <td><?php echo $model->nim; ?></td>
        <td><?php echo $model->nama; ?></td>
		<td><?php echo $model->jurusan; ?></td>
        <td><?php echo CHtml::link(CHtml::encode('Update'), array('update', 'nim'=>$model->nim)); ?> | 
            <?php echo CHtml::link(CHtml::encode('Delete'), array('delete', 'nim'=>$model->nim));?>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<!--form search-->
<form action="<?php echo $this->createUrl('mahasiswa/search');?>" method="post">
	<input type="text" name="jurusan" value="berdasarkan jurusan" onclick="this.value=''" />
	<input type="submit" value="Cari" />
</form>
<!-- end form search-->