<table class="appendo-gii" id="<?php echo $id ?>">
	<thead>
		<tr>
			<th>Nama </th><th>Jenis Kelamin</th>
		</tr>
	</thead>
	<tbody>
    <?php if ($model->nama == null): ?>
		<tr>
			<td><?php echo CHtml::textField('nama[]','',array('style'=>'width:120px')); ?></td>
            <td>
            <?php echo CHtml::dropDownList('jk[]',"string",
                array(
                    "Laki-laki"=>"Laki-laki",
                    "Perempuan"=>"Perempuan",
                ),array('style'=>'width:100px'));
            ?>
            </td>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->nama); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('nama[]',$model->nama[$i],array('style'=>'width:120px')); ?></td>
                <td>
                <?php echo CHtml::dropDownList('jk[]',$model->jk[$i],
                    array(
						"Laki-laki"=>"Laki-laki",
						"Perempuan"=>"Perempuan",
					),array('style'=>'width:100px'));
                ?>
                </td>
            </tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('nama[]','',array('style'=>'width:120px')); ?></td>
            <td>
            <?php echo CHtml::dropDownList('jk[]',"string",
                array(
						"Laki-laki"=>"Laki-laki",
						"Perempuan"=>"Perempuan",
					),array('style'=>'width:100px'));
            ?>
            </td>
		</tr>
    <?php endif; ?>
	</tbody>
</table>