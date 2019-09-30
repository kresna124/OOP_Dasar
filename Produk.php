<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	
	public function __construct($judul , $penulis , $penerbit , $harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}

}

// $Produk1 = new Produk();
// $Produk1->judul= " naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul= " ucharted";
// $Produk2->TambahProperti ="hahahaha";
// var_dump($Produk2);
$Produk3 = new Produk("naruto","masashi kishimoto","masashi kishimoto","jump",30000);

$Produk4 = new Produk("uncharted","neil druckman","sony computer",2530000);


echo "komik : " .$Produk3->getLabel();
echo "<br>";
echo "game : " .$Produk4->getLabel();


