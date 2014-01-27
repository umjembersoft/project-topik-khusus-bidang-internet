<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<center>
<?php
echo CHtml::image("images/yii.jpg","images",array("width"=>250));
?>
</center>

<p><b><font size=“100” face=“TimesNewRoman” color="red"><big>Pengertian YII Framework</big></font></b></p>
<p>
YII  Framework  yang  mempunyai  kepanjangan  Yes  It  Is.  YII Framework bisa digunakan untuk membangun aplikasi web seperti ecommerce, cms , forum dan banyak lagi  yang  lain. Disini  saya ingin bagi tentang cara instal YII Framework di OS  Windows7 Framework adalah kumpulan dari fungsi-fungsi/prosedur-prosedur dan class-class untuk tujuan tertentu yang sudah siap digunakan.<br> Sehingga bisa mempermudah dan mempercepat pekerjaan seorang programmer, tanpa harus membuat fungsi atau class dari awal. Dengan adanya framework, pekerjaan kita akan lebih tertata dan terorganisir. Sehingga dalam pencarian kesalahan dalam pembuatan program akan  lebih  mudah  dideteksi.<br><p></p>
<p><b><font size=“100” face=“TimesNewRoman” color="red">Yang kita butuhkan dalam menginstal YII Framework adalah :</font></b></p>
1.	Master YII Frame work, bisa didownload <a href ="http://www.yiiframework.com/download/">di sini</a> kemudian lakukan ekstrak file tersebut maka akan terbentuk folder dengan nama <b>yii-1.1.13.e9e4a0</b>, rename folder tersebut menjadi <b>yii_wawan</b> (sesuai kehendak kita).<br>
2.	Menginstal web server lokal seperti XAMPP atau WAMP <br>
3.	Comand Prompt (CMD)<br><p></p>
<p><b><font size=“100” face=“TimesNewRoman” color="red">Cara menginstal YII Framework, berikut langkah-langkahnya :</font></b></p>
a.	Buka Command prompt, dan masuk ke directory web server lokal seperti gambar dibawah ini :<br><p></p>
<center>
<?php
echo CHtml::image("images/1.jpg","images",array("width"=>450));
?>
</center><p></p>
b.	Masuk ke directory <b>“htdocs”</b><br><p></p>
<center>
<?php
echo CHtml::image("images/2.jpg","images",array("width"=>450));
?>
</center><p></p>
c.	Ketikkan source code seperti terlihat digambar bawah ini<br><p></p>
<center>
<?php
echo CHtml::image("images/3.jpg","images",array("width"=>450));
?>
</center><p></p>
d.	Maka akan ada pertanyaan, apakah anda yakin akan membuat web application? [yes | no] pilih saja “yes”. Kemudian tunggu generator dari YII Framework berhasil membuatkan sebuah simple web application untuk anda.<br>
e.	Kemudian aktifkan server lokal kita ( XAMPP ) seperti gambar dibawah ini<br><p></p>
<center>
<?php
echo CHtml::image("images/4.jpg","images",array("width"=>450));
?>
</center><p></p>
f.	Dan yang terakhir kita lihat apakah YII Framework benar-benar berhasil membuatkan anda sebuah simple blog dalam hitungan detik dengan mengetikkan <b>localhost/yii_wawan/</b> di browser anda.
</p>