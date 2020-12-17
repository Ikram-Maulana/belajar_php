<?php 

$mahasiswa = 
[
  [
  "Ikram Maulana",
  "1930511075",
  "Teknik Informatika",
  "ikram_maulana@onedrive.web.id"
  ],
  [
    "Linda Widaningsih",
    "1930611140",
    "Akuntansi",
    "linda@gmail.com"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <!-- Menggunakan Looping -->
  <?php foreach ($mahasiswa as $row) : ?>
  <ul>
    <li>Nama : <?= $row[0]; ?></li>
    <li>NIM : <?= $row[1]; ?></li>
    <li>Jurusan : <?= $row[2]; ?></li>
    <li>Email : <?= $row[3]; ?></li>
  </ul>
  <?php endforeach; ?>

</body>

</html>