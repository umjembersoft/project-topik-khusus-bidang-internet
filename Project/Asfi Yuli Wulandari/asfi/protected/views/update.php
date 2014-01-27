<div class="form">
    <?php echo CHtml::beginForm(array('update','id'=>$model->id_kategori)); ?>
    
    <div class="row">
        <?php echo CHtml::activeLabel($model, 'Nama Kategori : '); ?>
        <?php echo CHtml::activeTelField($model, 'nama_kategori',''); ?>
    </div>
<div class="row buttons">
        <?php echo CHtml::submitButton('Update'); ?>
        <?php echo CHtml::endForm(); ?>
    </div>
</div>
