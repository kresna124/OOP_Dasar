<?php 

class Produk{

	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit= "penerbit",
		   $harga=0;

	public function getLabel(){
		return "$this->penuli,$this->penerbit";
	}
}

// $Produk1 = new Produk();
// $Produk1->judul= " naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul= " ucharted";
// $Produk2->TambahProperti ="hahahaha";
// var_dump($Produk2);
$Produk3 = new Produk();
$Produk3->judul = "naruto";
$Produk3->penuli = "masashi kishimoto";
$Produk3->penerbit = "jump";
$Produk3->harga = 30000;

$Produk4 = new Produk();
$Produk4->judul = "uncharted";
$Produk4->penuli = "neil druckman";
$Produk4->penerbit = "sony computer";
$Produk4->harga = 2530000;



echo "komik : " .$Produk3->getLabel();
echo "<br>";
echo "game : " .$Produk4->getLabel();


 ?>