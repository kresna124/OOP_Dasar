<?php

interface InfoProduk{
	// ===================================================================
	public function getInfoProduk();
}


abstract class Produk{
	protected $judul,
		    $penulis,
		    $penerbit,
		    $harga,
		    $diskon = 0;
	

	// ===================================================================	   
	public function __construct($judul ="judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	// ===================================================================
	public function setJudul($judul){
		$this->judul=$judul;
	}
	public function getJudul(){
		return $this->judul;
	}
	// ===================================================================
	public function setPenulis($penulis){
		$this->penulis=$penulis;
	}
	public function getPenulis(){
		return $this->penulis;
	}
	// ===================================================================
	public function setPenerbit($penerbit){
		$this->penerbit=$penerbit;
	}
	public function getPenerbit(){
		return $this->penerbit;
	}
	// ===================================================================
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
	public function getDiskon(){
		return $this->diskon;
	}
	// ===================================================================
	public function setHarga($harga){
		$this->harga=$harga;
	}
	public function getHarga(){
		return $this->harga- ($this->harga * $this->diskon / 100);
	}
	// ===================================================================
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}
	
	// ===================================================================
	abstract public function getInfo();
}
// ===================================================================
class Komik extends Produk implements InfoProduk{
	// ===================================================================
	public $jmlHalaman;
	// ===================================================================
	public function __construct($judul ="judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0,$jmlHalaman = 0){

		parent::__construct($judul , $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	// ===================================================================
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})";
		return $str;
	}
	// ===================================================================
	public function getInfoProduk(){
		$str = "komik :". $this->getInfo()."- {$this->jmlHalaman} Halaman.";
		return $str;
	}

}
// ===================================================================
class game extends Produk implements InfoProduk{
	// ===================================================================
	public $waktuMain;
	// ===================================================================
	public function __construct($judul ="judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0,$waktuMain = 0){

		parent::__construct($judul , $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}
	// ===================================================================
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})";
		return $str;
	}
	// ===================================================================
	public function getInfoProduk(){
		$str = "game :". $this->getInfo()."- {$this->waktuMain} jam.";
		return $str;
	}
	
}

// ===================================================================
class CetakInfoProduk{
	public $daftarProduk = array();
	// ===================================================================
	public function tambahProduk(Produk $Produk){
		$this->daftarProduk[] = $Produk;
	}
	// ===================================================================
	public function cetak(  ){
		$str = "DAFTAR PRODUK : <br>"; 
		foreach ($this ->daftarProduk as $p) {
			$str .= "-{$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}
// ===================================================================
$Produk3 = new komik("naruto","masashi kishimoto","jump",30000 , 100);

$Produk4 = new game("uncharted","neil druckman","sony computer",2530000 ,50);

$CetakProduk =  new CetakInfoProduk();
$CetakProduk->tambahProduk($Produk3);
$CetakProduk->tambahProduk($Produk4);
echo $CetakProduk->cetak();