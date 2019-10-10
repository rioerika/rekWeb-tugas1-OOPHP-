<?php 

require_once 'app/produk/InfoProduk.php';
require_once 'app/produk/Produk.php';
require_once 'app/produk/Game.php';
require_once 'app/produk/Komik.php';
require_once 'app/produk/CetakInfoProduk.php';


$produk1 = new Komik("naruto", "Masasahi Kisimoto","Shonen Jump", 30000, 100);
$produk2 = new Game("uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
  
$CetakProduk = new CetakInfoProduk();
$CetakProduk->tambahProduk($produk1);
$CetakProduk->tambahProduk($produk2);
echo $CetakProduk->cetak();
