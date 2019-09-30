<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit;
	protected $diskon = 0;
	private $harga;

	// ===================================================================	   
	public function __construct($judul ="judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	// ===================================================================
	public function getHarga(){
		return $this->harga- ($this->harga * $this->diskon / 100);
	}
	
	// ===================================================================
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}
	// ===================================================================
	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})";
		return $str;
	}
}
// ===================================================================
class Komik extends Produk{
	// ===================================================================
	public $jmlHalaman;
	// ===================================================================
	public function __construct($judul ="judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0,$jmlHalaman = 0){

		parent::__construct($judul , $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	// ===================================================================
	public function getInfoProduk(){
		$str = "komik :". parent::getInfoProduk()."- {$this->jmlHalaman} Halaman.";
		return $str;
	}

}
// ===================================================================
class game extends Produk{
	// ===================================================================
	public $waktuMain;
	// ===================================================================
	public function __construct($judul ="judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0,$waktuMain = 0){

		parent::__construct($judul , $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}

	// ===================================================================
	public function getInfoProduk(){
		$str = "game :". parent::getInfoProduk()."- {$this->waktuMain} jam.";
		return $str;
	}
	// ===================================================================
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
}

// ===================================================================
class CetakInfoProduk{
	public function cetak( Produk $Produk ){
		$str = "{$Produk->judul} | {$Produk->getLabel()}(Rp.{$Produk->harga})"; 
		return $str;
	}
}
// ===================================================================
$Produk3 = new komik("naruto","masashi kishimoto","jump",30000 , 100);

$Produk4 = new game("uncharted","neil druckman","sony computer",2530000 ,50);


// echo "komik : " .$Produk3->getLabel();
// echo "<br>";
// echo "game : " .$Produk4->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($Produk3); 

echo $Produk3->getInfoProduk();
echo "<br>";
echo $Produk4->getInfoProduk();
echo "<hr>";

$Produk4->setDiskon(50);
echo $Produk4->getHarga();
