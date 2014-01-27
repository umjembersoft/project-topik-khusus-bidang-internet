<?
$emasmurni=$_POST['emasmurni'];
$harta=$_POST['harta'];
$nama=$_POST['nama'];
settype($emasmurni,"integer");
settype($harta,"integer");

if (empty($nama))
{
echo"
<script language=javascript>
alert('Anda belum mengisi nama');
</script>";
include"index.php";
}
else if ($harta==0 OR $emasmurni==0)
{
echo"
<script language=javascript>
alert('Harta atau harga emas tidak diisi dengan benar.');
</script>";
include"index.php";
}
else
{
$nishab=$emasmurni*85;
//nishab ada dua pendapat yang pertama 91 3/7 (Komisi Tetap Fatwa Kerajaan Saudi Arabia no. 5522) dan kedua Syaikh Muhammad bin Shâlih al-’Utsaimin menyatakan, bahwa nishab zakat emas adalah 85 gram. Jadi saya memilih 85 gram.  

if ($harta<=$nishab)
{
echo "Harta sobat $nama = Rp.$harta <br/>";
echo "Nishab zakat mal = Rp.$nishab <br/> Jadi Sobat $nama TIDAK wajib membayar zakat mal. <br/><br/><a href='awal.php'> Kembali ke awal</a>"; 

}
else
{
echo "Harta sobat $nama = Rp.$harta <br/>";
echo "Nishab zakat mal = Rp.$nishab <br/>";
echo "Jadi Sobat $nama WAJIB membayar zakat mal sebanyak 2,5% x Rp.$harta = Rp.".$harta/40;
//zakat mal yaitu 2,5% dari harta total atau /40
echo "<br/><br/>Cara berzakat ada dua, yaitu :<br/>
1. Membeli emas sebesar zakat lalu memberikan kepada mustahik zakat.<br/>
2. Membayarnya dengan sejumlah uang seharga emas (sebesar zakat) kepada mustahik zakat.<br/><br/>
<a href='index.php'> Kembali ke awal</a>";
}
}
?>