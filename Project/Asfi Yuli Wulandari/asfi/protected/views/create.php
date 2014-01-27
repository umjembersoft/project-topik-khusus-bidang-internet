    <div class='form'>
        <?php
            echo CHtml::beginForm(array('kategori/create'));
        ?>

        <div class='row'>
            <?php
                echo CHtml::activeLabel($model, 'Nama Kategori : ');
                echo CHtml::activeTelField($model, 'nama_kategori','');
            ?>
        </div>
<div class='buttons'>
            <?php
                echo CHtml::submitButton('Submit');
                echo CHtml::endForm();
                echo '';
                echo CHtml::link('Lihat Data',array('index'));
            ?>
        </div>
</div>
