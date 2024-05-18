<?php
require_once 'datospersonas.php';
//instancio un producto
$Producto1= new DatosPersona();

//valorizo sus propiedades
$producto1->Nombre = 'Loly';
$producto1->Apellido = 'Lola';
$producto1->Email = 'loli@hotmail.com';
$producto1->Edad = 11;

//llamo o invoco metodo mostrar datos
$producto1-> MostrarPropiedades();