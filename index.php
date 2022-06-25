<?php
class Contador{

    static $contador = 0;

    static function veces(){

        Contador::$contador++;

    }

}


class Producto{

    protected $nombre;
    public $precio;

    function __construct($nombre,$precio){

        $this -> nombre = $nombre;

        $this -> precio = $precio;

        Contador::veces();

    }
    
    function __toString()
    {
        return "Nombre: $this->nombre, Precio: $this->precio";
    }

    final function fechaCaducidad(){
        return "20/12/2024";
    }

}   

class Fruta extends Producto{

    public $color;
    public $sabor;

    function __construct($color,$sabor,$nombre,$precio)
    {
        $this -> color = $color;

        $this -> sabor = $sabor;

        parent::__construct($nombre,$precio);

    }

    

}

$Productos = [new Fruta("Roja","dulce","Manzana",8),

             new Fruta("Amarillo","dulce","Platano",6),

             new Fruta("Marron","dulce","Kiwi",8),

             new Fruta("Naranja","acida","Naranja",6)];


$carrito = [];

$cartera=20;

foreach ($Productos as $producto) {

    if ($producto->precio <= $cartera) {

       $carrito[] = "Has comprado un $producto->nombre de color $producto->color y de sabor $producto->sabor";

       $cartera = $cartera -$producto->precio;

       echo "Te quedan $cartera €\n";
    }

}

print_r($carrito);
?>
