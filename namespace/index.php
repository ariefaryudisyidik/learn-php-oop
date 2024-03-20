<?php

require_once 'App/init.php';

// $produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100);
// $produk2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

function callProdukUser(ProdukUser $user)
{
    return $user;
}

function callServiceUser(ServiceUser $user)
{
    return $user;
}

// Instantiate objects
$produkUser = new ProdukUser();
$serviceUser = new ServiceUser();

// Call functions
echo callProdukUser($produkUser)."<br>";
echo callServiceUser($serviceUser);
