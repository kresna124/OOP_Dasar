<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	
	public function __construct($judul , $penulis , $penerbit , $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}
	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})";
		return $str;
	}

}
class Komik extends Produk{
	public function getInfoProduk(){
		$str = "komik :{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})- {$this->jmlHalaman} Halaman.";
		return $str;
	}

}
class game extends Produk{
	public function getInfoProduk(){
		$str = "game :{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})- {$this->waktuMain} jam.";
		return $str;
	}
}


class CetakInfoProduk{
	public function cetak( Produk $Produk ){
		$str = "{$Produk->judul} | {$Produk->getLabel()}(Rp.{$Produk->harga})"; 
		return $str;
	}
}

$Produk3 = new komik("naruto","masashi kishimoto","jump",30000 , 100,0, "komik");

$Produk4 = new game("uncharted","neil druckman","sony computer",2530000 ,0,50, "game");


// echo "komik : " .$Produk3->getLabel();
// echo "<br>";
// echo "game : " .$Produk4->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk3); 

echo $Produk3->getInfoProduk();
echo "<br>";
echo $Produk4->getInfoProduk();
