<?php 
	// define('NAMA', 'Rio Erika Saputra'); //tidak bisa disimpan pada class 

	// echo NAMA;
	// echo "<br>";

	// const UMUR = 20;  // bisa disimpan dalam class
	// echo UMUR;


// class Coba{
// 	const NAMA = 'Rio Erika';

// }
// echo Coba::NAMA;

// echo __LINE__;

// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>