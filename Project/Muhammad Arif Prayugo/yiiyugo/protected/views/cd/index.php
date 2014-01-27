<?php
  foreach(Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
  }
?>

<p><?php echo CHtml::link('Tambah CD', array('create'))?></p>

<!--element paging-->
<div style="float: right;">
	<?php $this->widget('CLinkPager', array(
   				            'pages' => $pages,
                      ))
  ?>
</div><br /><br />
<!--end of element paging-->

<table style="border-collapse: collapse; border:solid 1px #000; " border="1">
	<tr style="border: 1px solid;">
	     <th><?php echo $sort->link('id')?></th>
	     <th><?php echo $sort->link('judul')?></th>
	     <th><?php echo $sort->link('pembuat')?></th>
	     <th><?php echo $sort->link('id_kategori')?></th>
	     <th><?php echo $sort->link('tanggal_terbit')?></th>
	     <th>Aksi</th>	
	</tr>
	
	<?php foreach ($data as $model):?>
	<tr>
	     <td><?php echo $model->id;?></td>
       <td><?php echo $model->judul;?> </td>
       <td><?php echo $model->pembuat;?> </td>
       <td><?php echo $model->kategori->nama_kategori;?></td>
       <td><?php echo $model->tanggal_terbit;?></td>
       <td><?php echo CHtml::link(CHtml::encode("Update"),array('update', 'id'=>$model->id));?> |
           <?php echo CHtml::link(CHtml::encode("Delete"),array('delete', 'id'=>$model->id));?>
    	 </td>
  </tr>
<?php endforeach;	?>
</table>
