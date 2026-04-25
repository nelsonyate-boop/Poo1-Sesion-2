<?php  
require_once "Vehiculo.php";

class Moto extends Vehiculo{
 
 private $cilindraje;

 public function __construct($marca,$color,$cilindraje){
   $this->cilindraje=$cilindraje;
   parent::__construct($marca,$color);
 }

public function mostrarMoto(){
	echo "Moto de ".$this->cilindraje. "cc <br>";
}

public function mover(){
	echo "La moto se mueve en dos ruedas <br>";
}

}

?>