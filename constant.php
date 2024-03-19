<?php
// define('NAMA', 'Arief Aryudi Syidik'); // Disimpan di luar class (Global)
// echo NAMA.'<br>';

// const UMUR = 22; // Dapat disimpan di dalam class (OOP)
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Arief Aryudi Syidik';
// }

// echo Coba::NAMA;

echo 'LINE: '.__LINE__.'<br>';
echo 'FILE: '.__FILE__.'<br>';
echo 'DIR: '.__DIR__.'<br>';

function coba()
{
    return 'FUNCTION: '.__FUNCTION__.'<br>';
}

echo coba();

class Coba
{
    public $kelas = 'CLASS: '.__CLASS__.'<br>';

}

$obj = new Coba;
echo $obj->kelas;
