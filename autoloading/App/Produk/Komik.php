<?php

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct(  $judul, $penulis, $penerbit, $harga = 0, 
    $jmlHalaman = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfo(){
        // Komik : Naruto | Muhamad Febri Handika, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}