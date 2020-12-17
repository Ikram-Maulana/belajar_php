<?php 

// SUPERGLOBAL
// variable global milik PHP
// merupakan array associative

// $_GET
// $_POST
// $_COOKIE
// $_ENV
// $_REQUEST
// $_SESSION
// $_SERVER

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
    "gambar"=>"linda.png"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
      <a
        href="latihan3.php?nama=<?= $mhs['nama']; ?>&nim=<?= $mhs['nim']; ?>&jurusan=<?= $mhs['jurusan']; ?>&email=<?= $mhs['email']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a>
    </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>