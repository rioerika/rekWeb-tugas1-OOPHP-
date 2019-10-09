<?php 

// jualan produk
// Komik
// Game

class Produk {
   public $judul  , 
   		  $penulis  ,
   		  $penerbit  ,
   		  $harga ,
   		  $jmlHalaman,
   		  $waktuMain,
   		  $tipe;

   	public function __construct($judul = "judul", $penulis="penulis", $penerbit= "penerbit", $harga=0,$jmlHalaman =0 ,$waktuMain = 0, $tipe ){
   		$this->judul = $judul;
   		$this->penulis = $penulis;
   		$this->penerbit = $penerbit;
   		$this->harga = $harga;
   		$this->jmlHalaman = $jmlHalaman;
   		$this->waktuMain = $waktuMain;
   		$this->tipe = $tipe;
   	}

  	public function getLabel(){
  		return "$this->penulis, $this->penerbit";
  	}

  	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

}

class komik extends Produk{
	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}


class CetakInfoProduk{
	public function cetak(Produk $produk){
		$str = " {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
		return $str;
	}


}


$produk1 = new Produk("naruto", "Masasahi Kisimoto","Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

 ?>