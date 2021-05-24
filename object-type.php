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


class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Muhamad Febri Handika", "Shonen Jump", 30000);
$produk2 = new Produk("PUBG", "Muhamad Febri Handika", "Sony Computer", 250000);


echo "Komik : " . $produk1->getLable();
echo "<br>";
echo "Game : " . $produk2->getLable();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);