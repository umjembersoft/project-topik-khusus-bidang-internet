<?php
/* @var $this DistrokuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Distrokus',
);

$this->menu=array(
	array('label'=>'Create Distroku', 'url'=>array('create')),
	array('label'=>'Manage Distroku', 'url'=>array('admin')),
);
?>

<h1>-"FREAKER'S- Distro</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<p>
<?php echo CHtml::link('Tambah Barang',array ('create'))?>
</p>


</table>
