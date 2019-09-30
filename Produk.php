<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	
	public function __construct($judul , $penulis , $penerbit , $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}
	public function getInfoLengkap(){
		$str = "{$this->tipe} :{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})";
		
		if ($this->tipe == "komik") {
			$str .=  "- {$this->jmlHalaman} Halaman";

		}else if ($this->tipe == "game") {
			$str .= " ~ {$this->waktuMain} jam";
		}
		return $str;
	}

}

class CetakInfoProduk{
	public function cetak( Produk $Produk ){
		$str = "{$Produk->judul} | {$Produk->getLabel()}(Rp.{$Produk->harga})"; 
		return $str;
	}
}

$Produk3 = new Produk("naruto","masashi kishimoto","jump",30000 , 100,0, "komik");

$Produk4 = new Produk("uncharted","neil druckman","sony computer",2530000 ,0,50, "game");


// echo "komik : " .$Produk3->getLabel();
// echo "<br>";
// echo "game : " .$Produk4->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk3); 

echo $Produk3->getInfoLengkap();
echo "<br>";
echo $Produk4->getInfoLengkap();
