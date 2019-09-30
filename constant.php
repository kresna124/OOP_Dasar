<?php 


define('NAMA', 'Kresna Nur Ito Gunawan');
echo NAMA;
echo "<br>";
const UMUR = 19;
echo UMUR;


echo "<hr>";

class Coba{
	const NAMA = 'Kresna Nur Ito Gunawan';

}

echo Coba :: NAMA;

echo __FILE__;


echo "<hr>";

function coba(){
	return __FUNCTION__;
}
echo coba();
echo "<hr>";
class Coba2{
	public $kelas = __CLASS__;
}
$obj = new Coba2;
echo $obj->kelas;
 ?>
