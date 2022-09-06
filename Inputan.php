<h1>Hasil Input Absensi Mahasiswa</h1>
<?php

session_start();
$v1 = $nama_lengkap = $_POST["nama_lengkap"];
$v2 = $nim = $_POST["nim"];
$v3 = $universitas = $_POST["univ"];
$v4 = $program_studi = $_POST["prodi"];

echo "Nama Lengkap =", $nama_lengkap,"<br>";
echo "NIM =", $nim,"<br>";
echo "Universitas =", $universitas,"<br>";
echo "Program Studi =", $program_studi,"<br>";

$_SESSION["v1"]=$v1;
$_SESSION["v2"]=$v2;
$_SESSION["v3"]=$v3;
$_SESSION["v4"]=$v4;
?>