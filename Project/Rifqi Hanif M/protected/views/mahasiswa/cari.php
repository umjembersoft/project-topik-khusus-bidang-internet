<!--form search-->
<form action="<?php echo $this->createUrl('mahasiswa/search');?>" method="post">
	<input type="text" name="nim" value="berdasarkan jurusan" onclick="this.value=''" />
	<input type="submit" value="Cari" />
</form>
<!-- end form search-->