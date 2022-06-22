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

class Profesor extends Persona{

    public $numeroClasesSemanales;
    public $numeroCursos;

    function __construct($numeroClasesSemanales,$numeroCursos,$nombre,$apellido,$dni){
        $this->numeroClasesSemanales =$numeroClasesSemanales;
        $this->numeroCursos =$numeroCursos;
        parent::__construct($nombre,$apellido,$dni);
    }
}

$Profe1 = new Profesor(10,5,"Javier","Gomez",21);



// print_r($Persona1);
