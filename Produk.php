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
class CetakInfoProduk{
	public function cetak( Produk $Produk ){
		$str = "{$Produk->judul} | {$Produk->getLabel()}(Rp.{$Produk->harga})"; 
		return $str;
	}
}

$Produk3 = new Produk("naruto","masashi kishimoto","jump",30000);

$Produk4 = new Produk("uncharted","neil druckman","sony computer",2530000);


echo "komik : " .$Produk3->getLabel();
echo "<br>";
echo "game : " .$Produk4->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($Produk3); 

