<?php 
$db = "crud_pdo.sql";
$host = mysqli_connect("localhost","root","","$db");
 
// Check connection

if ($host)
{
	echo "koneksi berhasil.</br>";
}
else
{
		echo "koneksi gagal.</br>";
}
//isikan dengan nama db yg akan dihubungkan

if($db)
{
	echo "koneksi berhasil.";
}
else
{
	echo "koneksi gagal.";
}
?>
