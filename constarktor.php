<?php 

// jualan produk
// Komik
// Game

class Produk {
   public $judul = "judul", 
   		  $penulis = "penulis",
   		  $penerbit = "penerbit",
   		  $harga = 0;

  	public function getLabel(){
  		return "$this->penulis, $this->penerbit";
  	}

}


$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masasahi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();

 ?>