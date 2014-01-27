<div class="form">
	 
<?php $form = $this->beginWidget(
    'CActiveForm',
     array(
        'id' => 'buku-form',
        'enableClientValidation'=>TRUE,  //ajax validation, dimana pesan error langsung ditampilkan saat user berpindah element input pada form tanpa harus melakukan klik tombol Submit/Create terlebih dahulu    
 	   )
   );
   echo $form->errorSummary($model); //digunakan untuk menampilkan rangkuman Error
?>
<div class="row">
 <?php
   echo $form->labelEx($model, 'judul'); //digunakan untuk membuat Label
   echo $form->textField($model, 'judul'); //digunakan untuk membuat element input form, yaitu textfield atau textbox
   echo $form->error($model, 'judul'); //untuk menampilkan Error didekat element formnya masing-masing
 ?>
</div>

<div class="row">
 <?php 
   echo $form->labelEx($model, 'penulis'); //digunakan untuk membuat Label
   echo $form->textField($model, 'penulis'); //digunakan untuk membuat element input form, yaitu textfield atau textbox
   echo $form->error($model, 'penulis'); //untuk menampilkan Error didekat element formnya masing-masing
?>
</div>

<div class="row">
 <?php 
   echo $form->labelEx($model,'id_kategori');
   echo $form->dropDownList(
   $model,
   'id_kategori',
   CHtml::listData(Kategori::model()->findAll(),
   'id_kategori','nama_kategori'),array('empty'=>'--pilih kategori--')); //digunakan untuk membuat element form combobox
   echo $form->error($model,'id_kategori');
 ?>
</div>

<div class="row">
 <?php 
   echo $form->labelEx($model, 'tanggal_terbit');
   //digunakan untuk widget CJuiDatePicker
   $this->widget('zii.widgets.jui.CJuiDatePicker', 
   	array(
 	    //untuk menentukan atribut/field tabel 
		'attribute'=>'tanggal_terbit',
	 	  //untuk bahasa tanggal yang digunakan
		  'language' => 'en',
	 	  //set $model=model buku
		  'model'=>$model,
	  	'options' => array(
	 	  'mode'=>'focus',
	 	  //format tanggal
		  'dateFormat'=>'d MM, yy',
 	    //jenis animasinya (slide ke bawah)
		'showAnim' => 'slideDown',
   	),
	//menentukan ukuran textfield dan nama class-nya
    'htmlOptions'=>array('size'=>30,'class'=>'date'),)
  );
  //digunakan untuk pesan Error apabila terjadi kesalahan
  echo $form->error($model, 'tanggal_terbit');
 ?>
</div>

<div class="row buttons">
 <?php 
   echo CHtml::submitButton($model->isNewRecord ? 'Create' :'Update'); //digunakan untuk membuat tombol Submit
   $this->endWidget();//untuk menutup widget form
   
   //Perbedaan antara Form Validation dan Ajax Validation adalah RESPONSIFnya, dimana pesan Error langsung ditampilkan saat User berpindah element input pada form tanpa harus melakukan klik tombol Submit/Create terlebih dahulu.
 ?>
</div>
