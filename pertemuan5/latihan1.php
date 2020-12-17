<?php 

// Array
//! Variable yang dapat memiliki banyak nilai
//! Elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimaulai dari 0

// Membuat array
// Cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

// Cara baru
$bulan = [
  "Januari",
  "Februari",
  "Maret"
];

$arri = [
  123, 
  "Tulisan",
  false
];

//* Menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array
echo $arri[1];
echo '<br>';
echo $bulan[1];
echo '<br>';
echo '<hr>';

// Menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo '<br>';
var_dump($hari);


?>