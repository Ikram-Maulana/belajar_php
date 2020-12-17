<?php 

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// echo "Ikram Maulana";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan Tipe Data
// Variable
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Ikram Maulana";

// Kalau kutip satu $nama akan tercetak $nama saja bukan isi variable
echo "Halo, nama saya $nama";
echo "<br>";

// Operator
// Aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;
echo "<br>";

// Penggabung string / concatenation / concat
// .
$nama_depan = "Ikram";
$nama_belakang = "Maulana";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// Assignment
// =, +=, -=, /=, %=, .=
// $x = 1;
// $x += 4;
// echo $x;
$namaku = "Ikram";
$namaku .= " ";
$namaku .= "Maulana";
echo $namaku;
echo "<br>";

// Perbandingan
// Tidak cek tipe data
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
echo "<br>";
var_dump(1 == "1");

// identitas
// untuk cek tipe data
// ===, !==
echo "<br>";
var_dump(1 === "1");
echo "<br>";

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>

<body>

  <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
  <p><?php echo "Ini adalah paragraf"; ?></p>

  <?php 
  echo "<h2>Halo, Selamat Datang Ikram</h2>";
  ?>

</body>

</html>