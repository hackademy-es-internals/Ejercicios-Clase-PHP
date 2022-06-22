<?php

//Atributos que son los datos que vamos a utilizar

//Metodos que son las acciones o operaciones que vamos a realizar con el objetos 



class Factura
{

    private $nombreTienda  = "Floristeria Maribel";
    private $nombreCliente;
    private $precioTotal;

    function __construct()
    {
        
    }

    function __toString()
    {
        return "Gracias por visitar $this->nombreTienda.\n$this->nombreCliente ha pagado un total de: $this->precioTotal";
    }
}

$factura = new Factura("Javier", 16);

echo $factura->nombreTienda;
