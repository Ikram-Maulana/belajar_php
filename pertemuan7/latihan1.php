<?php 

//? Variable Scope / Lingkup Variabel
$x = 10;

function tampilx()
{
  // karena kalau ga pake global error, dimana x lingkupnya di function aja
  // maka pake global biar mencari variable di luar function
  global $x;
  echo $x;
}

tampilx();

?>