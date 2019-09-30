<?php 

require_once 'App/init.php';

$Produk3 = new komik("naruto","masashi kishimoto","jump",30000 , 100);

$Produk4 = new game("uncharted","neil druckman","sony computer",2530000 ,50);

$CetakProduk =  new CetakInfoProduk();
$CetakProduk->tambahProduk($Produk3);
$CetakProduk->tambahProduk($Produk4);
echo $CetakProduk->cetak();
echo "<hr>";
new coba();