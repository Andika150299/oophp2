<?php

// define('NAMA', 'MUHAMAD FEBRI HANDIKA');

// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;

// class Coba {
//     const NAMA = 'MUHAMAD FEBRI HANDIKA';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function Coba() {
//     return __FUNCTION__;
// }

// echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;