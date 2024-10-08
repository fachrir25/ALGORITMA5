<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama kita ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("fachri", "Hi");

echo "<hr>";

$saya = "Indry";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi 
perkenalan($saya, $ucapanSalam);
echo"<hr>";
e<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama kita ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Kita berusia ". hitungUmur(1986, 2023) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}
// memanggil fungsi perkenalan
perkenalan("Ahmadi");
<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama kita ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Kita berusia ". hitungUmur(1986, 2023) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}
// memanggil fungsi perkenalan
perkenalan("Ahmadi");

echo"<strong><br>By fachri rizki </strong>";
