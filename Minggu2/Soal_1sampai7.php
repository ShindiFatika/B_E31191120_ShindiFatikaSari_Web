<?php 
/**
 * 
 */
// soal 1
class Laptop
{
	// buat properties dan method (soal 2 dan 3)
	public $pemilik;
	public $merek;

	// buat method (soal no 4)
	public function hidupkan_laptop(){
		return "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		
	}

	// buat method (soal no 3)
	public function matikan_laptop(){
		return "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		
	}

	// buat method (soal no 6)
	public function restart_laptop(){
		$info1 = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		$info2 = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $info1.". ".$info2;
	}

}
 // membuat 3 objek (soal 7)
$a= new Laptop();
$b= new Laptop();
$c= new Laptop();

// set value objek a
$a -> pemilik ='A';
$a -> merek ='Asus';

// set value objek a
$b -> pemilik ='B';
$b -> merek ='Acer';

// set value objek a
$c -> pemilik ='C';
$c -> merek ='Lenovo';

// memanggil dan eksekusi method 
echo $a -> hidupkan_laptop()."<br>";
echo $b -> matikan_laptop()."<br>";
echo $c -> restart_laptop()."<br>";

?>