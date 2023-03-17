<?php 
// VARIABEL

// Variabel string
$namaDepan = "Septemina";
$namaBelakang = "Waisimon";

echo$namaDepan;
echo$namaBelakang;

//Gabung string
$namaLengkap = $namaDepan .' '. $namaBelakang;

// Variabel integer
$x = 10;
$y = 70;

// Variabel integer
// + = Penjumlahan
// - = pengurangan
// * = perkalian
// / = pembagian
// % = hasil bagi

$penjumlahan = $x + $y;
echo '<p>' . $penjumlahan . '</p>';

$pengurangan = $x - $y;
echo '<p>' . $pengurangan . '</p>';

$Perkalian = $x * $y;
echo '<p>' . $Perkalian . '</p>';

$pembagian = $x / $y;
echo '<p>' . $pembagian . '</p>';

$hasilbagi = $x % $y;
echo '<p>' . $hasilbagi . '</p>';

//OPERATOR PERCABANGAN atau IF ELSE

$nilai = 60;
// perbandingan untuk kondisi <, >, =, !=, ==, ===,
// OR = ||
// AND = &&
// NOT = !=

// 90 = A, 80 = B, 70 = C, 60 = D, E
if($nilai >= 90)
{
    echo '<p> Selamat ' . $namaLengkap .'</p>';
    echo '<p> Anda mendapatkan nilai A </p>';
}
else if (80 <= $nilai){
    echo '<p> Selamat ' . $namaLengkap .'</p>';
    echo '<p> Anda Mendapatkan Nilai B </p>';
}
else if (70 <= $nilai){
    echo '<p> Selamat ' . $namaLengkap .'</p>';
    echo '<p> Anda Mendapatkan Nilai C </p>';
}
else if (60 <= $nilai){
    echo '<p> Selamat ' . $namaLengkap .'</p>';
    echo '<p> Anda Mendapatkan Nilai D </p>';
}
else{
    echo '<p> Selamat ' . $namaLengkap .'</p>';
    echo '<p> Anda Mendapatkan Nilai E </p>';
}

// PENGULANGAN

// for
// while
// foreach
echo "<h1> Bilangan Ganjil </h1>";
for ($i=0; $i <= 100; $i++) {
    if($i % 2 !== 0)
    {
        echo $i.', ';
    }
    
}

echo "<h1> Bilangan Genap </h1>";
for ($i=0; $i <= 100; $i++) {
    if($i % 2 !== 1)
    {
        echo $i.', ';
    }
}
