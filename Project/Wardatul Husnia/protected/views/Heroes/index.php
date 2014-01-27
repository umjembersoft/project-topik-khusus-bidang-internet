<?php foreach ($data as $model):?>
<p>
<?php echo $model->name;?><br />
<!--untuk menampilkan gambar-->
<?php echo CHtml::image (Yii::app()->request->baseUrl.'/images/'.
$model->image."","",array('width'=>150));?>
</p>
<hr>
<?php endforeach;?>