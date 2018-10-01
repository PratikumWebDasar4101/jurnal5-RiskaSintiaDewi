<?php  

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];

echo "NIM : $nim<br>";
echo "Nama : $nama<br>";
echo "Email : $email<br><br>";
echo "Komentar : $komentar<br><br>";

$string = "$komentar";
$hasil = str_word_count($string);
echo "Jumlah : $hasil kata<br>";

if ($hasil < 5) {
	echo "<br>Maaf, kata yang Anda inputkan kurang.";
}else{
	die (" ");
}

?>
