<?php 	
require_once "Carro.php";
require_once "Moto.php";

$carro= new Carro("Toyota","Rojo", 4);
$moto= new Moto("Yamaha", "Negro", 150);


echo "<h1>CARRO<h1>";
$carro->mostrarDatos();
$carro->mostrarCarro();
$carro->mover();
$carro->acelerar(50);


echo "<h1>Moto<h1>";
$moto->mostrarDatos();
$moto->mostrarMoto();
$moto->mover();
$moto->acelerar(30);

unset($carro);
unset($moto);


 ?>