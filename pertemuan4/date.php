<?php 

// Date untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// echo date("l, d-M-Y", time()+60*60*24*100);
// echo date("l, d M Y", time()-60*60*24*100);

// mktime
// Membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,20,2000));

// strtotime
// echo date("l", strtotime("20 aug 2000"));


?>