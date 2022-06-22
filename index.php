<?php

class Contador{
    
    static $contador = 0 ;

    static function veces(){

        Contador::$contador++;

    }


}

class Persona{

    public $nombre;
    public $apellido;
    public $dni;

    function __construct($nombre,$apellido,$dni)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
        Contador::veces();
    }

    function saluda(){
        return "Hola soy $this->nombre y te digo hola";
    }

}


$Personas = [];

    for ($i=0; $i < 10; $i++) { 
        $Personas[] = new Persona("Persona numero $i","Apellido numero $i",$i);
    }

echo Contador::$contador;
// print_r($Persona1);
