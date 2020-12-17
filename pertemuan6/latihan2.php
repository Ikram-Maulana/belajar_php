<?php 

//? Array Associative
//? definisinya seperti array numerik, kecuali
//? key-nya adalah string yang kita buat sendiri
//? bisa membuat array di dalam array
//! contohnya yang linda

$mahasiswa = 
[
  [
    "nama"=>"Ikram Maulana",
    "nim"=>"1930511075", 
    "jurusan"=>"Teknik Informatika", "email"=>"ikram_maulana@onedrive.web.id",
    "gambar"=>"ikram.png"
  ],
  [
    "nim"=>"1930611140", 
    "nama"=>"Linda Widaningsih",
    "jurusan"=>"Akuntansi",
    "email"=>"linda@gmail.com",
    "tugas"=>[100, 90, 95],
    "gambar"=>"linda.png"
  ],
];

//! echo $mahasiswa[1]["nama"];
//! echo $mahasiswa[1]["tugas"][0];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>

<body>
  <h1>Daftar Mahaiswa</h1>

  <?php foreach($mahasiswa as $m) :?>
  <ul>
    <li>
      <img src="img/<?= $m['gambar']; ?>">
    </li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['nim']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li><?= $m['email']; ?></li>
  </ul>
  <?php endforeach; ?>

</body>

</html>