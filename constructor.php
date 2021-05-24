<?php

//Jualan Produk
//Komik
//Game
class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga; 
    }

    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }       

}


$produk1 = new Produk("Naruto", "Muhamad Febri Handika", "Shonen Jump", 30000);
$produk2 = new Produk("PUBG", "Muhamad Febri Handika", "Sony Computer", 250000);
$produk3 = new Produk("Mobile legend");


echo "Komik : " . $produk1->getLable();
echo "<br>";
echo "Game : " . $produk2->getLable();
echo "<br>";
var_dump($produk3);