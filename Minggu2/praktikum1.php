<?php
class car {
	
	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	//method = hello 
	public function hello()
	{
		return "Beep I am a <i>" . $this -> comp .
			"</i>, an I am <i>" . $this -> color;
	}
}

// create object di class.
$bmw = new car ();
$mercedes = new car ();

//set values dari class properties.
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = " Mercedes Benz";

//Call hello method untuk $bmw object.
echo $bmw -> hello();
?>