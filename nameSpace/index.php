<?php 
require 'app/init.php';

$produk1 = new Komik("naruto", "Masasahi Kisimoto","Shonen Jump", 30000, 100);
$produk2 = new Game("uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
  
$CetakProduk = new CetakInfoProduk();
$CetakProduk->tambahProduk($produk1);
$CetakProduk->tambahProduk($produk2);
echo $CetakProduk->cetak();

echo "<hr>";
