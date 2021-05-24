<?php

require_once 'App/init.php';


$produk1 = new Komik("Naruto", "Muhamad Febri Handika", "Shonen Jump", 30000, 100);
$produk2 = new Game("PUBG", "Muhamad Febri Handika", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Dika();